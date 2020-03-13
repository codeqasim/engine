<?php echo $this->render_table_name($mode); ?>

<div class="xcrud-view">
    <?php echo $mode == 'view' ? $this->render_fields_list($mode, array('tag' => 'table', 'class' => 'table')) : $this->render_fields_list($mode, 'div', 'div', 'label', 'div'); ?>
</div>

<div class="xcrud-top-actions btn-group">
    <?php
    echo $this->render_button('save_return', 'save', 'list', 'btn btn-primary btn-lg', '', 'create,edit');
    echo $this->render_button('save_new', 'save', 'create', 'btn btn-default btn-lg', '', 'create,edit');
    echo $this->render_button('save_edit', 'save', 'edit', 'btn btn-default btn-lg', '', 'create,edit');
    echo $this->render_button('return', 'list', '', 'btn btn-warning btn-lg');
    ?>
</div>

<div class="xcrud-nav">
    <?php echo $this->render_benchmark(); ?>
</div>


<script type="text/javascript">

    jQuery(document).on("ready xcrudafterrequest", function (event, container) {
        if (container) {
            jQuery(container).find("select").not(jQuery(container).find('.search-city')).select2({
                placeholderOption: 'first'
            });

            jQuery(container).find('.search-city').select2({
                placeholder: 'Search for City',
                minimumInputLength: 3,
                ajax: {
                    url: '<?php echo base_url(); ?>api/getCities',
                    data: function (params) {
                        var query = {
                            keyword: params.term,
                            type: 'select2'
                        }
                        return query;
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    }
                }
            });
        } else {
            jQuery(".xcrud").find("select").select2({
                placeholderOption: 'first'
            });
        }
        
        $("#datepicker").datepicker({
            minDate: new Date(),
            format: 'dd-mm-yyyy'
        });
    });
    jQuery(document).on("xcrudafterdepend", function (event, container, data) {
        jQuery(container).find('select[name="' + data.name + '"]').select2({
            placeholderOption: 'first'
        });
    });
</script>