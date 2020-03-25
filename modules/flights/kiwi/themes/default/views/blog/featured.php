<?php if(isModuleActive( 'blog')){ if($showOnHomePage !="No" ){ ?>
<div class="mt-30 mb-40">
<div class="container">
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="MenuHorizon28_01">
    <div class="tab-inner">
        <div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-10 gap-md-20 gap-xl-30">
        <?php foreach($posts as $p){ ?>
            <div class="col">
                <div class="product-grid-item">
                    <a href="<?php echo $p->slug;?>">
                        <div class="image" style="overflow:hidden;height:150px">
                            <img src="<?php echo $p->thumbnail;?>" alt="Image">
                        </div>
                        <div class="content clearfix">
                            <div class="">
                                <h5 class="float-none"><?php echo character_limiter($p->title,25);?></h5>
                                <p class="location"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $p->shortDesc;?></p>
                            </div>
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
</div>
<?php } ?>
<?php } ?>