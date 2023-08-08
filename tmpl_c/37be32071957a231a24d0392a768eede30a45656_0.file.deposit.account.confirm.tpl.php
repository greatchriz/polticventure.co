<?php /* Smarty version 3.1.27, created on 2023-08-05 05:16:30
         compiled from "/home/dexfpheh/polticventure.co/tmpl/deposit.account.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:188343893364cddb2e659681_16356249%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37be32071957a231a24d0392a768eede30a45656' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/deposit.account.confirm.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188343893364cddb2e659681_16356249',
  'variables' => 
  array (
    'ok' => 0,
    'deposit' => 0,
    't' => 0,
    'currency_sign' => 0,
    'type' => 0,
    'h_id' => 0,
    'famount' => 0,
    'compound' => 0,
    'max_deposit_less' => 0,
    'max_deposit_format' => 0,
    'wrong_plan' => 0,
    'not_enough_funds' => 0,
    'less_than_min' => 0,
    'plan_name' => 0,
    'min_amount' => 0,
    'on_hold' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64cddb2e6cc803_65022569',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64cddb2e6cc803_65022569')) {
function content_64cddb2e6cc803_65022569 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '188343893364cddb2e659681_16356249';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>"Deposit Confirm",'pageurl'=>"deposit&say=deposit_success"), 0);
?>


<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:grid-cols-3 lg:gap-6">

    <?php if ($_smarty_tpl->tpl_vars['ok']->value == 1) {?>
        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5">
            <div>
              <h2 class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                Confirm Deposit
              </h2>
            </div>
        </div>

        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5">
            <div>
                <table
                    cellspacing=0
                    cellpadding=2
                    class="form deposit_confirm"
                >
                    <tr>
                        <th>Plan:</th>
                        <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['deposit']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
                    </tr>
                    <tr>
                        <th>Profit:</th>
                        <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['percent']);?>
% <?php if ($_smarty_tpl->tpl_vars['deposit']->value['period'] == 'end' || $_smarty_tpl->tpl_vars['deposit']->value['period'] == 'endh') {?>after
                                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] != 1) {?>s<?php }
} else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['period_name']);?>

                                for <?php if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] == 0) {?>lifelong
                                <?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>

                                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] != 1) {?>s<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['deposit']->value['work_week']) {?>(mon-fri)<?php }
}
}?></td>
                            </tr>
                            <tr>
                                <th>Principal Return:</th>
                                <td><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return']) {?>Yes
                                    <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'] > 0) {?>, with
                                        <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'],2));?>
% fee<?php }?>
                                        <?php } else { ?>No (included in profit)
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Principal Withdraw:</th>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw']) {?>Available with
                                            <?php
$_from = $_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_terms'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_wpt'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_wpt']->value['total'];
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
                                                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['percent']);?>
% fee <?php if ($_smarty_tpl->tpl_vars['t']->value['duration'] > 0) {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['duration']);?>
 days<?php }
if (!(isset($_smarty_tpl->tpl_vars['__foreach_wpt']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] : null)) {?> or
                                            <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
                                        <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']) {?> but before
                                        <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']));?>
 days<?php }?>
                                    <?php } else { ?>Not available
                                    <?php }?>
                                </td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['deposit']->value['compound'] != -1) {?>
                                <tr>
                                    <th>Compound:</th>
                                    <td><?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['compound']));?>
%</td>
                                </tr>
                            <?php }?>
                            <tr>
                                <th>Amount:</th>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
                            </tr>
                </table>
            </div>
        </div>

        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5">
            <form
                name=spend
                method=post
            >

                <input
                    type=hidden
                    name=a
                    value=deposit
                >
                <input
                    type=hidden
                    name=action
                    value=confirm
                >
                <input
                    type=hidden
                    name=type
                    value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value);?>

                >
                <input
                    type=hidden
                    name=h_id
                    value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['h_id']->value);?>

                >
                <input
                    type=hidden
                    name=amount
                    value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['famount']->value);?>
"
                >
                <input
                    type=hidden
                    name=compound
                    value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['compound']->value);?>

                >

                <button
                    type="submit"
                    class="btn bg-gradient-to-r from-amber-400 to-orange-600 font-medium text-white"
                >
                    Process
                </button>

                <button
                    type="button"
                    class="btn bg-gradient-to-r from-sky-400 to-blue-600 font-medium text-white"
                    onclick="document.location='?a=deposit'"
                >
                    Cancel
                </button>

            </form>
        </div>


    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['max_deposit_less']->value == 1) {?>Sorry, the maximal deposit is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['max_deposit_format']->value);?>
.<br><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wrong_plan']->value == 1) {?> The Plan does not exist. <?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['not_enough_funds']->value == 1) {?> You have not enough funds to complete the operation.<br><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['less_than_min']->value == 1) {?>The minimal spend amount for '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
' is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_amount']->value);?>
.<br><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['on_hold']->value == 1) {?>Sorry, this amount on hold now.<br><?php }?>
        <br>
        Click <a href="<?php echo smarty_modifier_myescape(encurl("?a=deposit"));?>
">here</a> and try again.
    <?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>