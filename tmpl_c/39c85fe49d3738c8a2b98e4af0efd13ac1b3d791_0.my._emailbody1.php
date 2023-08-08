<?php /* Smarty version 3.1.27, created on 2023-08-01 07:00:48
         compiled from "my:_emailbody1" */ ?>
<?php
/*%%SmartyHeaderCode:76671524264c8ada0530ca4_15848598%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39c85fe49d3738c8a2b98e4af0efd13ac1b3d791' => 
    array (
      0 => 'my:_emailbody1',
      1 => 1690873248,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '76671524264c8ada0530ca4_15848598',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c8ada053f409_58921720',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c8ada053f409_58921720')) {
function content_64c8ada053f409_58921720 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76671524264c8ada0530ca4_15848598';
?>
Hello #name#.

$#amount# has been successfully sent to your #currency# account #account#.
Transaction batch is #batch#.

polticventure.co
http://polticventure.co<?php }
}
?>