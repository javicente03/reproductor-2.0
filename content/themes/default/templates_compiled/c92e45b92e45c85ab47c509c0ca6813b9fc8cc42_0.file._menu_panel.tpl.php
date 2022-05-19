<?php
/* Smarty version 3.1.40, created on 2022-05-18 19:22:14
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_menu_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_628547666f4845_20988206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92e45b92e45c85ab47c509c0ca6813b9fc8cc42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_menu_panel.tpl',
      1 => 1652899607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628547666f4845_20988206 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="wrapper">
    <div id="bg">
        <div class="logo">
            <div class="cover"></div>
        </div>
    </div>


    <div id="list">
	
	    <div class="scroll" style="margin-top:-50px;">

	    	<section class="item-menu">
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/dashboard" class="header"><i class="material-icons ipanel">home</i><span>Dashboard</span></a>
	        	<hr>
	        </section>
	        
	        <section class="item-menu">
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/song/add" class="header"><i class="material-icons ipanel">add</i><span>Add Song</span></a>
	        	<hr>
	        </section>

	        <section class="item-menu">
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/config" class="header"><i class="material-icons ipanel">settings</i><span>Settings</span></a>
	        	<hr>
	        </section>

	        <section class="item-menu">
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/messages/pending" class="header"><i class="material-icons ipanel">email</i><span>Pending Messages</span></a>
	        	<hr>
	        </section>

	        <section class="item-menu">
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/messages/read" class="header"><i class="material-icons ipanel">email</i><span>Read Messages</span></a>
	        	<hr>
	        </section>

	        <section class="item-menu">
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/signout" class="header"><i class="material-icons ipanel">close</i><span>Logout</span></a>
	        	<hr>
	        </section>

	    </div>
   	</div>

</div><?php }
}
