<div class="pos_rel bg_gray1">
    <div class="container">
        <div class="modal-dialog login_width" role="document">
            <div class="modal-content" style="box-shadow: none;">
                <div class="modal-body text-center">
                   <!-- <?php if($this->session->flashdata('msg')){ ?>
                    <div class="text-danger">
                        <?php echo $this->session->flashdata('msg')?>
                    </div>
                    <?php }?>-->
                    <form id="form-signup" action="<?php echo base_url()?>register/resgister_action" method="post" role="form">
                        <input type="text" id="firstname" class="form-control margin_top30 margin_bottom10" name="first_name" placeholder="First Name">
                        <input type="text" id="lastname" class="form-control margin_bottom10" name="last_name" maxlength="30" placeholder="Last Name">
                        <input type="text" id="email" class="form-control margin_bottom10" name="email" placeholder="Email Address">
                        <input type="password" id="password" class="form-control margin_bottom10" name="password" placeholder="Password">
                        <div class="margin_top10 text-left font_size12 margin_bottom10">
                            <p>By signing up, I agree to AirFinch's
                                <a href="user/help/terms.html" target="_blank" class="text-danger">Terms and Conditions.</a>
                            </p>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="signup_btn" class="btn btn_email margin_top10 width100" name="signup-button">Sign up</button>
                        </div>
                    </form>
                    <img id="signuploadimg" src="<?php echo base_url();?>asset/s/images/load.gif" class="loading" style="margin-top:-1px;">
                    <p class="text-center">Already a member <a href="<?php echo base_url()?>Login" class="text-danger"><b>Log in</b></a> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</div>
<!-- list_bg end -->