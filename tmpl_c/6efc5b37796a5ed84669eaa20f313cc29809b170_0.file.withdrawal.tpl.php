<?php /* Smarty version 3.1.27, created on 2023-08-02 13:18:19
         compiled from "/home/dexfpheh/polticventure.co/tmpl/withdrawal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:213332854464ca579bc3efa9_82506778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6efc5b37796a5ed84669eaa20f313cc29809b170' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/withdrawal.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213332854464ca579bc3efa9_82506778',
  'variables' => 
  array (
    'say' => 0,
    'batch' => 0,
    'fatals' => 0,
    'fatal' => 0,
    'settings' => 0,
    'errors' => 0,
    'currency_sign' => 0,
    'fees' => 0,
    'preview' => 0,
    'amount' => 0,
    'ec' => 0,
    'comment' => 0,
    'currency' => 0,
    'account' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'p' => 0,
    'frm' => 0,
    'have_hold' => 0,
    'have_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64ca579bcb8f81_15916505',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64ca579bcb8f81_15916505')) {
function content_64ca579bcb8f81_15916505 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '213332854464ca579bc3efa9_82506778';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>"Withdrwal",'pageurl'=>"withdraw"), 0);
?>


<div class="flex items-center space-x-4 py-5 lg:py-6">
  <h2
    class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
  >
  Ask for withdrawal
  </h2>

</div>

<div class="grid grid-cols-1 gap-4 sm:gap-5">

  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'processed') {?>
  <?php if ($_smarty_tpl->tpl_vars['batch']->value == '') {?>Withdrawal request has been successfully saved.<?php } else { ?> Withdrawal has been processed. Batch id: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['batch']->value);
}?>
  <br><br>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['fatals']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'times_limit' || $_smarty_tpl->tpl_vars['fatals']->value['times_limit']) {?>
    <div class="msg">You can withdraw <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_times']);?>
 per <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_date']);?>
 only.</div>
    <?php }?>

  <?php } else { ?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'ec_forbidden' || $_smarty_tpl->tpl_vars['errors']->value['ec_forbidden']) {?>
  Sorry, withdraw for this processing is temproary forbidden.<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'on_hold' || $_smarty_tpl->tpl_vars['errors']->value['on_hold']) {?>
  Sorry, this amount on hold now.<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'zero' || $_smarty_tpl->tpl_vars['errors']->value['zero']) {?>
  Sorry, you can't request a withdraw smaller than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
0.00 only<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'less_min' || $_smarty_tpl->tpl_vars['errors']->value['less_min']) {?>
  Sorry, you can request not less than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['amount_min']);?>
<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'greater_max' || $_smarty_tpl->tpl_vars['errors']->value['greater_max']) {?>
  Sorry, you can request not greater than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['amount_max']);?>
<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'daily_limit' || $_smarty_tpl->tpl_vars['errors']->value['daily_limit']) {?>
  Sorry, you have exceeded a daily limit<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'not_enought' || $_smarty_tpl->tpl_vars['errors']->value['not_enought']) {?>
  Sorry, you have requested the amount larger than the one on your balance.<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_transaction_code' || $_smarty_tpl->tpl_vars['errors']->value['invalid_transaction_code']) {?>
  You have entered the invalid transaction code.<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_tfa_code' || $_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
  You have entered invalid 2FA code.<br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_deposits' || $_smarty_tpl->tpl_vars['errors']->value['no_deposits']) {?>
  You have not done any deposits yet. Withdrawal function will be available after a deposit.
  <br><br>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_active_deposits' || $_smarty_tpl->tpl_vars['errors']->value['no_active_deposits']) {?>
  You must have active deposit to withdraw.
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_account' || $_smarty_tpl->tpl_vars['errors']->value['no_account']) {?>
  Please, provide your aacount to withdraw funds to first <a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
">here</a>.
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['demo']) {?>
  Withdraw is not available for demo account.
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>Invalid turing image<br><br><?php }?>


  <?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <div class="card rounded-sm px-4 py-4 sm:px-5">
      <form method=post>
      <input type=hidden name=a value=withdraw>
      <input type=hidden name=action value=withdraw>
      <input type=hidden name=amount value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
>
      <input type=hidden name=ec value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ec']->value);?>
>
      <input type=hidden name=comment value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
">

      <div class="grid grid-cols-1 gap-4 sm:gap-5">

        <div class="card rounded-sm shadow-sm px-4 py-4 sm:px-5 mt-4">

          <div class="flex items-center justify-between">
            <p class="text-lg text-slate-800 dark:text-navy-50 px-4 py-4 sm:px-5 font-bold">
              Payment System
            </p>
            <p class="text-sm text-slate-600 dark:text-navy-50 px-4 py-4 sm:px-5">
              <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency']->value);?>

            </p>
          </div>
          <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


          

          <div class="flex items-center justify-between">
            <p class="text-lg text-slate-800 dark:text-navy-50 px-4 py-4 sm:px-5 font-bold">
              Account
            </p>
            <p class="text-sm text-slate-600 dark:text-navy-50 px-4 py-4 sm:px-5">
              <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['account']->value);?>

            </p>
          </div>
          <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


          

          <div class="flex items-center justify-between">
            <p class="text-lg text-slate-800 dark:text-navy-50 px-4 py-4 sm:px-5 font-bold">
              Amount
            </p>
            <p class="text-sm text-slate-600 dark:text-navy-50 px-4 py-4 sm:px-5">
              <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>

            </p>
          </div>
          <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


          

          <div class="flex items-center justify-between">
            <p class="text-lg text-slate-800 dark:text-navy-50 px-4 py-4 sm:px-5 font-bold">
              Withdrawal Fee
            </p>
            <p class="text-sm text-slate-600 dark:text-navy-50 px-4 py-4 sm:px-5">
              <?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee'] > 0) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee']);?>
%<?php }?> 
              <?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min'] > 0) {?>min. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min']);
}?>
            </p>
          </div>
          <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


          <?php if ($_smarty_tpl->tpl_vars['comment']->value) {?>
          

          <div class="flex items-center justify-between">
            <p class="text-lg text-slate-800 dark:text-navy-50 px-4 py-4 sm:px-5 font-bold">
              Comment
            </p>
            <p class="text-sm text-slate-600 dark:text-navy-50 px-4 py-4 sm:px-5">
              <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>

            </p>
          </div>
          <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

          <?php }?>

          

          <div class="mt-4">
          <button
              type=submit
              class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >
              Confirm
            </button>
          </div>

        </div>

      </div>



      
      

      </form>
    </div>
  <?php } else { ?>
    <div class="card rounded-sm px-4 py-4 sm:px-5">
      <form method=post>
      <input type=hidden name=a value=withdraw>
      <input type=hidden name=action value=preview>
      <input type=hidden name=say value="">

      

      <div class="flex justify-between items-center">
        <p class="font-semibold text-slate-600">Account Balance </p>
        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</p>
      </div>
      <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

      <div class="flex justify-between items-center">
        <p class="font-semibold text-slate-600">Pending Withdrawals </p>
        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
if ($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending'] != 0) {
echo smarty_modifier_myescape(amount_smarty_format($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']));
}?></p>
      </div>
      <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


      <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:grid-cols-4 lg:gap-6">

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
        <div class="card rounded-sm shadow-lg p-4 sm:px-5">
          
              <div class="flex items-center justify-between space-x-2">
                <div class="flex items-center space-x-3">
                  <label class="inline-flex items-center space-x-2">
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['available'] > 0) {?>
                      <?php if ($_smarty_tpl->tpl_vars['p']->value['status'] > 0 || $_smarty_tpl->tpl_vars['p']->value['available'] > 0) {?>
                    <input class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 checked:!border-success checked:bg-success hover:!border-success focus:!border-success dark:border-navy-400" type="radio" name="ec" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" <?php if ($_smarty_tpl->tpl_vars['frm']->value['ec'] == $_smarty_tpl->tpl_vars['p']->value['id']) {?>checked<?php }?>>
                  <?php }?>
                <?php }?>
      

                    <div class="avatar">
                      <img
                        class="mask is-squircle"
                        src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
.gif"
                        alt="image"
                      >
                    </div>
                    <div style="margin-left: 20px;">
                      <p class="font-medium text-slate-700 line-clamp-2 dark:text-navy-100">
                        <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>

                      </p>
               
                    </div>
                  </label>
    
    
                </div>
    
              </div>
              <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
         
          <div class="flex justify-between items-center">
            <p class="font-semibold text-slate-600">Available </p>
            <p style="color: green;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['available']);?>
</p>
          </div>
          <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

          <?php if ($_smarty_tpl->tpl_vars['have_hold']->value) {?>
            <div class="flex justify-between items-center">
              <p class="font-semibold text-slate-600">On Hold</p>
              <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['hold']);?>
</p>
            </div>
          <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>
          <?php }?>


          <div class="flex justify-between items-center">
            <p class="font-semibold text-slate-600">Pending </p>
            <p style="color: red;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['pending']);?>
</p>
          </div>
          <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

          <div class="flex justify-between items-center">
            <p class="font-semibold text-slate-600">Wallet Address </p>
            <?php if ($_smarty_tpl->tpl_vars['p']->value['account'] != '') {?>
              <p><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['account'], ENT_QUOTES, 'UTF-8', true));?>
</p>
            <?php } else { ?>
              <a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
"
                class="btn bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90"
              >
                Add Wallet
              </a>
            <?php }?>
          </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

      </div>

      <?php if ($_smarty_tpl->tpl_vars['have_available']->value) {?>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 mt-5">
          <div class="card rounded-sm shadow-lg px-4 py-4 sm:px-5">

            <label class="block">
              <span>Withdrawal (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
)</span>
              <input
                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Amount"
                type="text"
                name=amount
              />
            </label>

            <label class="block mt-4">
              <span>Comment</span>
              <textarea
                class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Comment"
                name=comment
                cols=45 rows=4
              ><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['comment']);?>
</textarea>
            </label>

            <div class="mt-6">
              <button
                type=submit
                class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"

              >
                Request
              </button>
            </div>

          </div>


        </div>
      <?php } else { ?>
      <div class="card rounded-sm shadow-lg px-4 py-4 sm:px-5">
        <p class="text-xl text-center">You have no funds to withdraw.</p>
      </div>
      <?php }?>
      </form>
    </div>
  <?php }?>

  <?php }?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>