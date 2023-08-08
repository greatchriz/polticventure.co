<?php /* Smarty version 3.1.27, created on 2023-08-07 06:27:54
         compiled from "/home/dexfpheh/polticventure.co/tmpl/deposit_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28584895364d08eea208511_01060309%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da7a6540184bff45c07ce0e28e6ede9fd162e488' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/deposit_list.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28584895364d08eea208511_01060309',
  'variables' => 
  array (
    'currency_sign' => 0,
    'total' => 0,
    'plans' => 0,
    'p' => 0,
    'o' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d08eea24ed47_04987691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d08eea24ed47_04987691')) {
function content_64d08eea24ed47_04987691 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '28584895364d08eea208511_01060309';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>"Deposit List",'pageurl'=>"deposit_list"), 0);
?>


<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:grid-cols-3 lg:gap-6">
    <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5 h-24">
        <div>
          <h2 class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Total Deposits
          </h2>
        </div>
        <div class="pt-2">
            <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total']->value);?>
</p>
        </div>
    </div>

    <?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5">

            <div class="flex justify-between items-center text-center">
                <p class="font-semibold text-slate-600"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 </p>
            </div>
            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

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
                <div class="flex justify-between items-center">
                    <p class="font-semibold text-slate-600">Plan </p>
                    <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['name']);?>
</p>
                </div>
                <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

                <div class="flex justify-between items-center">
                    <p class="font-semibold text-slate-600">Deposit Amount </p>
                    <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['min_deposit']);?>
 <?php if ($_smarty_tpl->tpl_vars['o']->value['max_deposit'] > 0) {?>- <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['max_deposit']);?>

                    <?php } else { ?>and
                    more<?php }?></p>
                </div>
                <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

                <div class="flex justify-between items-center">
                    <p class="font-semibold text-slate-600"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['period']);?>
 Profit (%) </p>
                    <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['percent']);?>
</p>    
                </div>
                <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

            <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>


            <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5">
                <?php if (!$_smarty_tpl->tpl_vars['p']->value['deposits']) {?>
                    <p class="font-bold text-slate-700">No deposits for this plan</p>
                <?php } else { ?>

                <h2 class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    Your  Deposits
                </h2>

                <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


                    <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['deposits'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
                        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5 mt-2">                       
                            <div class="flex justify-between items-center">
                                <p class="font-semibold text-slate-600">
                                    Date
                                </p>
                                <p>
                                    <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['date']);?>
</b><br><?php if ($_smarty_tpl->tpl_vars['p']->value['q_days'] == 0) {?>Working <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['duration']);?>
 days
                                    <?php } else { ?>Expire in
                                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['expire_in']);
}?>
                                </p>

                            </div>

                            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>


                            <div class="flex justify-between items-center">
                                <p class="font-semibold text-slate-600">
                                    Amount
                                </p>
                                <div class="flex justify-between items-center">
                                    <p class="font-semibold text-slate-600">
                                        Amount
                                    </p>

                                    <div class="flex justify-between items-center">
                                        <p class="font-bold mx-2">
                                            $200.00 
                                        </p>
                                        <img src="images/1009.gif" class="h-5 w-5">
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>



                    <?php if ($_smarty_tpl->tpl_vars['p']->value['total_deposit'] > 0 || $_smarty_tpl->tpl_vars['p']->value['today_profit'] > 0 || $_smarty_tpl->tpl_vars['p']->value['total_profit'] > 0) {?>
                        <div class="card border border-slate-150 px-4 py-4 shadow-none dark:border-navy-600 sm:px-5 mt-2"> 

                            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

                            <div class="flex justify-between items-center">
                                <p class="font-semibold text-slate-600">
                                    Deposited Total
                                </p>
                                <p>
                                    <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['total_deposit']);?>
</b>
                                </p>

                            </div>

                            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

                            <div class="flex justify-between items-center">
                                <p class="font-semibold text-slate-600">
                                    Profit Today
                                </p>
                                <p>
                                    <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['today_profit']);?>
</b>
                                </p>

                            </div>

                            <div class="my-4 h-px  bg-slate-200 dark:bg-navy-500"></div>

                            <div class="flex justify-between items-center">
                                <p class="font-semibold text-slate-600">
                                    Total Profit
                                </p>
                                <p>
                                    <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['total_profit']);?>
</b>
                                </p>

                            </div>
                        </div>
                    <?php }?>
                <?php }?>
            </div>

        </div>
    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>