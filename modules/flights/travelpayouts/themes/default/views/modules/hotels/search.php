<?php
if($search->form_type == "iframe"){
echo $search->form_source;
}else{
?>
<div class="tab-inner menu-horizontal-content">
<div class="form-search-main-01">
<form name="HOTELS" autocomplete="off" action="<?=$search->hotelroute?>" method="GET" role="search">
    <div class="form-inner">
        <div class="row gap-10 mb-15 align-items-end">
            <div class="col-md-3 col-xs-12 o4">
                <div class="form-group">
                    <label class="fr"><?=lang('0120')?></label>
                    <div class="clear"></div>
                    <div class="form-icon-left typeahead__container">
                        <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                        <input class="form-control hotelsearch locationlist<?=$module?>" name="dest" type="search" autocomplete="off" value="<?=$search->hotellocationname?>" required>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 o3">
                <div class="col-inner">
                    <div id="airDatepickerRange-hotel" class="row no-gutters mb-15">
                        <div class="col-md-6 o2">
                            <div class="form-group">
                                <label class="fr"><?php echo trans('07'); ?></label>
                                <div class="clear"></div>
                                <div class="form-icon-left">
                                    <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                    <input type="text" id="checkin" class="form-control form-readonly-control" name="checkin" placeholder="<?=!empty($search->hotelcheckin) ? $search->hotelcheckin : $search->hoteldatecheckin?>" required value="<?=!empty($search->hotelcheckin) ? $search->hotelcheckin : $search->hoteldatecheckin?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 o1">
                            <div class="form-group">
                                <label class="fr"><?php echo trans('09'); ?></label>
                                <div class="clear"></div>
                                <div class="form-icon-left">
                                    <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                    <input type="text" id="checkout" class="form-control form-readonly-control" name="checkout" placeholder="<?=!empty($search->hotelcheckout) ? $search->hotelcheckout : $search->hoteldatetype?>" required value="<?=!empty($search->hotelcheckout) ? $search->hotelcheckout : $search->hoteldatetype?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 o2">
                <div class="col-inner">
                    <div class="row gap-10 mb-15">
                        <!--<div class="col-4 col-sm-6 col-md-4">
                            <div class="form-group form-spin-group">
                                <label class="fr" for="room-amount">Rooms</label>
                                <div class="form-icon-left">
                                    <span class="icon-font text-muted"><i class="bx bx-home-alt"></i></span>
                                    <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                </div>
                            </div>
                        </div>-->
                        <div class="col-12">
                            <div class="col-inner">
                                <div class="form-people-thread">
                                    <div class="row no-gutters align-items-center">
                                        <?php if($search->hotelshow_adult == '1'){?>
                                        <div class="col o2">
                                            <div class="form-group form-spin-group">
                                                <label class="fr" for="room-amount"><?php echo trans('010');?> <small class=" text-muted font10 line-1">(12-75)</small></label>
                                                <div class="clear"></div>
                                                <div class="form-icon-left">
                                                    <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                    <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" name="adults" readonly value="<?=$search->hoteladult?>" placeholder="<?=$search->hoteladult?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } if($search->hotelshow_children == '1'){ ?>
                                        <div class="col 01">
                                            <div class="form-group form-spin-group">
                                                <label class="fr" for="room-amount"><?php echo trans('011');?> <small class="text-muted font10 line-1">(2-12)</small></label>
                                                <div class="clear"></div>
                                                <div class="form-icon-left">
                                                    <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                    <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" name="children"  readonly value="<?=$search->hotelchildren?>" placeholder="<?=$search->hotelchildren?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-xs-12 o1">
            <input type="hidden" name="module_type"/>
            <input type="hidden" name="slug"/>
            <button type="submit"  class="btn btn-primary btn-block">
             <?php echo trans('012'); ?>
            </button>
            </div>
        </div>
    </div>
</form>
<?php if($module == 'Hotels'){?>
<script>
$(function () {
$(".locationlist<?php echo $module; ?>").select2({
width: '100%',
allowClear: true,
maximumSelectionSize: 1,
ajax: {
url: "<?=$search->location_url?>", dataType: 'json', data: function (term) {
return {q: term}
}, results: function (data) {
if(data !=null) {
return {results: data}
}else{
return {results: JSON.parse('<?=$search->hotelloactionsearch?>')}
}
}
},
initSelection: function (element, callback) {
callback({id: 1, text: '<?=(!empty($search->hotellocation))? str_replace( ',',' ',str_replace( '-',' ',$search->hotellocation)) :lang('026'); ?>'})
}
});
});
</script>
<?php }?>
</div>
</div>
<?php } ?>