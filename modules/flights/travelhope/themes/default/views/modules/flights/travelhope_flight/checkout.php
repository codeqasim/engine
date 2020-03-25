<style>
    .nav-tabs>li>a {
    background: rgba(0, 0, 0, 0.09);
    border-radius: 0px;
    color: #000 !important;
    padding: 10px;
    font-size: 14px;
    }
    .nav-tabs>li>a{display:block}
    .nav-tabs>li{flex:1}
    .form-bg-light{background:#f9f9f9}
    .form-control{font-size:1rem!important}
    .nav-tabs>li>a.active{background:#76ce85!important;position:relative}
    .select2-container .select2-choice>.select2-chosen {
    padding-top:7px !important;
    }
    .select2-container .select2-choice {
    float:none !important;
    left: 10px;
    }
    .content-body .ion-location:before{
    float:none !important;
    }
    .select2-container.form-control{
    overflow:hidden;
    }
</style>
<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">
    <?php if ($api_response->status == 'error'): ?>
    <div class="container">
        <div class="alert alert-danger"><?=$api_response->data?></div>
    </div>
    <?php else: ?>
    <div class="page-wrapper page-payment bg-light">
        <div class="container">
            <div class="row gap-30">
                <div class="col-12 col-lg-4 order-lg-last">
                    <aside class="sticky-kit sidebar-wrapper">
                        <a data-toggle="collapse" href="#details" class="product-small-item">
                            <div class="image">
                                <?php $first_segment = $dataAdapter->flights->outbound->segments[0];?>
                                <img  style="height: 100px; padding: 4px 0px 0px 4px;" src="<?=base_url(sprintf('uploads/images/flights/airlines/%s.png', $first_segment->operating_airline->iata))?>" style="width: 100%;" alt="WY">
                            </div>
                            <div class="content">
                                <div class="content-body">
                                    <h6 class="float-none"><?=$first_segment->operating_airline->name?></h6>
                                    <?php foreach($dataAdapter->flights->outbound->segments as $segment): ?>
                                    <span class="meta text-muted"><i class="ion-location text-info"></i> <strong><?= $segment->from_city ?></strong> AIRPORT</span>
                                    <div class="row"></div>
                                    <span class="meta text-muted"><i class="ion-location text-info"></i> <strong><?= $segment->to_city ?></strong> AIRPORT </span>
                                    <div class="row"></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </a>
                        <div id="details" class="panel-collapse collapse">
                            <div class="panel-body px-20 bg-white">
                                <section>
                                    <div>
                                        <h5><strong class="text-primary">Outbound</strong></h5>
                                        <div class="clear"></div>
                                        <?php foreach($dataAdapter->flights->outbound->segments  as $segment): ?>
                                        <div class="row">
                                            <div class="col-md-6 o2">
                                                <h5 class="float-none go-text-right"><?= trans('08');?></h5>
                                                <p><?= date('Y-m-d H:i', $segment->departure_time) ?></p>
                                                <p><?= date('Y-m-d H:i', $segment->arrival_time) ?></p>
                                            </div>
                                            <div class="col-md-6 o1 go-text-right">
                                                <h5 class="float-none"><?= $segment->operating_airline->iata; ?></h5>
                                                <p><?= $segment->from_city; ?></p>
                                                <p><?= $segment->to_city; ?></p>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="float-none go-text-right"><?= trans('0564');?>: <?= $segment->flight_no ?></h5>
                                                <p><?= $segment->operating_airline->name; ?></p>
                                                <p><?= trans('0565');?>: <?php
                                                    $time = ($segment->arrival_time-$segment->departure_time);
                                                    echo gmdate("H:i:s", $time);
                                                    ?></p>
                                            </div>
                                            <!--<div class="col-md-2">
                                                <h5>Class: N/A</h5>
                                                </div>-->
                                        </div>

                                        <!--/ .row -->
                                        <?php endforeach; ?>
                                        <hr>
                                        <?php if($dataAdapter->triptype == 'return'): ?>
                                        <h5 class="float-none go-text-right"><strong class="text-primary">Inbound</strong></h5>
                                        <?php foreach($dataAdapter->flights->inbound->segments as $segment): ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="float-none go-text-right"><?= trans('08');?></h5>
                                                <p><?= date('Y-m-d H:i', $segment->departure_time) ?></p>
                                                <p><?= date('Y-m-d H:i', $segment->arrival_time) ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="float-none go-text-right"><?= $segment->operating_airline->iata; ?></h5>
                                                <p><?= $segment->from_city; ?></p>
                                                <p><?= $segment->to_city; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class='float-none go-text-right'><?= trans('0564');?>: <?= $segment->flight_no ?></h5>
                                                <p><?= $segment->operating_airline->name; ?></p>
                                                <p><?= trans('0565');?>: <?= date('H:i', $segment->departure_time) ?></p>
                                            </div>
                                            <!--<div class="col-md-2">
                                                <h5>Economy</h5>
                                                </div>-->
                                        </div>
                                        <!--/ .row -->
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                    </div>
                                </section>
                            </div>
                            <div class="panel-footer">&nbsp;</div>
                        </div>
                        <div class="clear"></div>
                        <div class="booking-selection-box">
                            <div class="content">
                                <h5 class="font-serif font400"><?=lang('0411')?></h5>
                                <div class="clear"></div>
                                <ul class="booking-amount-list clearfix mb-20">
                                    <li>
                                        <?php
                                        foreach($dataAdapter->flights->outbound->segments as $key=>$value) {
                                            if($key == 0) { ?>
                                                <?=lang('0472')?><?=lang('08')?><span class="font700"><?=  date('Y-m-d H:i', $value->departure_time) ?> </span>
                                            <?php }
                                        }
                                        ?>
                                    </li>
                                    <li class="text-right">
                                        <?php
                                        $numItems = count($dataAdapter->flights->outbound->segments);
                                        $i = 0;
                                        foreach($dataAdapter->flights->outbound->segments as $key=>$value) {
                                            if(++$i === $numItems) { ?>
                                                <?=lang('0606')?><?=lang('08')?><span class="font700"><?= date('Y-m-d H:i',  $value->arrival_time) ?></span>
                                            <?php }
                                        }
                                        ?>
                                    </li>
                                </ul>
                                <h5 class="font-serif font400"><?=lang('0127')?></h5>
                                <div class="clear"></div>
                                <div class="hotel-room-sm-item mb-30">
                                    <div class="the-room-item">
                                        <h6><?=lang('0528')?> <?=lang('0259')?></h6>
                                        <div class="clear"></div>
                                            <span class="amount go-right mr-15"><?=lang('0585')?><?=lang('0442')?></span>
                                           <div class="clear"></div>
                                            <!--<span class="price"></span>-->
                                        
                                    </div>
                                    <div class="the-room-item">
                                        <?php
                                        foreach($dataAdapter->flights->outbound->segments as $key=>$value) {
                                            if($key == 0) { ?>
                                                <h6><i class="ion-location text-info"></i> <?=lang('0273')?>: <?= $value->from_city; ?></h6>
                                            <?php }
                                        }
                                        ?>
                                        <div class="clear">
                                            <h6><i class="ion-location text-info"></i> <?=lang('0274')?>: <?= $segment->to_city; ?></h6>
                                            <div class="clear"></div>
                                            <!--<span class="price"></span>-->
                                        </div>
                                    </div>
                                </div>
                                <h5 class="font-serif font400"><?=lang('070')?></h5>
                                <div class="clear"></div>

                                <ul class="summary-price-list">
                                    <li><?=lang('0562')?> <span class="absolute-right"><?= $dataAdapter->currency.' '.$dataAdapter->total; ?></span></li>
                                    <div class="clear"></div>
                                    <li><?=lang('0563')?> <span class="absolute-right"><?= $dataAdapter->book_fee; ?> </span></li>
                                    <div class="clear"></div>
                                    <li class="total"><?php echo trans('0124');?><span class="text-main absolute-right"><?= $dataAdapter->currency.' '.$dataAdapter->total; ?></span></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="content-wrapper">
                        <div class="success-box">
                            <div class="icon">
                                <span><i class="ri ri-check-square"></i></span>
                            </div>
                            <div class="content">
                                <h4><?=lang('0566')?></h4>
                                <div class="clear"></div>
                                <p class="go-text-right"><?=lang('045')?></p>
                            </div>
                        </div>
                        <?php if($userAuthorization == 0){?>
                        <div class="alert alert-warning pt-10 pb-10 mb-30" role="alert"><i class="fas fa-info-circle mr-5"></i><?=lang('0473')?> <?=lang('0294')?>? <a href="<?php echo base_url(); ?>login" class="letter-spacing-0"><?=lang('0236')?></a></div>
                        <?php } ?>
                        <div class="alert alert-danger text-center font-size-h2" id="countdown">00:00</div>
                        <?php if($userAuthorization == 0){?>
                        <div class="bg-white-shadow pt-25 ph-30 pb-40">
                            <form action="" method="POST" id="loginform" class="booking_page">
                                <div class=" row form-group">
                                    <div class="col-md-12 col-12">
                                        <label><?php echo trans('094');?> <span class="font12 text-danger">*</span></label>
                                        <input class="form-control form-bg-light" type="text" placeholder="Email" name="username" id="username"  value="">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 col-12">
                                        <label><?php echo trans('095');?> <span class="font12 text-danger">*</span></label>
                                        <input class="form-control form-bg-light" type="password" placeholder="<?php echo trans('095');?>" name="password" id="password"  value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php } ?>
                        <form class="bg-white-shadow pt-25 ph-30 pb-40 mt-30" name="ticketBookingForm">
                            <h3 class="heading-title mt-30"><span><?=lang('0460')?></span></h3>
                            <div class="clear"></div>
                            <p class="post-heading go-text-right"><?=lang('045')?></p>
                            <div>
                                <div class="row gap-20 mb-0">
                                    <div class="col-md-12">
                                        <?php foreach ($searchForm->getPassengers() as $index => $passenger): ?>
                                            <section>
                                                <h4 class="mb-0"><strong class="text-primary"><?= ucfirst($passenger) .' '. ($index + 1)?></strong></h4>
                                               <div class="clear"></div>
                                               <hr>
                                                <div class="row row-reverse">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="title"><?=lang('089')?></label>
                                                            <select class="form-control" id="title" name="title[]" required>
                                                                <option value="Mr"><?php echo trans('0567');?>.</option>
                                                                <option value="Ms"><?php echo trans('0568');?>.</option>
                                                                <option value="Master"><?php echo trans('0569');?>.</option>
                                                                <option value="Miss"><?php echo trans('0570');?>.</option>
                                                                <option value="Mrs"><?php echo trans('0571');?>.</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="name"><?=lang('0350')?></label>
                                                            <input type="text" class="form-control" id="name" name="name[]" required value="<?php echo $fakedata->name; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="surname">Surname</label>
                                                            <input type="text" class="form-control" id="surname" name="surname[]" required value="<?php echo $fakedata->surname; ?>">
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email"><?=lang('094')?></label>
                                                            <input type="text" class="form-control" id="email" name="email[]" required value="<?php echo $fakedata->email; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone"><?=lang('092')?></label>
                                                            <input type="text" class="form-control" id="phone" name="phone[]" required value="<?php echo $fakedata->phone_number; ?>">
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row row-reverse">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="birthday">Birthday</label>
                                                            <input type="text" class="form-control" id="birthday" name="birthday[]" required value="<?php echo $fakedata->birthday; ?>">
                                                            <small class="text-muted">e.g 1990-01-01</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cardno"><?=lang('0523')?></label>
                                                            <input type="text" class="form-control" id="cardno" name="cardno[]" required value="<?php echo $fakedata->card_number; ?>">
                                                            <small class="text-muted">number of a travel document (ID or passport)</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row row-reverse">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="expiration"><?=lang('0329')?></label>
                                                            <input type="text" class="form-control" id="expiration" name="expiration[]" required value="<?php echo $fakedata->expiration; ?>">
                                                            <small class="text-muted">expiration of travel document (e.g 2020-01-01)</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nationality"><?=lang('0572')?></label>
                                                            <select style="padding: 0px; height: 40px;" name="nationality[]" class="form-control" id="nationality">
                                                                <?php foreach ($countries as $country): ?>
                                                                    <option value="<?=$country['iso']?>"><?=$country['name']?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                            <small class="text-muted">nationality of the passenger (alpha-2 format e.g PK)</small>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">   
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <!--                                    <label for="hold_bags">Hold Bags:</label>-->
                                                            <input type="hidden" class="form-control" id="hold_bags" name="hold_bags[]" required value="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <!--                                    <label for="category">Category:</label>-->
                                                            <input type="hidden" class="form-control" id="category" name="category[]" required value="<?php echo $passenger; ?>">
                                                        </div>
                                                    </div>
                                                    </div>
                                            
                                            </section>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="mb-40"></div>
                            <h3 class="heading-title"><span><?=lang('0407')?></span></h3>
                            <div class="clear"></div>
                            <p class="post-heading go-text-right"><?=lang('0159')?></p>
                            <div class="bg-white-shadow pt-25 ph-30 pb-40">
                                <div class="clear mb-20"></div>
                                <h6><?=lang('0265')?></h6>
                                <div class="clear"></div>
                                <div class="payment-option-box">
                                    <div class="payment-option-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="paymentOptionCreditBar" name="paymentOption" class="custom-control-input" checked  />
                                            <label class="custom-control-label" for="paymentOptionCreditBar"><?=lang('0609')?></label>
                                            <div class="clear"></div>
                                            <div class="payment-desc">
                                                <div class="card-form">
                                                    <div class="row gap-20 mb-0 row-reverse">
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label  class="required"><?php echo trans('0330');?></label>
                                                                <div class="clear"></div>
                                                                <select class="form-control" name="name_card" id="cardtype" required>
                                                                    <option value=""><?php echo trans('0573');?></option>
                                                                    <option value="AX"><?php echo trans('0574');?></option>
                                                                    <option value="DS"><?php echo trans('0575');?></option>
                                                                    <option value="CA" <?=($fakedata->sandbox_mode) ? 'selected' : ''?>><?php echo trans('0576');?></option>
                                                                    <option value="VI"><?php echo trans('0577');?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label  class="required"><?php echo trans('0316');?></label>
                                                                <input type="text" class="form-control" name="card_no" value="<?php echo $fakedata->card_number; ?>" required id="card-number" placeholder="Credit Card Number">
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="row row-reverse">
                                                        <div class="col-md-3">
                                                            <div class="form-group ">
                                                                <label  class="required  go-right font-size-12"><?php echo trans('0329');?></label>
                                                                <select class="form-control" name="month" id="expiry-month" required>
                                                                    <option value=""><?php echo trans('0578');?></option>
                                                                    <option value="01"><?php echo trans('0317');?> (01)</option>
                                                                    <option value="02"><?php echo trans('0318');?> (02)</option>
                                                                    <option value="03"><?php echo trans('0319');?> (03)</option>
                                                                    <option value="04"><?php echo trans('0320');?> (04)</option>
                                                                    <option value="05"><?php echo trans('0321');?> (05)</option>
                                                                    <option value="06"><?php echo trans('0322');?> (06)</option>
                                                                    <option value="07"><?php echo trans('0323');?> (07)</option>
                                                                    <option value="08"><?php echo trans('0324');?> (08)</option>
                                                                    <option value="09"><?php echo trans('0325');?> (09)</option>
                                                                    <option value="10"><?php echo trans('0326');?> (10)</option>
                                                                    <option value="11"><?php echo trans('0327');?> (11)</option>
                                                                    <option value="12" <?=($fakedata->sandbox_mode) ? 'selected' : ''?>><?php echo trans('0328');?> (12)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label  class="required go-right">&nbsp;</label>
                                                                <select class="form-control" name="year" id="expiry-year" required>
                                                                    <option value=""><?php echo trans('0579');?></option>
                                                                    <?php for($y = date("Y");$y <= date("Y") + 10;$y++): ?>
                                                                    <?php
                                                                        $selected = "";
                                                                        if ($fakedata->sandbox_mode) {
                                                                                if ($y == (date("Y") + 10)) {
                                                                                        $selected = 'selected';
                                                                                }
                                                                        }
                                                                        ?>
                                                                    <option value="<?php echo $y?>" <?=$selected?>><?php echo $y; ?></option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label  class="required go-right"><?php echo trans('0331');?></label>
                                                                <input type="text" class="form-control" name="security_code" required id="cvv" placeholder="<?php echo trans('0331');?>" value="<?php echo $fakedata->cvv; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label  class="required go-right">&nbsp;</label>
                                                            <img src="<?php echo base_url(); ?>assets/img/cc.png" class="img-responsive" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="payment-option-item">
                                        <div class="custom-control custom-radio">
                                                <input type="radio" id="paymentOptionPaypal" name="paymentOption" class="custom-control-input">
                                                <label class="custom-control-label" for="paymentOptionPaypal">Paypal</label>
                                                <div class="clear"></div>
                                                <div class="payment-desc">
                                                        <p><?=lang('0610')?></p>
                                                        <a href="#" class="btn btn-primary"><?=lang('0611')?></a>
                                                </div>
                                        </div>
                                        </div>-->
                                </div>
                            </div>
                    </div>
                    <!--/ ."panel panel-default: Payment Information -->
                    <div class="alert alert-danger mt-20">
                    <strong class="RTL go-right"><?php echo trans('045');?></strong>
                    <hr>
                    <p class="RTL" style="font-size:12px"><?php echo trans('0461');?></p>
                    </div>
                    <div class="mb-40"></div>
                    <div class="custom-control custom-checkbox form-group acceptterm">
                    <input type="checkbox" class="custom-control-input" id="acceptTerm" />
                    <label class="custom-control-label" for="acceptTerm"><?=lang('0416')?></label>
                    </div>
                    <input type="hidden" name="dataAdapter" value='<?=json_encode($dataAdapter)?>'>
                    <input type="hidden" name="flight_id" value='<?=$flight_id?>'>
                    <button onclick="scrollWin(0, -15000)" type="submit" class="btn btn-primary btn-lg btn-block completebook upClick" id="confirmBooking"><?php echo trans('0335');?></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="fullwidth-horizon-sticky border-0">&#032;</div>
        <!-- is used to stop the above stick menu -->
    </div>
</div>
</div>
<!-- end Main Wrapper -->
<!--/ .scroll up -->
<script>
    function scrollWin(x, y) {
    window.scrollBy(x, y);
    }
</script>
<!--/ .scroll up -->
<script>
    $(document).ready(function() {
    $(window).keydown(function(event){
    if(event.keyCode == 13) {
    event.preventDefault();
    return false;
    }
    });
    $("[name='ticketBookingForm']").on('submit', function(e) {
    e.preventDefault();
    var payload = $(this).serializeArray();
    $('.loader-wrapper').show();
    $.post( base_url + 'flight/cart/placeorder', payload, function(response) {
    $('.loader-wrapper').hide();
    $('#body-section').html(response.body);
    });
    });
    });
</script>
<script>
    function scrollWin(x, y) {
            window.scrollBy(x, y);
    }

    $(document).ready(function() {
            $("[name^=nationality]").select2();

            $(window).keydown(function(event){
                    if(event.keyCode == 13) {
                            event.preventDefault();
                            return false;
                    }
            });

            const countdownBox = 'countdown';

            // Set the date we're counting down to
            var expiry_minutes = '10';
            var countDownDate = new Date(new Date().getTime() + expiry_minutes * 60000).getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                    // Get todays date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in the element with id="demo"
                    document.getElementById(countdownBox).innerHTML = minutes + "m " + seconds + "s ";

                    // If the count down is finished, write some text
                    if (distance < 0) {
                            clearInterval(x);
                            // Unhold seats.
                            if (v.seats.length > 0) {
                                    v.unHoldSeat(v.seats);
                            } else {
                                    document.getElementById(countdownBox).innerHTML = "EXPIRED";
                                    setTimeout(function () { window.location.href = '<?=base_url()?>'; }, 3000);
                            }
                    }
            }, 1000);

            var flights_checked = '<?=$is_flight_valid?>';
            function get_flight_details () {
                    $.ajax({
                            type: "POST",
                            url: "<?=base_url('thflights/flight_recheck')?>",
                            data: {
                                    "kiwi_local_session_key": '<?=$kiwi_local_session_key?>'
                            },
                            beforeSend: function () {
                                    $('.completebook').text('Availability Checking....');
                            },
                            success: function (data) {
                                    console.log(data);
                                    if (parseInt(data.is_flight_valid) == 1) {
                                            $('#confirmBooking').attr("disabled", false);
                                            $('.completebook').text('Complete Booking');
                                    } else {
                                            setTimeout(function () {
                                                    get_flight_details();
                                            }, 5000);
                                    }
                            }
                    });
            }
            if (flights_checked == 0) {
                    console.log('recheck flight');
                    get_flight_details();
            } else {
                    console.log('ok for booking');
            }

            function do_booking(form) {
                    var payload = form.serializeArray();
                    $('.loader-wrapper').show();
                    $('#confirmBooking').attr("disabled", true);
                    $.post( base_url + 'thflights/booking', payload, function(response) {
                            console.log(response);
                            $('.loader-wrapper').hide();
                            $('#body-section').html(response.body);
                            $('#confirmBooking').attr("disabled", false);
                            if (response.status == true) {
                                    window.location.href = response.invoice_url;
                            } else {
                                    var message = response.error.more_info;
                                    if (message == undefined) {
                                            message = response.error.message;
                                    }
                                    alert(message);
                            }
                    });
            }
            const auth_check = '<?=$userAuthorization?>';
            $("[name='ticketBookingForm']").on('submit', function(e) {
                    e.preventDefault();
                    var form = $(this);

                    if (auth_check == 1) {
                            do_booking(form);
                    } else {
                            // Authenticate first
                            var fEmail = $('#loginform [name=username]');
                            var fPassword = $('#loginform [name=password]');
                            const payload = {
                                    email: fEmail.val(),
                                    password: fPassword.val()
                            };
                            $.post(base_url + 'auth/signin', payload, function (response) {
                                    if (response.status == 'success') {
                                            do_booking(form);
                                    } else {
                                            fEmail.css('border', 'solid 1px red');
                                            fPassword.css('border', 'solid 1px red');
                                            alert('Authentication Error: ' + response.message);
                                    }
                            });
                    }
            });
    });
</script>
<?php endif; ?>
<style>
    .select2-choice {
    height: 36px!important;
    line-height: 60px!important;
    }
    .select2-container .select2-choice>.select2-chosen {
    line-height: 25px;
    }
</style>
<br><br><br>