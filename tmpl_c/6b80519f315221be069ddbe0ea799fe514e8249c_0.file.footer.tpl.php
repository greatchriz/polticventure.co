<?php /* Smarty version 3.1.27, created on 2023-08-08 23:34:21
         compiled from "/home/dexfpheh/polticventure.co/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:137986691064d2d0fd86ac17_76641466%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b80519f315221be069ddbe0ea799fe514e8249c' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/footer.tpl',
      1 => 1691163280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137986691064d2d0fd86ac17_76641466',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2d0fd86ca34_57504914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2d0fd86ca34_57504914')) {
function content_64d2d0fd86ca34_57504914 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '137986691064d2d0fd86ac17_76641466';
?>

</main>
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
  <?php echo '<script'; ?>
>
    function handleClick(event) {
      const anchor = event.currentTarget.querySelector('a');
      anchor.click();
    }
  <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
?>