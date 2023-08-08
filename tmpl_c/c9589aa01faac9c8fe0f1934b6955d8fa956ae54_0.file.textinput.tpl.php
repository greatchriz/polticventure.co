<?php /* Smarty version 3.1.27, created on 2023-08-08 10:41:59
         compiled from "/home/dexfpheh/polticventure.co/tmpl/textinput.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24099695364d21bf783f670_54925739%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9589aa01faac9c8fe0f1934b6955d8fa956ae54' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/textinput.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24099695364d21bf783f670_54925739',
  'variables' => 
  array (
    'placeholder' => 0,
    'name' => 0,
    'value' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d21bf7845a51_18426453',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d21bf7845a51_18426453')) {
function content_64d21bf7845a51_18426453 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '24099695364d21bf783f670_54925739';
?>
<label class="relative flex">
    <input
        class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
        placeholder="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['placeholder']->value);?>
"
        type="text"
        name=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['name']->value);?>

        value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['value']->value));?>
"
    />
    <span
        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
    >
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['icon']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </span>
</label>
<?php }
}
?>