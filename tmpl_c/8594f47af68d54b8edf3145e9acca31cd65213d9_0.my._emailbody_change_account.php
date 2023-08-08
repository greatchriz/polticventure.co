<?php /* Smarty version 3.1.27, created on 2023-07-28 05:46:45
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:199990967164c35645c9cfe3_97554173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1690523205,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '199990967164c35645c9cfe3_97554173',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c35645ca7350_03414467',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c35645ca7350_03414467')) {
function content_64c35645ca7350_03414467 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '199990967164c35645c9cfe3_97554173';
?>
Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.<?php }
}
?>