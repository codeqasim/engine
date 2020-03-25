<form method="POST" action="<?php echo base_url('admin/thhotels/update_settings'); ?>">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?=$page_title?></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="api_endpoint">API Endpoint</label>
                    <input class="form-control" id="api_endpoint" name="apiConfig[api_endpoint]" value="<?=$moduleSetting->apiConfig->api_endpoint?>"/>
                </div>
                <div class="form-group">
                    <label for="ota_id">OTA ID</label>
                    <input class="form-control" id="ota_id" name="apiConfig[ota_id]" value="<?=$moduleSetting->apiConfig->ota_id?>"/>
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
                <a href="<?=base_url('admin/modules')?>" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
</form>