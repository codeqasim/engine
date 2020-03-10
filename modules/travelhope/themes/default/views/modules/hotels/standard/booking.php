<style>
  .nav-tabs>li>a {
  background: rgba(0, 0, 0, 0.09);
  border-radius: 0px;
  color: #000 !important;
  padding: 10px;
  font-size: 14px;
  }
  ul.booking-amount-list:before{
  content:"";
  }
  ul.booking-amount-list li {
  width:100% !important;
  float:none !important;
  }
  ul.booking-amount-list{
  display: flex;
  flex-direction: column;
  }
  .booking-amount-list b{
  font-size:15px;
  }
  ul.summary-price-list li {
  border-bottom:none;
  }

  .header-main .header-nav{
  position:relative;
  background:#fff;
  z-index:1;
  }
</style>
<?php if(!empty($error)){ ?>
<h1 class="text-center strong"><?php echo trans('0432');?></h1>
<div class="clear"></div>
<h3 class="text-center"><?php echo trans('0431');?></h3>
<div class="clear"></div>
<?php }else{ ?>
<div class="main-wrapper scrollspy-action">
  <div class="page-wrapper page-payment bg-light">
    <div class="container">
      <div class="row gap-30">
        <div class="col-12 col-lg-4 order-lg-last">
          <aside class="sticky-kit sidebar-wrapper">
            <a href="#" class="product-small-item">
              <div class="image">
                <img src="<?php if($appModule == "flights") echo PT_FLIGHTS_AIRLINES.$module->thumbnail;else echo $module->thumbnail; ?>" class="img-responsive" alt="<?php echo $module->title;?>">
              </div>
              <div class="content">
                <div class="content-body">
                  <div class="rating-item rating-sm rating-inline mb-7 go-text-right">
                    <div class="rating-icons">
                      <?php echo $module->stars;?>
                    </div>
                    <!-- <p class="rating-text text-muted font-10">26 reviews</p> -->
                  </div>
                  <h6><?php echo $module->title;?></h6>
                  <div class="clear"></div>
                  <span class="meta text-muted go-right"><i class="ion-location text-info go-right ml-3"></i> <?php echo $module->location;?></span>
                <div class="clear"></div>
                </div>
                <!-- <div class="price">
                  from <span class="text-secondary font700">$895</span> /night
                  </div> -->
              </div>
            </a>
            <div class="clear"></div>
            <div class="booking-selection-box">
              <div class="content">
                <ul class="booking-amount-list clearfix mb-20">
                  <li class="go-text-right"><b> <?php echo trans('07');?></b><span class="float-right go-left"><?php echo $module->checkin;?></span></li>
                  <li class="go-text-right"><b> <?php echo trans('09');?></b><span class="float-right go-left"><?php echo $module->checkout;?></span></li>
                  <li class="go-text-right"><b> <?php echo trans('060');?> </b> <span class="float-right go-left"><?php echo $stay;?></span></li>
                  <!-- <li><b> <?php echo trans('0412');?> </b> <span class="pull-right"><?php echo $room->currCode;?> <?php echo $room->currSymbol;?> <?php echo $room->perNight;?></span></li> -->
                  <?php if($room->extraBedsCount > 0){ ?>
                  <li>
                    <b> <?php echo trans('0429');?> </b>
                    <span class="float-right">
                    <?php echo $room->currCode;?> <?php echo $room->currSymbol;?><?php echo $room->extraBedCharges; ?>
                    </span>
                  </li>
                  <?php } ?>
                </ul>
                <div class="clear"></div>
                <h5 class="font-serif font400"><?php echo trans('016');?></h5>
                <div class="clear"></div>
                <div class="hotel-room-sm-item mb-30">
                  <div class="the-room-item">
                    <?php foreach($rooms as $room): ?>
                  <div class="mb-30">
                    <h6 class="rtl-mr-0"><i class="fa fa-bed go-right"></i> <?php echo $room->roomscount;?> <?php echo $room->title;?></h6>
                    <div class="clear"></div>
                    <span class="amount go-right">For <?php echo $room->maxAdults;?> Adults</span>

                      <strong class="price float-right d-block text-danger" style="margin-top:-15px;"><?=$room->currSymbol.' '.$room->Info['totalPrice']?></strong>
                      </div>
                      <div class="clear"></div>
                    <?php endforeach; ?>
                    <div class="clearfix">

                    </div>
                  </div>
                </div>
                <hr>
                <ul class="summary-price-list">
                  <li><?php echo trans('0153');?><span class="absolute-right" id="displaytax"><?php echo $currSymbol;?><?php echo $taxAmount;?></span></li>
                  <div class="clear"></div>
                  <li>Extrabeds<span class="absolute-right" id="extrabedcharges"><?php echo $currSymbol;?> <?php echo $extrabedcharges?></span></li>
                  <div class="clear"></div>
                  <li><?php echo trans('0126');?><span class="absolute-right" id="displaydeposit"><?php echo $currSymbol;?> <?php echo $depositAmount?></span></li>
                  <div class="clear"></div>
                  <li class="total"><?php echo trans('0124');?> <span class="text-main absolute-right" id="displaytotal"><?php echo $currSymbol;?> <?php echo $price;?></span></li>
                <div class="clear"></div>
                </ul>
              </div>
            </div>
          </aside>
        </div>
        <div class="col-12 col-lg-8">
          <div class="content-wrapper">
            <div class="success-box d-none d-md-block">
              <div class="icon">
                <span><i class="ri ri-check-square"></i></span>
              </div>
              <div class="content">
                <h4><?php echo trans('045');?></h4>
                <div class="clear"></div>
                <p><?php echo trans('0529');?></p>
              </div>
            </div>
            <?php if($appModule != "ean") { ?>
            <h3 class="heading-title"><span><?php echo trans('088');?></span></h3>
            <div class="clear"></div>
            <div class="bg-white-shadow pt-25 ph-30 pb-40">
              <?php include $themeurl.'views/includes/booking/profile.php'; ?>
            </div>
            
            <div class="mb-40"></div>
            <form id="bookingdetails" class="payment-form-wrapper hidden-xs hidden-sm" action="" onsubmit="return false">
              <?php if(!empty($module->extras)){ ?>
              <div class="clearfix"></div>
              <div class="bg-white-shadow pt-25 ph-30 pb-40">
                <?php include $themeurl.'views/includes/booking/extras.php'; ?>
              </div>
              <!--End step -->
              <?php } ?>
              <script type="text/javascript">
                $(function(){
                    $('.popz').popover({ trigger: "hover" });
                });
              </script>
              <!-- Complete This booking button only starting -->
              <div class="panel panel-default btn_section" style="display:none;">
                <div class="panel-body">
                  <center>
                </div>
              </div>
              <!-- End Complete This booking button only -->
              <input type="hidden" id="itemid" name="itemid" value="<?php echo $module->id;?>" />
              <input type="hidden" name="checkout" value="<?php echo $module->checkout;?>" />
              <input type="hidden" name="checkin" value="<?php echo $module->checkin;?>" />
              <input type="hidden" name="adults" value="<?php echo $module_adults;?>" />
              <input type="hidden" id="couponid" name="couponid" value="" placeholder="coupon id"/>
              <input type="hidden" id="btype" name="btype" value="<?php echo $appModule;?>" />
              <input type="hidden" name="subitemid" value="<?php echo implode(',',$subitemid);?>" />
              <input type="hidden" name="roomscount" value="<?php echo implode(',',$roomscount);?>" />
              <input type="hidden" name="taxAmount" value="<?php echo $taxAmount;?>" />
              <input type="hidden" name="bedscount" value='<?php echo $bedscount;?>' placeholder="bedscount"/>
              <?php  include $themeurl.'views/includes/booking/coupon.php';  ?>
              <div class="clearfix"></div>
            </form>
            <?php if(!empty($module->policy)){ ?>
            <div class="alert alert-info">
              <strong class="RTL go-right"><?php echo trans('045');?></strong><br>
              <p class="RTL" style="font-size:12px"><?php echo $module->policy;?></p>
            </div>
            <?php } ?>
            <p class="RTL go-text-right"><?php echo trans('0416');?></p>
            <div class="form-group">
              <span id="waiting"></span>
              <button type="submit" class="btn btn-success btn-lg btn-block completebook" name="<?php if(empty($usersession)){ echo "guest";}else{ echo "logged"; } ?>"  onclick="return completebook('<?php echo base_url();?>','<?php echo trans('0159')?>');"><?php echo trans('0306');?></button>
            </div>
            <!-- End Other Modules Booking left section -->
            <?php }else{ if($nonRefundable){ ?>
            <div class="alert alert-info"> This rate is non-refundable and cannot be changed or cancelled - if you do choose to change or cancel this booking you will not be refunded any of the payment. </div>
            <?php } ?>
            <input type="hidden" name="pay" value="1" />
            <input type="hidden" name="adults" value="<?php echo $_GET['adults'];?>" />
            <input type="hidden" name="sessionid" value="<?php echo $_GET['sessionid']; ?>" />
            <input type="hidden" name="hotel" value="<?php echo $_GET['hotel']; ?>" />
            <input type="hidden" name="hotelname" value="<?php echo $HotelSummary['name'];?>" />
            <input type="hidden" name="hotelstars" value="<?php echo $hotelStars;?>" />
            <input type="hidden" name="location" value="<?php echo $HotelSummary['city'];?>" />
            <input type="hidden" name="thumbnail" value="<?php echo $HotelImages['HotelImage'][0]['url']; ?>" />
            <input type="hidden" name="roomname" value="<?php echo $roomname; ?>" />
            <input type="hidden" name="roomtotal" value="<?php echo $roomtotal; ?>" />
            <input type="hidden" name="checkin" value="<?php echo $_GET['checkin']; ?>" />
            <input type="hidden" name="checkout" value="<?php echo $_GET['checkout']; ?>" />
            <input type="hidden" name="roomtype" value="<?php echo $_GET['roomtype']; ?>" />
            <input type="hidden" name="ratecode" value="<?php echo $_GET['ratecode']; ?>" />
            <input type="hidden" name="currency" value="<?php echo $currency; ?>" />
            <input type="hidden" name="affiliateConfirmationId" value="<?php echo $eanlib->cid.$affiliateConfirmationId; ?>" />
            <input type="hidden" name="total" value="<?php echo $total; ?>" />
            <input type="hidden" name="tax" value="<?php echo $tax; ?>" />
            <input type="hidden" name="nights" value="<?php echo $nights; ?>" />
            <div class="clearfix"></div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="fullwidth-horizon-sticky border-0">&#032;</div>
      <!-- is used to stop the above stick menu -->
    </div>
  </div>
</div>
<?php } ?>
<script src="<?php echo base_url(); ?>assets/js/booking.js"></script>