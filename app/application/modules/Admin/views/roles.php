<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading panel-heading-divider"><?= $title; ?>
            <span class="panel-subtitle">
            <ol class="breadcrumb page-head-nav">
            <li class=""><a href="<?php echo base_url(ADMINURL); ?>dashboard">Dashboard</a></li>
            <li class="active"><a href="<?php echo base_url(ADMINURL); ?>accounts">Accounts</a></li>
            <li class="active"><a href="<?php echo base_url(ADMINURL); ?>accounts/types"><strong>Types</strong></a></li>
            </ol>
            </span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url(uri_string()); ?>" method="POST" class="form-horizontal"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Type Name</label>
                        <div class="col-sm-10">
                            <input name="role" required value="<?= !empty($result->role_title) ? $result->role_title : "" ?>" type="text" class="form-control"
                                   placeholder="Role Name">
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered roles no-margin">
                            <thead>
                            <tr>
                                <th>Modules</th>
                                <th>Add</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>View ( Own )</th>
                                <th>View ( Global )</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  foreach ($result->result as $md) { ?>
                                <tr>
                                    <td>
                                        <div class="be-checkbox be-checkbox-color has-primary inline">
                                            <input id="<?= $md->id ?>" name="<?= $md->id ?>[]"  value="on" <?= !empty($md->is_active) ? "checked" : "" ?>  type="checkbox">
                                            <label for="<?= $md->id ?>"><b><?= $md->name ?></b></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="be-checkbox be-checkbox-color has-primary inline">
                                            <input id="<?= $md->name ?>_add" name="<?= $md->id ?>[]" value="add" <?= !empty($md->module_add) ? "checked" : "" ?>  type="checkbox" >
                                            <label for="<?= $md->name ?>_add">Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="be-checkbox be-checkbox-color has-primary inline">
                                            <input id="<?= $md->name ?>_edit" name="<?= $md->id ?>[]" value="edit" <?= !empty($md->module_edit) ? "checked" : "" ?> type="checkbox" >
                                            <label for="<?= $md->name ?>_edit">Edit</label>
                                        </div>
                                    </td>                                    <td>
                                        <div class="be-checkbox be-checkbox-color has-primary inline">
                                            <input id="<?= $md->name ?>_delete" name="<?= $md->id ?>[]" value="delete" <?= !empty($md->module_delete) ? "checked" : "" ?> type="checkbox" >
                                            <label for="<?= $md->name ?>_delete">Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="be-checkbox be-checkbox-color has-primary inline">
                                            <input id="<?= $md->name ?>_view_own" name="<?= $md->id ?>[]" value="view_own" <?= !empty($md->module_view_own) ? "checked" : "" ?> type="checkbox" >
                                            <label for="<?= $md->name ?>_view_own">View Own</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="be-checkbox be-checkbox-color has-primary inline">
                                            <input id="<?= $md->name ?>_view_global" name="<?= $md->id ?>[]" value="view_global" <?= !empty($md->module_view_global) ? "checked" : "" ?> type="checkbox" >
                                            <label for="<?= $md->name ?>_view_global">View Global</label>
                                        </div>
                                    </td>
                                </tr>
                              <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
