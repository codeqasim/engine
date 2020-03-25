
<?php if($mSettings->mobileSectionStatus == "Yes"){ ?>
<div class="mb-80 d-none d-md-block"></div>
<div class="footer_bg">
<div class="container">
    <div class="row row-reverse">
        <div class="col-6 col-lg-3 d-flex align-items-center">
          <img class="img-responsive mt-auto" src="<?php echo $theme_url; ?>assets/img/mobile.png" class="img-responsive" alt="mobile apps" >
        </div>
        <div class="col-6 col-lg-9">
        <div>
         <div class="mb-50 hidden-xs-down"></div>
            <h3 class=""><?php echo trans('0386'); ?></h3>
            <div class="clear"></div>
            <p class="go-text-right d-none d-md-block"><?php echo trans('0387'); ?></p>
            <ul class="theme-mobile-app-btn-list go-text-right">
                <?php if(!empty($mSettings->iosUrl)){ ?>
                <li>
                    <a target="blank" class="btn btn-dark theme-mobile-app-btn" href="<?php echo $mSettings->iosUrl; ?>">
                    <i class="theme-mobile-app-logo">
                    <img src="<?php echo $theme_url; ?>assets/img/apple.png" alt="Image Alternative text" title="Image Title">
                    </i>
                    <span>Download on
                    <br>
                    <span>App Store</span>
                    </span>
                    </a>
                </li>
                <?php } ?>
                <?php if(!empty($mSettings->androidUrl)){ ?>
                <li>
                    <a target="blank" class="btn btn-dark theme-mobile-app-btn" href="<?php echo $mSettings->androidUrl; ?>">
                    <i class="theme-mobile-app-logo">
                    <img src="<?php echo $theme_url; ?>assets/img/android.png" alt="Image Alternative text" title="Image Title">
                    </i>
                    <span>Download on
                    <br>
                    <span>Play Market</span>
                    </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        </div>
    </div>
</div>
</div>
<?php } ?>
<div class="clearfix"></div>

<!-- tripadvisors block -->
<?php if($tripmodule){ ?>
<div class="footerbg text-center d-none d-md-block">
    <a class="btn-block" target="_blank" href="//www.tripadvisor.com/pages/terms.html"><img width="200" lass="block-center" src="<?php echo PT_GLOBAL_IMAGES_FOLDER . 'tripadvisor.png';?>" alt="TripAdvisor" /></a>
    <p>Ratings and Reviews Powered by TripAdvisor</p>
</div>
<?php } ?>
<!-- tripadvisors block -->

<!-- start Footer Wrapper -->
<footer id="footer" class="footer-wrapper scrollspy-stopper <?php echo @$hidden; ?>">
  <div class="container">
    <div class="row gap-40 gap-md-50 row-reverse">
       <div class="col-12 col-lg-3 go-right">
            <h5 class="col-inner mt-15-sm footer-title go-text-right">
                <strong>
                    <?php if( ! empty($phone) ) { ?>
                    <span class="d-block footer-phone text-white">
                        <i class="material-icons">phone</i><!--<?php echo trans('0438');?>--> <?php echo $phone; ?>
                    </span>
                    <?php } ?>
                </strong>
                <small>
                <?php if( ! empty($contactemail) ) { ?>
                <a href="mailto:<?php echo $contactemail; ?>"><?php echo $contactemail; ?></a>
                <?php } ?>
                </small>
            </h5>
            <div class="clear"></div>
            <ul class="footer-menu go-right go-text-right">
                <li><a href="javascript:void(0)" target="" title="" style="text-transform:uppercase;color: white; font-weight: bold;"><?php echo trans('0243');?></a></li>
                <?php if($allowsupplierreg){ ?>
                <li><a target="_blank" href="<?php echo base_url(); ?>supplier-register/"><?php echo trans('0241');?></a></li>
                <?php } ?>
                <li><a target="_blank" href="<?php echo base_url(); ?>supplier/"><?php echo trans('0527');?></a></li>
            </ul>
        </div>
        <div class="col-12 col-lg-9">
            <div class="col-inner">
                <div class="row gap-40 gap-md-20 row-reverse">
                    <div class="footer_menu col-12 col-md-6">
                    <?=menu(2);?>
                    </div>
                   <?php // get_footer_menu_items(19, "col-12 col-md-3 go-right","col-inner mt-15-sm footer-title go-text-right","footer-menu go-right go-text-right"  );?>
                    <div class="col-12 col-md-6">
                        <div class="col-inner mt-25-sm">
                        <?php if(isModuleActive('newsletter')){ ?>
                        <h5 class="footer-title"><?php echo trans('023');?></h5>
                        <div class="clear"></div>
                            <p>Subsribe to get our latest updates and oeffers</p>
                            <div id="message-newsletter_2"></div>
                            <form role="search" onsubmit="return false;">
                            </form>
                            <div class="input-group row-reverse">
                                <input type="email" class="form-control sub_email" id="exampleInputEmail1" placeholder="<?php echo trans('023');?> <?php echo trans('0403');?>">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary sub_newsletter" type="submit"><?php echo trans('024');?></button>
                                </div>
                            </div>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a class="newstext" href="javascript:void(0);">
                                        <div class="wow fadeIn subscriberesponse"></div>
                                    </a>
                                </li>
                            </ul>
                            <?php } ?>
                            <!--<h5 class="footer-title"><?=lang('0342')?></h5>-->
                            <div class="clear form-group"></div>
                            <div class="footer-socials go-right">
                                <?php foreach($footersocials as $fs){ ?>
                                <a target="_black" href="<?php echo $fs->social_link;?>"><i class="fab fa-<?=str_replace(" ","-",strtolower($fs->social_name) ) ?>"></i></a>
                                <!--<a href="<?php echo $fs->social_link;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $fs->social_name;?>" target="_blank"><img src="<?php echo PT_SOCIAL_IMAGES; ?><?php echo $fs->social_icon;?>" class="social-icons-footer sc-97mfds-11 hccXzw" /></a>-->
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- ********************   Removing powered by linkback will result to cancellation of your support service.    ********************  -->
    <div class="d-none d-md-block" style="padding:10px;position:relative">
    <div class="container">
    <div class="text-center">Powered by <a href="http://www.phptravels.com" target="_blank"> <img src="<?php echo base_url(); ?>uploads/global/phptravels.png" style="height:22px;display: inline-block; -webkit-transform: translateY(6px);transform: translateY(6px);" height="22" alt="PHPTRAVELS" /> <strong>PHPTRAVELS</strong></a></div>
    </div>
    </div>
    <!-- ********************   Removing powered by linkback will result to cancellation of your support service.    ********************  -->
    </div>
    <div class="clearfix"></div>
    <div class="post-footer">
        <div class="container">
            <p class="footer-copy-right">&#169; <?php echo $app_settings[0]->copyright;?></p>
        </div>
    </div>
    </footer>
    <!-- start Footer Wrapper -->
    </div>
    <!-- end Body Inner -->
    <!-- start Back To Top -->
    <a id="back-to-top" href="javascript:void(0)" class="back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><i class="bx bx-chevron-up"></i></a>
    <!-- end Back To Top -->
    <!-- JS -->

    <!--fade effect for pages-->
    <!--
    <script>
    $(function(){
        $('body').fadeIn();
        $('a').click(function(){
         if ($(this)[0].parentNode.parentNode.classList[0] != "horizon-sticky-nav" && $(this)[0].parentNode.parentNode.classList[0] != "nav")
         {
         $('body').fadeOut( 200, function(){
         setInterval(function(){
         $('body').fadeIn() }, 500);
          })
         }
        });
    });
    </script>
    -->

    <!-- jQuery -->
    <script src="<?php echo $theme_url; ?>assets/js/jquery-2.2.4.min.js"></script>
    <script>
    /* Ripple Effect */
    $(function(){var ink,d,x,y;$("a, button, btn-action").click(function(e){if($(this).find(".ink").length===0){$(this).prepend("<span class='ink'></span>")}
    ink=$(this).find(".ink");ink.removeClass("animate");if(!ink.height()&&!ink.width()){d=Math.max($(this).outerWidth(),$(this).outerHeight());ink.css({height:d,width:d})}
    x=e.pageX-$(this).offset().left-ink.width()/2;y=e.pageY-$(this).offset().top-ink.height()/2;ink.css({top:y+'px',left:x+'px'}).addClass("animate")})})
    </script>

    <script>
    $( document ).ready(function() {
    size_li = $("#LIST li").size();
    x=30;
    $('#LIST li:lt('+x+')').show();
    $('#loadMore').click(function () {
    x= (x+30 <= size_li) ? x+30 : size_li;
    $('#LIST li:lt('+x+')').show();
    $('#showLess').show();
    if(x == size_li){
    $('#loadMore').hide();
    }
    });
    });
    </script>

    <script type="text/javascript" src="<?php echo $theme_url; ?>assets/js/plugins.js"></script>
    <script type="text/javascript" src="<?php echo $theme_url; ?>assets/js/custom-multiply-sticky.js"></script>
    <script type="text/javascript" src="<?php echo $theme_url; ?>assets/js/custom-core.js"></script>
    <?php if (!$is_home): ?>
    <?php $whitelist = array( '127.0.0.1','::1' ); if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) { ?>
    <!-- Google Maps -->
    <?php if (pt_main_module_available('ean') || $loadMap) { ?>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=<?php echo $app_settings[0]->mapApi; ?>&libraries=places"></script>
    <?php } } else { ?>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=<?php echo $app_settings[0]->mapApi; ?>&libraries=places"></script>
    <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
    <?php } ?>
    <script type="text/javascript" src="<?php echo $theme_url; ?>assets/js/plugins/infobox.js"></script>
    <script type="text/javascript" src="<?php echo $theme_url; ?>assets/js/custom-detail-map.js"></script>
    <?php endif; ?>
    <script type="text/javascript" src="<?php echo $theme_url; ?>assets/js/scripts.js"></script>
    <?php include "script.php"; ?>
    <div id="cookyGotItBtnBox" style="display: none" data-wow-duration="0.5s" data-wow-delay="5s" role="dialog" class="wow fadeIn cc-window cc-banner cc-type-info cc-theme-block cc-color-override--1961008818 ">
    <span id="cookieconsent:desc" class="cc-message">This website uses cookies to ensure you get the best experience on our website. <a aria-label="learn more about cookies" role="button" tabindex="0" class="cc-link" href="<?php echo base_url(); ?>cookies-policy" rel="noopener noreferrer nofollow" target="_blank">Learn more</a></span>
    <div class="cc-compliance">
    <button aria-label="dismiss cookie message" role="button" tabindex="0" class="cc-btn cc-dismiss" onclick="cookyGotItBtn()">Got it!</button></div>
    </div>
</body>
</html>