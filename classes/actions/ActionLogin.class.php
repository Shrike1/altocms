<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Обрабатывые авторизацию
 *
 * @package actions
 * @since   1.0
 */
class ActionLogin extends Action {
    /**
     * Инициализация
     *
     */
    public function Init() {
        /**
         * Устанавливаем дефолтный евент
         */
        $this->SetDefaultEvent('index');
        /**
         * Отключаем отображение статистики выполнения
         */
        Router::SetIsShowStats(false);
    }

    /**
     * Регистрируем евенты
     *
     */
    protected function RegisterEvent() {
        $this->AddEvent('index', 'EventLogin');
        $this->AddEvent('exit', 'EventExit');
        $this->AddEvent('reminder', 'EventReminder');
        $this->AddEvent('reactivation', 'EventReactivation');

        $this->AddEvent('ajax-login', 'EventAjaxLogin');
        $this->AddEvent('ajax-reminder', 'EventAjaxReminder');
        $this->AddEvent('ajax-reactivation', 'EventAjaxReactivation');
    }

    /**
     * Ajax авторизация
     */
    protected function EventAjaxLogin() {

        // * Устанавливаем формат Ajax ответа
        $this->Viewer_SetResponseAjax('json');

        // * Проверяем передачу логина пароля через POST
        $sUserLogin = $this->GetPost('login');
        $sUserPassword = $this->GetPost('password');
        if (!$sUserLogin || !$sUserPassword) {
            $this->Message_AddErrorSingle($this->Lang_Get('system_error'));
            return;
        }

        // * Проверяем есть ли такой юзер по логину
        if ((F::CheckVal($sUserLogin, 'mail') && $oUser = $this->User_GetUserByMail($sUserLogin))
            || ($oUser = $this->User_GetUserByLogin($sUserLogin))
        ) {
            // Не забанен ли юзер
            if ($oUser->IsBanned()) {
                if ($oUser->IsBannedByIp()) {
                    $this->Message_AddErrorSingle($this->Lang_Get('user_ip_banned'));
                    return;
                } elseif ($oUser->GetBanLine()) {
                    $this->Message_AddErrorSingle(
                        $this->Lang_Get('user_banned_before', array('date' => $oUser->GetBanLine()))
                    );
                    return;
                } else {
                    $this->Message_AddErrorSingle($this->Lang_Get('user_banned_unlim'));
                    return;
                }
            }
            // * Сверяем хеши паролей и проверяем активен ли юзер
            if ($this->Security_CheckSalted($oUser->getPassword(), $sUserPassword, 'pass')) {
                if (!$oUser->getActivate()) {
                    $this->Message_AddErrorSingle(
                        $this->Lang_Get(
                            'user_not_activated',
                            array('reactivation_path' => Router::GetPath('login') . 'reactivation')
                        )
                    );
                    return;
                }
                $bRemember = getRequest('remember', false) ? true : false;

                // * Авторизуем
                $this->User_Authorization($oUser, $bRemember);

                // * Определяем редирект
                $sUrl = Config::Get('module.user.redirect_after_login');
                if (getRequestStr('return-path')) {
                    $sUrl = getRequestStr('return-path');
                }
                $this->Viewer_AssignAjax('sUrlRedirect', $sUrl ? $sUrl : Config::Get('path.root.web'));
                return;
            }
        }
        $this->Message_AddErrorSingle($this->Lang_Get('user_login_bad'));
    }

    /**
     * Повторный запрос активации
     */
    protected function EventReactivation() {
        if ($this->User_GetUserCurrent()) {
            Router::Location(Config::Get('path.root.web') . '/');
        }

        $this->Viewer_AddHtmlTitle($this->Lang_Get('reactivation'));
    }

    /**
     *  Ajax повторной активации
     */
    protected function EventAjaxReactivation() {
        $this->Viewer_SetResponseAjax('json');

        if ((F::CheckVal(getRequestStr('mail'), 'mail') && $oUser = $this->User_GetUserByMail(getRequestStr('mail')))) {
            if ($oUser->getActivate()) {
                $this->Message_AddErrorSingle($this->Lang_Get('registration_activate_error_reactivate'));
                return;
            } else {
                $oUser->setActivateKey(F::RandomStr());
                if ($this->User_Update($oUser)) {
                    $this->Message_AddNotice($this->Lang_Get('reactivation_send_link'));
                    $this->Notify_SendReactivationCode($oUser);
                    return;
                }
            }
        }

        $this->Message_AddErrorSingle($this->Lang_Get('password_reminder_bad_email'));
    }

    /**
     * Обрабатываем процесс залогинивания
     * По факту только отображение шаблона, дальше вступает в дело Ajax
     *
     */
    protected function EventLogin() {

        // * Если уже авторизирован
        if ($this->User_GetUserCurrent()) {
            Router::Location(Config::Get('path.root.web') . '/');
        }
        $this->Viewer_AddHtmlTitle($this->Lang_Get('login'));
    }

    /**
     * Обрабатываем процесс разлогинивания
     *
     */
    protected function EventExit() {
        $this->Security_ValidateSendForm();
        $this->User_Logout();
        if (isset($_SERVER['HTTP_REFERER']) && F::File_IsLocalUrl($_SERVER['HTTP_REFERER'])) {
            Router::Location($_SERVER['HTTP_REFERER']);
            exit;
        } else {
            $this->Viewer_Assign('bRefreshToHome', true);
        }
    }

    /**
     * Ajax запрос на восстановление пароля
     */
    protected function EventAjaxReminder() {

        // * Устанвливаем формат Ajax ответа
        $this->Viewer_SetResponseAjax('json');

        // * Пользователь с таким емайлом существует?
        if ((F::CheckVal(getRequestStr('mail'), 'mail') && $oUser = $this->User_GetUserByMail(getRequestStr('mail')))) {

            // * Формируем и отправляем ссылку на смену пароля
            $oReminder = Engine::GetEntity('User_Reminder');
            $oReminder->setCode(F::RandomStr(32));
            $oReminder->setDateAdd(date('Y-m-d H:i:s'));
            $oReminder->setDateExpire(date('Y-m-d H:i:s', time() + 60 * 60 * 24 * 7));
            $oReminder->setDateUsed(null);
            $oReminder->setIsUsed(0);
            $oReminder->setUserId($oUser->getId());
            if ($this->User_AddReminder($oReminder)) {
                $this->Message_AddNotice($this->Lang_Get('password_reminder_send_link'));
                $this->Notify_SendReminderCode($oUser, $oReminder);
                return;
            }
        }
        $this->Message_AddError($this->Lang_Get('password_reminder_bad_email'), $this->Lang_Get('error'));
    }

    /**
     * Обработка напоминания пароля, подтверждение смены пароля
     *
     */
    protected function EventReminder() {

        // * Устанавливаем title страницы
        $this->Viewer_AddHtmlTitle($this->Lang_Get('password_reminder'));

        // * Проверка кода на восстановление пароля и генерация нового пароля
        if (F::CheckVal($this->GetParam(0), 'md5')) {

            // * Проверка кода подтверждения
            if ($oReminder = $this->User_GetReminderByCode($this->GetParam(0))) {
                if (!$oReminder->getIsUsed() && strtotime($oReminder->getDateExpire()) > time()
                    && $oUser = $this->User_GetUserById($oReminder->getUserId())
                ) {
                    $sNewPassword = F::RandomStr(7);
                    $oUser->setPassword($sNewPassword, true);
                    if ($this->User_Update($oUser)) {
                        $oReminder->setDateUsed(date('Y-m-d H:i:s'));
                        $oReminder->setIsUsed(1);
                        $this->User_UpdateReminder($oReminder);
                        $this->Notify_SendReminderPassword($oUser, $sNewPassword);
                        $this->SetTemplateAction('reminder_confirm');
                        return;
                    }
                }
            }
            $this->Message_AddErrorSingle($this->Lang_Get('password_reminder_bad_code'), $this->Lang_Get('error'));
            return Router::Action('error');
        }
    }
}

// EOF