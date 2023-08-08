<?php /* Smarty version 3.1.27, created on 2023-08-05 05:16:46
         compiled from "my:_emailbodyhtml_referral_commision_notification" */ ?>
<?php
/*%%SmartyHeaderCode:79225539464cddb3e863497_01781915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c2f8fd9536f2e7ccd540a6c6bcbf27108218e1' => 
    array (
      0 => 'my:_emailbodyhtml_referral_commision_notification',
      1 => 1691212606,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '79225539464cddb3e863497_01781915',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64cddb3e868ef4_79378622',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64cddb3e868ef4_79378622')) {
function content_64cddb3e868ef4_79378622 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '79225539464cddb3e863497_01781915';
?>
<!DOCTYPE html>
<html
    lang="en"
    dir="ltr"
>
    <head>
        <meta charset="UTF-8" />
        <title>Dexfintech - Tailwind CSS Saas & Software Landing Page Template</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
            content="Tailwind CSS Saas & Software Landing Page Template"
            name="description"
        />
        <meta
            name="author"
            content="Shreethemes"
        />
        <meta
            name="website"
            content="https://Dexfintech.org/"
        />
        <meta
            name="email"
            content="support@dexfintech,org"
        />
        <meta
            name="version"
            content="1.0.0"
        />
        <meta
            http-equiv="X-UA-Compatible"
            content="IE=edge"
        />

        <!-- favicon -->
 
        <!-- Font -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&amp;display=swap"
            rel="stylesheet"
        >
    </head>

    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->

        <!-- Hero Start -->
        <div style="margin-top: 50px;">
            <table
                cellpadding="0"
                cellspacing="0"
                style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);"
            >
                <thead 
                        style="padding-top: 2opx">
                    <tr>
                        <th scope="col"><img
                                src="https://dexfintech.org/images/logo.png"
                                alt=""
                            ></th>
                    </tr>
                </thead>

                <txbody>
                    <tr>
                        <td style="padding: 48px 24px 0; color: #161c2d; font-size: 18px; font-weight: 600;">
                            Hello, #username#
                        </td>
                    </tr>

                    <!-- writeup -->
                    <tr>
                        <td style="padding: 15px 24px 15px; color: #8492a6;">
You have received a referral comission of <b> $#amount# #currency#</b> <br> from the <b>#ref_name# (#ref_username#)</b> deposit.
                        </td>
                    </tr>
                    <br>

                    <!-- link -->
                    <!-- <tr>
                        <td style="padding: 15px 24px 0; color: #8492a6;">
                            This link will be active for 30 min from the time this email was sent.
                        </td>
                    </tr> -->

                    <tr>
                        <td style="padding: 15px 24px 15px; color: #8492a6;">
                            Dexfintech <br> Support Team
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                            © 2023 #site_url#.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Hero End -->
    </body>


</html>
<?php }
}
?>