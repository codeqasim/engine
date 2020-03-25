<form method="POST" action="<?php echo base_url('admin/trflight/update_settings'); ?>">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?=$page_title?></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="api_endpoint">Create Token</label>
                    <input class="form-control" id="api_endpoint" name="apiConfig[create_token]" value="<?=$moduleSetting->apiConfig->create_token?>"/>
                </div>
                <div class="form-group">
                    <label for="ota_id">Create Booking Token</label>
                    <input class="form-control" id="ota_id" name="apiConfig[create_booking_token]" value="<?=$moduleSetting->apiConfig->create_booking_token?>"/>
                </div>
                <div class="form-group">
                    <label for="ota_id">Hyper Access Token</label>
                    <input class="form-control" id="ota_id" name="apiConfig[hyper_access_token]" value="<?=$moduleSetting->apiConfig->hyper_access_token?>"/>
                </div>
                <div class="form-group">
                    <label for="ota_id">Entity ID</label>
                    <input class="form-control" id="ota_id" name="apiConfig[entity_id]" value="<?=$moduleSetting->apiConfig->entity_id?>"/>
                </div>
                <div class="form-group">
                    <label for="api_environment">API Environment</label>
                    <select name="apiConfig[api_environment]" id="api_environment" class="form-control">
                        <option value="production" <?=($moduleSetting->apiConfig->api_environment == 'production') ? 'selected' : ''?>>Production</option>
                        <option value="sandbox" <?=($moduleSetting->apiConfig->api_environment == 'sandbox') ? 'selected' : ''?>>Sandbox</option>
                    </select>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?=base_url('admin/thflight')?>" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
</form>