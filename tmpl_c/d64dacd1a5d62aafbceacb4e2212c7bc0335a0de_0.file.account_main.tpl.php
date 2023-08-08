<?php /* Smarty version 3.1.27, created on 2023-08-07 07:39:51
         compiled from "/home/dexfpheh/polticventure.co/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:204356331764d09fc7a98340_34920223%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd64dacd1a5d62aafbceacb4e2212c7bc0335a0de' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/account_main.tpl',
      1 => 1690755715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204356331764d09fc7a98340_34920223',
  'variables' => 
  array (
    'currency_sign' => 0,
    'ab_formated' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d09fc7ab0d26_91828187',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d09fc7ab0d26_91828187')) {
function content_64d09fc7ab0d26_91828187 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '204356331764d09fc7a98340_34920223';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>"Dashboard",'pageurl'=>"account"), 0);
?>

<div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
   <div class="col-span-12">


      <?php echo $_smarty_tpl->getSubTemplate ("cards/balance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_balance'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['total']),'total_deposits'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['deposit']),'total_withdrawals'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal'])), 0);
?>


      

      <?php echo $_smarty_tpl->getSubTemplate ("cards/user_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value)), 0);
?>


      <?php echo $_smarty_tpl->getSubTemplate ("cards/watchlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


      <?php echo $_smarty_tpl->getSubTemplate ("cards/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


   </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>