<?php /* Smarty version 3.1.27, created on 2023-07-30 22:19:33
         compiled from "/home/dexfpheh/polticventure.co/tmpl/cards/account.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:103507868364c6e1f5d03b43_61017365%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2bbf514db9fd16e34ec12be6c0e8da17e4aa519' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/cards/account.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103507868364c6e1f5d03b43_61017365',
  'variables' => 
  array (
    'p' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c6e1f5d09b06_54267448',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c6e1f5d09b06_54267448')) {
function content_64c6e1f5d09b06_54267448 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '103507868364c6e1f5d03b43_61017365';
?>

<div class="w-48 shrink-0 rounded-lg bg-gradient-to-br from-purple-500 to-indigo-600 p-[3px]">
    <div class="rounded-lg bg-white p-3 dark:bg-navy-700">
        <div class="flex items-center justify-between">
            <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</p>
            <img
                src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
.gif"
                class="h-6 w-6"
                alt="logo"
            />
        </div>
        <div class="mt-6 flex items-end justify-between">
                        
            <p class="font-semibold text-base"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['balance']);?>
</p>
        </div>

    </div>
</div>
<?php }
}
?>