<?php /* Smarty version 3.1.27, created on 2023-08-01 06:39:19
         compiled from "my:_emailbody_forgot_password_confirm" */ ?>
<?php
/*%%SmartyHeaderCode:143564659264c8a8975a1019_72294524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84ab1d548fc36cfa2bc8a7ec7220b8e5bad3d3b' => 
    array (
      0 => 'my:_emailbody_forgot_password_confirm',
      1 => 1690871959,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '143564659264c8a8975a1019_72294524',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c8a8975afa98_24336311',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c8a8975afa98_24336311')) {
function content_64c8a8975afa98_24336311 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143564659264c8a8975a1019_72294524';
?>
Hello #name#,

Please confirm your reqest for password reset.

Copy and paste this link to your browser:
#site_url#/?a=forgot_password&action=confirm&c=#confirm_string#

Thank you.
#site_name#<?php }
}
?>