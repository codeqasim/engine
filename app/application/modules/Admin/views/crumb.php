<div class="table-head">
<div class="col-md-12 head">
<div class="">
<h4><strong><?= $title; ?></strong></h4>
<span class="panel-subtitle">
<ol class="breadcrumb page-head-nav">
<li class=""><a href="<?php echo base_url(ADMINURL); ?>dashboard">Dashboard</a></li>
<?php $url = ""; foreach($crumbdata as $index=>$c){ if($index != 0 ) {$url = $url."/".slugifyToString($c); } else{ $url = slugifyToString($c); } ?>
<li class="<?php if(count($crumbdata) == $index+1) { echo  'active';} ?>">
    <a href="<?php echo base_url(ADMINURL.$url);  ?>"><?=$c?></a></li>
<?php } ?>
</ol>
</span>
</div>
</div>
</div>