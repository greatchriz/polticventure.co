<?php /* Smarty version 3.1.27, created on 2023-08-08 22:28:25
         compiled from "/home/dexfpheh/polticventure.co/tmpl/custom/our-team.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:73433322564d2c189168c84_29217609%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6c6d2605a1a34c4e02085a70bd70e3ebbf55d09' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/custom/our-team.tpl',
      1 => 1691533639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73433322564d2c189168c84_29217609',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2c189185717_58727413',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2c189185717_58727413')) {
function content_64d2c189185717_58727413 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '73433322564d2c189168c84_29217609';
echo $_smarty_tpl->getSubTemplate ("main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('current_page'=>"home"), 0);
?>

 <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img10">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="page-title">
                        Team
                        <span class="watermark">Team</span>
                    </h1>
                    <span class="sub-text">Discover The Talented Individuals Shaping Our Vision And Driving Our Success.</span>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        
      

        <!-- Team Section Start -->
        <div class="rs-team style4 bg17 pt-95 pb-100 md-pt-65 md-pb-70"> 
            <div class="container">
                <div class="sec-title text-center mb-50 md-mb-35">
                    <span class="sub-text small">Expert People</span>
                    <h2 class="title title3 pb-20">Our Team Members</h2>
                    <p class="margin-0">
                        orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                        data tempor incididunt ut labore et dolore magna.
                    </p>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="4" data-md-device-nav="false" data-md-device-dots="true" data-lg-device="3">
                    <?php echo $_smarty_tpl->getSubTemplate ("team-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php echo $_smarty_tpl->getSubTemplate ("team-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php echo $_smarty_tpl->getSubTemplate ("team-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php echo $_smarty_tpl->getSubTemplate ("team-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php echo $_smarty_tpl->getSubTemplate ("team-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php echo $_smarty_tpl->getSubTemplate ("team-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                </div>
            </div> 
        </div>
        <!-- Team Section End -->




<?php echo $_smarty_tpl->getSubTemplate ("main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>