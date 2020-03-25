<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo PT_GLOBAL_IMAGES_FOLDER.'favicon.png';?> ">
    <title><?php echo $pagetitle;?></title>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/fa.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/include/login/ladda-themeless.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/include/login/spin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/include/login/ladda.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
  </head>
  <style>
label {width:100%}
input { font-weight: 400; }

.input-outlined {
--pure-material-safari-helper1: #3056d3;
position: relative;
display: inline-block;
padding-top: 6px;
font-family: var(--pure-material-font, "Roboto", "Segoe UI", BlinkMacSystemFont, system-ui, -apple-system);
font-size: 16px;
line-height: 1.5;
overflow: hidden;
}

/* Input, Textarea */
.input-outlined > input,
.input-outlined > textarea {
    box-sizing: border-box;
    margin: 0;
    border: solid 1px; /* Safari */
    border-color: #000000;
    border-top-color: transparent;
    border-radius: 4px;
    padding: 15px 13px 15px;
    width: 100%;
    height: inherit;
    color: #000000;
    background-color: transparent;
    box-shadow: none; /* Firefox */
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    caret-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
    transition: border 0.2s, box-shadow 0.2s;
}

/* Span */
.input-outlined > input + span,
.input-outlined > textarea + span {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
    width: 100%;
    max-height: 100%;
    color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
    font-size: 75%;
    line-height: 15px;
    cursor: text;
    transition: color 0.2s, font-size 0.2s, line-height 0.2s;
}

/* Corners */
.input-outlined > input + span::before,
.input-outlined > input + span::after,
.input-outlined > textarea + span::before,
.input-outlined > textarea + span::after {
    content: "";
    display: block;
    box-sizing: border-box;
    margin-top: 6px;
    border-top: solid 1px;
    border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
    min-width: 10px;
    height: 8px;
    pointer-events: none;
    box-shadow: inset 0 1px transparent;
    transition: border-color 0.2s, box-shadow 0.2s;
}

.input-outlined > input + span::before,
.input-outlined > textarea + span::before {
    margin-right: 4px;
    border-left: solid 1px transparent;
    border-radius: 4px 0;
}

.input-outlined > input + span::after,
.input-outlined > textarea + span::after {
    flex-grow: 1;
    margin-left: 4px;
    border-right: solid 1px transparent;
    border-radius: 0 4px;
}

/* Hover */
.input-outlined:hover > input,
.input-outlined:hover > textarea {
    border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
    border-top-color: transparent;
}

.input-outlined:hover > input + span::before,
.input-outlined:hover > textarea + span::before,
.input-outlined:hover > input + span::after,
.input-outlined:hover > textarea + span::after {
    border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
}

.input-outlined:hover > input:not(:focus):placeholder-shown,
.input-outlined:hover > textarea:not(:focus):placeholder-shown {
    border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
}

/* Placeholder-shown */
.input-outlined > input:not(:focus):placeholder-shown,
.input-outlined > textarea:not(:focus):placeholder-shown {
    border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
}

.input-outlined > input:not(:focus):placeholder-shown + span,
.input-outlined > textarea:not(:focus):placeholder-shown + span {
    font-size: inherit;
    line-height: 68px;
}

.input-outlined > input:not(:focus):placeholder-shown + span::before,
.input-outlined > textarea:not(:focus):placeholder-shown + span::before,
.input-outlined > input:not(:focus):placeholder-shown + span::after,
.input-outlined > textarea:not(:focus):placeholder-shown + span::after {
    border-top-color: transparent;
}

/* Focus */
.input-outlined > input:focus,
.input-outlined > textarea:focus {
    border-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
    border-top-color: transparent;
    box-shadow: inset 1px 0 var(--pure-material-safari-helper1), inset -1px 0 var(--pure-material-safari-helper1), inset 0 -1px var(--pure-material-safari-helper1);
    outline: none;
}

.input-outlined > input:focus + span,
.input-outlined > textarea:focus + span {
    color: #3056d3;
}

.input-outlined > input:focus + span::before,
.input-outlined > input:focus + span::after,
.input-outlined > textarea:focus + span::before,
.input-outlined > textarea:focus + span::after {
    border-top-color: var(--pure-material-safari-helper1) !important;
    box-shadow: inset 0 1px var(--pure-material-safari-helper1);
}

/* Disabled */
.input-outlined > input:disabled,
.input-outlined > input:disabled + span,
.input-outlined > textarea:disabled,
.input-outlined > textarea:disabled + span {
    border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38) !important;
    border-top-color: transparent !important;
    color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38);
    pointer-events: none;
}

.input-outlined > input:disabled + span::before,
.input-outlined > input:disabled + span::after,
.input-outlined > textarea:disabled + span::before,
.input-outlined > textarea:disabled + span::after {
    border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38) !important;
}

.input-outlined > input:disabled:placeholder-shown,
.input-outlined > input:disabled:placeholder-shown + span,
.input-outlined > textarea:disabled:placeholder-shown,
.input-outlined > textarea:disabled:placeholder-shown + span {
    border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38) !important;
}

.input-outlined > input:disabled:placeholder-shown + span::before,
.input-outlined > input:disabled:placeholder-shown + span::after,
.input-outlined > textarea:disabled:placeholder-shown + span::before,
.input-outlined > textarea:disabled:placeholder-shown + span::after {
    border-top-color: transparent !important;
}

/* Faster transition in Safari for less noticable fractional font-size issue */
@media not all and (min-resolution:.001dpcm) {
    @supports (-webkit-appearance:none) {
        .input-outlined > input,
        .input-outlined > input + span,
        .input-outlined > textarea,
        .input-outlined > textarea + span,
        .input-outlined > input + span::before,
        .input-outlined > input + span::after,
        .input-outlined > textarea + span::before,
        .input-outlined > textarea + span::after {
            transition-duration: 0.1s;
        }
    }
}


  .alert-inverse {position: absolute; margin-top: -270px; margin-left: -30px; width: 350px; height: 300px; text-align: center; padding-top: 124px; text-transform: uppercase; font-weight: bold; font-size: 16px; letter-spacing: 2px; background-color: rgba(19, 19, 19, 0.89); color: #ffffff; }
  .form-signin .form-control { height: 50px; border-radius: 3px;position: relative; -webkit-box-sizing: border-box; box-sizing: border-box; margin-bottom: 10px!important; border: 0px; border: 1px solid #9d9d9d; font-size: 16px; }
  .form-signin .btn-primary { height: 50px; border-radius: 3px !important;font-size: 14px; letter-spacing: 4px; }
  .btn-primary { background: #0031bc }
   body { background:#ffffff !important }
    .matrialprogress{position:relative;height:10px;display:block;width:100%;background-color:#bfc1ce;border-radius:2px;background-clip:padding-box;margin:.5rem 0 1rem 0;overflow:hidden}
    .matrialprogress .determinate{position:absolute;background-color:inherit;top:0;bottom:0;background-color:#3f51b5;transition:width .3s linear}
    .matrialprogress .indeterminate{background-color:#3f51b5}
    .matrialprogress .indeterminate:before{content:'';position:absolute;background-color:inherit;top:0;left:0;bottom:0;will-change:left,right;-webkit-animation:indeterminate 2.1s cubic-bezier(0.65,0.815,0.735,0.395) infinite;animation:indeterminate 2.1s cubic-bezier(0.65,0.815,0.735,0.395) infinite}
    .matrialprogress .indeterminate:after{content:'';position:absolute;background-color:inherit;top:0;left:0;bottom:0;will-change:left,right;-webkit-animation:indeterminate-short 2.1s cubic-bezier(0.165,0.84,0.44,1) infinite;animation:indeterminate-short 2.1s cubic-bezier(0.165,0.84,0.44,1) infinite;-webkit-animation-delay:1.15s;animation-delay:1.15s}
    @-webkit-keyframes indeterminate{0%{left:-35%;right:100%}
    60%{left:100%;right:-90%}
    100%{left:100%;right:-90%}
    }@keyframes indeterminate{0%{left:-35%;right:100%}
    60%{left:100%;right:-90%}
    100%{left:100%;right:-90%}
    }@-webkit-keyframes indeterminate-short{0%{left:-200%;right:100%}
    60%{left:107%;right:-8%}
    100%{left:107%;right:-8%}
    }@keyframes indeterminate-short{0%{left:-200%;right:100%}
    60%{left:107%;right:-8%}
    100%{left:107%;right:-8%}
    }
body {
    background: #000000
}
body:after {
    content:'';
    position: fixed;
    height: 50%;
    width: 100%;
    top: 50%;
    bottom: 50%;
    border-top: 2px solid #000daa;
    background-image: radial-gradient(circle farthest-side at center bottom,#3056d3,#02269e 125%);
    z-index:1;
}
  </style>

  <script>
    $(function() {
      Login.init()
    });
  </script>
  <script type="text/javascript">
    $(function () {
    $(".form-signin").on('submit',function(){
    $(".resultlogin").html("<div class='alert alert-inverse loading wow fadeOut animated'>Hold On...</div>");
    $.post("<?php echo base_url().$this->uri->segment(1);?>/login",$(".form-signin").serialize(), function(response){
    var resp = $.parseJSON(response);
    console.log(resp);
    if(!resp.status){
    $(".resultlogin").html("<div class='alert alert-danger loading wow fadeIn animated'>"+resp.msg+"</div>");
    }else{
    $(".resultlogin").html("<div class='alert alert-success login wow fadeIn animated'>Redirecting Please Wait...</div>");
    window.location.replace(resp.url);
    }
    }); });
    $(".resetbtn").on('click',function(){
    var resetemail = $("#resetemail").val();
    if(resetemail == ""){
    alert("Please Enter Email Address");
    }else{
     $(".resultreset").html("<div class='matrialprogress'><div class='indeterminate'></div></div>");
     $.post("<?php echo base_url().$this->uri->segment(1);?>/resetpass",$("#passresetfrm").serialize(), function(response){
     if($.trim(response) == '1'){
     $(".resultreset").html("<div class='alert alert-success'>New Password sent to "+resetemail+", Kindly check email.</div>");
     }else{
     $(".resultreset").html("<div class='alert alert-danger'>Email Not Found</div>");
     } });
     }
     });
     });
  </script>
   <body>
   <?=demo_header();?>
   <div style="z-index: 9999;margin-top:-200px;position: fixed; width: 500px; height: 200px; margin: 7% auto; /* Will not center vertically and won't work in IE6/7. */ left: 0; right: 0;">
    <img data-wow-duration="0.2s" data-wow-delay="0.2s" src="<?php echo base_url(); ?>assets/img/admin.png" class="wow fadeIn center-block" style="width:78px;height:60px;margin-bottom:25px" alt="" />
    <form method="POST" data-wow-duration="0.2s" data-wow-delay="0.2s" class="form-signin form-horizontal wow fadeIn animated" role="form" onsubmit="return false;">
      <div>
        <h2 class="form-heading text-center" style="text-transform: uppercase; letter-spacing: 5px; margin-top: 0px;"><strong>Login Panel</strong></h2>
       <label class="input-outlined">
        <input type="text" name="email" placeholder=" " required="" autofocus="" class="">
        <span>Email Address</span>
      </label>
      <label class="input-outlined">
        <input type="password" name="password" placeholder=" " required="" autofocus="" class="">
        <span>Password</span>
      </label>
       <div class="row form-group">
          <div class="col-xs-6">
            <label class="checkbox">
            <input type="checkbox" name="remember" value="remember-me"> Remember me </label>
          </div>
          <div class="col-xs-6">
            <div class="forget-password text-right">
              <a id="link-forgot" href="javascript:void(0)"> <strong>Forget Password</strong></a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <button data-wow-duration="2s" data-wow-delay="s" type="submit" class="btn btn-primary btn-block ladda-button fadeIn animated btn-lg" data-style="zoom-in">Login</button>
      <div style="margin-top:10px" class="resultlogin"></div>
    </form>
    <form role="form" class="logpanel form-forgot form-horizontal wow flipInY animated" style="display: none"  id="passresetfrm" onsubmit="return false;">
      <h2 class="form-heading text-center"> Forgot Password</h2>
      <div class="resultreset"></div>
      <div style="font-size: 12px;" class="text-center">Enter your email address to reset your password</div>
      <br>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i>
        </span>
        <input type="email" id="resetemail" name="email" placeholder="Email" class="form-control">
      </div>
      <br>
      <div class="form-actions">
        <button type="button" class="btn btn-primary btn-back"><i class="fa fa-angle-left"></i>&nbsp;Back</button>
        <button id="btn-forgot" type="button" class="btn btn-success pull-right resetbtn ladda-button">Reset My Password</button>
      </div>
    </form>
    </div>
      <div style="background:#001757;position:fixed;bottom:0px;width: 100%; padding: 15px;z-index:9999" data-wow-duration="0.5s" data-wow-delay="0.5s" class="text-center wow fadeIn"><small> <p data-wow-duration="1s" data-wow-delay="1s" class="text-center wow fadeInDown" style="color:#ffffff;margin-bottom: 0px; text-transform: uppercase; letter-spacing: 2px;"> Powered by  <a target="_blank" style="color: #FFFFFF" href="http://phptravels.com"><b>PHPTRAVELS</b></a> <a href="http://phptravels.com/change-log/#<?php echo PT_VERSION; ?>"></a><?php echo PT_VERSION; ?></p> </small></div>
   </body>
</html>
    <script>
    Ladda.bind( 'div:not(.progress-demo) button', { timeout: 2000 } );
    Ladda.bind( '.progress-demo button', {
    	callback: function( instance ) {
    		var progress = 0;
    		var interval = setInterval( function() {
    			progress = Math.min( progress + Math.random() * 0.1, 1 );
    			instance.setProgress( progress );
    			if( progress === 1 ) {
    				instance.stop();
    				clearInterval( interval );
    			}
    		}, 200 );
    	}
    } );
  </script>
  <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
  <script src="<?php echo base_url(); ?>assets/include/icheck/icheck.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/include/icheck/square/grey.css" rel="stylesheet">
  <script>
    var cb, optionSet1;
        $(".checkbox").iCheck({
          checkboxClass: "icheckbox_square-grey",
          radioClass: "iradio_square-grey"
        });

        $(".radio").iCheck({
          checkboxClass: "icheckbox_square-grey",
          radioClass: "iradio_square-grey"
        });
  </script>

  <!-- WOWJs -->
  <script>
    new WOW().init();
  </script>
  <!-- WOWJs -->