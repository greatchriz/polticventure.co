<?php /* Smarty version 3.1.27, created on 2023-07-30 22:19:33
         compiled from "/home/dexfpheh/polticventure.co/tmpl/cards/accounts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:169856510064c6e1f5cf4443_40593368%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33eeea55fc7b50011965e904ce7799843360e04a' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/cards/accounts.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169856510064c6e1f5cf4443_40593368',
  'variables' => 
  array (
    'ps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c6e1f5cffad3_14441654',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c6e1f5cffad3_14441654')) {
function content_64c6e1f5cffad3_14441654 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '169856510064c6e1f5cf4443_40593368';
?>
<div class="card mt-4 pb-1 sm:mt-5 lg:mt-6">
    <div class="flex items-center justify-between px-4 py-3 sm:px-5">
        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
            Accounts
        </h2>
    </div>
    <div class="scrollbar-sm flex space-x-3 overflow-x-auto px-4 pb-3 sm:px-5">

        <!--foreach ps as p include cards/account.tpl -->
        <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
            <?php echo $_smarty_tpl->getSubTemplate ('cards/account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

    </div>
</div><?php }
}
?>