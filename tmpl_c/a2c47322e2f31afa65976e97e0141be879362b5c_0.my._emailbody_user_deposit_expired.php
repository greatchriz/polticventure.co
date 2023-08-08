<?php /* Smarty version 3.1.27, created on 2023-08-03 13:03:34
         compiled from "my:_emailbody_user_deposit_expired" */ ?>
<?php
/*%%SmartyHeaderCode:169036040664cba5a6e7eba2_36832778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2c47322e2f31afa65976e97e0141be879362b5c' => 
    array (
      0 => 'my:_emailbody_user_deposit_expired',
      1 => 1691067814,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '169036040664cba5a6e7eba2_36832778',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64cba5a6e87b16_16967917',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64cba5a6e87b16_16967917')) {
function content_64cba5a6e87b16_16967917 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '169036040664cba5a6e7eba2_36832778';
?>
Hello #name#.

Deposit you made #deposit_date# has been expired.
Deposit amount: $#deposit_amount#
Your login: #username#.


#site_name#
#site_url#<?php }
}
?>