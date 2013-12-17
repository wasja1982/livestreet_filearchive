{include file='topic_part_header.tpl'}


<div class="topic-content text">
	{hook run='topic_content_begin' topic=$oTopic bTopicList=$bTopicList}

	{if $bTopicList}
		{$oTopic->getTextShort()}

		{if $oTopic->getTextShort()!=$oTopic->getText()}
			<br/>
			<a href="{$oTopic->getUrl()}#cut" title="{$aLang.topic_read_more}">
				{if $oTopic->getCutText()}
					{$oTopic->getCutText()}
				{else}
					{$aLang.topic_read_more} &rarr;
				{/if}
			</a>
		{/if}
	{else}
		{$oTopic->getText()}
	{/if}

	{hook run='topic_content_end' topic=$oTopic bTopicList=$bTopicList}
</div>


{if !$bTopicList}
<a name="download"></a>
<div style="border: 1px dashed #CDCDCD; margin: 10px 0px; padding: 5px;">
{if !$oUserCurrent && Config::Get('plugin.filearchive.only_users')}
	<a href="{router page='registration'}">{$aLang.plugin.filearchive.topic_file_access_denied}</a>
{else}
	<a href="{$oTopic->getDownloadUrl()}" title="{$aLang.plugin.filearchive.topic_file_downloads}: {$oTopic->getFileDownloads()}">{$aLang.plugin.filearchive.topic_file_download} "{$oTopic->getFileName()}" {($oTopic->getFileSize() / 1024)|string_format:$aLang.plugin.filearchive.topic_file_size}</a>
{/if}
</div>
{/if}


{include file='topic_part_footer.tpl'}