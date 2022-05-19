{include file='_head_radio.tpl'}
{include file='_menu.tpl'}

<section id="player">
	<div class="contact">
		{if $do == 'in'}
			{include file='_signin_form.tpl'}
		{elseif $do == 'up'}
			{include file='_signup_form.tpl'}
		{/if}
	</div>
</section>

{include file='_footer.tpl'}