<form method="POST" action="<?php echo base_url('admin/juniper/update_settings'); ?>">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Juniper API Settings</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">Actor</span>
                            <input class="form-control" id="actor" name="apiConfig[actor]" value="<?=$moduleSetting->apiConfig->actor?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">User</span>
                            <input class="form-control" id="user" name="apiConfig[user]" value="<?=$moduleSetting->apiConfig->user?>"/>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">Password</span>
                            <input class="form-control" id="password" name="apiConfig[password]" value="<?=$moduleSetting->apiConfig->password?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">Commission %</span>
                            <input type="number" value="<?php echo $moduleSetting->apiConfig->commission ?>" min="0" max="100" class="form-control" name="apiConfig[commission]" required="required">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">API Mode</span>
                            <select class="form-control" name="apiConfig[mode]">
                                <option value="0" <?php if($moduleSetting->apiConfig->mode == 0){ echo "selected"; }  ?>>Sandbox</option>
                                <option value="1" <?php if($moduleSetting->apiConfig->mode == 1){ echo "selected"; }  ?>>Production</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?=base_url('admin')?>" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
</form>