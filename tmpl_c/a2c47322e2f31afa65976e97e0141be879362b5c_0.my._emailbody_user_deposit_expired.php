<?php /* Smarty version 3.1.27, created on 2023-07-27 22:31:09
         compiled from "my:_emailbody_user_deposit_expired" */ ?>
<?php
/*%%SmartyHeaderCode:33976925164c2f02ddd0cd9_38209492%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2c47322e2f31afa65976e97e0141be879362b5c' => 
    array (
      0 => 'my:_emailbody_user_deposit_expired',
      1 => 1690497069,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '33976925164c2f02ddd0cd9_38209492',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c2f02ddd9764_59610909',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c2f02ddd9764_59610909')) {
function content_64c2f02ddd9764_59610909 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '33976925164c2f02ddd0cd9_38209492';
?>
Hello #name#.

Deposit you made #deposit_date# has been expired.
Deposit amount: $#deposit_amount#
Your login: #username#.


#site_name#
#site_url#<?php }
}
?>