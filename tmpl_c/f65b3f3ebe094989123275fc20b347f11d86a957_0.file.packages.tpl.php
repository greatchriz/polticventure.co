<?php /* Smarty version 3.1.27, created on 2023-08-07 13:34:50
         compiled from "/home/dexfpheh/polticventure.co/tmpl/custom/packages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:92347607764d0f2fa9997c5_19299590%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f65b3f3ebe094989123275fc20b347f11d86a957' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/custom/packages.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92347607764d0f2fa9997c5_19299590',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d0f2fa9af739_04084134',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d0f2fa9af739_04084134')) {
function content_64d0f2fa9af739_04084134 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '92347607764d0f2fa9997c5_19299590';
echo $_smarty_tpl->getSubTemplate ("main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Packages
                <span class="watermark">Pricing</span>
            </h1>
            <span class="sub-text">With decades of trading experience across a variety of assets we know what it takes
                to become successful in the trading markets.</span>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Pricing section start -->
<div class="rs-pricing style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title text-center mb-55 md-mb-30">

        </div>
        <div class="row">
            <?php echo $_smarty_tpl->getSubTemplate ("index.plans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            
        </div>
    </div>
</div>
<!-- Pricing section end -->


<?php echo $_smarty_tpl->getSubTemplate ("main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>