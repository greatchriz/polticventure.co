<?php /* Smarty version 3.1.27, created on 2023-07-27 22:31:57
         compiled from "/home/dexfpheh/polticventure.co/tmpl/auth_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:65828005764c2f05d8e86f7_20797197%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b1ae0270f82395b24dfcd3f86784e05a91b266' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/auth_footer.tpl',
      1 => 1690496952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65828005764c2f05d8e86f7_20797197',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c2f05d8e99a5_85078675',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c2f05d8e99a5_85078675')) {
function content_64c2f05d8e99a5_85078675 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '65828005764c2f05d8e86f7_20797197';
?>

</div>

<!-- 
    This is a place for Alpine.js Teleport feature 
    @see https://alpinejs.dev/directives/teleport
  -->
<div id="x-teleport-target"></div>
<?php echo '<script'; ?>
>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
?>