<?php /* Smarty version 3.1.27, created on 2023-08-08 23:34:05
         compiled from "/home/dexfpheh/polticventure.co/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32505996164d2d0edad0d92_60005681%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce43cf46bf8a434423aac10142f28bfdcf355fbe' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/login_redirect.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32505996164d2d0edad0d92_60005681',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2d0edae0d05_21084971',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2d0edae0d05_21084971')) {
function content_64d2d0edae0d05_21084971 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '32505996164d2d0edad0d92_60005681';
?>
<html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
</head>
<body>
<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }
}
?>