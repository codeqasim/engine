<style>
    .nav-tabs>li>a{display:block}
    .nav-tabs>li{flex:1}
    .form-bg-light{background:#f9f9f9}
    .form-control{font-size:1rem!important}
    .nav-tabs>li>a.active{background:#76ce85!important;position:relative}
    .control.switch{left:20px}
    .switch{position:relative;display:inline-block;width:50px;height:25px}
    .switch input{opacity:0;width:0;height:0}
    .slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;-webkit-transition:.4s;transition:.4s}
    .slider:before{position:absolute;content:"";height:21px;width:21px;left:2px;bottom:2px;background-color:white;-webkit-transition:.4s;transition:.4s}
    input:checked+.slider{background-color:#3e50b4}
    input:focus+.slider{box-shadow:0 0 1px #3e50b4}
    input:checked+.slider:before{-webkit-transform:translateX(26px);-ms-transform:translateX(26px);transform:translateX(26px)}
    .slider.round{border-radius:34px}
    .slider.round:before{border-radius:50%}
</style>
<div class="panel panel-primary">
    <?php if(empty($usersession)){ ?>
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation"  data-title="">
            <a class="text-center active" href="#Guest" id="guesttab" data-toggle="tab">
                <i class="icon-user-7"></i>
                <div class="visible-xs clearfix"></div>
                <span class="hidden-xs"><?php echo trans('0167');?></span>
            </a>
        </li>
        <!--  <li role="presentation" class="text-center" data-title="flight">
            <a href="#flight" data-toggle="tab" aria-controls="home" aria-expanded="true">
            <i class="icon_set_1_icon-16"></i>
            <div class="visible-xs clearfix"></div>
            <span class="hidden-xs">Register and Book</span>
            </a>
            </li>-->
        <?php  if($app_settings[0]->allow_registration == "1"){ ?>
        <li role="presentation" class="text-center" data-title="">
            <a class="text-center" href="#Sign-In" id="signintab" data-toggle="tab" >
                <i class="icon-key-4"></i>
                <div class="visible-xs clearfix"></div>
                <span class="hidden-xs"><?php echo trans('0168');?></span>
            </a>
        </li>
        <?php } ?>
    </ul>
    <div class="panel-body">
        <!-- PHPTRAVELS Booking tabs ending  -->
        <div class="tab-content pt-30" style="height: inherit;">
            <!-- PHPTRAVELS Guest Booking Starting  -->
            <div class="tab-pane fade in active show" id="Guest">
                <form id="guestform" class="booking_page">
                    <div class="row gap-20 mb-0">
                        <div class="col-12 col-sm-6 o2">
                            <div class="form-group">
                                <label class="pure-material-textfield-outlined float-none">
                                <input placeholder=" " name="firstname">
                               <span><?php echo trans('0171');?></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 o1">
                            <label class="pure-material-textfield-outlined float-none">
                                <input placeholder=" " name="lastname">
                               <span><?php echo trans('0172');?></span>
                                </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6 col-12 o2">
                            
                            <label class="pure-material-textfield-outlined float-none">
                                <input placeholder=" " name="email" type="email">
                               <span><?php echo trans('094');?></span>
                                </label>
                        </div>
                        <div class="col-md-6 col-12 o1">
                            <label class="pure-material-textfield-outlined float-none">
                                <input placeholder=" " name="confirmemail" type="email">
                               <span><?php echo trans('0175');?></span>
                                </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 col-12">
                    <label class="pure-material-textfield-outlined float-none">
                                <input placeholder=" " name="phone" type="text">
                               <span><?php echo trans('0414');?></span>
                                </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 col-12">
                               <label class="pure-material-textfield-outlined float-none">
                                <input placeholder=" " name="address" type="text">
                               <span><?php echo trans('098');?></span>
                                </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 col-12">
                            <label><?php echo trans('0105');?> <span class="font12 text-danger">*</span></label>
                            <div class="clear"></div>
                            <select  class="form-control chosen-the-basic " name="country">
                                <option value=""><?php echo trans('0484');?></option>
                                <?php
                                    foreach($allcountries as $country){
                                    ?>
                                <option value="<?php echo $country->iso2;?>" <?php if($profile[0]->ai_country == $country->iso2){echo "selected";}?> ><?php echo $country->short_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-default guest" style="margin-bottom:-15px">
                            <div class="panel-heading d-flex align-items-center mb-20 fe">
                                <p class="mb-0 mr-20">
                                    <?php echo trans('0178');?>
                                </p>
                                <label data-toggle="collapse" data-target="#special" aria-expanded="false" aria-controls="special" class="switch">
                                
                                <input type="checkbox" />
                                <span class="slider round"></span>
                                </label>
                            </div>
                            <div id="special" aria-expanded="false" class="collapse">
                                <label class="pure-material-textfield-outlined float-none ">
                                <textarea class="form-control" placeholder=" " rows="4" name="additionalnotes"></textarea>
                               <span><?php echo trans('0415');?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- PHPTRAVELS Guest Booking Ending  -->
            <!-- PHPTRAVELS Sign in Starting  -->
            <div class="tab-pane fade" id="Sign-In">
                <form action="" method="POST" id="loginform" class="booking_page">
                    <div class=" row form-group">
                        <div class="col-md-12 col-12">

                        <label class="pure-material-textfield-outlined float-none">
                                <input placeholder=" " name="username" type="email">
                               <span><?php echo trans('094');?></span>
                                </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 col-12">
                              <label class="pure-material-textfield-outlined float-none">
                               <input placeholder=" "  name="password" id="password" type="password">
                               <span><?php echo trans('095');?></span>
                                </label>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-default guest" style="margin-bottom:-15px">
                            <div class="panel-heading d-flex">
                                <p> <?php echo trans('0178');?></p>
                                <label data-toggle="collapse" data-target="#special2" aria-expanded="false" aria-controls="special" class="control switch">
                                <input type="checkbox" />
                                <span class="slider round"></span>
                                </label>
                            </div>
                            <div id="special2" aria-expanded="false" class="collapse">

                                    <label class="pure-material-textfield-outlined float-none">
                                <textarea class="form-control" placeholder=" " rows="4" name="additionalnotes"></textarea>
                               <span><?php echo trans('0415');?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- PHPTRAVELS Sign in Ending  -->
        <?php }else{ ?>
        <!-- PHPTRAVELS LoggeIn Booking Starting  -->
        <div id="loggeduserdiv">
            <form id="loggedform">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label  class="required go-right"><?php echo trans('0171');?></label>
                                <input class="form-control form-bg-light" type="text" placeholder="" name=""  value="<?php echo $profile[0]->ai_first_name?>" disabled="disabled" style="background-color: #DEDEDE !important"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label  class="required go-right"><?php echo trans('0172');?></label>
                                <input class="form-control" type="text" placeholder="" name=""  value="<?php echo $profile[0]->ai_last_name?>" disabled="disabled" style="background-color: #DEDEDE !important">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label  class="required  go-right"><?php echo trans('094');?></label>
                                <input class="form-control form-bg-light" type="text" placeholder="" name=""  value="<?php echo $profile[0]->accounts_email?>" disabled="disabled" style="background-color: #DEDEDE !important">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <label  class="required go-right"><?php echo trans('0178');?></label>
                                <textarea class="form-control form-bg-light" placeholder="<?php echo trans('0415');?>" rows="4" name="additionalnotes"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- PHPTRAVELS LoggedIn User Booking Ending  -->
        <?php } ?>
    </div>
    <?php  if(!empty($customerloggedin)){ ?>
    <?php }else{ if($allowreg == "1"){ ?>
</div>
<?php } } ?>
<script>
    $("#guesttab").on("click", function() {
        $(".completebook").prop("name", "guest");
    });

    $("#signintab").on("click", function() {
        $(".completebook").prop("name", "login");
    });
</script>
