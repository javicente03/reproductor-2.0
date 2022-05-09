{include file='_head_radio.tpl'}

<div class="center">
    {include file='_menu.tpl'}

	<div class="right">
		<div class="about">
			<h2>About</h2>

				<p>{$config['about_text']}</p>


				<img src="{$base_url}/content/uploads/{$config['about_image']}">
		</div>
	</div>	
</div>

{include file='modal_login.tpl'}
{include file='modal_signup.tpl'}

{include file='_footer.tpl'}