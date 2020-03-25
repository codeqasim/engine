<style>
  .form-control{
    -webkit-appearance:none;
  }
</style>
<div class="tab-inner menu-horizontal-content">
  <div class="form-search-main-01">
      <form autocomplete="off" action="<?php echo base_url() . $module; ?>/search" method="GET" role="search">
      <div class="form-inner">
        <div class="row gap-10 mb-15 row-reverse">
          <div class="col-md-2 col-xs-12">
            <div class="form-group">
              <label><?php echo trans('0210'); ?>  <?php echo trans('032'); ?></label>
              <div class="clear"></div>
              <div class="form-icon-left typeahead__container">
                <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                <select name="pickupLocation" class="chosen-the-basic form-control" id="carlocations" required>
                  <option value="">
                    <?php echo trans( '0210'); ?>
                    <?php echo trans( '032'); ?>
                  </option>
                  <?php foreach ($data['carspickuplocationsList'] as $locations) : ?>
                  <option value="<?php echo $locations->id; ?>" <?php makeSelected($data['selectedpickupLocation'], $locations->id); ?> >
                    <?php echo $locations->name; ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-xs-12">
            <div class="form-group">
              <label><?php echo trans('0211'); ?>  <?php echo trans('032'); ?></label>
              <div class="clear"></div>
              <div class="form-icon-left typeahead__container">
                <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                <select style="font-size: 13px;color: #686868;" name="dropoffLocation" class="form-control" id="carlocations2" required>
                  <option value="">
                    <?php echo trans( '0211'); ?>
                    <?php echo trans( '032'); ?>
                  </option>
                  <?php foreach ($data['carspickuplocationsList'] as $locations) : ?>
                  <option value="<?php echo $locations->id; ?>" <?php makeSelected($data['selectedpickupLocation'], $locations->id); ?> >
                    <?php echo $locations->name; ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <div class="col-inner">
              <div id="airDatepickerRange-flight" class="row no-gutters mb-15">
                <div class="col-6">
                  <div class="form-group">
                    <label><?php echo trans('0472'); ?>  <?php echo trans('08'); ?></label>
                    <div class="clear"></div>
                    <div class="form-icon-left">
                      <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                      <input placeholder="dd/mm/yyyy" autocomplete="false"  class="form form-control input-lg" id="dropdate" name="pickupDate" placeholder="<?php echo trans( '0210'); ?> <?php echo trans( '08'); ?>" value="<?php echo $themeData->checkin; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label><?php echo trans('0472'); ?>  <?php echo trans('0259'); ?></label>
                    <div class="clear"></div>
                    <div class="form-icon-left">
                      <span class="icon-font text-muted"><i class="bx bx-time"></i></span>
                      <select class="chosen-the-basic form-control" name="pickupTime">
                        <option value="<?php echo trans( '0259'); ?>"><?php echo trans( '0259'); ?></option>
                        <?php foreach ($data['carModTiming'] as $time) { ?>
                        <option value="<?php echo $time; ?>" <?php makeSelected($data['pickupTime'], $time); ?> >
                          <?php echo $time; ?>
                        </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <div class="col-inner">
              <div id="airDatepickerRange-flight" class="row no-gutters mb-15">
                <div class="col-6">
                  <div class="form-group">
                    <label><?php echo trans('0473'); ?>  <?php echo trans('08'); ?></label>
                    <div class="clear"></div>
                    <div class="form-icon-left">
                      <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                      <input placeholder="dd/mm/yyyy" class="form-control form-readonly-control" id="returndate" name="dropoffDate" placeholder="<?php echo trans( '0211'); ?> <?php echo trans( '08'); ?>" value="<?php echo $themeData->checkout; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label><?php echo trans('0473'); ?>  <?php echo trans('0259'); ?></label>
                    <div class="clear"></div>
                    <div class="form-icon-left">
                      <span class="icon-font text-muted"><i class="bx bx-time"></i></span>
                      <select class="chosen-the-basic form-control" name="dropoffTime">
                        <option><?php echo trans( '0259'); ?></option>
                        <?php foreach ($data['carModTiming'] as $time) { ?>
                        <option value="<?php echo $time; ?>" <?php makeSelected($data['dropoffTime'], $time); ?> >
                          <?php echo $time; ?>
                        </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-xs-12">
          <label class="d-none d-sm-block">&nbsp;</label>
          <div class="clear"></div>
          <button type="submit"  class="btn-primary btn btn-block">
          <?php echo trans('012'); ?>
          </button>
        </div>
        </div>
      </div>
    </form>
  </div>
</div>