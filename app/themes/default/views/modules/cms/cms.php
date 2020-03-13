<div class="contentBody topMargin">
		<div class="help-view">

      <div class="container margin_bottom30">    

        
        <div class="col-xs-12 col-sm-12 margin_top20">
            <div class="col-xs-8 helpdiv no-hor-padding">
      <?php 
      foreach ($fetch->result_array() as $row){
   ?>
            <h2 class="text-center"><?=$row['title']?></h2><div class="col-xs-12" style="margin-top:4px;">
</div><div class="clear"></div><br><div class="col-xs-12"><div>
<div>
<div>
<div>
<p><?=$row['description']?></p>
<?php }?>
</div>
</div>
</div>
</div>
</div>            </div>
      </div> <!--col-sm-9 end -->
        
    </div> <!--container end -->

</div>
	</div>