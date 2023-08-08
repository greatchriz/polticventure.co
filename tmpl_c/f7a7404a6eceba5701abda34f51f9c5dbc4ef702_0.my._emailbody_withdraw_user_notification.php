<?php /* Smarty version 3.1.27, created on 2023-07-28 05:46:21
         compiled from "my:_emailbody_withdraw_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:99553880964c3562dc86355_13120399%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a7404a6eceba5701abda34f51f9c5dbc4ef702' => 
    array (
      0 => 'my:_emailbody_withdraw_user_notification',
      1 => 1690523181,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '99553880964c3562dc86355_13120399',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c3562dc942b2_45649594',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c3562dc942b2_45649594')) {
function content_64c3562dc942b2_45649594 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99553880964c3562dc86355_13120399';
?>
Hello #name#.

$#amount# has been successfully sent to your #currency# account #account#.
Transaction batch is #batch#.

#site_name#
#site_url#<?php }
}
?>