<?php /* Smarty version 3.1.27, created on 2023-08-03 13:03:34
         compiled from "my:_emailbodyhtml_user_deposit_expired" */ ?>
<?php
/*%%SmartyHeaderCode:182130259264cba5a6e8dc54_89813447%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f707daca8a2f05d47fcb131b434f35cb8ed929c' => 
    array (
      0 => 'my:_emailbodyhtml_user_deposit_expired',
      1 => 1691067814,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '182130259264cba5a6e8dc54_89813447',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64cba5a6e90bf3_99874476',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64cba5a6e90bf3_99874476')) {
function content_64cba5a6e90bf3_99874476 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '182130259264cba5a6e8dc54_89813447';
?>
      <tr style="height: 23px;">
        <td style="padding: 15px 24px; color: #8492a6; height: 23px; width: 425.02px;">
          <p>
            <strong>We are pleased to inform you that your investment deposit made on #deposit_date# has now reached its maturity date. You can now withdraw your funds from your account.</strong>
          </p>
          <p>
            <strong>Investment Details:</strong>
          </p>
          <ul>
            <li>
              <strong>Deposit Amount: $#deposit_amount#</strong>
            </li>
            <li>
              <strong>Your Login: #username#</strong>
            </li>
          </ul>
          <p>
            <strong>To initiate the withdrawal process, please follow these steps:</strong>
          </p>
          <ol>
            <li>
              <strong>Log in to your account using the provided login credentials: #username#.</strong>
            </li>
            <li>
              <strong>Navigate to the "Withdraw" or "Account Withdrawal" section within your dashboard.</strong>
            </li>
            <li>
              <strong>Enter the withdrawal amount you wish to request.</strong>
            </li>
            <li>
              <strong>Follow the on-screen instructions to complete the withdrawal request.</strong>
            </li>
          </ol>
          <p>
            <strong>We value your investment and are delighted to offer this opportunity to access your funds. We aim to provide you with the best possible service and support throughout this process.</strong>
          </p>
          <p>
            <strong>Thank you for choosing to invest with us. We look forward to assisting you with your withdrawal and any future investment endeavors.</strong>
          </p>
        </td>
      </tr>
<?php }
}
?>