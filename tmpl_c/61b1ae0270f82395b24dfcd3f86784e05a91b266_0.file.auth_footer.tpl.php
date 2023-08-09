<?php /* Smarty version 3.1.27, created on 2023-08-08 23:33:54
         compiled from "/home/dexfpheh/polticventure.co/tmpl/auth_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:90815518064d2d0e201fff1_16872198%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b1ae0270f82395b24dfcd3f86784e05a91b266' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/auth_footer.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90815518064d2d0e201fff1_16872198',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2d0e20211c7_07043479',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2d0e20211c7_07043479')) {
function content_64d2d0e20211c7_07043479 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '90815518064d2d0e201fff1_16872198';
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