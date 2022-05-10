<?php
/* Smarty version 3.1.40, created on 2022-05-10 04:31:03
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\reproductor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6279ea878dffa7_45068262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab80c98563257831108a84bf9bdfd05834efcebf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\reproductor.tpl',
      1 => 1652157052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6279ea878dffa7_45068262 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="reproductor">
  <div class="vinyl"></div> 
  <input type="range" class="range-volume" max="1" value="1" min="0" step="0.1">
  <div id="mp3_player">   
    <canvas id="analyzer_render"></canvas>
    <div id="audio_box"></div>
    <input type="range" max="100" value="0" disabled class="range-audio">
  </div>
</div><?php }
}
