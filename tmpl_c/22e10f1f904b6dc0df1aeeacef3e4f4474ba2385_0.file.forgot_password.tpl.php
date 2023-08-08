<?php /* Smarty version 3.1.27, created on 2023-08-02 13:35:14
         compiled from "/home/dexfpheh/polticventure.co/tmpl/forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:108963658764ca5b92e04cc7_94560685%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e10f1f904b6dc0df1aeeacef3e4f4474ba2385' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/forgot_password.tpl',
      1 => 1690499861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108963658764ca5b92e04cc7_94560685',
  'variables' => 
  array (
    'errors' => 0,
    'found_records' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64ca5b92e26414_46885709',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64ca5b92e26414_46885709')) {
function content_64ca5b92e26414_46885709 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '108963658764ca5b92e04cc7_94560685';
echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">

  <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
    <div class="text-center">
      <a href="?a=home">
        <img
          class="mx-auto w-36 lg:hidden"
          src="assets/images/logo-dark.png"
          alt="logo"
        />
      </a>
      <div class="mt-4">
        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
          Reset Your Password
        </h2>
        <p class="text-slate-400 dark:text-navy-300">
          Please input your Email to Continue
        </p>
      </div>
    </div>
    <div class="mt-16">

      
        <?php echo '<script'; ?>
 language=javascript>
          function checkform() {
            if (document.forgotform.email.value == '') {
              alert("Please type your username or email!");
              document.forgotform.email.focus();
              return false;
            }
            return true;
          }
        <?php echo '</script'; ?>
>
      

      <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>
        Invalid turing image<br><br>
      <?php }?>


      <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 2) {?>
        <div class="card rounded-sm shadow-sm px-4 py-4 sm:px-5">
          <p class="font-semibold">Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.</p>
        </div>
      <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 0) {?>
          <div class="card rounded-sm shadow-sm px-4 py-4 sm:px-5">
            <p class="font-semibold">No accounts found for provided info.</p>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['found_records']->value == 1) {?>
          <div class="card rounded-sm shadow-sm px-4 py-4 sm:px-5">
            <p class="font-semibold">Request was confirmed. Login and password was sent to your email address.</p>
          </div>
        <?php }?>

        <form
          method=post
          name=forgotform
          onsubmit="return checkform();"
        >
          <input
            type=hidden
            name=a
            value="forgot_password"
          >
          <input
            type=hidden
            name=action
            value="forgot_password"
          >

          <label class="relative flex">
            <input
              class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
              placeholder="Email"
              type="text"
              name='email'
              value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"
              autofocus="autofocus"
            />
            <span
              class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 transition-colors duration-200"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="1.5"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
            </span>
          </label>

          <button
            class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            type="submit"
          >
            Forgot
          </button>

        </form>
      <?php }?>

    </div>
  </div>
  

</main>
<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>