<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-body">
    <form action="<?php echo base_url(ADMINURL); ?>settings" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-3 control-label">Site Name</label>
                <div class="col-sm-6">
                    <input name="sitename" value="<?=$result["sitename"] ?>" type="text" class="form-control" placeholder="Site Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Themes</label>
                <div class="col-sm-6">
                    <select name="theme" class="form-control">
                        <?php
                        foreach ($themes as $theme){
                        ?>
                        <option <?php if($theme == $result["theme"]){ echo "selected";} ?> value="<?=$theme?>"><?=ucfirst($theme)?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Slogan</label>
                <div class="col-sm-6">
                    <input name="slogan" value="<?=$result["slogan"] ?>" type="text" class="form-control" placeholder="slogan">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Copyrights</label>
                <div class="col-sm-6">
                    <input name="copyrights" value="<?=$result["copyrights"] ?>" type="text" class="form-control" placeholder="copyrights">
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label">Business Logo<div class="clearfix"></div><span class="help-block">Only PNG file supported</span></label>
                <div class="col-sm-3">
                   <input type="file" class="form-control upload-image" id="hlogo" name="logo">
                </div>
                <div class="col-md-4">
                <img src="<?= base_url(ASSETS_IMG.$result["logo"])."?".Date('U') ?>" style="max-height: 60px;" class="pull-left hlogo_preview_img img-responsive brand-logos logo">
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label">Favicon<div class="clearfix"></div><span class="help-block">Only PNG file supported</span></label>
                <div class="col-sm-3">
                  <input type="file" class="form-control upload-image" id="hfavicon" name="favicon">
                 </div>
                <div class="col-md-4">
                <img style="max-height: 60px;" class="hlogo_preview_img img-responsive brand-logos favicon" src="<?= base_url(ASSETS_IMG.$result["favicon"])."?".Date('U')  ?>" >
            </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 control-label">Site Color</label>
                <div class="col-sm-3">
                <input name="maincolor" value="<?=$result["maincolor"] ?>" type="color" class="form-control" placeholder="Site Color"/>
                 </div>
            </div>
          <hr>
          <button type="submit" class="btn btn-primary btn-block btn-lg">Save</button>
        </form>
    </div>
</div>
</div>
</div>


<script>
    function readLogo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.logo').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#hlogo").change(function () {
        readLogo(this);
    });


    function readFavicon(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.favicon').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#hfavicon").change(function () {
        readFavicon(this);
    });

</script>