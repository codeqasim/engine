<style>
  body{
  background-color: #f2f6fb;
  }
  section{
  padding-top:50px;
  padding-bottom:0
  }
</style>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="d-flex flex-column h-100">
          <h3><?php echo trans('0115');?></h3>
          <img src="<?php echo $theme_url; ?>assets/img/sign-bg.png" class="img-fluid mt-auto" alt="">
        </div>
      </div>
      <div class="col-md-6 bg-white-shadow pt-25 ph-30 pb-40">
        <div id="login">
          <?php  if(!empty($customerloggedin)){ ?>
          <li><a href="<?php echo base_url()?>account/logout"><?php echo trans('03');?></a></li>
          <?php }else{ if (strpos($currenturl,'book') !== false) { }else{ ?>
          <form action="" method="POST" id="headersignupform">
            <div class="clearfix"></div>
            <div class="resultsignup"></div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="pure-material-textfield-outlined float-none">
                  <input  type="text" placeholder=" " name="firstname" value="" required>
                  <span><?php echo trans('090');?></span>
                  </label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="pure-material-textfield-outlined float-none">
                  <input  type="text" placeholder=" " name="lastname"  value="" required>
                  <span><?php echo trans('091');?></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="pure-material-textfield-outlined float-none">
              <input  type="text" placeholder=" " name="phone"  value="" required>
              <span><?php echo trans('0173');?></span>
              </label>
            </div>
            <div class="form-group">
              <label class="pure-material-textfield-outlined float-none">
              <input  type="text" placeholder=" " name="email"  value="" required>
              <span><?php echo trans('094');?></span>
              </label>
            </div>
            <div class="form-group">
              <label class="pure-material-textfield-outlined float-none">
              <input  type="password" placeholder=" " name="password"  value="" required>
              <span><?php echo trans('095');?></span>
              </label>
            </div>
            <div class="form-group">
              <label class="pure-material-textfield-outlined float-none">
              <input  type="password" placeholder=" " name="confirmpassword"  value="" required>
              <span><?php echo trans('096');?></span>
              </label>
            </div>
            <div class="form-group">
              <button type="submit" class="signupbtn btn_full btn btn-success btn-block btn-lg"><i class="fa fa-check-square-o"></i> <?php echo trans('0115');?></button>
            </div>
            <?php if(!empty($url)){ ?>
            <input type="hidden" class="url" value="<?php echo base_url().'properties/reservation/?'.$url;?>" />
            <?php }else{ ?>
            <input type="hidden" class="url" value="<?php echo base_url();?>account/" />
            <?php } ?>
          </form>
          <?php } }  ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<script type="text/javascript">
  $(function(){
  var url = $(".url").val();
  // start sign up functionality
  
  $("#headersignupform").submit(function(e) {
  e.preventDefault();
  $.post("<?php echo base_url();?>account/signup",$("#headersignupform").serialize(), function(response){
  if($.trim(response) == 'true'){
  $(".resultsignup").html("<div class='matrialprogress'><div class='indeterminate'></div></div>");
  window.location.replace(url);
  }else{
  $(".resultsignup").html(response); } }); });
  // end signup functionality
  
  });
  
</script>
