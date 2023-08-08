<?php /* Smarty version 3.1.27, created on 2023-08-07 07:39:51
         compiled from "/home/dexfpheh/polticventure.co/tmpl/deposit_account_balance.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:161129292164d09fc79a7241_41439321%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f100a6f8068344f1e2737073e9ee31df31e25e' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/deposit_account_balance.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161129292164d09fc79a7241_41439321',
  'variables' => 
  array (
    'balance' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d09fc79aa4e6_73405223',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d09fc79aa4e6_73405223')) {
function content_64d09fc79aa4e6_73405223 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '161129292164d09fc79a7241_41439321';
?>
<div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
    <div class="flex justify-between space-x-1">
        <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['balance']->value);?>

        </p>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-primary dark:text-accent"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
            ></path>
        </svg>
    </div>
    <p class="mt-1 text-xs+"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>
</p>
</div>
<?php }
}
?>