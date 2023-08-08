<?php /* Smarty version 3.1.27, created on 2023-07-28 16:10:30
         compiled from "/home/dexfpheh/polticventure.co/tmpl/deposit.other.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:70827642264c3e87666a155_25478289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44cd525f89bcf691983d305662a6988a143cb608' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/deposit.other.confirm.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70827642264c3e87666a155_25478289',
  'variables' => 
  array (
    'ok' => 0,
    'description' => 0,
    'deposit' => 0,
    't' => 0,
    'currency_sign' => 0,
    'type' => 0,
    'h_id' => 0,
    'compound' => 0,
    'famount' => 0,
    'fields' => 0,
    'max_deposit_less' => 0,
    'max_deposit_format' => 0,
    'wrong_paln' => 0,
    'not_enough_funds' => 0,
    'less_than_min' => 0,
    'plan_name' => 0,
    'min_amount' => 0,
    'zero_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c3e8766ee870_86706135',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c3e8766ee870_86706135')) {
function content_64c3e8766ee870_86706135 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '70827642264c3e87666a155_25478289';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>"Deposit Confirm",'pageurl'=>"deposit"), 0);
?>


<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:grid-cols-3 lg:gap-6">

    <?php if ($_smarty_tpl->tpl_vars['ok']->value == 1) {?>

        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5">
            <div>
              <h2 class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                Confirm Deposit
              </h2>
            </div>
            <div class="pt-2">
                <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['description']->value);?>
</p>
            </div>
        </div>

        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5">
            <div>

            <table
                cellspacing=0
                cellpadding=2
                class="form deposit_confirm"
            >
                <?php if ($_smarty_tpl->tpl_vars['deposit']->value['id'] > 0) {?>
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
                            <?php if ($_smarty_tpl->tpl_vars['deposit']->value['use_compound'] == 1) {?>
                                <tr>
                                    <th>Compound:</th>
                                    <td><?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['compound']));?>
%</td>
                                </tr>
                            <?php }?>
                        <?php }?> 
                        <?php if ($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee']) {?>
                            <tr>
                                <th>Credit Amount:</th>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['user_amount']);?>
</td>
                            </tr>
                            <tr>
                                <th>Deposit Fee:</th>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['percent']);?>
% + <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['add_amount']);?>
 (min.
                                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_min']);?>
 max. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_max']);?>
)</td>
                            </tr>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']) {?>
                            <tr>
                                <th>Debit Amount:</th>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']);?>
</td>
                            </tr>
                            <tr>
                                <th><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_fiat']);?>
 Debit Amount:</th>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
                            </tr>
                        <?php } else { ?>
                            <tr>
                                <th>Debit Amount:</th>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
                            </tr>
                        <?php }?>
                    </table>
            </div>
        </div>

        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5">
            <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                Required Information
            </h2>
            <div>
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
                        name=compound
                        value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['compound']->value);?>

                    >
                    <INPUT
                        type=hidden
                        name=amount
                        value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['famount']->value);?>
"
                    >
                    <?php if ($_smarty_tpl->tpl_vars['fields']->value) {?>
                         

                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total']);
?>
                                <label class="block my-3">
                                    <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['name']);?>
</span>
                                    <input
                                      class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                      placeholder="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['name']);?>
"
                                      type="text"
                                      name="fields[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['id']);?>
]"
                                    />
                                  </label>
                            <?php endfor; endif; ?>
                    <?php }?>

                    
                    <button
                        type="submit"
                        class="btn bg-gradient-to-r from-amber-400 to-orange-600 font-medium text-white"
                    >
                        Save
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
        </div>

    <?php } else { ?>

        <div class="card px-5 py-12 sm:px-18 mt-5">
            <div class="flex flex-col justify-between sm:flex-row">

                <?php if ($_smarty_tpl->tpl_vars['max_deposit_less']->value == 1) {?>
                    Sorry, the maximal deposit is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['max_deposit_format']->value);?>
.<br>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['wrong_paln']->value == 1) {?> The Plan does not exist. <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['not_enough_funds']->value == 1) {?> You have not enough funds to complete the operation.<br><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['less_than_min']->value == 1) {?>
                    The minimal spend amount for '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
' is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_amount']->value);?>
.<br>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['zero_amount']->value) {?>
                    You should enter amount grater than zero.<br>
                <?php }?>

                <br>
                Click <a href="?a=deposit">here</a> and try again.
            </div>
        </div>


    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>