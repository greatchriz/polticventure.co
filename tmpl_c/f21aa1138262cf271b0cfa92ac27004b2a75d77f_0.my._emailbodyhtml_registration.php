<?php /* Smarty version 3.1.27, created on 2023-08-01 03:11:45
         compiled from "my:_emailbodyhtml_registration" */ ?>
<?php
/*%%SmartyHeaderCode:188594351864c877f13bf844_96212662%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21aa1138262cf271b0cfa92ac27004b2a75d77f' => 
    array (
      0 => 'my:_emailbodyhtml_registration',
      1 => 1690859505,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '188594351864c877f13bf844_96212662',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c877f13c2fd1_11855579',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c877f13c2fd1_11855579')) {
function content_64c877f13c2fd1_11855579 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '188594351864c877f13bf844_96212662';
?>
<div style="margin-top: 50px;">
  <table style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0px auto; border-radius: 6px; overflow: hidden; background: #ebd8d8; box-shadow: rgba(60, 72, 88, 0.15) 0px 0px 3px; height: 92px; width: 473px;" cellspacing="0" cellpadding="0">
    <tbody>
      <tr style="height: 21px;">
        <td style="padding: 48px 24px 0px; color: #161c2d; font-size: 18px; font-weight: 600; height: 21px; width: 425.02px;">
          <img style="color: #8492a6; font-size: 14px; font-weight: 400; text-align: center; display: block; margin-left: auto; margin-right: auto;" src="https://polticventure.co/assets/images/logo-dark.png" alt=""> 
          <br>
          <br>Hello, #name#
        </td>
      </tr>
      <tr style="height: 23px;">
        <td style="padding: 15px 24px; color: #8492a6; height: 23px; width: 425.02px;">
          <p>Congratulations on completing your registration! Welcome to Polticventure.co.</p>
          <p>Here are your login credentials:</p>
          <ul>
            <li>Username: #username#</li>
            <li>Password: #password#</li>
          </ul>
          <p>With these details, you now have full access to our platform, where you can explore member-only resources, join discussions, and stay updated on upcoming events.</p>
          <p>Feel free to reach out if you need any assistance. We're excited to have you with us!</p>
        </td>
      </tr>
      <tr style="height: 32px;">
        <td style="padding: 15px 24px; color: #8492a6; height: 32px; width: 425.02px;">Polticventure
          <br>
          <a href="mailto:support@polticventure.co">Support Team</a>
        </td>
      </tr>
      <tr style="height: 16px;">
        <td style="padding: 16px 8px; color: #8492a6; background: #ebd8d8; text-align: center; height: 16px; width: 457.012px;">© 2023 Polticventure.</td>
      </tr>
    </tbody>
  </table>
</div>
<!-- Hero End --> <!-- Mirrored from shreethemes.in/techwind/layouts/email-confirmation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2023 16:51:59 GMT -->
<?php }
}
?>