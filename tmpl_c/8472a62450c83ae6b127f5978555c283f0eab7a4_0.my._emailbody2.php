<?php /* Smarty version 3.1.27, created on 2023-08-01 07:00:48
         compiled from "my:_emailbody2" */ ?>
<?php
/*%%SmartyHeaderCode:40249678364c8ada0545b10_70770708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8472a62450c83ae6b127f5978555c283f0eab7a4' => 
    array (
      0 => 'my:_emailbody2',
      1 => 1690873248,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '40249678364c8ada0545b10_70770708',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c8ada05482c1_71774596',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c8ada05482c1_71774596')) {
function content_64c8ada05482c1_71774596 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '40249678364c8ada0545b10_70770708';
?>
      <tr style="height: 23px;">
        <td style="padding: 15px 24px; color: #8492a6; height: 23px; width: 425.02px;">
          <p>
            <strong>We are delighted to inform you that $#amount# has been successfully sent to your #currency# account #account#.</strong>
          </p>
          <p>
            <strong>Transaction Details:</strong>
          </p>
          <ul>
            <li>
              <strong>Amount: $#amount#</strong>
            </li>
            <li>
              <strong>Currency: #currency#</strong>
            </li>
            <li>
              <strong>Account: #account#</strong>
            </li>
            <li>
              <strong>Transaction Batch: #batch#</strong>
            </li>
          </ul>
          <p>
            <strong>You can now verify the transaction in your account statement or transaction history.</strong>
          </p>
          <p>
            <strong>If you have any questions or need further assistance, please feel free to reach out to our customer support team at 
              <a href="mailto:support@polticventure.co">support@polticventure.co</a>. We are here to help you with any inquiries you may have.
            </strong>
          </p>
          <p>
            <strong>Thank you for trusting us with your financial transactions. We look forward to serving you in the future.</strong>
          </p>
        </td>
      </tr>
<?php }
}
?>