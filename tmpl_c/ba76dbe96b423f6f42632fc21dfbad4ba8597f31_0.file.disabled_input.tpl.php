<?php /* Smarty version 3.1.27, created on 2023-08-05 22:11:16
         compiled from "/home/dexfpheh/polticventure.co/tmpl/disabled_input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:83080659064cec904487572_24543443%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba76dbe96b423f6f42632fc21dfbad4ba8597f31' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/disabled_input.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83080659064cec904487572_24543443',
  'variables' => 
  array (
    'placeholder' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64cec90448cb57_08343284',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64cec90448cb57_08343284')) {
function content_64cec90448cb57_08343284 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '83080659064cec904487572_24543443';
?>
<label class="relative flex">
    <input
      disabled
      class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900 disabled:pointer-events-none disabled:select-none disabled:border-none disabled:bg-zinc-100"
      placeholder="Your Upline: (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['placeholder']->value);?>
)"
      type="text"
    />
    <span
        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
    >
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['icon']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </span>
  </label><?php }
}
?>