
<style>
.ivisa-applicant-fields input,select { padding: 8px !important; padding-right: 0 !important; padding-left: 5px !important; height: 40px !important; font-size: 12px !important; line-height: 1.5 !important; border-radius: 0px !important; margin-top: 8px !important; }
.promo-section { position: relative; text-align: center; background-position: 50% 50%; background-repeat: no-repeat; background-size: cover; overflow: hidden; height: 250px; display: table; width: 100%; color: #fff; background-color: #1a2028; margin-bottom: 25px; }
.promo-section > .cell { display: table-cell; vertical-align: middle; padding: 70px 0 70px; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 15; }
.promo-section .overlay { position: absolute; left: 0; top: 0; right: 0; bottom: 0; display: block; width: 100%; height: 100%; z-index: 10; opacity: 0.9; }
.ivisa-submit-step1-button { display: block; width: 100%; }
.light h3 {color:#fff}
.light h5 {color:#fff}
</style>
<section class="promo-section sm" style="background-image: url(<?php echo $theme_url; ?>assets/img/visa.jpg)">
<div class="cell light">
    <div class="container">
        <div class="text">
            <h3 data-wow-duration="0.3s" data-wow-delay="0.5s" class="cw wow fadeIn title animated animated float-none">
                <strong><?=$filteredCountires['nationality_country']['short_name']; ?></strong> &#x2794; <strong><?=$filteredCountires['destination_country']['short_name']; ?></strong>
            </h3>
            <h5 data-wow-duration="0.3s" data-wow-delay="0.6s" class="cw wow fadeIn sub-title animated animated float-none"><?php echo trans('0590');?></h5>
        </div>
    </div>
</div>
<div class="overlay"></div>
</section>
<div class="container">
<div class="bt-collapse-wrapper as-toggle">
<div class="collapse-item">
<div class="collapse-header" id="toggleStyle04-headingOne">
<h5 class="collapse-title">
<a class="collapse-link" data-toggle="collapse" data-target="#toggleStyle04-collapseOne" aria-expanded="false" aria-controls="toggleStyle04-collapseOne"><?=lang('0577')?> <?=lang('0145')?></a>
</h5>
<div class="clear"></div>
</div>
<div id="toggleStyle04-collapseOne" class="collapse show" aria-labelledby="toggleStyle04-headingOne" style="">
<div class="collapse-body">
<div class="collapse-inner">
<form method="post" action="<?php echo base_url();?>visa/booking">
<input type="hidden" value="<?php echo $fr?>" name="from_country">
<input type="hidden" value="<?php echo $ft?>" name="to_country">
<div class="row gap-20 mb-0">
    <div class="col-12 col-sm-6">
        <div class="form-group">
        <label class="pure-material-textfield-outlined float-none">
        <input  type="text" placeholder=" " name="first_name" required="" autocomplete="off">
        <span><?php echo trans('0171');?></span>
        </label>
        </div>
    </div>
    <div class="col-md-6 col-12">
    <label class="pure-material-textfield-outlined float-none">
    <input  type="text" required="" autocomplete="off" placeholder=" " name="last_name"  value="">
        <span><?php echo trans('0172');?></span>
        </label>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-6 col-12">
    <label class="pure-material-textfield-outlined float-none">
    <input  type="text" required="" autocomplete="off" placeholder=" " name="email"  value="">
        <span><?php echo trans('094');?> </span>
        </label>
    </div>
   
    <div class="col-md-6 col-12">
    <label class="pure-material-textfield-outlined float-none">
    <input  type="email" required="" autocomplete="off" placeholder=" " name="confirmemail"  value="">
        <span><?php echo trans('0175');?> <?php echo trans('094');?></span>
        </label>
         <?php if(!empty($form_errors)){
        ?>
       <p class="text-danger"><?php echo $form_errors?></p>
       <?php } ?>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-6 col-12">
    <label class="pure-material-textfield-outlined float-none">
    <input  required="" autocomplete="off" type="text" placeholder=" " name="phone">
        <span><?php echo trans('0414');?></span>
        </label>
    </div>
 <div class="col-md-6 col-12">
 <label class="pure-material-textfield-outlined float-none">
 <input class="visadate form-control form-bg-light date" type="search" placeholder=" " name="date" value="<?php echo $date?>" required="" autocomplete="off">
        <span><?php echo trans('08');?></span>
        </label>        
    </div>
</div>
<div class="form-group">
    <div class="panel panel-default guest" style="margin-bottom:-15px">
        <div class="panel-heading d-flex align-items-center mb-20">
            <p class="mb-0 mr-20">
                <?php echo trans('0178');?>
            </p>
            <label data-toggle="collapse" data-target="#special" aria-expanded="false" aria-controls="special" class="switch">
            <input type="checkbox" />
            <span class="slider round"></span>
            </label>
        </div>
        <div id="special" aria-expanded="false" class="collapse">
            <div class="panel-body">
            <label class="pure-material-textfield-outlined float-none">
            <textarea  placeholder=" " rows="4" name="notes"></textarea>
            <span><?php echo trans('0415');?></span>
            </label>
                
            </div>
        </div>
    </div>
</div>
<br>
<div class="row form-group">
 <div class="col-md-12 col-12">
  <button type="submit" value="submit" id="sub" class="btn btn-success btn-lg btn-block completebook"><?=lang('0624')?></button>
 </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div style="margin-bottom:50px"></div>