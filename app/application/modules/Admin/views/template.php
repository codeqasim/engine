<?php
$this->load->view('Admin/header');

if (!empty($success_view)) { ?>
<div role="alert" class="alert alert-success alert-icon alert-icon-colored alert-dismissible">
    <div class="icon"><span class="mdi mdi-check"></span></div>
    <div class="message">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Updated</strong>  Successfully.
    </div>
</div>
<?php } ?>
<?php if (!empty($errors_view)) { ?>

<div role="alert" class="alert alert-danger alert-icon alert-icon-colored alert-dismissible">
    <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
    <div class="message">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Error</strong> <?= $errors ?>.
    </div>
</div>
<?php }

if(!empty($crumb)) {
$this->load->view($crumb);
}
$this->load->view($main_content);
$this->load->view('Admin/footer');
