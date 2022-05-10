{include file='_head_radio.tpl'}


<div class="center">
{include file='_menu_panel.tpl'}

	<div class="right">
		<div class="mail-box">
			<span class="subject">Subject: {$message['message_subject']}</span>
			{if !$message['message_status']}
				<button class="js_button-send" data-url="data/contact.php?do=read" data-id="{$message['message_id']}">Mark as read</button>
			{else}
				<button class="js_button-send" data-url="data/contact.php?do=delete" data-id="{$message['message_id']}">Remove</button>
			{/if}
			<span class="mail">From: {$message['message_email']}</span>
			<span class="mail-date">{$message['message_date']}</span>

			<span class="mail-text">{$message['message_text']}</span>
		</div>
	</div>

</div>

{include file='_footer.tpl'}