<?php /* Smarty version 3.1.27, created on 2023-08-05 05:16:46
         compiled from "my:_emailbody_referral_commision_notification" */ ?>
<?php
/*%%SmartyHeaderCode:169623365164cddb3e849bf2_00054552%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22dae1eb645238796be578d1b985550bbf18781' => 
    array (
      0 => 'my:_emailbody_referral_commision_notification',
      1 => 1691212606,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '169623365164cddb3e849bf2_00054552',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64cddb3e8593e1_69649792',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64cddb3e8593e1_69649792')) {
function content_64cddb3e8593e1_69649792 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '169623365164cddb3e849bf2_00054552';
?>
Dear #name# (#username#)

You have received a referral comission of $#amount# #currency# from the #ref_name# (#ref_username#) deposit.

Thank you.<?php }
}
?>