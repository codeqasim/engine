<?php if(isModuleActive( 'cars')){ ?>
</div>
<div class="featured">
<div class="container">
<div class="section-title">
<h2 class="text-center float-none"><?php echo trans('0490');?></h2>
</div>
<div role="tabpanel" class="tab-pane active" id="MenuHorizon28_01">
<div class="tab-inner">
<div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-10 gap-md-20 gap-xl-30">
<?php foreach($featuredCars as $item){ ?>
<div class="col">
<div class="product-grid-item">
    <a href="<?php echo $item->slug;?>">
        <?php if(!empty($item->discount)){?><span class="discount"><?=$item->discount?> % <?=lang('0118')?></span><?php } ?>
        <div class="image">
            <img src="<?php echo $item->thumbnail;?>" alt="Image">
        </div>
        <div class="content clearfix">
            <div class="rating-item rating-sm go-text-right">
                <div class="rating-icons">
                    <?php echo $item->stars;?>
                </div>
                <!--<p class="rating-text text-muted"><span class="bg-primary">6.0</span> <strong class="text-dark">Good</strong> - 1,2547 reviews</p>-->
            </div>
            <div class="short-info go-right">
                <h5 class="float-none"><?php echo character_limiter($item->title,25);?></h5>
                <p class="location go-text-right"><i class="fas fa-map-marker-alt text-primary go-right"></i> <?php echo character_limiter($item->location,20);?></p>
            </div>
            <?php if($item->price > 0){ ?>
            <div class="price">
                <div class="float-right">
                    <?php echo trans( '0142');?>
                    <span class="text-secondary"><!--<?php echo $item->currCode;?>--> <?php echo $item->currSymbol; ?><?php echo $item->price;?></span>
                    <?=lang('0245')?>
                </div>
            </div>
            <?php } ?>
        </div>
    </a>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<?php } ?>