<style>
  body{
  background-color: #f2f6fb;
  }
</style>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="d-flex flex-column h-100">
          <h3><?php echo trans('04');?></h3>
          <img src="<?php echo $theme_url; ?>assets/img/sign-bg.png" class="img-fluid mt-auto" alt="">
        </div>
      </div>
      <div class="col-md-6 bg-white-shadow pt-25 ph-30 pb-40">
        <?php  if(!empty($customerloggedin)){ ?>
        <li><a href="<?php echo base_url()?>account/logout"><?php echo trans('03');?></a></li>
        <?php }else{ if (strpos($currenturl,'book') !== false) { }else{ ?>
        <form method="POST" action="" id="loginfrm" accept-charset="UTF-8" onsubmit="return false;">
          <div class="resultlogin"></div>
          <div id="login-overlay"></div>
          <div data-wow-duration="1s" data-wow-delay="1s" class="wow fadeIn">
            <div class="form-group">
              <label class="pure-material-textfield-outlined float-none">
              <input type="email"   placeholder=" " required="required" name="username">
              <span><?php echo trans('094');?></span>
              </label>
            </div>
            <div class="form-group">
              <label class="pure-material-textfield-outlined float-none">
              <input type="password"   placeholder=" " required="required" name="password">
              <span><?php echo trans('095');?></span>
              </label>
            </div>
            <?php if(!empty($url)){ ?>
            <input type="hidden" class="url" value="<?php echo base_url().'properties/reservation/'.$url;?>" />
            <?php }else{ ?>
            <input type="hidden" class="url" value="<?php echo base_url();?>account/" />
            <?php } ?>
            <div class="custom-control custom-checkbox login mb-10">
              <input class="custom-control-input" type="checkbox" name="remember" id="remember-me" value="1">
              <label for="remember-me" class="custom-control-label">
              <?php echo trans('0187');?></label>
            </div>
          </div>
          <button style="font-size: 16px;" type="submit" class="btn btn-primary btn-lg btn-block loginbtn"><?php echo trans('04');?></button>
          <br>
          <div class="wow zoomInDown animated row">
            <?php if($registerationAllowed == "1"){ ?>
            <div class="col-md-12"><a class="btn btn-success br25 btn-block form-group" href="<?php echo base_url();?>register"><span></span><?php echo trans('0237');?></a></div>
            <?php } ?>
            <div class="form-group"></div>
            <div class="col-md-12"><a class="btn btn-warning br25 btn-block"  data-toggle="modal" href="#ForgetPassword"><?php echo trans('0112');?></a></div>
          </div>
          <!-- End of Login Wrap  -->
        </form>
      </div>
    </div>
    <!-- End of Container  -->
    <?php if($fblogin){ ?>
    <div class="form-group">
      <a href="<?php echo $fbloginurl;?>" class="btn btn-facebook btn-block"><i class="fa fa-facebook-square" ></i> <?php echo trans('0266');?></a>
    </div>
    <?php } ?>
    <?php } }  ?>
    <!-- PHPTRAVELS forget password starting -->
    <div class="modal wow fadeIn animated" id="ForgetPassword" tabindex="" role="dialog" aria-labelledby="ForgetPassword" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-asterisk"></i> <?php echo trans('0112');?></h4>
            <div class="clear"></div>
          </div>
          <div class="modal-body">
            <form method="POST" action="" id="passresetfrm" accept-charset="UTF-8" onsubmit="return false;">
              <div class="resultreset"></div>
              <div class="input-group">
                <input type="text" placeholder="your@email.com" class="form-control" id="resetemail" name="email" required>
                <span class="input-group-btn">
                <button type="submit" class="btn btn-primary resetbtn" type="button"><?php echo trans('0114');?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- PHPTRAVELS forget password ending -->
<script>
  $(function(){
  var url = $(".url").val();
  // start login functionality
  $(".loginbtn").on('click',function(){
  $.post("<?php echo base_url();?>account/login",$("#loginfrm").serialize(), function(response){ if(response != 'true'){
  $(".resultlogin").html("<div class='alert alert-danger'>"+response+"</div>"); }else{
  $(".resultlogin").html("<div class='matrialprogress'><div class='indeterminate'></div></div> <div class='alert alert-success'><?php echo trans('0427');?></div>");
  window.location.replace(url); }}); });
  // end login functionality
  
  // start password reset functionality
  $(".resetbtn").on('click',function(){
  var resetemail = $("#resetemail").val();
  $(".resultreset").html("<div class='matrialprogress'><div class='indeterminate'></div></div>");
  $.post("<?php echo base_url();?>account/resetpass",$("#passresetfrm").serialize(), function(response){
  if($.trim(response) == '1'){
  $(".resultreset").html("<div class='alert alert-success'>New Password sent to "+resetemail+", <?php echo trans('0426');?></div>");
  }else{
  $(".resultreset").html("<div class='alert alert-danger'><?php echo trans('0425');?></div>");
  } }); });
  // end password reset functionality
  });
</script>
