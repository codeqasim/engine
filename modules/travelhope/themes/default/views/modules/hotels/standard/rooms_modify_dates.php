<form action="" name="fModifySearch" method="GET" >
    <div id="airDatepickerRange-general" class="row align-items-end">
        <div class="col-12 col-sm-6 col-sm-6 col-md-12">
            <div class="form-group">
                <label><?php echo trans('07');?></label>
                <div class="clear"></div>
                <div class="form-icon-left">
                    <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                    <input type="text" id="checkin" placeholder="<?php echo trans('07');?>" name="checkin"  class="form-control form-readonly-control" value="<?=$checkin?>" readonly>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-sm-6 col-md-12">
            <div class="form-group">
                <label><?php echo trans('09');?></label>
                <div class="clear"></div>
                <div class="form-icon-left">
                    <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                    <input type="text" id="checkout" name="checkout" class="form-control form-readonly-control" placeholder="<?php echo trans('09');?>" value="<?=$checkout?>" readonly>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-sm-6 col-md-12">
            <div class="form-group form-spin-group">
                <label for="adult-amount"><?php echo trans('010');?></label>
                <div class="clear"></div>
                <div class="form-icon-left">
                    <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                    <input type="text"  name="adults" class="form-control touch-spin-03 form-readonly-control" value="<?php echo $modulelib->adults;?>" maxlength = '10' readonly />
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-sm-6 col-md-12">
            <div class="form-group form-spin-group">
                <label for="child-amount"><?php echo trans('011');?></label>
                <div class="clear"></div>
                <div class="form-icon-left">
                    <span class="icon-font"><i class="dripicons-user text-muted"></i></span>
                    <input type="text" name="child" class="form-control touch-spin-03 form-readonly-control"  value="<?php echo $modulelib->children;?>" readonly />
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-sm-6 col-md-12">
    <div class="form-group">
        <button class="btn btn-secondary btn-block mt-20 btn-action btn-lg loader" type="submit"><?php echo trans('0106');?></button>
    </div>
</div>
</div>
<input type="hidden" name="hotelname" value="<?php echo $hotelname; ?>" />
<input type="hidden" name="city" value="<?php echo $city; ?>" />
</form>
<script>
$("form[name=fModifySearch]").submit(function (e) {
e.preventDefault();
var values = {};
$.each($(this).serializeArray(), function(i, field) {
values[field.name] = field.value;
});
redirectUrl = values.city+'/'+values.hotelname+'/'+values.checkin.replace(/\//g,'-')+'/'+values.checkout.replace(/\//g,'-')+'/'+values.adults+'/'+values.child;
window.location.href = '<?=base_url('hotels/detail/')?>'+redirectUrl;
});
</script>