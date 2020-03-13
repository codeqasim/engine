<div class="contentBody topMargin">

    <div class="pos_rel bg_gray1">
        <div class="container">
            <div class="modal-dialog login_width" role="document">
                <div class="modal-content" style="box-shadow: none;">
                    <div class="modal-body text-center">

                        <!--<h2 class="login-popup-title">Log in to continue</h2>-->

                        <?php if($this->session->flashdata('msg')){
  ?>
                            <div class="text-danger">
                                <?php echo $this->session->flashdata('msg')?>
                            </div>
                            <?php }?>
                                <form id="login-form" method="post" action="<?php echo base_url()?>login/login_action" role="form">
                                    <div class="form-group field-signupform-email required">

                                        <input type="email" id="login-email" class="form-control margin_top30 margin_bottom10" name="email" placeholder="Enter Email" required="">

                                        <p class="help-block help-block-error"></p>
                                    </div>
                                    <div class="form-group field-signupform-password required">

                                        <input type="password" id="login-password" class="form-control margin_bottom10" name="password" placeholder=" Enter Password" required="">

                                        <p class="help-block help-block-error"></p>
                                    </div>

                                    <div class="pull-left margin_bottom10">
                                        <input type="hidden" value="0" name="SignupForm[rememberMe]">
                                        <input id="login-rememberMe" type="checkbox" name="SignupForm[rememberMe]">
                                        <div class="airfcfx-search-checkbox-text">Remember me</div>
                                    </div>
                                    <input id="login-rememberMe" type="checkbox" name="SignupForm[rememberMe]">
                                    <p class="text-right text-danger margin_bottom10 show-paswrd">
                                        <a href="javascript:void(0);" onclick="javascript:Toggle();">Show password</a>
                                    </p>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn_email margin_top10 width100" name="login-button">Login</button>
                                    </div>
                                    <img id="loginloadimg" src="<?php echo base_url();?>asset/assets/images/load.gif" class="loading" style="margin-top:-1px;"> </form>
                                <p class="text-center text-danger margin_bottom10 forgottextalgn">
                                    <a href="" data-toggle="modal" data-target="#myModalpass">
              Forgot Password?              </a>
                                </p>
                                <p class="text-center">new to tecfare? <a href="<?php echo base_url();?>register" class="text-danger"><b>Sign up</b></a> </p>

                    </div>

                </div>
            </div>
        </div>
        <!-- container end -->
    </div>
    <!-- list_bg end -->

    <div class="modal fade" id="myModalpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog login_width" role="document">
            <div class="modal-content">
                <div class="modal-header no_border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-center">
                    Enter the email address associated with your account, and we'll email you a link to reset your password.
                    <form id="password-form" action="https://airfinchscript.com/forgotpassword" method="post" role="form">
                        <input type="hidden" name="_csrf" value="LlhUWWkzeW4XOQAKPng/C1k/ICEcQx0MexU7Mh18NgZvbzYpOGsVQw==">
                        <div class="form-group field-passwordresetrequestform-email">

                            <input type="text" id="passwordresetrequestform-email" class="form-control margin_top30" name="PasswordResetRequestForm[email]" placeholder="Email">

                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="login_or border_bottom margin_top10"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn_email margin_top10 width100" name="reset-button">Send Reset Link</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- footer end -->