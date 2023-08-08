<?php /* Smarty version 3.1.27, created on 2023-08-01 03:11:45
         compiled from "/home/dexfpheh/polticventure.co/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22417233664c877f1de0801_07952758%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '036467bf8ba91fb773ff96a7b8d619fa1f051caa' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/after_registration.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22417233664c877f1de0801_07952758',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c877f1df4102_76422313',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c877f1df4102_76422313')) {
function content_64c877f1df4102_76422313 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22417233664c877f1de0801_07952758';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<h3>Registration completed:</h3><br>

Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>