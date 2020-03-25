<?php //dd($toursearch['ToursSearchForm']->from_code);?>
<style>
.form-control{
    overflow:hidden;
    -webkit-appearance:none;
}
</style>
<div class="ftab-inner menu-horizontal-content">
<div class="form-search-main-01">
<form autocomplete="off" action="<?php echo base_url() . $module; ?>/search" method="GET" role="search">
    <div class="form-inner">
        <div class="row gap-10 mb-15 align-items-end row-reverse">
            <div class="col-md-3 col-xs-12">
                <div class="form-group">
                    <label><?=lang('0120')?></label>
                    <div class="clear"></div>
                    <div class="form-icon-left typeahead__container">
                        <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                        <input type="text" data-module="<?php echo $module; ?>" class="form-control hotelsearch locationlist<?php echo $module; ?>" placeholder="<?php if ($module == 'hotels') { echo trans('026'); } elseif ($module == 'tours') { echo trans('0526'); } ?>" value="<?php echo $toursearch['ToursSearchForm']->from_code; ?>">
                        <input type="hidden" id="txtsearch" name="txtSearch" value="<?php echo $toursearch['ToursSearchForm']->from_code; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="col-inner">
                    <div class="row gap-10 mb-15">
                    <div class="col-12">
                        <div class="form-group">
                        <label for="room-amount"><?php echo trans('0222');?></label>
                        <div class="clear"></div>
                        <div class="form-icon-left">
                            <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                            <select class="chosen-the-basic form-control" name="type" id="tourtype">
                            <option value="" selected>
                            <?php echo trans('0158'); ?>
                            </option>
                            <?php foreach ($data['moduleTypes'] as $ttype) { ?>
                            <option value="<?php echo $ttype->id; ?>" <?php makeSelected($tourType, $ttype->id); ?> >
                                <?php echo $ttype->name; ?>
                            </option>
                            <?php } ?>
                            </select>
                        </div>
                       </div>
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="col-inner">
                    <div class="row gap-10 mb-15">
                        <!--<div class="col-4 col-sm-6 col-md-4">
                            <div class="form-group form-spin-group">
                                <label for="room-amount">Rooms</label>
                                <div class="form-icon-left">
                                    <span class="icon-font text-muted"><i class="bx bx-home-alt"></i></span>
                                    <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                </div>
                            </div>
                        </div>-->
                        <div class="col-md-12">
                            <div class="col-inner">
                                <div class="form-people-thread">
                                    <div class="row no-gutters align-items-center">
                                        <div id="airDatepickerRange-hotel" class="col">
                                        <div class="form-group form-spin-group">
                                        <label for="room-amount"><?php echo trans('08');?></label>
                                        <div class="clear"></div>
                                         <div class="form-icon-left">
                                                <span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                <input type="text" id="DateTours" class="DateTours form-control form-readonly-control" placeholder="dd/mm/yyyy" value="<?=$toursearch['ToursSearchForm']->checkin?>" name="checkin" required>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group form-spin-group">
                                                <label for="room-amount"><?php echo trans('010');?> <small class=" text-muted font10 line-1">(12-75)</small></label>
                                                <div class="clear"></div>
                                                <div class="form-icon-left">
                                                    <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                    <input type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" name="adults" readonly value="<?=($toursearch['ToursSearchForm']->adults)?$toursearch['ToursSearchForm']->adults:'1'?>" placeholder="<?=($toursearch['ToursSearchForm']->adults)?$toursearch['ToursSearchForm']->adults:'1'?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
            <input type="hidden" name="module_type"/>
            <input type="hidden" name="slug"/>
            <button type="submit"  class="btn btn-primary btn-block"><i class="icon_set_1_icon-66"></i> <?php echo trans('012'); ?></button>
            </div>
        </div>
    </div>
    <input type="hidden" name="searching" class="searching" value="<?php echo $_GET['searching']; ?>">
    <input type="hidden" class="modType" name="modType" value="<?php echo $_GET['modType']; ?>">
    <script>
        $(function () {
            $(".locationlist<?php echo $module; ?>").select2({
                width: '100%',
                allowClear: true,
                maximumSelectionSize: 1,
                placeholder: "Start typing",
                data: JSON.parse('<?=$data['defaultToursListForSearchField']?>'),
                initSelection: function (element, callback) {
                callback({id: 1, text: '<?=(!empty($toursearch['ToursSearchForm']->from_code))? $toursearch['ToursSearchForm']->from_code :lang('0526'); ?>'})
            }
            });

            $(".locationlist<?php echo $module; ?>").on("select2-open",
                function (e) {
                    $(".select2-drop-mask");
                    $(".formSection").trigger("click")
                });
            $(".locationlist<?php echo $module; ?>").on("select2-selecting", function (e) {
                $(".modType").val(e.object.module);
                $(".searching").val(e.object.id);
                $("#txtsearch").val(e.object.text);
            })
        })
    </script>
</form>
</div>
</div>

<!------------------------------------------------------------------->
<!-- ********************    TOURS MODULE    ********************  -->
<!------------------------------------------------------------------->