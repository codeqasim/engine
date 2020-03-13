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
    <div class="row">
    <div class="col-md-6">
        <?php echo $content; ?>
    </div>
    <div class="col-md-6">


<div class="panel panel-contrast">
<div class="panel-heading panel-heading-contrast">Header Menu
<span class="panel-subtitle">All Header menus goes here.</span>
</div>
<div class="panel-body">

<div id="list2" class="dd">
<ol class="dd-list">
<li data-id="13" class="dd-item dd3-item">
<div class="dd-handle dd3-handle"></div>
<div class="dd3-content">Item 13</div>
<ol style="" class="dd-list">
<li data-id="14" class="dd-item dd3-item">
<div class="dd-handle dd3-handle"></div>
<div class="dd3-content">Item 14</div>
</li>
<li data-id="15" class="dd-item dd3-item">
<div class="dd-handle dd3-handle"></div>
<div class="dd3-content">Item 15</div>
<ol style="" class="dd-list">
<li data-id="16" class="dd-item dd3-item">
<div class="dd-handle dd3-handle"></div>
<div class="dd3-content">Item 16</div>
</li>
<li data-id="17" class="dd-item dd3-item">
<div class="dd-handle dd3-handle"></div>
<div class="dd3-content">Item 17</div>
</li>
</ol>
</li>
</ol>
</li>
</ol>

<code id="out1"></code>

</div>


</div>
</div>


<div class="panel panel-contrast">
<div class="panel-heading panel-heading-contrast">Footer Menu
<span class="panel-subtitle">All Footer menus goes here.</span>
</div>
<div class="panel-body">

<div id="list1" class="dd">
<ol class="dd-list">
    <li data-id="1" class="dd-item">
        <div class="dd-handle">Item 1</div>
    </li>
    <li data-id="2" class="dd-item">
        <div class="dd-handle">Item 2</div>
    </li>
    <li data-id="3" class="dd-item">
        <div class="dd-handle">Item 3</div>
        <ol class="dd-list">
            <li data-id="4" class="dd-item">
                <div class="dd-handle">Item 4</div>
            </li>
            <li data-id="5" class="dd-item">
                <div class="dd-handle">Item 5</div>
            </li>
        </ol>
    </li>
</ol>
</div>
<pre><code id="out2"></code></pre>


</div>
</div>



    </div>
    </div>
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