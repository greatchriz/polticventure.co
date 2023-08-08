<?php /* Smarty version 3.1.27, created on 2023-07-28 05:28:52
         compiled from "my:_emailbody_withdraw_request_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:144629636064c35214620600_09913425%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9dc888fe0e1392f2ec617e0f326be507e67362b' => 
    array (
      0 => 'my:_emailbody_withdraw_request_user_notification',
      1 => 1690522132,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '144629636064c35214620600_09913425',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c3521462afa2_19180585',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c3521462afa2_19180585')) {
function content_64c3521462afa2_19180585 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144629636064c35214620600_09913425';
?>
Hello #name#,


You have requested to withdraw $#amount#.
Request IP address is #ip#.


Thank you.
#site_name#
#site_url#<?php }
}
?>