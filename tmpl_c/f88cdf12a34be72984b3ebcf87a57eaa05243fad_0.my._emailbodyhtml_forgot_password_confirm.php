<?php /* Smarty version 3.1.27, created on 2023-08-01 06:39:19
         compiled from "my:_emailbodyhtml_forgot_password_confirm" */ ?>
<?php
/*%%SmartyHeaderCode:203988785164c8a8975b64a8_34664039%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f88cdf12a34be72984b3ebcf87a57eaa05243fad' => 
    array (
      0 => 'my:_emailbodyhtml_forgot_password_confirm',
      1 => 1690871959,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '203988785164c8a8975b64a8_34664039',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c8a8975b8a31_46768039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c8a8975b8a31_46768039')) {
function content_64c8a8975b8a31_46768039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203988785164c8a8975b64a8_34664039';
?>
      <tr style="height: 23px;">
        <td style="padding: 15px 24px; color: #8492a6; height: 23px; width: 425.02px;">
          <p>
            <strong>We have received a request to reset your password. To proceed with the password reset, please confirm your request by clicking on the link below or copying and pasting it into your browser:</strong>
          </p>
          <p>
            <strong>Password Reset Confirmation Link: #site_url#/?a=forgot_password&amp;action=confirm&amp;c=#confirm_string#</strong>
          </p>
          <p>
            <strong>By clicking the link above, your password reset request will be confirmed, and you will be directed to the next steps to reset your password securely.</strong>
          </p>
          <p>
            <strong>If you did not initiate this request, please disregard this email. Rest assured that your account is still safe and secure.</strong>
          </p>
          <p>
            <strong>If you encounter any issues or require further assistance, please don't hesitate to contact our support team at 
              <a href="mailto:support@polticventure.co">support@polticventure.co</a>.
            </strong>
          </p>
          <p>
            <strong>Thank you for helping us ensure the security of your account.</strong>
          </p>
        </td>
      </tr>
<?php }
}
?>