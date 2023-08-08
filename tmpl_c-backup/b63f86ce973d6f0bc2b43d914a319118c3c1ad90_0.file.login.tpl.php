<?php /* Smarty version 3.1.27, created on 2023-07-27 22:31:57
         compiled from "/home/dexfpheh/polticventure.co/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71970593064c2f05d8b04f8_90453507%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b63f86ce973d6f0bc2b43d914a319118c3c1ad90' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/login.tpl',
      1 => 1690496952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71970593064c2f05d8b04f8_90453507',
  'variables' => 
  array (
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c2f05d8d8a63_50741290',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c2f05d8d8a63_50741290')) {
function content_64c2f05d8d8a63_50741290 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '71970593064c2f05d8b04f8_90453507';
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
            Welcome Back
          </h2>
          <p class="text-slate-400 dark:text-navy-300">
            Please sign in to continue
          </p>
        </div>
      </div>
      <div class="mt-16">
        
        
          <?php echo '<script'; ?>
 language=javascript>
            function checkform() {
              if (document.mainform.username.value == '') {
                alert("Please type your username!");
                document.mainform.username.focus();
                return false;
              }
              if (document.mainform.password.value == '') {
                alert("Please type your password!");
                document.mainform.password.focus();
                return false;
              }
              return true;
            }
          <?php echo '</script'; ?>
>
        

        <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'invalid_login') {?>
          Your login or password or turing image code is wrong. Please check this information.
        <?php }?>
        <form
          method=post
          name=mainform
          onsubmit="return checkform()"
        >
          <input
            type=hidden
            name=a
            value='do_login'
          >
          <input
            type=hidden
            name=follow
            value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'
          >
          <input
            type=hidden
            name=follow_id
            value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'
          >
          
          <label class="relative flex">
            <input
              class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
              placeholder="Username"
              type="text"
              name=username
              value='<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
'
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

          <label class="relative mt-4 flex">
            <input
              class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
              placeholder="Password"
              type="password"
              name=password
              value=''
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
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                />
              </svg>
            </span>
          </label>
          <div class="mt-4 flex items-center justify-between space-x-2">
            <label class="inline-flex items-center space-x-2">
              <input
                class="form-checkbox is-outline h-5 w-5 rounded border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                type="checkbox"
              />
              <span class="line-clamp-1">Remember me</span>
            </label>
            <a
              href="<?php echo smarty_modifier_myescape(encurl("?a=forgot_password"));?>
"
              class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100"
              >Forgot Password?</a
            >
          </div>

          <button
              class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
              type="submit"
            >
            Login
            </button>

        </form>
        <div class="mt-4 text-center text-xs+">
          <p class="line-clamp-1">
            <span>Dont have Account?</span>

            <a
              class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
              href="<?php echo smarty_modifier_myescape(encurl("?a=signup"));?>
"
              >Create account</a
            >
          </p>
        </div>
      </div>
    </div>
    <div class="my-5 flex justify-center text-xs text-slate-400 dark:text-navy-300">
      <a href="#">Privacy Notice</a>
      <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
      <a href="#">Term of service</a>
    </div>

</main>
<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>