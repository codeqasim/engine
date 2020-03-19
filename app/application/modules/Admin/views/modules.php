<a href="<?=base_url('admin/settings/update_modules')?>" class="btn btn-success" style="margin-top:25px;">Update</a>
<a class="btn btn-success abc" style="display: none; position: fixed; margin-top:25px; margin-left: 210px;"></a>
<a class="btn btn-danger xyz" style="display: none; position: fixed; margin-top:25px; margin-left: 210px;"></a>
<div class="row">
    <?php foreach (array_keys($modules) as $item) { ?>
        <div class="col-md-6 pull-left col-xs-12" style="margin-bottom:25px; margin-top:25px">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="" style=";background:#234cbf">
                    <a style=" background: transparent !important;" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#<?= $item ?>" aria-expanded="true" aria-controls="hotels">
                        <h4 class="panel-title text-center" style="font-weight: bold;color:#fff">
                            <?= $item ?>          </h4>
                    </a>
                </div>
                <div id="<?= $item ?>>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="">
                    <div class="panel-body" style="padding:5px">
                        <div class="zebra"
                             style="width:100%;font-size: 15px;background: #e9f1fa; margin: 0px 0 7px; padding: 10px;">
                            <strong>Module Name</strong>
                            <span class="pull-right">
            <label class="control control--checkbox ellipsis pull-right"><strong>Status</strong></label>
            <label class="control control--checkbox ellipsis pull-right"
                   style="margin-right:-20px"><strong>Order</strong></label>
            <label class="control control--checkbox ellipsis pull-right"><strong><i
                            class="fa fa-cog"></i> Setting</strong></label>
          </span>
                        </div>
                        <?php foreach ($modules[$item] as $subItem){  ?>
                        <div class="zebra" style="width:100%;font-size: 15px;">
                            <?=$subItem["name"]?> <span class="pull-right">
                        
            <button class="btn btn-danger btn-sm pull-left" onclick="getSettings('<?=$subItem["id"]?>')" style="height:22px;line-height: 12px;margin-right: 5px;">
                <i class="fa fa-cog"></i> Settings</button>
        
                        <input value="<?=$subItem["ordering"]?>" data-modulename="Hotels" type="number" id="<?=$subItem["id"]?>"
                               class="input-sm form-control pull-left Hotels"
                               style="width:60px;height:22px;margin-right: 5px;">

            <label class="control control--checkbox ellipsis pull-right">
              <input class="check" type="checkbox" id="<?=$subItem["id"]?>" name="" value="<?=$subItem["active"]?>" data-value="Hotels" data-item="hotels">
              <div class="control__indicator"></div>
            </label>
          </span>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <span style="position: absolute; top: 14px; font-size: 17px; color: #fff; right: 32px; font-weight: bold; background: rgba(238, 238, 238, 0.22); padding: 3px; border-radius: 48px; width: 30px; text-align: center;">7</span>
        </div>
    <?php } ?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Settings</h4>
            </div>
            <div class="modal-body">
                <form id="form">
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" placeholder="OTA ID" name="ota_id" class="form-control" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                        <input type="hidden" name="module_id" class="form-control" id="module_id">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom:10px">
                        <input type="text" name="" class="form-control" id="">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
            </form>
        </div>

    </div>
</div>
<script>
    function getSettings(id) {
        $( "#form" ).trigger("reset");

        $("#module_id").val(id);
        $.ajax({
            url: "<?=base_url('admin/settings/module_data?id=')?>"+id,
        }).done(function( data ) {
            $("#myModal").modal('show');
            var data_json = JSON.parse(data);
            var credentials = JSON.parse(data_json.credentials);
            if(credentials != null && credentials != undefined){
                Object.keys(credentials).forEach(function(key) {
                    $("input[name="+key+"]").val( credentials[key]);
                });
            }

 

        });
        $( "#form" ).submit(function( event ) {
            event.preventDefault();
            var serilize_form = $( "#form" ).serialize();
            $.ajax({
                url: "<?=base_url('admin/settings/update_credentials')?>",
                method: "post",
                data: serilize_form,
            }).done(function( html ) {
                alert('Data Save Successfully');
                $("#myModal").modal('hide');
            });

        });

    }

    $('.Hotels').click(function(){
        var ids =  $(this).attr('id');
        var orderid= $("#"+ids).val();
                $.ajax({ 
        type: 'ajax',
        method: 'post',
        async: false,
        url: '<?php echo base_url() ?>admin/settings/updateorder',
        data:{orderid:orderid,ids:ids},
        dataType: 'json',
        success: function(response){
        $('.abc').html('order update successfully').fadeIn('slow');
        $('.abc').html('order update successfully').fadeOut('slow');
        },
        error: function(){
        $('.xyz').html('order update Error').fadeIn('slow');
        $('.xyz').html('order update Error').fadeOut('slow');
        }
        });
        // location.reload();
    })

    $('.check').click(function(){
        var checkbox = $("input[type='checkbox']").val();
        var id =  $(this).attr('id');
        // alert(id);
        // alert(checkbox);
        $.ajax({ 
        type: 'ajax',
        method: 'post',
        async: false,
        url: '<?php echo base_url() ?>admin/settings/updatestatus',
        data:{checkbox:checkbox,id:id},
        dataType: 'json',
        success: function(response){
        alert('Status update successfully');
        },
        error: function(){
        alert('Status update Error');
        }
        });
    })
</script>

