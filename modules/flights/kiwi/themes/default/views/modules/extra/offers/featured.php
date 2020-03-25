<?php if(isModuleActive( 'offers') && $offersCount> 0){ ?>
<!-- start Site Content -->
<section class="pb-0">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="float-none"><?=lang('013')?> <?=lang('Offers')?></h2>
            
        </div>
        <?php if($offersCount> 0){ ?>
        <div class="slick-carousel-wrapper">
            <div class="slick-carousel-inner">
                <div class="slick-product-item-col-1">
                    <div class="slick-item">
                        <div class="product-large-item">
                            <div class="row equal-height gap-0">
                                <div class="col-12 col-lg-8">
                                    <div class="image caption-relative">
                                        <img src="<?php echo $specialoffers[0]->thumbnail;?>"alt="image"/>
                                        <div class="caption-holder padding-10">
                                            <div class="caption-top w-100 text-left">
                                                <span class="bg-secondary d-inline-block font600 text-uppercase font12 ph-15 pv-5 line-135 rounded"><?php echo trans('0536');?> <?php echo trans('0388');?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col">
                                    <div class="content d-flex flex-column">
                                        <div class="content-top">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="rating-item rating-sm mb-15">
                                                        <div class="rating-icons">
                                                            <input type="hidden" class="rating" data-filled="rating-icon fas fa-star rating-rated" data-empty="rating-icon far fa-star" data-fractions="2" data-readonly value="4.0"/>
                                                        </div>
                                                        <p class="rating-text text-muted"><span class="bg-primary">6.0</span> <strong class="text-dark"><?=lang('031')?></strong> <span class="font13">- 1,2547 reviews</span></p>
                                                    </div>
                                                    <h5><a href="<?php echo base_url(); ?>offers"><?php echo character_limiter($specialoffers[0]->title,30);?></a></h5>
                                                    <!--<p class="location"><i class="fas fa-map-marker-alt text-primary"></i> Antibes, France</p>-->
                                                </div>
                                                <div class="ml-auto">
                                                    <?php if($specialoffers[0]->price > 0){ ?>
                                                    <div class="price">
                                                        <?php echo trans('0536');?> <?php echo trans('0388');?>
                                                        <span class="text-secondary">
                                                            <!--<?php echo $specialoffers[0]->currCode;?> --><?php echo $specialoffers[0]->currSymbol; ?><?php echo $specialoffers[0]->price;?>
                                                        </span>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <p><?php echo character_limiter($specialoffers[0]->desc,380);?></p>
                                        </div>
                                        <div class="content-bottom mt-auto">
                                            <!--<ul class="list-icon-absolute list-inline-block">
                                                <li><span class="icon-font"><i class="fas fa-check-circle text-primary"></i> </span> Breakfast Included</li>
                                                <li><span class="icon-font"><i class="fas fa-check-circle text-primary"></i></span> Free Wifi in Room</li>
                                            </ul>-->
                                            <a href="<?php echo base_url(); ?>offers" class="btn btn-primary btn-sm btn-wide mt-20 btn-block"><?=lang('0185')?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php // } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>