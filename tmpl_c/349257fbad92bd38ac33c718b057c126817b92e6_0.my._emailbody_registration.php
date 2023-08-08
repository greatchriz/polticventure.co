<?php /* Smarty version 3.1.27, created on 2023-08-01 03:11:45
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:119209622764c877f13a92f5_77492137%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1690859505,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '119209622764c877f13a92f5_77492137',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c877f13b8935_99105536',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c877f13b8935_99105536')) {
function content_64c877f13b8935_99105536 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '119209622764c877f13a92f5_77492137';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>