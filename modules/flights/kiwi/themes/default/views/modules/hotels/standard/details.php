<style>
@media(min-width:992px){.header-waypoint-sticky.header-main{position:fixed;top:0;left:0;right:0;z-index:99999}
}.amint-text{display:inline-block;transform:translateY(-10px)}
.form-icon-left{display:flex}
.form-icon-left>label{flex:2}
.form-icon-left>select{flex:2}
.collapse .card-body{margin-bottom:10px}
.table-condensed>tbody>tr>td{padding:5px}
.section-title h3{font-family:inherit!important}
.header-main .header-nav{box-shadow:none!important}
.w-40{width:40%!important}
.heading-title+p{font-size:inherit;font-weight:normal}
.page-wrapper.page-detail .sidebar-wrapper{padding-top:20px!important}
.review-item ul.meta-list li{padding-left: 0 !important; margin: 12px 12px 0 0;}
.form-search-main-01 label{position:static}
</style>
<div class="main-wrapper scrollspy-action">
<div class="page-wrapper page-detail bg-light">
  <div class="detail-header">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row sb">
        <div class="o2">
          <h2 id="detail-content-sticky-nav-00" class="name"><?php echo character_limiter($module->title, 28);?></h2>
          <div class="star-rating-wrapper go-right">
            <div class="rating-item rating-inline">
              <div class="rating-icons">
                <?php echo $module->stars;?>
                <!-- <input type="hidden" class="rating" data-filled="rating-icon fas fa-star rating-rated" data-empty="rating-icon far fa-star" data-fractions="2" data-readonly value="4.5"/> -->
              </div>
            </div>
          </div>
          <?php if(!empty($module->discount)){?><div class="discount"><?=$module->discount?> % <?=lang('0118')?></div><?php } ?>
          <div class="clear"></div>
          <p class="location">
            <?php if($appModule == "offers"){  }else if($appModule == "cars" || $appModule == "hotels" || $appModule == "ean" || $appModule == "tours"){ ?>
            <i class="material-icons text-info small">place</i>
            <?php } ?>
            <?php echo $module->location; ?>
            <?php if(!empty($module->mapAddress)){ ?> <small class="hidden-xs">, <?php echo character_limiter($module->mapAddress, 50);?></small>
            <?php } ?>
            <a href="#detail-content-sticky-nav-03" class="anchor">
            <?php echo trans('0143');?>
            </a>
          </p>
        </div>

        <div class="ml-lg-auto text-left text-lg-right mt-20 mt-lg-0 o1">
          <?php if($hasRooms){ ?>
          <?php if($hasRooms || $appModule == "offers"){ ?>
          <div class="price">
            <?php echo trans('0141');?> <span><?php echo @$currencySign; ?><span><?php echo @$lowestPrice; ?></span></span>
          </div>
          <?php } ?>
          <?php } ?>
          <a href="#detail-content-sticky-nav-02" class="anchor btn btn-primary btn-wide mt-5">
          <?php echo trans('0138');?>
          </a>
        </div>
      </div>
    </div>
  </div>
  <span id="detail-content-sticky-nav-00" class="d-block"></span>
  <div class="fullwidth-horizon-sticky d-none d-lg-block">
    <div class="fullwidth-horizon-sticky-inner">
      <div class="container">
        <div class="fullwidth-horizon-sticky-item clearfix">
          <ul id="horizon-sticky-nav" class="horizon-sticky-nav clearfix">
            <li>
              <a href="#detail-content-sticky-nav-00"><?php echo trans('044');?></a>
            </li>
            <li>
              <a href="#detail-content-sticky-nav-01"><?php echo trans('0248');?></a>
            </li>
            <li>
              <a href="#detail-content-sticky-nav-02"><?php echo trans('0372');?></a>
            </li>
            <li>
              <a href="#detail-content-sticky-nav-03"><?php echo trans('032');?></a>
            </li>
            <li>
              <a href="#detail-content-sticky-nav-04"><?php echo trans('033');?></a>
            </li>
            <li>
              <a href="#detail-content-sticky-nav-05"><?php echo trans('040');?></a>
            </li>
            <li>
              <a href="#detail-content-sticky-nav-06"><?php echo trans('0396');?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row gap-30">
      <div  class="col-12 col-lg-3 col-xl-3 order-lg-last">
        <aside class="sticky-kit sidebar-wrapper">
          <!-- <button class="btn btn-secondary btn-wide btn-toggle collapsed btn-block btn-change-search" data-toggle="collapse" data-target="#change-search"><?=lang('0106')?> <?=lang('012')?></button> -->
          <div class="booking-selection-box mt-20">
            <div class="heading clearfix">
              <div class="d-flex justify-content-between">
                <h5 class="text-white"><?php echo trans('0197'); ?> </h5>
                <span class="text-white"><?php echo trans('0122');?> <?php echo $modulelib->stay; ?></span>
              </div>
            </div>
            <?php require $themeurl.'views/modules/hotels/standard/rooms_modify_dates.php'; ?>
          </div>
        </aside>
      </div>
      <div class="col-12 col-lg-9 col-xl-9">
        <div class="content-wrapper">
          <div class="slick-gallery-slideshow detail-gallery">
            <div class="slider gallery-slideshow">
              <?php foreach($module->sliderImages as $img){ ?>
              <div>
                <div class="image"><img src="<?php echo $img['fullImage']; ?>" alt="Images" /></div>
              </div>
              <?php } ?>
            </div>
            <div class="slider gallery-nav">
              <?php foreach($module->sliderImages as $img){ ?>
              <div>
                <div class="image"><img src="<?php echo $img['fullImage']; ?>" alt="Images" /></div>
              </div>
              <?php } ?>
            </div>
          </div>
          <?php include $themeurl.'views/socialshare.php';?>
            <?php include $themeurl.'views/includes/copyURL.php';?>
          <div id="detail-content-sticky-nav-01" class="fullwidth-horizon-sticky-section">
            <h3 class="heading-title"><span><?php echo trans('0248'); ?></span></h3>
            <div class="clear"></div>
            <?php echo $module->desc; ?>
            <?php // echo character_limiter($module->desc,1000 );?>
            <hr>
            <div id="detail-content-sticky-nav-04" class="fullwidth-horizon-sticky-section">
              <h3 class="heading-title go-right"><span><?php echo trans('048'); ?></span></h3>
              <div class="clear"></div>
              <?php if(!empty($module->amenities)){ ?>
              <ul class="main-facility-list go-text-right">
                <?php foreach($module->amenities as $amt){ if(!empty($amt->name)){ ?>
                <?php if($appModule == "ean"){ ?>
                <li >
                  <span><img class="go-right" style="max-height:30px;max-width:40px" src="<?php echo $amt->icon;?>"></span>
                  <?php echo $amt->name; ?>
                </li>
                <?php } ?>
                <?php if($appModule == "hotels"){ ?>
                <li class="go-text-right">
                  <img data-toggle="tooltip" class="go-right" data-placement="top" title="<?php echo $amt->name; ?>"  style="max-height:30px;max-width:40px" src="<?php echo $amt->icon;?>"> <span class="amint-text"><?php echo $amt->name; ?></span>
                </li>
                <?php } ?>
                <?php } } ?>
              </ul>
              <?php } ?>
            </div>
          </div>
          <div class="clear"></div>
          <div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">
            <h3 class="heading-title"><span><?php echo trans('0372'); ?></span></h3>
            <div class="clear"></div>
            <?php if(!empty($modulelib->stayerror)){ ?>
            <div class="panel-body">
              <div class="alert alert-danger go-text-right">
                <?php echo trans("0420"); ?>
              </div>
            </div>
            <?php } ?>
            <?php if(!empty($rooms)){?>
            <form action="<?php echo base_url().$appModule;?>/book/<?php echo $module->bookingSlug;?>" method="GET">
              <div class="room-item-wrapper">
                <div class="room-item heading d-none d-md-block">
                  <div class="row gap-20">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                      <div class="row gap-20">
                        <div class="col-xss-6 col-xs-3 col-sm-4 col-md-4">
                        </div>
                        <div class="col-xss-12 col-xs-9 col-sm-8 col-md-8 go-text-right">
                          <span><?=lang('0246')?></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-0">
                      <div class="row gap-20">
                        <div class="col-xs-12 col-sm-8 col-md-8 go-text-center">
                          <span><?=lang('0435')?> <?=lang('0559')?></span>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 go-text-center">
                          <span><?=lang('0155')?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php foreach($rooms as $r){ if($r->maxQuantity > 0){ ?>
                    <input type="hidden" name="adults" value="<?php  echo $modulelib->adults; ?>" />
                    <input type="hidden" name="child" value="<?php  echo $modulelib->children; ?>" />
                    <input type="hidden" name="checkin" value="<?php  echo $modulelib->checkin; ?>" />
                    <input type="hidden" name="checkout" value="<?php  echo $modulelib->checkout; ?>" />
                    <input type="hidden" name="roomid" value="<?php echo $r->id; ?>" />
                <div class="room-item">
                  <div class="row gap-20">
                    <div class="col-12 col-sm-12 col-md-6">
                      <div class="row gap-20">
                        <div class="col-12 col-sm-12 col-md-4">
                          <div class="image">
                            <img src="<?php echo $r->thumbnail;?>" alt="image" />
                          </div>
                        </div>
                        <div class="col-12 col-sm-8 col-md-8">
                          <div class="content">
                            <h5><a href="#"><?php echo $r->title;?></a></h5>
                            <div class="clear"></div>
                            <!-- <p><span class="font700">Room with view</span>, 43 square metres, 1 double bed </p> -->
                            <p class="max-man go-text-right">
                              <?php echo trans('010');?>
                              <?php echo $r->Info['maxAdults'];?><span data-toggle="tooltip" data-placement="top" title="<?php echo $r->Info['maxAdults'];?>"> <?php for($i =0; $i<$r->Info['maxAdults'];$i++) { ?> <i class="fas fa-male"> </i><?php } ?></span>
                            </p>
                            <p class="max-man go-text-right">
                              <?php echo trans('011');?>
                              <?php echo $r->Info['maxChild'];?><span data-toggle="tooltip" data-placement="top" title="<?php echo $r->Info['maxChild'];?>"> <?php for($i =0; $i<$r->Info['maxChild'];$i++) { ?> <i class="fas fa-male"> </i><?php } ?></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="row gap-20 justify-content-between">
                        <div class="col-7 col-sm-6 col-md-6">
                          <?php  if($r->price > 0){ ?>
                          <p class="price text-center go-text-right"><span class="number text-secondary"><small><?php echo $r->currSymbol; ?></small><?php echo $r->price; ?></span>
                            <?php echo trans('0245');?>
                          </p>
                          <?php } ?>
                          <div class=" book_buttons hidden-xs hidden-sm go-right">
                            <button class="hidden-xs btn btn-default btn-block btn-sm" type="button" data-toggle="collapse" data-target="#details<?php echo $r->id;?>" aria-expanded="false" aria-controls="#details<?php echo $r->id;?>">
                            <?php echo trans('052');?>
                            </button>
                            <button class="hidden-xs btn-block btn btn-info btn-sm" type="button" data-toggle="collapse" data-target="#availability<?php echo $r->id;?>" aria-expanded="false" aria-controls="#availability<?php echo $r->id;?>">
                            <?php echo trans('0251');?>
                            </button>
                          </div>
                        </div>
                        <div class="col-5 col-sm-6 col-md-6">
                          <?php if(empty($r->extraBeds)){
                            echo "<div style='margin-top:35px;'></div>";
                            }?>
                          <h5 class="mt-0 text-right">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="rooms[]" value="<?=$r->id?>" id="<?php echo $r->price; ?>" class="custom-control-input go-left pull-right"/>
                              <label for="<?php echo $r->price; ?>" class="custom-control-label text-left go-left">
                              <?=lang('0155')?>
                              </label>
                            </div>
                          </h5>
                          <div class="clear"></div>
                          <div class="form-group form-spin-group mb-5">
                            <div class="form-icon-left">
                              <label class="line12 font13 spacing-05 mt-5 mb-10 block">
                              <?php echo trans('0374');?>
                              </label>
                              <select class="form-control" name="roomscount[<?=$r->id?>]">
                                <?php for($q = 1; $q <= $r->maxQuantity; $q++){ ?>
                                <option value="<?php echo $q;?>">
                                  <?php echo $q;?>
                                </option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <?php if($r->extraBeds > 0){ ?>
                          <div class="form-group form-spin-group mb-5">
                            <div class="form-icon-left">
                              <label class="line12 font13 spacing-05 mt-5 mb-10 block">
                              <?php echo trans('0428');?>
                              </label>
                              <select name="extrabeds[<?=$r->id?>]" class="form-control" id="">
                                <option value="0">0</option>
                                <?php for($i = 1; $i <= $r->extraBeds; $i++){ ?>
                                <option value="<?php echo $i;?>">
                                  <?php echo $i;?>
                                  <?php echo $r->currCode." ".$r->currSymbol.$i * $r->extrabedCharges;?>
                                </option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <?php } ?>
                          <!-- <a href="#" class="btn btn-primary btn-sm btn-block">Book</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="availability<?php echo $r->id;?>">
                  <div class="card card-body">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-5">
                          <div class="form-group">
                            <select id="<?php echo $r->id;?>" class="form-control showcalendar">
                              <option value="0">
                                <?php echo trans('0232');?>
                              </option>
                              <option value="<?php echo $first;?>">
                                <?php echo $from1;?> -
                                <?php echo $to1;?>
                              </option>
                              <option value="<?php echo $second;?>">
                                <?php echo $from2;?> -
                                <?php echo $to2;?>
                              </option>
                              <option value="<?php echo $third;?>">
                                <?php echo $from3;?> -
                                <?php echo $to3;?>
                              </option>
                              <option value="<?php echo $fourth;?>">
                                <?php echo $from4;?> -
                                <?php echo $to4;?>
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div id="roomcalendar<?php echo $r->id;?>" class="row"></div>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="details<?php echo $r->id;?>">
                  <div class="card card-body">
                    <div class="magnific-gallery row">
                      <?php foreach($r->Images as $Img){ if($r->thumbnail != $Img['thumbImage']){ ?>
                      <div class="col-md-3">
                        <div class="zoom-gallery<?php echo $r->id; ?>">
                          <a href="<?php echo $Img['thumbImage'];?>" data-source="<?php echo $Img['thumbImage'];?>" title="<?php echo $r->title;?>">
                          <img class="img-responsive" src="<?php echo $Img['thumbImage'];?>">
                          </a>
                        </div>
                      </div>
                      <!--<script type="text/javascript">
                        $('.zoom-gallery<?php echo $r->id; ?>').magnificPopup({
                            delegate: 'a',
                            type: 'image',
                            closeOnContentClick: false,
                            closeBtnInside: false,
                            mainClass: 'mfp-with-zoom mfp-img-mobile',
                            image: {
                                verticalFit: true,
                                titleSrc: function(item) {
                                    return item.el.attr('title') + ' ';
                                }
                            },
                            gallery: {
                                enabled: true
                            },
                            zoom: {
                                enabled: true,
                                duration: 300, // don't foget to change the duration also in CSS
                                opener: function(element) {
                                    return element.find('img');
                                }
                            }

                        });
                        </script>-->
                      <?php } } ?>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <?php if(!empty($r->desc)){ ?>
                    <p class="go-text-right RTL"><strong><?php echo trans('046');?> : </strong> </p>
                    <span class="rooms-text"><?php echo $r->desc;?></span>
                    <?php } ?>
                    <hr>
                    <?php if(!empty($r->Amenities)){ ?>
                    <p class="RTL"><strong><?php echo trans('055');?> : </strong></p>
                    <div class="row">
                      <?php foreach($r->Amenities as $roomAmenity){ if(!empty($roomAmenity->name)){ ?>
                      <div class="col-md-4">
                        <ul class="list_ok RTL">
                          <li><i class="fas fa-check-circle text-primary"></i>
                            <?php echo $roomAmenity->name;?>
                          </li>
                        </ul>
                      </div>
                      <?php } } } ?>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <?php } ?>
                <?php } ?>
                <button type="submit" class="book_button btn btn-success btn-block btn-lg chk" disabled>
                <?php echo trans('0142');?>
                </button>
              </div>
            </form>
            <?php }else{  echo '<div class="panel-body"><h4 class="alert alert-info">' . trans("066") . '</h4></div>'; } ?>
          </div>
          <div class="clear"></div>
          <!-- <button type="submit" class="book_button btn btn-md btn-success btn-block btn-block chk mob-fs10 loader" disabled>
            <?php echo trans('0142');?>
            </button> -->
        </div>
        <script>
          $("[name^=rooms]").on('click', function() {
              if ($('[name="rooms[]"]:checked').length > 0) {
                  $('[type=submit]').prop('disabled', false);
              } else {
                  $('[type=submit]').prop('disabled', true);
              }
          });
        </script>
        <?php if($appModule == "offers"){  }else if($appModule == "cars" || $appModule == "hotels" || $appModule == "ean" || $appModule == "tours"){ ?>
        <!-- Start checkInInstructions -->
        <?php if(!empty($checkInInstructions)){ ?>
        <div class="panel panel-default">
          <div class="panel-heading go-text-right panel-green">
            <?php echo trans('0550'); ?>
          </div>
          <?php }  if(!empty($checkInInstructions)){ ?>
          <div class="panel-body">
            <span class="RTL">
              <p>
                <?php echo $checkInInstructions; ?>
              </p>
            </span>
          </div>
        </div>
        <?php } ?>
        <!-- end checkInInstructions -->
        <!-- Start SpecialcheckInInstructions -->
        <?php if(!empty($specialCheckInInstructions)){ ?>
        <div class="panel panel-default">
          <div class="panel-heading go-text-right panel-green">
            <?php echo trans('0551'); ?>
          </div>
          <?php }  if(!empty($specialCheckInInstructions)){ ?>
          <div class="panel-body">
            <span class="RTL">
              <p>
                <?php echo $specialCheckInInstructions; ?>
              </p>
            </span>
          </div>
        </div>
        <?php } ?>
        <!-- End SpecialcheckInInstructions -->
        <div id="detail-content-sticky-nav-03" class="fullwidth-horizon-sticky-section">
          <h3 class="heading-title"><span><?=lang('0143')?></span></h3>
          <div class="clear"></div>
          <div class="hotel-detail-location-wrapper">
            <div class="row gap-30">
              <div class="col-12 col-md-12">
                <div class="map-holder">
                  <div id="hotel-detail-map" data-lat="<?php echo $module->latitude;?>" data-lon="<?php echo $module->longitude;?>" style="width: 100%; height: 480px;"></div>
                  <div class="infobox-wrapper">
                    <div id="infobox">
                      <div class="infobox-inner">
                        <div class="font500 font12"><?php echo character_limiter($module->title, 28);?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="detail-content-sticky-nav-05" class="fullwidth-horizon-sticky-section">
          <h3 class="heading-title"><span><?php echo trans('0148');?></span></h3>
          <div class="clear"></div>
          <div class="feature-box-2 mb-0 bg-white">
            <div class="feature-row">
              <div class="row gap-10 gap-md-30">
                <div class="col-xs-12 col-sm-4 col-md-3 o2">
                  <h6><?php echo trans('0148');?></h6>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 o1">
                  <p><?php if(!empty($module->policy)){ ?><?php echo $module->policy; } ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
            <div class="feature-row">
              <div class="row gap-10 gap-md-30">
                <div class="col-12 col-sm-4 col-md-3 o2">
                  <h6><?php echo trans('07');?></h6>
                  <div class="clear"></div>
                </div>
                <div class="col-12 col-sm-8 col-md-9 o1">
                  <p><?php echo $module->defcheckin;?></p>
                </div>
              </div>
            </div>
            <div class="feature-row">
              <div class="row gap-10 gap-md-30">
                <div class="col-12 col-sm-4 col-md-3 o2">
                  <h6><?php echo trans('09');?></h6>
                  <div class="clear"></div>
                </div>
                <div class="col-12 col-sm-8 col-md-9 o1">
                  <p><?php echo $module->defcheckout;?> </p>
                </div>
              </div>
            </div>
            <?php if(!empty($module->paymentOptions)){ ?>
            <div class="feature-row">
              <div class="row gap-10 gap-md-30">
                <div class="col-xs-12 col-sm-4 col-md-3 o2">
                  <h6><?php echo trans('0265');?></h6>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 o1">
                  <p><?php foreach($module->paymentOptions as $pay){ if(!empty($pay->name)){ ?>
                    <?php echo $pay->name;?> -
                    <?php } } ?>
                  </p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div id="detail-content-sticky-nav-06" class="fullwidth-horizon-sticky-section">
          <?php if($appModule != "cars" && $appModule != "offers"){ ?>
          <?php if(!empty($avgReviews->overall)){ ?>
          <h3 class="heading-title"><?php echo trans('042');?></h3>
          <div class="clear"></div>
          <?php } ?>
          <?php } if (!empty($tripadvisorinfo->rating)) { ?>
          <?php require $themeurl. 'views/includes/tripadvisor.php'; }else{?>
          <?php require $themeurl. 'views/includes/reviews_content.php';}?>
        </div>
        <!-- End Hotel Reviews bars -->
        <!-- End Add/Remove Wish list Review Section -->
        <div class="row">
          <div class="clearfix"></div>
          <div class="col-md-12 form-group">
            <?php
            if($appModule != "cars" && $appModule != "ean" && $appModule != "offers" && empty($tripadvisorinfo->rating)){ ?>
            <button  data-toggle="collapse"  type="button" class="writeReview btn btn-primary btn-block mb-10" data-target="#ADDREVIEW" href="#ADDREVIEW" aria-controls="#ADDREVIEW"><i class="icon_set_1_icon-68"></i> <?php echo trans('083');?></button>
                <div class="collapse mt-20" id="ADDREVIEW">
              <div class="card card-body row">
                <form class="form-horizontal row" method="POST" id="reviews-form-<?php echo $module->id;?>" action="" onsubmit="return false;">
                  <div id="review_result<?php echo $module->id;?>" style="width:100%" >
                  </div>
                  <div class="alert resp row" style="display:none"></div>
                  <?php $mdCol = 12; if($appModule == "hotels"){ $mdCol = 8; ?>
                  <div class="col-md-4 go-right">
                    <div class="card card-body card-light">
                      <h3 class="text-center"><strong><?php echo trans('0389');?></strong>&nbsp;<span id="avgall_<?php echo $module->id; ?>"> 1</span> / 10</h3>
                      <div class="clear"></div>
                      <div class="row">
                        <div class="col-md-6 form-horizontal">
                          <div class="form-group">
                            <label class="control-label"><?php echo trans('030');?></label>
                            <div class="clear"></div>
                            <select class="input-sm form-control reviewscore reviewscore_<?php echo $module->id; ?>" id="<?php echo $module->id; ?>" name="reviews_clean">
                              <option value="1"> 1 </option>
                              <option value="2"> 2 </option>
                              <option value="3"> 3 </option>
                              <option value="4"> 4 </option>
                              <option value="5"> 5 </option>
                              <option value="6"> 6 </option>
                              <option value="7"> 7 </option>
                              <option value="8"> 8 </option>
                              <option value="9"> 9 </option>
                              <option value="10"> 10 </option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="control-label"><?php echo trans('031');?></label>
                            <select class="input-sm form-control reviewscore reviewscore_<?php echo $module->id; ?>" id="<?php echo $module->id; ?>" name="reviews_comfort">
                              <option value="1"> 1 </option>
                              <option value="2"> 2 </option>
                              <option value="3"> 3 </option>
                              <option value="4"> 4 </option>
                              <option value="5"> 5 </option>
                              <option value="6"> 6 </option>
                              <option value="7"> 7 </option>
                              <option value="8"> 8 </option>
                              <option value="9"> 9 </option>
                              <option value="10"> 10 </option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="control-label"><?php echo trans('032');?></label>
                            <select class="input-sm form-control reviewscore reviewscore_<?php echo $module->id; ?>" id="<?php echo $module->id; ?>" name="reviews_location">
                              <option value="1"> 1 </option>
                              <option value="2"> 2 </option>
                              <option value="3"> 3 </option>
                              <option value="4"> 4 </option>
                              <option value="5"> 5 </option>
                              <option value="6"> 6 </option>
                              <option value="7"> 7 </option>
                              <option value="8"> 8 </option>
                              <option value="9"> 9 </option>
                              <option value="10"> 10 </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label"><?php echo trans('033');?></label>
                            <select class="input-sm form-control reviewscore reviewscore_<?php echo $module->id; ?>" id="<?php echo $module->id; ?>" name="reviews_facilities">
                              <option value="1"> 1 </option>
                              <option value="2"> 2 </option>
                              <option value="3"> 3 </option>
                              <option value="4"> 4 </option>
                              <option value="5"> 5 </option>
                              <option value="6"> 6 </option>
                              <option value="7"> 7 </option>
                              <option value="8"> 8 </option>
                              <option value="9"> 9 </option>
                              <option value="10"> 10 </option>
                            </select>
                          </div>
                          <input type="hidden" id="loggedin" value="<?php echo $usersession;?>" />
                          <input type="hidden" id="itemid" value="<?php echo $module->id; ?>" />
                          <input type="hidden" id="module" value="<?php echo $appModule;?>" />
                          <input type="hidden" id="addtxt" value="<?php echo trans('029');?>" />
                          <input type="hidden" id="removetxt" value="<?php echo trans('028');?>" />
                          <div class="form-group">
                            <label class="control-label"><?php echo trans('034');?></label>
                            <select class="input-sm form-control reviewscore reviewscore_<?php echo $module->id; ?>" id="<?php echo $module->id; ?>" name="reviews_staff">
                              <option value="1"> 1 </option>
                              <option value="2"> 2 </option>
                              <option value="3"> 3 </option>
                              <option value="4"> 4 </option>
                              <option value="5"> 5 </option>
                              <option value="6"> 6 </option>
                              <option value="7"> 7 </option>
                              <option value="8"> 8 </option>
                              <option value="9"> 9 </option>
                              <option value="10"> 10 </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <div class="col-md-<?php echo $mdCol;?>">
                    <div class="row">
                      <div class="col-md-6">
                        <input class="form-control" type="text" name="fullname" placeholder="<?php echo trans('0390');?> <?php echo trans('0350');?>">
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" type="text" name="email" placeholder="<?php echo trans('0390');?> <?php echo trans('094');?>">
                      </div>
                    </div>
                    <div class="form-group"></div>
                    <textarea class="form-control" type="text" placeholder="<?php echo trans('0391');?>" name="reviews_comments" id="" cols="30" rows="10"></textarea>
                    <div class="form-group"></div>
                    <p class="text-danger"><strong><?php echo trans('0371');?></strong> : <?php echo trans('085');?></p>
                    <input type="hidden" name="addreview" value="1" />
                    <input type="hidden" name="overall" id="overall_<?php echo $module->id; ?>" value="1" />
                    <input type="hidden" name="reviewmodule" value="<?php echo $appModule; ?>" />
                    <input type="hidden" name="reviewfor" value="<?php echo $module->id; ?>" />
                    <div class="form-group">
                      <div class="col-md-12">
                        <label class="control-label">&nbsp;</label>
                        <button type="button" class="btn btn-primary btn-block btn-lg addreview" id="<?php echo $module->id; ?>" ><?php echo trans('086');?></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <?php } ?>
            <?php if($appModule != "offers" && $appModule != "ean"){ ?>
            <?php $currenturl = current_url(); $wishlist = pt_check_wishlist($customerloggedin,$module->id);
              if($allowreg && empty($tripadvisorinfo->rating)){
               if($wishlist){ ?>
            <span class="btn wish btn-danger btn-outline removewishlist btn-block"><span class="wishtext"><i class=" icon_set_1_icon-82"></i> <?php echo trans('028');?></span></span>
            <?php }else{ ?>
            <span class="btn wish addwishlist btn-danger btn-outline btn-block"><span class="wishtext"><i class=" icon_set_1_icon-82"></i> <?php echo trans('029');?></span></span>
            <?php } } } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="fullwidth-horizon-sticky border-0">&#032;</div>
  <!-- is used to stop the above stick menu -->
</div>
<?php if(!empty($module->relatedItems)){ ?>
<section class="bg-white section-sm">
  <div class="container">
    <div class="section-title mb-25">
      <h3><?php if($appModule == "hotels" || $appModule == "ean"){ echo trans('0290'); }else if($appModule == "tours"){ echo trans('0453'); }else if($appModule == "cars"){ echo trans('0493'); } ?></h3>
      <div class="clear"></div>
    </div>
    <div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-10 gap-lg-20 gap-xl-30">
      <?php foreach($module->relatedItems as $item){ ?>
      <div class="col">
        <div class="product-grid-item">
          <a href="<?php echo $item->slug;?>">
            <div class="image">
              <img src="<?php echo $item->thumbnail;?>" class="img-fluid" alt="Image">
            </div>
            <div class="content clearfix">
              <div class="rating-item rating-sm go-text-right">
                <div class="rating-icons">
                  <?php echo $item->stars;?>
                </div>
                <!-- <p class="rating-text text-muted"><span class="bg-primary">9.3</span> <strong class="text-dark">Fabulous</strong> - 367 reviews</p> -->
              </div>
              <div class="short-info">
                <h5 class="RTL"><?php echo character_limiter($item->title,25);?></h5>
                <div class="clear"></div>
                <p class="location go-text-right"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo character_limiter($item->location,20);?></p>

                <?php if($item->price > 0){ ?>
                <div class="mt-10">
                    <?php echo trans( '0368');?>
                    <span class="text-secondary"><strong><?php echo $item->currSymbol; ?><?php echo $item->price;?></strong></span>
                </div>
                <?php } ?>
            </div>
            </div>
          </a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php } ?>
<!------------------------  Related Listings   ------------------------------>
<script>
  //------------------------------
  // Write Reviews
  //------------------------------
  $(function() {
      $('.reviewscore').change(function() {
          var sum = 0;
          var avg = 0;
          var id = $(this).attr("id");
          $('.reviewscore_' + id + ' :selected').each(function() {
              sum += Number($(this).val());
          });
          avg = sum / 5;
          $("#avgall_" + id).html(avg);
          $("#overall_" + id).val(avg);
      });

      //submit review
      $(".addreview").on("click", function() {
          var id = $(this).prop("id");
          $.post("<?php echo base_url();?>admin/ajaxcalls/postreview", $("#reviews-form-" + id).serialize(), function(resp) {
              var response = $.parseJSON(resp);
              // alert(response.msg);
              $("#review_result" + id).html("<div class='alert " + response.divclass + "'>" + response.msg + "</div>").fadeIn("slow");
              if (response.divclass == "alert-success") {
                  setTimeout(function() {
                      $("#ADDREVIEW").removeClass('in');
                      $("#ADDREVIEW").slideUp();
                  }, 5000);
              }
          });
          setTimeout(function() {
              $("#review_result" + id).fadeOut("slow");
          }, 3000);
      });
  })

  //------------------------------
  // Add to Wishlist
  //------------------------------
  $(function() {
      // Add/remove wishlist
      $(".wish").on('click', function() {
          var loggedin = $("#loggedin").val();
          var removelisttxt = $("#removetxt").val();
          var addlisttxt = $("#addtxt").val();
          var title = $("#itemid").val();
          var module = $("#module").val();
          if (loggedin > 0) {
              if ($(this).hasClass('addwishlist')) {
                  var confirm1 = confirm("<?php echo trans('0437');?>");
                  if (confirm1) {
                      $(".wish").removeClass('addwishlist btn-primary');
                      $(".wish").addClass('removewishlist btn-warning');
                      $(".wishtext").html(removelisttxt);
                      $.post("<?php echo base_url();?>account/wishlist/add", {
                          loggedin: loggedin,
                          itemid: title,
                          module: module
                      }, function(theResponse) {});
                  }
                  return false;
              } else if ($(this).hasClass('removewishlist')) {
                  var confirm2 = confirm("<?php echo trans('0436');?>");
                  if (confirm2) {
                      $(".wish").addClass('addwishlist btn-primary');
                      $(".wish").removeClass('removewishlist btn-warning');
                      $(".wishtext").html(addlisttxt);
                      $.post("<?php echo base_url();?>account/wishlist/remove", {
                          loggedin: loggedin,
                          itemid: title,
                          module: module
                      }, function(theResponse) {});
                  }
                  return false;
              }
          } else {
              alert("<?php echo trans('0482');?>");
          }
      });
      // End Add/remove wishlist
  })

  //------------------------------
  // Rooms
  //------------------------------

  $('.collapse').on('show.bs.collapse', function() {
      $('.collapse.in').collapse('hide');
  });
  <?php if($appModule == "hotels"){ ?>
      $('.showcalendar').on('change', function() {
          var roomid = $(this).prop('id');
          var monthdata = $(this).val();
          $("#roomcalendar" + roomid).html("<br><br><div class='matrialprogress'><div class='indeterminate'></div></div>");
          $.post("<?php echo base_url();?>hotels/roomcalendar", {
              roomid: roomid,
              monthyear: monthdata
          }, function(theResponse) {
              console.log(theResponse);
              $("#roomcalendar" + roomid).html(theResponse);
          });
      });

  <?php } ?>
</script>
</div>