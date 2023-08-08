<?php /* Smarty version 3.1.27, created on 2023-07-28 05:46:21
         compiled from "my:_emailbody_withdraw_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:191908778064c3562de56798_46940033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce68560a47afc22233eb2c1078a7db9d7c45a618' => 
    array (
      0 => 'my:_emailbody_withdraw_admin_notification',
      1 => 1690523181,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '191908778064c3562de56798_46940033',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c3562de581f5_25213842',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c3562de581f5_25213842')) {
function content_64c3562de581f5_25213842 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '191908778064c3562de56798_46940033';
?>
User #username# received $#amount# to #currency# account #account#. Batch is #batch#.<?php }
}
?>