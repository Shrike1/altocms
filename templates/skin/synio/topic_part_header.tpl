{assign var="oBlog" value=$oTopic->getBlog()}
{assign var="oUser" value=$oTopic->getUser()}
{assign var="oVote" value=$oTopic->getVote()}


<article class="topic topic-type-{$oTopic->getType()} js-topic">
	<header class="topic-header">
		<h1 class="topic-title word-wrap">
			{if $bTopicList}
				<a href="{$oTopic->getUrl()}">{$oTopic->getTitle()|escape:'html'}</a>
			{else}
				{$oTopic->getTitle()|escape:'html'}
			{/if}
			
			{if $oTopic->getPublish() == 0}   
				<i class="icon-synio-topic-draft" title="{$aLang.topic_unpublish}"></i>
			{/if}
			
			{if $oTopic->getType() == 'link'} 
				<i class="icon-synio-topic-link" title="{$aLang.topic_link}"></i>
			{/if}
		</h1>
		
		
		<div class="topic-info">
			<a href="{$oBlog->getUrlFull()}" class="topic-blog">{$oBlog->getTitle()|escape:'html'}</a> 
			{if $oBlog->getType() != 'personal'}
				<a href="#" class="blog-list-info" onclick="return ls.infobox.showInfoBlog(this,{$oBlog->getId()});"></a>
			{/if}
		</div>
		
		{if $oTopic->getIsAllowAction()}
			<ul class="topic-actions">								   
				{if $oTopic->getIsAllowEdit()}
					<li class="edit"><i class="icon-synio-actions-edit"></i><a href="{$oTopic->getUrlEdit()}" title="{$aLang.topic_edit}" class="actions-edit">{$aLang.topic_edit}</a></li>
				{/if}
				
				{if $oTopic->getIsAllowDelete()}
					<li class="delete"><i class="icon-synio-actions-delete"></i><a href="{router page='content'}delete/{$oTopic->getId()}/?security_ls_key={$ALTO_SECURITY_KEY}" title="{$aLang.topic_delete}" onclick="return confirm('{$aLang.topic_delete_confirm}');" class="actions-delete">{$aLang.topic_delete}</a></li>
				{/if}
			</ul>
		{/if}
	</header>