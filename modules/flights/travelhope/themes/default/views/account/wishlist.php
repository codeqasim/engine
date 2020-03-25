<style>
    .dark{
    display: block;
    white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
    }
    .panel-body img{
        float: left;
        margin-right: 20px;

    }
</style>
<div class="panel-body mywishlist">
<?php if(!empty($wishlist)){ ?>
    <?php $count = 0; foreach($wishlist as $wl){ $count++;  ?>
        <div id="wish<?php echo $wl->wishid;?>">
            <div class="row">
                <div class="col-md-5 offset-0 o3">
                    <img alt="" class="go-right img-responsive" style="max-width:96px" src="<?php echo $wl->thumbnail;?>">
                    <a class="dark RTL go-text-right" href="#"><b><?php echo $wl->title;?></b></a>
                    <span class="rating-item go-right"><?php echo $wl->stars;?></span>
                    <br>
                    <small><span class="grey go-right"><?php echo $wl->date;?></span></small>
                    <br>
                </div>
                <div class="col-md-2 offset-0 o2">
                </div>
                <div class="col-md-5 offset-0 o1">
                    <a class="form-group btn btn-sm btn-primary btn-block" href="<?php echo $wl->slug;?>" target="_blank">
                        <?php echo trans('0109');?>
                    </a>
                    <div class="clearfix"></div>
                    <div style="margin:5px"></div>
                    <div class="clearfix"></div>
                    <span class="btn btn-sm btn-block btn-danger removewish remove_btn" id="<?php echo $wl->wishid;?>">  <?php echo trans('0108');?></span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="line2"></div>
        </div>
        <br>
        <?php } }else{  ?>
          <h4><?php echo trans('0110');?></h4>
          <?php } ?>
      </div>
