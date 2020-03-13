<?php  if(!empty($ota_modules->blog->is_active) && !empty($main_model["blog"]->is_active)){ ; ?>
    <?php  if (count($blog) > 0): ?>
        <section class="featured-blog bgb feature">
            <div class="container line">
                <div class="col-md-12">
                    <h6><?=lang('021')?> <?=lang('01008')?></h6>
                </div>
                <?php foreach ($blog as $b): ?>
                    <div class="col-md-4 ">
                        <div class="box bgwhite">
                            <a href="<?php echo base_url('blog/' . strtolower(str_replace(' ', '-', $b->category) . '/' . str_replace(' ', '-', $b->title))); ?>">
                                <div class="overflow">
                                    <div class="col-md-12 blog-shadow">
                                        <div class="row">
                                            <img data-wow-duration="1s" data-wow-delay="1s" src="<?php echo $b->image; ?>" alt="<?php echo $b->title; ?>" class="wow fadeIn img-responsive" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <div class="panel-body">
                                <h5 class="ellipsis"><strong><?php echo $b->title; ?></strong></h5>
                                <p class="text-muted"><?php echo $b->category; ?></p>
                                <!--<p class="hidden-xs"><?php echo substr($b->description, 0, 80); ?></p>-->
                                <!--<hr>-->
                                <div class="progress-btn">
                                <a href="<?php echo base_url('blog/' . strtolower(str_replace(' ', '-', $b->category) . '/' . str_replace(' ', '-', $b->title))); ?>" class="btn btn-default btn-block ladda-button spin" data-style="expand-left" ><span class="ladda-label"><?=lang('022')?> &nbsp; <i class="fa fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
                ?>
            </div>
        </section>
    <?php endif; ?>
<?php } ?>