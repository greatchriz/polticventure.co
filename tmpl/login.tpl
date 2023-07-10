{include file="main_header.tpl" current_page="home"}

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img8">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Have questions - contact us
                <span class="watermark">Contact</span>
            </h1>
            <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official
                modeserunt mollit anim id est laborum 20 years experience.</span>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

  <!-- Contact Section Start-->
    <div class="rs-contact main-home office-modify1 pt-100 pb-100 md-pt-70 md-pb-70">
      <div class="container">
          <div class="row margin-0">
              <div class="col-lg-6 padding-0 office-buliding"></div>
              <div class="col-lg-6 padding-0">
                  <div class="contact-section contact-style2">
                      <div class="sec-title mb-60">
                          <h2 class="title">
                              Login
                          </h2>
                      </div>
                      <div class="contact-wrap">

                        <div id="form-messages"></div>

                            {literal}
                            <script language=javascript>
                            function checkform() {
                              if (document.mainform.username.value=='') {
                                alert("Please type your username!");
                                document.mainform.username.focus();
                                return false;
                              }
                              if (document.mainform.password.value=='') {
                                alert("Please type your password!");
                                document.mainform.password.focus();
                                return false;
                              }
                              return true;
                            }
                            </script>
                            {/literal}

                            {if $frm.say eq 'invalid_login'}
                            <h3>Login error:</h3><br><br>

                            Your login or password or turing image code is wrong. Please check this information.
                            {/if}
                            <br>
                            <form method=post name=mainform onsubmit="return checkform()">
                            <input type=hidden name=a value='do_login'>
                            <input type=hidden name=follow value='{$frm.follow}'>
                            <input type=hidden name=follow_id value='{$frm.follow_id}'>
                            <table cellspacing=0 cellpadding=2 border=0>
                            <tr>
                            <td>Username:</td>
                            <td><input type=text name=username value='{$frm.username|escape:"html"}' class=inpts size=30 autofocus="autofocus"></td>
                            </tr><tr>
                            <td>Password:</td>
                            <td><input type=password name=password value='' class=inpts size=30></td>
                            </tr>
                            {include file="captcha.tpl" action="login"}
                            <tr>
                            <td>&nbsp;</td>
                            <td><input type=submit value="Login" class=sbmt></td>
                            </tr></table>
                            </form>
                            <br><br>
                            or <a href="{"?a=forgot_password"|encurl}">remember your login information</a>.


                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
{include file="main_footer.tpl"}