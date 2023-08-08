<?php /* Smarty version 3.1.27, created on 2023-07-27 18:54:30
         compiled from "/home/dexfpheh/polticventure.co/tmpl/left.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117674086664c2bd66919440_97161813%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b4f69623ab3a8a1f2e60b1cb1571e416238b47' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/left.tpl',
      1 => 1580258160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117674086664c2bd66919440_97161813',
  'variables' => 
  array (
    'frm' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c2bd6692fc43_88769238',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c2bd6692fc43_88769238')) {
function content_64c2bd6692fc43_88769238 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '117674086664c2bd66919440_97161813';
?>
				   <!-- Image Table: Start -->

<?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] != 'login' && $_smarty_tpl->tpl_vars['frm']->value['a'] != 'login_tfa') {?>
<?php echo $_smarty_tpl->getSubTemplate ("login_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
				   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_stats_box']) {?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("stats_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
                                   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box']) {?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("info_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_add_funds.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_deposits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_withdrawals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_top_referrals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_top_investors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


					<!-- Stats Table: End -->
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_kitco_dollar_per_ounce_box'] == 1) {?>
					<!-- Image Table: Start -->
                    <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
                     <tr>
	                  <th class=title>Dollar price per ounce</th>
                     </tr><tr>
	                  <td align=center><img src="http://kitconet.com/charts/metals/gold/t24_au_en_usoz_2.gif" width=172 height=114></td>
					 </tr>
					</table>
					<br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_kitco_euro_per_ounce_box'] == 1) {?>
					<!-- Image Table: Start -->
                    <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
                     <tr>
	                  <th class=title>Euro price per ounce</th>
                     </tr><tr>
	                  <td align=center><img src="http://kitconet.com/charts/metals/gold/t24_au_en_euoz_2.gif" width=172 height=114></td>
					 </tr>
					</table>
					<br>
<?php }?>
					<!-- Image Table: End -->

<?php }
}
?>