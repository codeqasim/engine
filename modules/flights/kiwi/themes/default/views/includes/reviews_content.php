<div class="detail-review-header">
<div class="average-score">
    <div class="progress-radial mx-auto progress-radial-md progress-<?php echo ceil(($avgReviews->overall))*10 ;?>">
        <div class="overlay">
            <div class="progress-radial-inner">
                <div class="caption">
                    <h5><?php echo trans('0396'); ?> <?php echo trans('0340'); ?></h5>
                    <div class="clear"></div>
                    <p class="number text-primary"><?php echo $avgReviews->overall;?></p>
                    <a href="#" class="text-muted"><?php echo $avgReviews->totalReviews; ?> <?php echo trans('035'); ?> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="row gap-10 align-items-center">
        <div class="col-12 col-md-6">
            <p class="line-125"><?php echo trans('0136'); ?></p>
        </div>
        <div class="col-12 col-md-6">
            <select class="chosen-the-basic form-control" tabindex="2">
                <option value="0"><?php echo trans('0396'); ?> (<?php echo $avgReviews->totalReviews; ?>)</option>
            </select>
        </div>
    </div>
    <?php if($appModule == "hotels" && !empty($avgReviews->overall)){ ?>
    <div class="row mt-30 gap-20">
        <div class="col-12 col-sm-6">
            <div class="progress progress-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="10" style="width: <?php echo $avgReviews->clean * 10;?>%"></div>
            </div>
            <p class="progress-label"><?php echo trans('030');?> <span class="text-dark"><?php echo $avgReviews->clean;?></span></p>
        </div>
        <div class="col-12 col-sm-6">
            <div class="progress progress-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="10" style="width:<?php echo $avgReviews->comfort * 10;?>%"></div>
            </div>
            <p class="progress-label"><?php echo trans('031');?> <span class="text-dark"><?php echo $avgReviews->comfort?></span></p>
        </div>
        <div class="col-12 col-sm-6">
            <div class="progress progress-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="10" style="width: <?php echo $avgReviews->location * 10;?>%"></div>
            </div>
            <p class="progress-label"><?php echo trans('032');?><span class="text-dark"><?php echo $avgReviews->location?></span></p>
        </div>
        <div class="col-12 col-sm-6">
            <div class="progress progress-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="10" style="width: <?php echo $avgReviews->facilities * 10;?>%"></div>
            </div>
            <p class="progress-label"><?php echo trans('033');?><span class="text-dark"><?php echo $avgReviews->facilities;?></span></p>
        </div>
        <div class="col-12 col-sm-12">
            <div class="progress progress-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="10" style="width: <?php echo $avgReviews->staff * 10;?>%"></div>
            </div>
            <p class="progress-label"><?php echo trans('034');?><span class="text-dark"><?php echo $avgReviews->staff;?></span></p>
        </div>
    </div>
    <?php } ?>
</div>
</div>
<div class="review-wrapper mb-10">
<?php if(!empty($reviews) > 0){ ?>
<?php if(!empty($reviews)){ foreach($reviews as $rev){ ?>
<div class="review-item">
    <div class="row gap-15">
        <div class="col-12 col-sm-5 col-md-2">
            <!-- <div class="progress-radial progress-radial-sm progress-80">
                <div class="overlay">
                    <div class="progress-radial-inner">
                        <div class="caption">
                            <p class="number">8.4</p>
                        </div>
                    </div>
                </div>
                </div> -->
                <ul class="meta-list d-flex align-items-center" style="margin-top:0">
                <li style="flex:1"><img src="<?php echo base_url(); ?>assets/img/user_blank.jpg"  alt="<?php echo $rev->review_id;?>"></li>
                <li style="flex:1;"><strong><?php echo $rev->review_name;?></strong></li>
                <!-- <li><span class="position-absolute-top"><i class="fas fa-briefcase"></i></span> Business Travelers</li>
                    <li><span class="position-absolute-top"><i class="fas fa-bed"></i></span> Stayed one night in Aug 2016 </li> -->
            </ul>
        </div>
        <div class="col-12 col-sm-7 col-md-10">
            <div class="entry">
                <?php if(!empty($rev->reviewUrl)){ ?>
                <a href="<?php echo $rev->reviewUrl;?>" target ="_blank">
                <?php echo character_limiter($rev->review_comment,1000);?>
                </a>
                <?php }{ ?>
                <?php echo character_limiter($rev->review_comment,1000);?>
                <?php } ?>
            </div>
            <div class="meta">
                <div class="row gap-5">
                    <div class="col-12 col-xl-5">
                        <!-- <span><?php echo trans('0391');?></span> -->
                    </div>
                    <div class="col-12 col-xl-7">
                        <ul class="review-useful">
                            <li><span><?php echo pt_show_date_php($rev->review_date);?></span></li>
                            <!-- <li class="the-label"><a href="#"><i class="fas fa-thumbs-up"></i></a> 2</li>
                                <li class="the-label"><a href="#"><i class="fas fa-thumbs-down"></i></a> 1</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php } ?>
<?php } ?>
</div>