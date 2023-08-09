<?php /* Smarty version 3.1.27, created on 2023-08-08 23:27:01
         compiled from "/home/dexfpheh/polticventure.co/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48741312564d2cf45f2a0d8_66457302%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bbda10f5d98de9e883b190100785cd261602a45' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/signup.tpl',
      1 => 1690887585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48741312564d2cf45f2a0d8_66457302',
  'variables' => 
  array (
    'deny_registration' => 0,
    'settings' => 0,
    'referer' => 0,
    'errors' => 0,
    'account_errors' => 0,
    'err' => 0,
    'frm' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64d2cf460e8be7_52746856',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64d2cf460e8be7_52746856')) {
function content_64d2cf460e8be7_52746856 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '48741312564d2cf45f2a0d8_66457302';
echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
  <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
    <div class="text-center">
      <a href="?a=home">
        <img
          class="mx-auto lg:hidden"
          src="assets/images/logo-dark.png"
          alt="logo"
        />
      </a>
      <div class="mt-4">
        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
          Welcome To Polticventure
        </h2>
        <p class="text-slate-400 dark:text-navy-300">
          Please sign up to continue
        </p>
      </div>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
      We are closed for new registrations now.
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
      You do not have a upline. Our system require a upline for each user.
    <?php } else { ?>
      

        <?php echo '<script'; ?>
 language=javascript>
          function checkform() {
            if (document.regform.fullname.value == '') {
              alert("Please enter your full name!");
              document.regform.fullname.focus();
              return false;
            }
          
          <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
            
              if (document.regform.address.value == '') {
                alert("Please enter your address!");
                document.regform.address.focus();
                return false;
              }
              if (document.regform.city.value == '') {
                alert("Please enter your city!");
                document.regform.city.focus();
                return false;
              }
              if (document.regform.state.value == '') {
                alert("Please enter your state!");
                document.regform.state.focus();
                return false;
              }
              if (document.regform.zip.value == '') {
                alert("Please enter your ZIP!");
                document.regform.zip.focus();
                return false;
              }
              if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
                alert("Please choose your country!");
                document.regform.country.focus();
                return false;
              }
            
          <?php }?>
          
            if (document.regform.username.value == '') {
              alert("Please enter your username!");
              document.regform.username.focus();
              return false;
            }
            if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
              alert("For username you should use English letters and digits only!");
              document.regform.username.focus();
              return false;
            }
            if (document.regform.password.value == '') {
              alert("Please enter your password!");
              document.regform.password.focus();
              return false;
            }
            if (document.regform.password.value != document.regform.password2.value) {
              alert("Please check your password!");
              document.regform.password2.focus();
              return false;
            }
          
          <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
            
              if (document.regform.transaction_code.value == '') {
                alert("Please enter your transaction code!");
                document.regform.transaction_code.focus();
                return false;
              }
              if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
                alert("Please check your transaction code!");
                document.regform.transaction_code2.focus();
                return false;
              }
            
          <?php }?>
          
            if (document.regform.email.value == '') {
              alert("Please enter your e-mail address!");
              document.regform.email.focus();
              return false;
            }
            if (document.regform.email.value != document.regform.email1.value) {
              alert("Please retupe your e-mail!");
              document.regform.email.focus();
              return false;
            }

            for (i in document.regform.elements) {
              f = document.regform.elements[i];
              if (f.name && f.name.match(/^pay_account/)) {
                if (f.value == '') continue;
                var notice = f.getAttribute('data-validate-notice');
                var invalid = 0;
                if (f.getAttribute('data-validate') == 'regexp') {
                  var re = new RegExp(f.getAttribute('data-validate-regexp'));
                  if (!f.value.match(re)) {
                    invalid = 1;
                  }
                } else if (f.getAttribute('data-validate') == 'email') {
                  var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                  if (!f.value.match(re)) {
                    invalid = 1;
                  }
                }
                if (invalid) {
                  alert('Invalid account format. Expected ' + notice);
                  f.focus();
                  return false;
                }
              }
            }

            if (document.regform.agree.checked == false) {
              alert("You have to agree with the Terms and Conditions!");
              return false;
            }

            return true;
          }

          function IsNumeric(sText) {
            var ValidChars = "0123456789";
            var IsNumber = true;
            var Char;
            if (sText == '') return false;
            for (i = 0; i < sText.length && IsNumber == true; i++) {
              Char = sText.charAt(i);
              if (ValidChars.indexOf(Char) == -1) {
                IsNumber = false;
              }
            }
            return IsNumber;
          }
        <?php echo '</script'; ?>
>
      

      <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
        <ul style="color:red">
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'full_name') {?>
              <li>Please enter your full name!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
              <li>Please enter your address!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
              <li>Please enter your city!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
              <li>Please enter your state!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
              <li>Please enter your zip!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
              <li>Please choose your country!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
              <li>Please enter valid username! It should contains English letters and digits only.
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username_exists') {?>
              <li>Sorry, such user already exists! Please try another username.
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email_exists') {?>
              <li>Sorry, such email already exists! Please try another email.
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
              <li>Please enter a password!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
              <li>Please check your password!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
              <li>The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
              <li>Please enter the Transaction Code!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?>
              <li>Please check your Transaction Code!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
              <li>The Transaction Code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>

                characters!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>
              <li>The Transaction Code should differ from the Password!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
              <li>Please enter your e-mail!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email2') {?>
              <li>Please check your email!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'agree') {?>
              <li>You have to agree with the Terms and Conditions!
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
              <li>Enter the verification code as it is shown in the corresponding box.
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'no_upline') {?>
              <li>The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random one or
                found a referral link in the net.<?php }?>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'ip_exists_in_database') {?>
              <li>Your IP already exists in our database. Sorry, but registration impossible.
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_account_format') {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['account_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
                <li><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>

                <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
              <?php }?>

              <br>
            <?php endfor; endif; ?>
        </ul>
      <?php }?>
      <form
        method=post
        onsubmit="return checkform()"
        name="regform"
      >
        <input
          type=hidden
          name=a
          value="signup"
        >
        <input
          type=hidden
          name=action
          value="signup"
        >

        <div class="mt-4 space-y-4">

          <!--Full Name-->
          <?php echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Full Name",'name'=>"fullname",'value'=>$_smarty_tpl->tpl_vars['frm']->value['fullname'],'icon'=>'images/svg/form/name.svg'), 0);
?>



          <!--Username-->
          <?php echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Username",'name'=>"username",'value'=>$_smarty_tpl->tpl_vars['frm']->value['username'],'icon'=>'images/svg/form/name.svg'), 0);
?>


          <!--Define Password-->
          <?php echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Password",'name'=>"password",'value'=>$_smarty_tpl->tpl_vars['frm']->value['password'],'icon'=>'images/svg/form/password.svg'), 0);
?>


          <!--Retype Password-->
          <?php echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Confirm Password",'name'=>"password2",'value'=>$_smarty_tpl->tpl_vars['frm']->value['password2'],'icon'=>'images/svg/form/password.svg'), 0);
?>


          <!--Email-->
          <?php echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Email",'name'=>"email",'value'=>$_smarty_tpl->tpl_vars['frm']->value['email'],'icon'=>'images/svg/form/email.svg'), 0);
?>


          <!--Confirm Email-->
          <?php echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Confirm Email",'name'=>"email1",'value'=>$_smarty_tpl->tpl_vars['frm']->value['email1'],'icon'=>'images/svg/form/email.svg'), 0);
?>



          <!--Secret Question-->
          <?php echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Secret Question",'name'=>"sq",'value'=>$_smarty_tpl->tpl_vars['frm']->value['sq'],'icon'=>'images/svg/form/question.svg'), 0);
?>



          <!--Secret Answer-->
          <?php echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Secret Answer",'name'=>"sa",'value'=>$_smarty_tpl->tpl_vars['frm']->value['sa'],'icon'=>'images/svg/form/question.svg'), 0);
?>


          <?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
            <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
              <?php ob_start();
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("textinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>"Your ".((string)$_smarty_tpl->tpl_vars['p']->value['name'])." ".((string)$_smarty_tpl->tpl_vars['ps']->value['name']),'name'=>"pay_account[".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."][".$_tmp1."]",'value'=>$_smarty_tpl->tpl_vars['ps']->value['value'],'icon'=>'images/svg/form/wallet.svg'), 0);
?>

            <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
          <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

          <div class="mt-4 flex items-center space-x-2">
            <input
              class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
              type="checkbox"
              name=agree
              value=1
              <?php if ($_smarty_tpl->tpl_vars['frm']->value['agree']) {?>checked<?php }?>
            />
            <p class="line-clamp-1">
              I agree with
              <a
                href="<?php echo smarty_modifier_myescape(encurl("?a=rules"));?>
"
                class="text-slate-400 hover:underline dark:text-navy-300"
              >
                privacy policy
              </a>
            </p>
          </div>


          


          <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program']) {?>
            <?php if ($_smarty_tpl->tpl_vars['referer']->value) {?>
              <?php ob_start();
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value['username'], ENT_QUOTES, 'UTF-8', true));
$_tmp2=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("disabled_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placeholder'=>$_tmp2,'icon'=>'images/svg/form/name.svg'), 0);
?>

            <?php } else { ?>
              <?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline']) {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
                  <div>
                    <div colspan=2>
                      You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random
                      one or find a referral link on the net.
                      <input
                        type=checkbox
                        name="rand_ref"
                        value=1
                      >
                    </div>
                  </div>
                <?php } else { ?>
                  <div>
                    <div colspan=2>
                      You do not have an upline. Our system requires an upline for each user.
                    </div>
                  </div>
                <?php }?>
              <?php }?>
            <?php }?>
          <?php }?>

          <button
            type="submit"
            class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
          >
            Register
          </button>

        </div>


      </form>
    <?php }?>

    <div class="mt-4 text-center text-xs+">
      <p class="line-clamp-1">
        <span>Already have an account? </span>
        <a
          class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
          href="<?php echo smarty_modifier_myescape(encurl("?a=login"));?>
"
        >Sign In</a>
      </p>
    </div>
  </div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>