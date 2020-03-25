<!-- start slick hero slider -->
<div class="slick-hero-slider-wrapper bg-light">
    <div class="slider slick-hero-slider slick-slider-center-mode slick-animation mb-0">
        <?php if ($sliderInfo->totalSlides > 0) {
            foreach ($sliderInfo->slides as $ms) { ?>
                <div class="slick-item">
                    <div class="bg-image <?php echo $ms->sactive; ?>" data-dark-overlay="3" style="background-image:url('<?php echo $ms->thumbnail; ?>');">
                        <div class="caption-outer">
                            <div class="container">
                                <div class="caption-inner">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="hero-text tr d-none d-md-block">
                                                <h2 class="animation fromBottom transitionDelay2 transitionDuration4"><?php echo $ms->title; ?></h2>
                                                <p class="animation fromBottom transitionDelay4 transitionDuration6 lead"><?php echo $ms->desc; ?></p>
                                                <div class="clear"></div>
                                                <!--<p class="animation fromBottom transitionDelay6 transitionDuration8 hero-price d-block">
                                                 all starting from <span>USD $986</span>
                                                </p>
                                                <div class="animation fromBottom transitionDelay8 transitionDuration10 d-block">
                                                    <a href="#" class="btn btn-secondary btn-wide">Book now</a>
                                                    <p class="font-sm mt-25 line-125 spacing-1">* Booking period June 15 to June, 23 2019<br/>* Traveling period  Nov 15 to Nov 23, 2019</p>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }  } else { ?>
            <div class="slick-item">
                <div class="bg-image <?php echo $ms->sactive; ?>" data-dark-overlay="4" style="background-image:url('<?php echo $theme_url; ?>assets/img/data/slider.jpg');"></div>
            </div>
        <?php } ?>
    </div>

    <?php if ($sliderInfo->totalSlides > 1) { ?>
        <div class="slick-item">
            <div class="bg-image <?php echo $ms->sactive; ?>" data-dark-overlay="4"
                 style="background-image:url('<?php echo $theme_url; ?>assets/img/data/slider.jpg');">
            </div>
        </div>
    <?php } ?>

    <div class="hero-form-absolute">
        <div class="container">
            <div class="row gap-40 gap-lg-60 align-items-center justify-content-lg-end">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="hero-form-inner text-white">
                        <div class="menu-horizontal-wrapper-02">
                            <nav class="menu-horizontal-02">
                                <ul class="nav row-reverse <?php if ($isRTL == "RTL") { ?> justify-content-center <?php } ?>">
                                    <?php include 'menu.php'; ?>
                                </ul>
                            </nav>
                            <div class="tab-content">

                                <?php  foreach ($modulesList as $index => $module) {
                                    if ($module->ia_active == 1 && $module->parent_id == 'hotels') { ?>
                                        <!-- Hotels  -->
                                        <div role="tabpanel" class="tab-pane <?php if ($order == $module->order) {
                                            echo "active in show"; } ?>" id="hotels" aria-labelledby="home-tab">
                                            <?php
                                            Search_Form($module->name,"hotels");
                                            ?>
                                        </div>

                                    <?php }
                                    if ($module->ia_active == 1 && $module->parent_id == 'flights') { ?>
                                        <!-- Flights  -->
                                        <div role="tabpanel" class="tab-pane <?php if ($order == $module->order) {
                                            echo "active in show"; } ?>" id="flights" >
                                            <?php
                                                     Search_Form($module->name,"flights");

                                            ?>
                                        </div>

                                    <?php }
                                    if ($module->ia_active == 1 && $module->parent_id == 'cars') { ?>
                                        <!-- Cars  -->
                                        <div role="tabpanel" class="tab-pane <?php if ($order == $module->order) {
                                            echo "active in show";
                                        } ?>" id="cars" aria-labelledby="home-tab">
                                            <?php if (isModuleActive('cars')) { ?><?php $module = 'cars'; ?><?php echo searchForm('cars', $data); ?><?php } ?>
                                            <?php if (isModuleActive('cartrawler')) { ?><?php echo searchForm('cartrawler', $data); ?><?php } ?>
                                            <?php if (isModuleActive('Kiwitaxi')) { ?><?php echo searchForm('Kiwitaxi', $data); ?><?php } ?>
                                        </div>

                                    <?php }
                                    if ($module->ia_active == 1 && $module->parent_id == 'tours') { ?>
                                        <!-- Tours  -->
                                        <div role="tabpanel" class="tab-pane <?php if ($order == $module->order) {
                                            echo "active in show";
                                        } ?>" id="tours" aria-labelledby="home-tab">
                                            <?php if (isModuleActive('tours')) { ?><?php $module = 'tours'; ?><?php echo searchForm('tours', $data); ?><?php } ?>
                                            <?php if (isModuleActive('Viator')) { ?><?php $module = 'Viator'; ?><?php echo searchForm('Viator', $data); ?><?php } ?>

                                        </div>

                                    <?php }
                                    if ($module->ia_active == 1 && $module->parent_id == 'visa') { ?>
                                        <!-- Visa -->

                                        <div role="tabpanel" class="tab-pane <?php if ($order == $module->order) {
                                            echo "active in show";
                                        } ?>" id="visa" aria-labelledby="home-tab">
                                            <?php if (isModuleActive('ivisa')) { ?><?php echo searchForm('ivisa', $data); ?><?php } ?>
                                        </div>
                                    <?php }
                                } ?>

                                <!--
                            <?php if (isModuleActive('Travelstart')) { ?>
                                <li class="text-center">
                                    <a href="<?php echo base_url('flightst'); ?>">
                                        <i class="fa fa-plane outline-icon visible-xs"></i>
                                        <div class="visible-xs visible-md clearfix"></div>
                                        <span class="hidden-xs"><?php echo trans('Travelstart'); ?></span>
                                    </a>
                                </li>
                            <?php } ?>
                            -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end slick hero slider -->