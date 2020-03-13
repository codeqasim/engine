<?php

function orderInput($value, $fieldname, $primary_key, $row, $xcrud) {
$url = base_url(ADMINURL)."";
$callback = base_url(ADMINURL.'accounts/chagne_order');
return '<input class="form-control input-sm" data-url='.$url.'  type="number" id="order_'.$primary_key.'"
 value='.$value.' min="1" onchange="updateOrder($(this).val(),'.$primary_key.')"  />';
}
function orderInputCms($value, $fieldname, $primary_key, $row, $xcrud) {
$url = base_url(ADMINURL)."";
$callback = base_url(ADMINURL.'accounts/chagne_order');
return '<input class="form-control input-sm" data-url='.$url.'  type="number" id="order_'.$primary_key.'"
 value='.$value.' min="1" onchange="updateOrderCms($(this).val(),'.$primary_key.')"  />';
}


function publish_action($xcrud) {
    if ($xcrud->get('primary')) {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'1\' WHERE id = ' . (int) $xcrud->get('primary');
        $db->query($query);
    }
}

function unpublish_action($xcrud) {
    if ($xcrud->get('primary')) {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'0\' WHERE id = ' . (int) $xcrud->get('primary');
        $db->query($query);
    }
}

function exception_example($postdata, $primary, $xcrud) {
// get random field from $postdata
    $postdata_prepared = array_keys($postdata->to_array());
    shuffle($postdata_prepared);
    $random_field = array_shift($postdata_prepared);
// set error message
    $xcrud->set_exception($random_field, 'This is a test error', 'error');
}

function test_column_callback($value, $fieldname, $primary, $row, $xcrud) {
    return $value . ' - nice!';
}

function after_upload_example($field, $file_name, $file_path, $params, $xcrud) {
    $ext = trim(strtolower(strrchr($file_name, '.')), '.');
    if ($ext != 'pdf' && $field == 'uploads.simple_upload') {
        unlink($file_path);
        $xcrud->set_exception('simple_upload', 'This is not PDF', 'error');
    }
}

function movetop($xcrud) {
    if ($xcrud->get('primary') !== false) {
        $primary = (int) $xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `officeCode` FROM `offices` ORDER BY `ordering`,`officeCode`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item) {
            if ($item['officeCode'] == $primary && $key != 0) {
                array_splice($result, $key - 1, 0, array($item));
                unset($result[$key + 1]);
                break;
            }
        }
        foreach ($result as $key => $item) {
            $query = 'UPDATE `offices` SET `ordering` = ' . $key . ' WHERE officeCode = ' . $item['officeCode'];
            $db->query($query);
        }
    }
}

function movebottom($xcrud) {
    if ($xcrud->get('primary') !== false) {
        $primary = (int) $xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `officeCode` FROM `offices` ORDER BY `ordering`,`officeCode`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item) {
            if ($item['officeCode'] == $primary && $key != $count - 1) {
                unset($result[$key]);
                array_splice($result, $key + 1, 0, array($item));
                break;
            }
        }

        foreach ($result as $key => $item) {
            $query = 'UPDATE `offices` SET `ordering` = ' . $key . ' WHERE officeCode = ' . $item['officeCode'];
            $db->query($query);
        }
    }
}
function change_status($value, $fieldname, $primary_key, $row, $xcrud)
{
    $checked = $value?' checked':'';
    return '<div class="switch-button switch-button-xs"> <input type="checkbox" '.$checked.' class="change_status" value="'.$value.'" data-pk="'.$primary_key.'"  name="swt1" id="sw'.$primary_key.'"><span> <label  for="sw'.$primary_key.'"></label></span> </div> ' ;

}
function change_modules_status($value, $fieldname, $primary_key, $row, $xcrud)
{
    $checked = $value?' checked':'';
    return '<div class="switch-button switch-button-xs"> <input type="checkbox" '.$checked.' class="change_modules_status" value="'.$value.'" data-pk="'.$primary_key.'"  name="swt1" id="sw'.$primary_key.'"><span> <label  for="sw'.$primary_key.'"></label></span> </div> ' ;

}

function city_select2($value, $field, $priimary_key, $list, $xcrud) {

    return '<div class="input-prepend input-append">'
            . '<select class="form-control search-city xcrud-input" id="city_id" name="' . $xcrud->fieldname_encode('accounts.city_id') . '">'
            . '<option value="' . $list['accounts.city_id'] . '">' . $value . '</option>'
            . '</select>'
            . '</div>';
}


