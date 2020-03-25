<div class="tab-inner menu-horizontal-content">
    <div class="form-search-main-01">
        <form autocomplete="off" action="<?php echo base_url(); ?>visa" method="GET" role="search">
            <div class="form-inner">
                <div class="row gap-10 mb-15 align-items-center row-reverse">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label><?php echo trans( '0273'); ?> <?php echo trans( '0105'); ?></label>
                            <div class="clear"></div>
                            <div class="form-icon-left">
                                <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                <select type="search" name="nationality_country" id="" class="chosen-the-basic form-control" required>
                                    <option value="<?=$data['countryname'];?>"><?=$data['countryname'];?></option>
                                    <option value="">
                                        <?php echo trans( '0158'); ?>
                                        <?php echo trans( '0105'); ?>
                                    </option>
                                    <?php foreach($data['allcountries'] as $c){ ?>
                                    <option value="<?php echo $c->short_name;?>" <?php if($data['countryname']==$c->iso2){echo 'selected';}?>>
                                        <?php echo $c->short_name;?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label><?php echo trans( '0274'); ?> <?php echo trans( '0105'); ?></label>
                            <div class="clear"></div>
                            <div class="form-icon-left">
                                <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                <select name="destination_country" id="" class="chosen-the-basic form-control" required>
                                     <option value="<?=$data['tocountry'];?>"><?=$data['tocountry'];?></option>
                                    <option value="">
                                        <?php echo trans( '0158'); ?>
                                        <?php echo trans( '0105'); ?>
                                    </option>
                                    <?php foreach($data['allcountries'] as $c){ ?>
                                    <option value="<?php echo $c->short_name;?>" <?php if($data['tocountry']==$c->iso2){echo 'selected';}?>>
                                        <?php echo $c->short_name;?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="form-group">
                            <label><?php echo trans('08');?><span class="font12 text-danger">*</span></label>
                            <div class="clear"></div>
                            <div class="form-icon-left">
                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                <input type="search" id="" required="" name="date" placeholder="<?php echo trans('08');?>" class="visadate form-control form-bg-light">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <label class="d-none d-sm-block">&nbsp;</label>
                        <div class="clear"></div>
                        <button type="submit" class="btn btn-primary btn-block"><?php echo trans('086'); ?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>