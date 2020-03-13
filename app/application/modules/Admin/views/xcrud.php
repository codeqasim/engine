<div class="panel panel-default">
    <div class="">
        <!--<?php echo $head; ?> -->
        <span class="panel-subtitle">
          <?php if (!empty($delete_all)) { ?>
              <button class="btn btn-danger" id="deleteAll">Delete All</button>
          <?php } ?>
            <?php if (!empty($add_link)) { ?>
                <a href="<?= $add_link ?>" class="btn btn-success">Add</a>
            <?php } ?>
    </span>
    </div>
    <div id="html_content">
        <?php echo $content; ?>
    </div>
</div>
<div class="modal"><!-- Place at bottom of page --></div>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(255, 255, 255, .8) url('http://i.stack.imgur.com/FhHRx.gif') 50% 50% no-repeat;
    }

    /* When the body has the loading class, we turn
       the scrollbar off with overflow:hidden */
    body.loading .modal {
        overflow: hidden;
    }

    /* Anytime the body has the loading class, our
       modal element will be visible */
    body.loading .modal {
        display: block;
    }
</style>
<script>

    $("#select_all").click(function () {
        if ($(this).prop("checked")) {
            $("[class=checkboxcls]").prop("checked", true);
        } else {
            $("[class=checkboxcls]").prop("checked", false);
        }
    });
    $("#deleteAll").click(function () {
        var checkboxes = $("[class=checkboxcls]:checked");
        var all_data = [];
        $.each(checkboxes, function (index, object, container) {
            all_data.push($(object).val())
        });
        if (all_data.length != 0) {
            var answer = confirm("Are you sure you want to delete?");
            if (answer) {
                $.post("<?=$base_url?>", {primery_keys: all_data}, function (theResponse) {
                    location.reload();
                });

            } else {
                location.reload();
                return false;
            }
        } else {
            alert("Please at least select one item.")
        }
    });

    function delfunc(id, baseurl) {

        var answer = confirm("Are you sure you want to delete?");
        if (answer) {
            $.post(baseurl, {id: id}, function (theResponse) {
                location.reload();
            });

        } else {
            location.reload();
            return false;
        }
    }

    $("#change_status").change(function () {

    });

    function updateOrder(value, id) {
        $body = $("body");
        $body.addClass("loading");
        $.post("<?=base_url(ADMINURL . 'accounts/chagne_order')?>", {
            id: id,
            value: value
        }, function (theResponse) {
            $.get("<?=base_url(uri_string())?>",
                function (data) {
                    $body.removeClass("loading");
                    $("#replace").html(data);
                    $.gritter.add({
                        title: 'Account status',
                        text: "Account status has been " + status,
                        image: "<?=base_url('assets/img/favicon.png')?>",
                        class_name: 'clean',
                        sticky: true,
                        time: ''
                    });
                });

        });
    }

    function updateOrderCms(value, id) {
        $body = $("body");
        $body.addClass("loading");
        $.post("<?=base_url(ADMINURL . 'cms/chagne_order')?>", {
            id: id,
            value: value
        }, function (theResponse) {
            $.get("<?=base_url(uri_string())?>",
                function (data) {
                    $body.removeClass("loading");
                    $("#replace").html(data);
                    $.gritter.add({
                        title: 'Cms order',
                        text: "Cms order has been changed",
                        image: "<?=base_url('assets/img/favicon.png')?>",
                        class_name: 'clean',
                        sticky: true,
                        time: ''
                    });
                });

        });
    }


</script>