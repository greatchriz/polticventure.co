<?php /* Smarty version 3.1.27, created on 2023-08-08 23:34:06
         compiled from "/home/dexfpheh/polticventure.co/tmpl/cards/account_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:47880971664d2d0ee73dc72_19630754%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '713e32a3650619dfd25b5b064951f0f487a83ca3' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/cards/account_detail.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47880971664d2d0ee73dc72_19630754',
  'variables' => 
  array (
    'title' => 0,
    'icon' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2d0ee747674_57037194',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2d0ee747674_57037194')) {
function content_64d2d0ee747674_57037194 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '47880971664d2d0ee73dc72_19630754';
if ($_smarty_tpl->tpl_vars['title']->value == 'Referral Link') {?>
    <div
        class="alert flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
        <div class="flex items-center space-x-3">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-slate-300">
                <img
                    src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['icon']->value);?>
"
                    alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>
"
                />
            </div>
            <div>
                <p
                    id="clipboardContent1"
                    class="font-medium text-slate-700 dark:text-navy-100"
                >
                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['info']->value);?>

                </p>
                <p class="mt-0.5 text-xs text-success line-clamp-1">
                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>

                </p>
            </div>
        </div>
        
            <button
                class="btn h-6 shrink-0 rounded bg-primary px-2 text-xs text-white active:bg-primary"
                @click="$clipboard({
            content:document.querySelector('#clipboardContent1').innerText,
            success:()=>$notification({text:'Text Copied',variant:'success'}),
            error:()=>$notification({text:'Error',variant:'error'})
        })"
            >
                Copy
            </button>
        

    </div>
<?php } else { ?>
    <div class="flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
        <div class="flex items-center space-x-3">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-slate-300">
                <img
                    src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['icon']->value);?>
"
                    alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>
"
                />
            </div>
            <div>
                <p class="font-medium text-slate-700 dark:text-navy-100">
                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['info']->value);?>

                </p>
                <p class="mt-0.5 text-xs text-success line-clamp-1">
                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>

                </p>
            </div>
        </div>
    </div>

<?php }

}
}
?>