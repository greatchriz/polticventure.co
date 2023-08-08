<?php /* Smarty version 3.1.27, created on 2023-08-05 05:16:46
         compiled from "my:_emailbody_deposit_account_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:39865916564cddb3ea8fbc0_01221249%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0566ba57c73b51ab1f136ca8d5e8588d0a7ece71' => 
    array (
      0 => 'my:_emailbody_deposit_account_admin_notification',
      1 => 1691212606,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '39865916564cddb3ea8fbc0_01221249',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64cddb3ea917f3_94616951',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64cddb3ea917f3_94616951')) {
function content_64cddb3ea917f3_94616951 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '39865916564cddb3ea8fbc0_01221249';
?>
User #username# deposit $#amount# #currency# from account balance to #plan#.

Account: #account#
Batch: #batch#
Compound: #compound#%.
Referrers fee: $#ref_sum#<?php }
}
?>