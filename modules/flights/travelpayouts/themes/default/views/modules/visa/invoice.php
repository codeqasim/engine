<br>
<br>
<div class="container">
    <style>
        .chosen-single {
            height: 3.5rem !important;
            padding-top: 12px !important;
            font-size: 1rem !important;
        }
        
        .chosen-container-single .chosen-single div {
            top: 6px !important;
        }
        
        .active-result {
            font-size: 1rem;
        }
        
        #response input[value="Pay Now"],
        #showPaymentPage {
            transition: all .3s;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 500;
            padding-top: 9px;
            padding-bottom: 7px;
            border-radius: 3px;
            background: #3F51B5;
            border-color: #3F51B5;
            color: #FFF;
        }
    </style>

    <?php
foreach ($invoice_details as $row){
    if($row->status=='waiting'){
?>
        <div class="success-box unpaid">
            <div class="icon">
                <span><i class="ion-alert-circled"></i></span>
            </div>
            <div class="content">
                <h4><?=lang('0409')?> <?php echo $row->status;?></h4>
            </div>
        </div>
        <?php }else 
        {

    if($row->status=='processing'){
    ?>
            <div class="success-box unpaid">
                <div class="icon">
                    <span><i class="ion-alert-circled"></i></span>
                </div>
                <div class="content">
                    <h4><?=lang('0409')?><?php echo $row->status;?></h4>
                </div>
            </div>
            <?php }
        }
    }
    ?>
                <div class="row gap-10 equal-height">
                    <?php
foreach ($invoice_details as $row){
?>
                        <div class="col-12 col-lg-12">
                            <div class="content-wrapper pt-30 pb-30 bg-white-shadow col-12">
                                <h3 class="heading-title"><span><?=lang('0127')?></span></h3>
                                <ul class="confirmation-list">
                                    <li class="clearfix">
                                        <span class="font-weight-bold"><?=lang('0171')?></span>
                                        <span><?php echo $row->first_name;?></span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="font-weight-bold"><?=lang('0172')?></span>
                                        <span><?php echo $row->last_name;?></span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="font-weight-bold"><?=lang('0256')?></span>
                                        <span><?php echo $row->phone;?></span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="font-weight-bold"><?=lang('0273')?></span>
                                        <span><?php echo $row->from_country;?></span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="font-weight-bold"><?=lang('0274')?></span>
                                        <span><?php echo $row->to_country;?></span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="font-weight-bold"><?=lang('0622')?></span>
                                        <span><?php echo $row->res_code;?></span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="font-weight-bold"><?=lang('08')?></span>
                                        <span><?php echo $row->date;?></span>
                                    </li>

                                </ul>
                                <div class="mb-40"></div>
                                <hr>
                                <label for="">
                                    <?=lang('0178')?>
                                </label>
                                <textarea name="" id="" cols="30" rows="10" disabled="" class="form-control">
                                    <?php echo $row->notes;?>
                                </textarea>
                                <?php }?>
                            </div>
                        </div>
                </div>
           </div>