{include file='_head_radio.tpl'}

<div class="center">

	{if $do == 'in'}
		{include file='_signin_form.tpl'}
	{elseif $do == 'up'}
		{include file='_signup_form.tpl'}
	{/if}
</div>

{include file='_footer.tpl'}