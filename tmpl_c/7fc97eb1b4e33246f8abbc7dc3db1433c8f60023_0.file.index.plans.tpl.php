<?php /* Smarty version 3.1.27, created on 2023-08-07 13:34:50
         compiled from "/home/dexfpheh/polticventure.co/tmpl/index.plans.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:166144831564d0f2fa9d0565_14873457%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fc97eb1b4e33246f8abbc7dc3db1433c8f60023' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/index.plans.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166144831564d0f2fa9d0565_14873457',
  'variables' => 
  array (
    'index_plans' => 0,
    'p' => 0,
    'o' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d0f2faa11ff7_43860494',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d0f2faa11ff7_43860494')) {
function content_64d0f2faa11ff7_43860494 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '166144831564d0f2fa9d0565_14873457';
$_from = $_smarty_tpl->tpl_vars['index_plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
  <?php if (!$_smarty_tpl->tpl_vars['p']->value['closed']) {?>
    <div class="col-lg-4 col-md-6 md-mb-30 md-mb-0 sm-mb-30">
      <div class="pricing-table white-bg">
        <div class="pricing-table-header">
          <h3 class="table-title"><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</h3>
        </div>
        <div class="pricing-icon mb-40">
          <img
            src="assets/images/pricing/style1/2.png"
            alt=""
          >
        </div>

        <?php if ($_smarty_tpl->tpl_vars['p']->value['plans']) {?>
          <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['plans'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
            <div class="pricing-table-price">
              <div class="pricing-table-bags">
                <span class="pricing-currency">%</span>
                <span class="table-price-text"><?php echo smarty_modifier_myescape(sprintf("%.2f",$_smarty_tpl->tpl_vars['o']->value['percent']));?>
</span>
                <span class="table-period">/ Daily</span>
              </div>
            </div>
            <div class="pricing-table-body">
              <ul>
                <li><i class="fa fa-check"></i><span><b>Duration: </b>&nbsp; &nbsp; &nbsp; <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['q_days'], ENT_QUOTES, 'UTF-8', true));?>
 Days</span></li>
                <li><i class="fa fa-check"></i><span><b>Minimum Deposit:</b>&nbsp; &nbsp; &nbsp; $<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['min_deposit']);?>
</span></li>
                <li><i class="fa fa-check"></i><span><b>Maximum Deposit: </b>&nbsp; &nbsp; &nbsp; $<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['max_deposit']);?>
</span></li>
                <li><i class="fa fa-check"></i><span><b>Referral Bonus: </b>&nbsp; &nbsp; &nbsp;  10%</span></li>
              </ul>
            </div>
          <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
          <form method=post>
            <input
              type=hidden
              name=a
              value=deposit
            >
            <div class="btn-part">
              <input
                type=submit
                value="Make deposit"
                class="readon price price2"
              >
            </div>
            <input
              type=hidden
              name=h_id
              value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>

            >
          </form>

        <?php } else { ?>
          <div class="btn-part">
            <a
              class="readon price price2"
              href="/?a=login"
            >Get Started</a>
          </div>
        <?php }?>

      </div>
    </div>
  <?php }?>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}

}
}
?>