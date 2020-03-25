<div class="header-mob hidden-xs">
  <div class="container">
    <div class="col-xs-2 text-leftt">
      <a data-toggle="tooltip" data-placement="right" title="<?php echo trans('0533'); ?>"
        class="icon-angle-left pull-left mob-back" onclick="goBack()"></a>
      </div>
      <div class="col-xs-1 text-center pull-right hidden-xs ttu hidden-lg">
        <div class="row">
          <a class="btn btn-success btn-xs btn-block" data-toggle="collapse" data-target="#modify"
          aria-expanded="false" aria-controls="modify">
          <i class="icon-filter mob-filter"></i>
          <span><?php echo trans('0106'); ?></span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="search_head">
  <?php echo searchForm("Juniper", $search_param); ?>
</div>
<br>
<div class="container">
  <?php  //dd($search_param); ?>
  <div class="row">
    <div class="col-md-3">
      <form autocomplete="off" name="juniper_search_2" id="juniper_search" onsubmit="return validate_juniper_form();" action="<?php echo base_url('hotelsj/'); ?>" method="post">
        <input type="hidden" name="juniper_nationality" value="<?=$search_param['nationality']?>">
        <input type="hidden" name="juniper_city" value="<?php echo $search_param['city']?>">
        <input type="hidden" name="juniper_checkin_date" value="<?=$search_param['checkin_date']?>">
        <input type="hidden" name="juniper_checkout_date" value="<?=$search_param['checkout_date']?>">
        <input type="hidden" name="type" value="<?=$search_param['room_type']?>">
        <input type="hidden" name="required" value="<?=$search_param['room_required']?>">
        <div style="padding:10px">
          <div class="textline">
            <span class="filterstext"><span><i class="icon_set_1_icon-95"></i><?=trans('0191')?></span></span>
          </div>
        </div>
        <br>
        <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse1">
          <?php echo trans('0137');?> <?php echo trans('069');?> <span class="collapsearrow"></span>
        </button>
        <div id="collapse1" class="collapse in">
          <div class="hpadding20">
            <br>
            <?php for($radios = 0; $radios < 5; $radios++): ?>
              <?php $checked = ($radios+1 == $search_param['stars'])?'checked':''; ?>
              <div class="rating" style="font-size: 14px;">
                <div class="go-right">
                  <label class="go-left" for="<?=$radios+1?>">
                    <div class="iradio_square-grey" style="position: relative;">
                      <input type="radio" <?=$checked?> id="<?=$radios+1?>" name="stars" class="go-right radio" value="<?=$radios+1?>" style="position: absolute; opacity: 0;">
                      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                    </div>
                    <i class="fa <?=($radios >= 0)?'star fa-star':'fa-star-o'?>"></i>
                    <i class="fa <?=($radios >= 1)?'star fa-star':'fa-star-o'?>"></i>
                    <i class="fa <?=($radios >= 2)?'star fa-star':'fa-star-o'?>"></i>
                    <i class="fa <?=($radios >= 3)?'star fa-star':'fa-star-o'?>"></i>
                    <i class="fa <?=($radios >= 4)?'star fa-star':'fa-star-o'?>"></i>
                  </label>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
        <br>
        <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse2">
          <?php echo trans('0221');?> <span class="collapsearrow"></span>
        </button>
        <?php
        $category = array('T' => 'touristic', 'ST' => 'superior touristic' , 'F' => 'first category' , 'SF' => 'superior first category' , 'D'=>'deluxe');
        ?>
        <div id="collapse2" class="collapse in">
          <div class="hpadding20">
            <br>
            <?php foreach ($category as $key => $value) { ?>
              <?php $checked = ($key == $search_param['category'])?'checked':''; ?>
              <div class="rating" style="font-size: 14px;">
                <div class="go-right">
                  <label class="go-left" for="<?=$key?>">
                    <div class="iradio_square-grey" style="position: relative;">
                      <input type="radio" <?=$checked?> id="<?=$key?>" name="category" class="go-right radio" value="<?=$key?>" style="position: absolute; opacity: 0;">
                      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                    </div>
                    <?=ucwords($value)?>
                  </label>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary br25 btn-block loader"><?=trans('012')?></button>
      </form>
    </div>
    <div class="col-md-9 col-xs-12">
      <?php // dd($hotel_data); ?>
      <table class="table table-condensed table-striped">
        <?php if (empty($hotel_data['segments']['0']['errors'])) {
         foreach ($hotel_data['segments'] as $key => $data_hotel) {
          if (!empty($data_hotel['hotel_price'])) {
            ?>
            <tr>
              <td class="wow fadeIn p-10-0">
                <div class="col-md-3 col-xs-4 go-right rtl_pic">
                  <div class="img_list">
                    <a href="#">
                      <img <?php echo lazy(); ?> class="center-block loader" data-lazy="<?php echo base_url('uploads/images/hotels/slider/thumbs/1.jpg');?>" alt="<?=$data_hotel['hotel_name']?>">
                      <div class="short_info"></div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 col-xs-4 go-right">
                  <div class="row">
                    <h4 class="RTL go-text-right mt0 mb4 list_title"><a href="<?php echo site_url('hotelsj/details/'.$data_hotel['hotel_code']); ?>"><b><?=$data_hotel['hotel_name']?></b></a></h4>
                    <i style="margin-left: -3px;" class="mob-fs14 icon-location-6 go-right"></i><?php echo $data_hotel['hotel_address'];?>
                        <!-- <a class="go-right ellipsisFIX go-text-right mob-fs14" href="javascript:void(0);" onclick="" title="">
                         
                        </a> -->
                        <?php for($i=0;$i<5;$i++):  if($i < $data_hotel['hotel_stars']):
                         ?><i class="star fa fa-star"></i>
                         <?php else: ?>
                           <i class="star fa fa-star-o"></i>
                         <?php endif; endfor; ?>
                       </div>
                     </div>
                     <div class="col-md-3 col-xs-4 col-sm-4 go-left pull-right price_tab">
                      <div class="row">
                       <div class="fs26 text-center">
                        <small><?php echo $data_hotel['hotel_currency'];?></small> <b><?php echo calculate_commission($data_hotel['hotel_price'],$commission);?></b>
                      </div>
                    </div>
                    <a href="<?php echo site_url('hotelsj/details/'.$data_hotel['hotel_code']); ?>">
                      <button class="btn btn-primary br25 loader loader btn-block"><?php echo trans('0177');?></button>
                    </a>
                  </div>
                </td>
              </tr>
            <?php } } } else { ?>
              <tr>
                <td>
                  <div class="alert alert-danger">
                    <?=$hotel_data['segments']['0']['errors'];?>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
