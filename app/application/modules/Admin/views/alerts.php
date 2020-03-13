<?php if (!empty($success)) { ?>
    <div class="alert alert-success">
        <strong>Success!</strong> Update Successfully.
    </div>
<?php } ?>
<?php if (!empty($errors)) { ?>
    <div class="alert alert-danger">
        <strong>Errors!</strong> <?= $errors ?>
    </div>
<?php } ?>