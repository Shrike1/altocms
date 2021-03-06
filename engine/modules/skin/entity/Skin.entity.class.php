<?php
/*---------------------------------------------------------------------------
 * @Project: Alto CMS
 * @Project URI: http://altocms.com
 * @Description: Advanced Community Engine
 * @Version: 0.9a
 * @Copyright: Alto CMS Team
 * @License: GNU GPL v2 & MIT
 *----------------------------------------------------------------------------
 */

class ModuleSkin_EntitySkin extends Entity {

    public function __construct($aParams = false) {
        if (is_array($aParams)) {
            $this->_setData($aParams);
        } elseif($aParams) {
            $this->LoadFromXmlFile((string)$aParams);
        }
        $this->Init();
    }

    public function LoadFromXmlFile($sSkinId, $aData = null) {
        $sSkinXML = $this->Skin_GetSkinManifest($sSkinId);
        if (is_null($aData)) {
            $aData = array(
                'id' => $sSkinId,
            );
        }
        $this->LoadFromXml($sSkinXML, $aData);
    }

    public function LoadFromXml($sSkinXML, $aData = null) {
        $oXml = @simplexml_load_string($sSkinXML);
        if (!$oXml) {
            $sXml = '<?xml version="1.0" encoding="UTF-8"?>
                <skin>
                    <name><lang name="default">' . (isset($aData['id']) ? $aData['id'] : '') . '</lang></name>'
                . '</skin>';
            $oXml = @simplexml_load_string($sXml);
        }

        // Обрабатываем данные манифеста
        $sLang = $this->Lang_GetLang();

        $this->_xlang($oXml, 'name', $sLang);
        $this->_xlang($oXml, 'author', $sLang);
        $this->_xlang($oXml, 'description', $sLang);
        $oXml->homepage = $this->Text_Parser((string)$oXml->homepage);

        if ($sId = (string)$oXml->id) {
            $aData['id'] = $sId;
        }
        $aData['property'] = $oXml;
        $this->_setData($aData);
    }

    /**
     * Получает значение параметра из XML на основе языковой разметки
     *
     * @param SimpleXMLElement $oXml    XML узел
     * @param string           $sProperty    Свойство, которое нужно вернуть
     * @param string           $sLang    Название языка
     */
    protected function _xlang($oXml, $sProperty, $sLang) {
        $sProperty = trim($sProperty);

        if (!count($data = $oXml->xpath("{$sProperty}/lang[@name='{$sLang}']"))) {
            $data = $oXml->xpath("{$sProperty}/lang[@name='default']");
        }
        $oXml->$sProperty->data = $this->Text_Parser(trim((string)array_shift($data)));
    }

    protected function _getDataItem($sKey) {
        if (isset($this->_aData[$sKey]))
            return $this->_aData[$sKey];
        else
            return null;
    }

    public function _getDataProperty($sProp = null) {
        if (is_null($sProp))
            return $this->_aData['property'];
        else
            return $this->_aData['property']->$sProp;
    }

    public function GetName() {
        $xProp = $this->_getDataProperty('name');
        if ($xProp->data)
            return $xProp->data;
        else
            return $xProp->lang;
    }

    public function GetDescription() {
        $xProp = $this->_getDataProperty('description');
        if ($xProp->data)
            return $xProp->data;
        else
            return $xProp->lang;
    }

    public function GetAuthor() {
        $xProp = $this->_getDataProperty('author');
        if ($xProp->data)
            return $xProp->data;
        else
            return $xProp->lang;
    }

    public function GetVersion() {
        return (string)$this->_getDataProperty('version');
    }

    public function GetHomepage() {
        return (string)$this->_getDataProperty('homepage');
    }

    public function GetEmail() {
        return (string)$this->_getDataProperty('author')->email;
    }

    public function IsActive() {
        return (bool)$this->_getDataItem('is_active');
    }

    public function Requires() {
        return $this->_getDataProperty('requires');
    }

    public function GetScreenshots() {
        $aData = $this->_getDataProperty('info')->screenshots->screenshot;
        $aResult = array();
        if (sizeof($aData)) {
            foreach ($aData as $oProp) {
                $aResult[] = array(
                    'preview' => (strtolower($oProp['preview']) === 'yes'),
                    'file' => (string)$oProp['file'],
                );
            }
        }
        return $aResult;
    }

    public function GetPreview() {
        $aScreens=$this->GetScreenshots();
        foreach ($aScreens as $aScreen) {
            if ($aScreen['preview']) return $aScreen;
        }
        if (sizeof($aScreens)) {
            return array_shift($aScreens);
        }
        return null;
    }

    public function GetPreviewUrl() {
        $aScreen = $this->GetPreview();
        if ($aScreen && isset($aScreen['file'])) {
            $sFile = Config::Get('path.skins.dir') . $this->GetId() . '/settings/' . $aScreen['file'];
            $sUrl = F::File_Dir2Url($sFile);
            return $sUrl;
        }
    }

    /**
     * Тип скина - 'adminpanel', 'site'
     */
    public function GetType() {
        $info = $this->_getDataProperty('info');
        $sType = strtolower($info['type']);
        if (strpos($sType, 'admin') !== false) {
            return 'adminpanel';
        } else {
            return 'site';
        }
    }

    public function GetThemes() {
        $aData = $this->_getDataProperty('info')->themes->theme;
        $aResult = array();
        if (sizeof($aData)) {
            foreach ($aData as $oProp) {
                $aResult[] = array(
                    'code' => (string)$oProp['code'],
                    'name' => (string)$oProp['name'],
                    'color' => (string)$oProp['color'],
                );
            }
        }
        return $aResult;
    }

    public function RequiredAltoVersion() {
        $oRequires = $this->Requires();
        $sAltoVersion = (string)$oRequires->alto->version;
        if (!$sAltoVersion)
            $sAltoVersion = (string)$oRequires->alto;
        return $sAltoVersion;
    }

    public function RequiredPhpVersion() {
        $oRequires = $this->Requires();
        if ($oRequires->system && $oRequires->system->php) {
            return (string)$oRequires->system->php;
        }
    }

    public function RequiredPlugins() {
        $oRequires = $this->Requires();
        if ($oRequires->Plugins) {
            return $oRequires->Plugins->children();
        }
    }

    public function EngineCompatible() {
        $oRequires = $this->Requires();

        $sLsVersion = (string)$oRequires->livestreet;
        $sAltoVersion = (string)$oRequires->alto->version;
        if (!$sAltoVersion)
            $sAltoVersion = (string)$oRequires->alto;

        if ($sAltoVersion) {
            return version_compare($sAltoVersion, ALTO_VERSION, '<=');
        } else {
            return version_compare($sLsVersion, LS_VERSION, '<=');
        }
        return false;
    }
}

// EOF