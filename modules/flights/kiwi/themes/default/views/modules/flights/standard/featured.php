<?php if(isModuleActive( 'flights')){ ?>
<div class="mb-80"></div>
<div class="section-title text-center">
<h2 class="float-none"><?php echo trans('013');?> <?php echo trans('0564');?></h2>
<div class="clear"></div>
</div>
<div class="mb-40">
<div class="row cols-2 cols-md-3 cols-lg-4 gap-10 gap-md-20">
<?php foreach($featuredFlights as $item){ ?>
    <div class="col-6 col-lg-3">
        <figure class="image-caption-01">
            <a href="javascript:void(0)">
                <div class="image overlay-relative caption-relative">
                    <img style="max-height:75px;padding:15px" src="<?php echo $item->thumbnail; ?>" alt="image">
                    <div class="overlay-holder opacity-2" style="opacity:0.8"></div>
                    <figcaption class="caption-holder">
                        <div class="caption-inner caption-middle text-center">
                            <h5 class="float-none"><?php echo $item->title; ?></h5>
                            <span class="d-block"><?php echo $item->currCode;?> <?php echo $item->price; ?></span>
                        </div>
                    </figcaption>
                </div>
            </a>
        </figure>
    </div>
<?php } ?>
</div>
</div>
<?php } ?>