<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">
  <div class="page-title-02 bg-primary text-center">
    <div class="container">
      <h2 class="float-none"><?php echo trans('0270');?></h2>
      <div class="clear"></div>
      <p><?php echo trans('0260');?></p>
    </div>
  </div>

  <div class="page-wrapper bg-light pv-80">
    <div class="container">
      <div class="row gap-40">
        <div class="col-12 col-lg-8">
          <div class="section-title">
            <p class="go-text-right"><?php echo trans('0260');?></p>
          </div>
          <form  method="post" action="">
            <div class="contact-successful-messages"></div>
            <div class="contact-inner">
              <?php if(isset($successmsg)){ ?>
              <div style="margin-bottom: 0px;" class="alert alert-success">
                <i class="fa fa-check-square-o"></i>
                <?php echo @$successmsg; ?>
              </div>
              <?php } if(!empty($validationerrors)){ ?>
              <div style="margin-bottom: 0px;" class="alert alert-danger">
                <i class="fa fa-times-circle"></i>
                <?php echo $validationerrors; ?>
              </div>
              <?php } ?>
              <div class="row gap-20 gap-lg-30 mb-20">
                <div class="col-6 o2">
                  <div class="form-group">
                  <label class="pure-material-textfield-outlined float-none">
                  <input id="form_name" type="text" name="contact_name" class="bg-white" placeholder=" " required="required" data-error="Name is required.">
                      <span><?php echo trans('0350');?></span>
                        </label>
                    <div class="help-block with-errors text-danger"></div>
                  </div>
                </div>
                <div class="col-6 o1">
                  <div class="form-group">
                  <label class="pure-material-textfield-outlined float-none">
                  <input id="form_email" type="email" name="contact_email" class="bg-white" placeholder=" " required="required" data-error="Valid email is required.">
                      <span><?php echo trans('094');?></span>
                        </label>
                    <div class="help-block with-errors text-danger"></div>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-12">
                  <div class="form-group">
                  <label class="pure-material-textfield-outlined float-none">
                  <input id="form_subject" type="text" name="contact_subject" class="bg-white" placeholder=" " required="required" data-error="Subject is required.">
                      <span><?php echo trans('0261');?></span>
                        </label>
                    <div class="help-block with-errors text-danger"></div>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-12">
                  <div class="form-group">
                  <label class="pure-material-textfield-outlined float-none">
                  <textarea id="form_message" name="contact_message" placeholder=" " class="bg-white"  rows="6" required="required" data-error="Please,leave us a message."></textarea>
                      <span><?php echo trans('0262');?></span>
                        </label>
                    <div class="help-block with-errors text-danger"></div>
                  </div>
                </div>
                </div>
                <hr>
                <div class="container">
                  <div class="g-recaptcha go-right" data-sitekey="6LdX3JoUAAAAAFCG5tm0MFJaCF3LKxUN4pVusJIF"></div>
                  <div class="clear"></div>
                </div>
                <hr>
                <div class="row">
                <div class="col-12">
                  <input type="submit" name="submit_contact"  value="<?php echo trans('086');?>" class="btn btn-primary btn-send btn-block" />
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 col-lg-4">
          <div class="section-title">
            <h3 class="float-none"><?php echo trans('0548');?></h3>
          </div>
          <strong><?php if(!empty($res2[0]->contact_address)){ ?>
          <?php echo trans('0255');?>:</strong><br/>
          <span class="dark">
          <?php echo $res2[0]->contact_address; ?>
          </span>
          <?php } ?>
          <br/><br>
          <?php if(!empty($res2[0]->contact_phone)){ ?>
          <?php echo trans('061');?><br/>
          <p class="opensans size30 lblue xslim"><?php echo $res2[0]->contact_phone;?></p>
          <?php } ?>
          <?php if(!empty($res2[0]->contact_email)){ ?>
          <?php echo trans('094');?><br/>
          <a href="mailto:<?php echo $res2[0]->contact_email;?>" class="green2"><?php echo $res2[0]->contact_email;?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Main Wrapper -->
<div class="clearfix"></div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--
  <?php if(!empty($res2[0]->contact_address)){ ?>
  <address>
  <?php echo $res2[0]->contact_address; ?>
  </address>
  <?php } ?>

  <script>
      $(document).ready(function(){
      $("address").each(function(){
      var embed ="<iframe width='100%' height='315' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='//maps.google.com/maps?&amp;q="+ encodeURIComponent( $(this).text() ) +"&amp;output=embed'></iframe>";
      $(this).html(embed);
      }); });
  </script>-->