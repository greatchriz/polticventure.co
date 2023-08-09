<?php /* Smarty version 3.1.27, created on 2023-08-08 23:34:06
         compiled from "/home/dexfpheh/polticventure.co/tmpl/cards/user_details.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:134304338964d2d0ee72c072_69844893%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a44a8eb29967dbcf13ce78e67c65cc9f5c1de016' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/cards/user_details.tpl',
      1 => 1690887585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134304338964d2d0ee72c072_69844893',
  'variables' => 
  array (
    'userinfo' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2d0ee73a186_16175644',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2d0ee73a186_16175644')) {
function content_64d2d0ee73a186_16175644 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '134304338964d2d0ee72c072_69844893';
?>
<div class="card mt-4 px-4 pb-4 sm:px-5">

    <div class="flex items-center justify-between py-3">
        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
            Account Details
        </h2>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
       
        

        <?php echo $_smarty_tpl->getSubTemplate ("cards/account_detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['username']),'title'=>"Username",'icon'=>"images/svg/userdetails/username.svg"), 0);
?>


        <?php echo $_smarty_tpl->getSubTemplate ("cards/account_detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>"https://polticventure.co/?ref=".((string)$_smarty_tpl->tpl_vars['userinfo']->value['username']),'title'=>"Referral Link",'icon'=>"images/svg/userdetails/referral.svg"), 0);
?>


        

        <?php echo $_smarty_tpl->getSubTemplate ("cards/account_detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']),'title'=>"Pending Withdrawal",'icon'=>"images/svg/userdetails/pending-withdrawal.svg"), 0);
?>


        

        <?php echo $_smarty_tpl->getSubTemplate ("cards/account_detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']),'title'=>"Active Deposit",'icon'=>"images/svg/userdetails/active-deposit.svg"), 0);
?>

        
    </div>
</div>
<?php }
}
?>