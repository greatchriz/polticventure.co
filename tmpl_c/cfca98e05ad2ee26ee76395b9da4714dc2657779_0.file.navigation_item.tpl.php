<?php /* Smarty version 3.1.27, created on 2023-08-08 23:34:21
         compiled from "/home/dexfpheh/polticventure.co/tmpl/navigation_item.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:77050513364d2d0fd81bbe4_44630733%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfca98e05ad2ee26ee76395b9da4714dc2657779' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/navigation_item.tpl',
      1 => 1691189727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77050513364d2d0fd81bbe4_44630733',
  'variables' => 
  array (
    'link' => 0,
    'icon' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2d0fd824ce6_50329468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2d0fd824ce6_50329468')) {
function content_64d2d0fd824ce6_50329468 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '77050513364d2d0fd81bbe4_44630733';
?>
<li 
    onclick="handleClick(event)"
    class="flex items-center bg-primary/10 rounded-lg cursor-pointer" style="margin-bottom: 10px; margin-top: 10px;">
    <a
        href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['link']->value);?>
"
        class="flex h-11 w-11 items-center justify-center text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
    >

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['icon']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

       
    </a>
    <p style="margin-left: 20px;">
        <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>

    </p>

</li>
<?php }
}
?>