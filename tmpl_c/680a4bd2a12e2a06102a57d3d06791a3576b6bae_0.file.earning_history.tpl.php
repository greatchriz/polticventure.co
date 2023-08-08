<?php /* Smarty version 3.1.27, created on 2023-08-07 06:28:03
         compiled from "/home/dexfpheh/polticventure.co/tmpl/earning_history.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:137597800364d08ef3489594_16376213%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680a4bd2a12e2a06102a57d3d06791a3576b6bae' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/earning_history.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137597800364d08ef3489594_16376213',
  'variables' => 
  array (
    'qtrans' => 0,
    'trans' => 0,
    'currency_sign' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d08ef34b4497_50649409',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d08ef34b4497_50649409')) {
function content_64d08ef34b4497_50649409 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '137597800364d08ef3489594_16376213';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>"History"), 0);
?>


  <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
    <!-- Users Table -->
    <div>
      <div class="flex items-center justify-between">
        <h2
          class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
        >
          Deposit History
        </h2>
       </div>
      <div class="card mt-3">
        <div
          class="is-scrollbar-hidden min-w-full overflow-x-auto"
          x-data="pages.tables.initExample1"
        >
          <table class="is-hoverable w-full text-left">
            <thead>
              <tr>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                >
                  Type
                </th>
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                >
                  Amount
                </th>
               
                <th
                  class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                >
                  Date
                </th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['name'] = 'trans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total']);
?>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  
                  <td
                    class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5"
                  >
                  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['transtype']);?>

                  </td>


                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount']);?>

                    <div class="avatar flex h-10 w-10">
                      <img
                        class="mask is-squircle"
                        src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['ec']);?>
.gif"
                        alt="avatar"
                      />
                    </div>
                  </td>

                  <td
                    class="whitespace-nowrap px-4 py-3 sm:px-5"
                  >
                  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['d']);?>

                  </td>

       
                </tr>
              <?php endfor; endif; ?>
            <?php } else { ?>
              <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  
                  <td
                    class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5"
                  >
                  No transactions found
                  </td>
              </tr>
            <?php }?>

            </tbody>
          </table>
        </div>

        <div
          class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
        >
          <div class="flex items-center space-x-2 text-xs+">

            <?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['paginator']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['paginator']->value['cur'],'url'=>"javascript:go('%s')"),$_smarty_tpl);?>

          </div>
        </div>

        
      </div>
    </div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>