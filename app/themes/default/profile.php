   
<?php include 'header.php';?>
	
	<!--search drop down calendar-->
	
	<div class="container hiddencls" id="searchcalendardiv">
	<div class="col-lg-12 airfcfx-dd-calendar-cnt">
	<div class="airfcfx-dd-calendar border1  bg_white caltxt">
	
	<div class="table1 margin_top10 margin_left5 margin_bottom10 padd_5_10 checkinalgn">

	<div class="checkindivcls">
	<label>Check In</label>
	<input id="check-in-main" type="text" class="form-control" placeholder="DD-MM-YYYY" value="">
	</div>
	<div class="checkindivcls">
	<label>Check Out</label>
	<input id="check-out-main" type="text" class="form-control" placeholder="DD-MM-YYYY" value="">
	</div>
	<div class="guestdivcls">
	<label>Guests</label>
	<select class="form-control margin10" id="guest-count"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
	</div>
	</div><!--table1 end--><div class="airfcfx-dd-calendar-rt-txt col-lg-12">Room Type</div><div class="airfcfx-dd-cal-RT"><div class="pull-left padleft">
		<label><input id="roomtype1" class="airfcfx-search-drop-checkbox" type="checkbox" name="roomtype" value="1">
		<div class="airfcfx-search-checkbox-text">Entire Place</div></label></div></div>
	
	<div class="airfcfx-dd-cal-RT"><div class="pull-left padleft">
		<label><input id="roomtype2" class="airfcfx-search-drop-checkbox" type="checkbox" name="roomtype" value="2">
		<div class="airfcfx-search-checkbox-text">Private Room</div></label></div></div>
	
	<div class="airfcfx-dd-cal-RT"><div class="pull-left padleft">
		<label><input id="roomtype3" class="airfcfx-search-drop-checkbox" type="checkbox" name="roomtype" value="3">
		<div class="airfcfx-search-checkbox-text">Shared Room</div></label></div></div><div class="airfcfx-search-dd-findplace-btn"><button class="airfcfx-findplace-btn airfcfx-panel btn btn_email" onclick="searchlistmains()">Find a place</button></div>
	</div><!--border1 end-->
	</div></div>
			<div class="contentBody topMargin">
		<div class="profile-page">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 margin_top20 margin_bottom20">
            <div class="profile_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');" ></div>            <div class="border1 margin_top20 margin_bottom20">
               <h4 class="profile_menu1 margin_top0" style="padding:0px;margin-bottom:0px;">
                  Verified Info	
                  <i class="fa fa-question-circle hover_tool pos_rel pull-right">
                     <div class="tooltip_text">
                        <p class="font_size12">Verifications help build trust between guests and hosts and can make booking easier. </p>
                     </div>
                     <!--tooltip_text end-->
                  </i>
               </h4>
               <div class="bg_white margin_top20 margin_bottom10">
                  <div class="airfcfx-verifications-row table1">
                     <div class="airfcfx-verified-symbol-width tab_cel text-center ">
                                                <i class="tick-circle fa-1x text-success"></i>
                     </div>
                     <p>Email</p>
                     <!--<p class="text_gray1">Verified </p>-->
                                    </div>
               <div class="airfcfx-verifications-row table1" style="border-bottom: none;">               <div class="airfcfx-verified-symbol-width tab_cel text-center ">
                                    <i class="tick-circle fa-1x text-success"></i>
                  
               </div>
               <p>Mobile </p>
               <!--<p class="text_gray1">Verified </p>-->
                     </div>
            <a href="<?php echo $app_url; ?>1.php" class="text-danger margin_left20" target="_blank">Learn more  </a> 
         </div>
   <!--row end -->
</div>
<!--border1 end -->
<div class="border1 margin_top20 margin_bottom20">
   <h4 class="profile_menu1 margin_top0" style="padding:0px;margin-bottom:0px;">About Me</h4>
   <div class="bg_white margin_top20 margin_bottom10">

      <div class="airfcfx-verifications-row table1">
        <p style="word-break: break-all;"> 
         School: <br>Adithya school of excellence<br><br>Work: <br>Hitasoft technology solutions and private limited         </p>  
      </div>

      <div class="airfcfx-verifications-row table1">
         <p>Languages: <p class="language-view">English (UK), French, Urdu, Arabic</p></p>
            
      </div>
   </div>
</div>
<!-- div class="border1 margin_top20 margin_bottom20">
   <h4 class="profile_menu1 margin_top0" style="padding:0px;margin-bottom:0px;">Connected accounts</h4>
   <div class="bg_white margin_top20 margin_bottom10">
      <div class="airfcfx-verifications-row table1">
         <div class="airfcfx-verified-symbol-width tab_cel text-center ">
            <i class="tick-circle fa-1x text-success"></i>
         </div>
         <p>Facebook</p>
      </div>
   </div>
</div -->
</div>
<div class="profile-nam-tag col-xs-12 col-sm-8 col-md-9 col-lg-9 margin_top20 margin_bottom20">
   <h1 class="profile-name">Hey, I’m Demo!</h1>
   <h4 class="member-since">IN · Member since March 2019</h4><div class="margin_bottom10 margin_top10">I am very quite and interested in computer codes as well as Hacks.</div><div class="help-block.help-block-error"></div>        <div id="profile_reviews" class="bg_white margin_top30"> 
          <div class="mylist-profile" id="myList">
            <div class="luxury-details">
              <h5 class="luxiry-title margin_bottom20">2 Reviews <span id="review"></span></h5>
            </div><div class="eachrow">
                <div class="col-xs-12 col-sm-12">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2 text-center padd_bottom30">
                      <div class="profile center-block" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');width:65px;height:65px;"> </div>
                        <a class="text_gray1 margin_top10 center-block" href="My0yOTQ%3d.html">Aswad</a>
                    </div><!--col-sm-4 end-->
            
                    <div class="col-xs-12 col-sm-9 col-md-10">
                      <p>Lvely property wid beautiful views. Quite n isolated..Awesome if u wanna have a "me or we time" wid ur family and friends away from d hustle n bustle of mall road.</p>
                      <div class="row margin_top0">
                        <div class="col-xs-12 col-sm-6">
                          <p class="text-muted margin_top10">March 2019.</p>
                        </div><!--col-sm-6 end-->
                      </div><!--row end-->
                    </div><!--col-sm-9 end-->

                  </div><!--row end-->
                </div><!--col-sm-9 end-->
              </div><!--row end--><div class="eachrow">
                <div class="col-xs-12 col-sm-12">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2 text-center padd_bottom30">
                      <div class="profile center-block" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');width:65px;height:65px;"> </div>
                        <a class="text_gray1 margin_top10 center-block" href="My02NTI%3d.html">Aswad</a>
                    </div><!--col-sm-4 end-->
            
                    <div class="col-xs-12 col-sm-9 col-md-10">
                      <p>Demo's place is located in a great place.... you are next to the metro station, the world's largest mall, plenty of restaurants and attractions. The management team is outstanding.</p>
                      <div class="row margin_top0">
                        <div class="col-xs-12 col-sm-6">
                          <p class="text-muted margin_top10">March 2019.</p>
                        </div><!--col-sm-6 end-->
                      </div><!--row end-->
                    </div><!--col-sm-9 end-->

                  </div><!--row end-->
                </div><!--col-sm-9 end-->
              </div><!--row end-->             
          </div>
          <div align="center" class="clear">
                      </div>
      </div><!--bg_white-->
  
      
  <div id="profile_listing" class="luxury-details">
    <h5 class="luxiry-title margin_bottom30">Listings (16)</h5>
  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-hor-padding"><div class="pos_rel mylistings">    
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 2 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Urban Farmhouse at Denver</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $145 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 1 Bedroom              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Grand and Cozy 1910's Studio</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $150 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Private Room              <span data-original-title="" title=""> . 2 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">South Mission Beach Zen-Like Home</p>
          <div class="similar-prices">
                            <div class="hrs-price">
                  <span data-original-title="" title="">
                    $20.03  
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 2 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Lussuoso. Vista incantevole</p>
          <div class="similar-prices">
                            <div class="hrs-price">
                  <span data-original-title="" title="">
                    $134.9  
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Private Room              <span data-original-title="" title=""> . 1 Bedroom              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Private Studio in Sol, Madrid</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $106.8 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 1 Bedroom              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Melia Marina Varadero Cuba</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $60 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 1 Bedroom              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Otentic, eco tent lodge</p>
          <div class="similar-prices">
                            <div class="hrs-price">
                  <span data-original-title="" title="">
                    $65  
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Private Room              <span data-original-title="" title=""> . 1 Bedroom              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Luxury Villa with Pool & Ocean View</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $393.47 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Shared Room              <span data-original-title="" title=""> . 3 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Bukit Timah/Near city</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $117.15 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Private Room              <span data-original-title="" title=""> . 2 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">The Muse Haus II - Balcony Room</p>
          <div class="similar-prices">
                            <div class="hrs-price">
                  <span data-original-title="" title="">
                    $195.25  
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 3 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Luxury 5* chalet - Verbier region</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $585.74 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 1 Bedroom              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Noosa Tree Top Eco Retreat</p>
          <div class="similar-prices">
                            <div class="hrs-price">
                  <span data-original-title="" title="">
                    $150  
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 2 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Charming cottage in Landour</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $52.07 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 1 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Private Room              <span data-original-title="" title=""> . 3 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Quaint Wood Cottage, Sherpa khangba</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $50 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Entire Place              <span data-original-title="" title=""> . 3 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Elegant 3BDR Apartment - Downtown</p>
          <div class="similar-prices">
                            <div class="hrs-price">
                  <span data-original-title="" title="">
                    $550  
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="full-star-span">
                      <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                  </span><span class="place-reviews"> 1 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
        
      <div class="owl-item margin_bottom30 eachlisting">
        <a class="rm_text_deco" href="<?php echo $app_url; ?>M180MDA.php">
        
        <div class="item">
          <div class="bg_img" style="background-image:url('<?php echo $app_url; ?>assets/albums/images/listings/1552385505_2_0.jpg');"></div>
           
          <p class="siml-text1 small text_gray1">
            <b>  Private Room              <span data-original-title="" title=""> . 2 Bedrooms              </span>
            </b>
          </p>
                               
          <p class="siml-text2 fa-1x">Large Boutique Condo by Metro</p>
          <div class="similar-prices">
                            <div class="full-price">
                  <span data-original-title="" title="">
                    $317.81 
                  </span>
                </div>
                      </div>

          <div class="similar-ratings">
                        <div class="country-details">
              <p class="margin_top5 place-star-rating">
                  <span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="half-star-span">
                         <span class="no-cover-star">
                           <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                         </span>
                     </span><span class="place-reviews"> 0 </span>                  
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    </div></div><div class="view-options">
      <div id="loadMoreList" class="views-list pull-right">Load more <i class="fa fa-angle-double-down"></i>
      </div>
      <div id="showLessList" class="views-list pull-right">Show less <i class="fa fa-angle-double-up"></i></div>
    </div>      
</div>


</div> <!-- row end -->
</div> <!-- container end -->
</div>
<script type="text/javascript">
   $( document ).ready(function() {
      $("#w0-success-0").css("display","block");
      $("#w0-success-0").css("right","0");
   });
   setTimeout(function() {
   	$("#w0-success-0").css("right","-845px");
   }, 4000);

/*Show more/less for profile Reviews.*/
$(document).ready(function () {
   let reviewLength, size_li_review;
   var xcnt=3;
   reviewLength = $('div.eachrow:lt('+xcnt+')').css('display', 'block');
   size_li_review = $("div.eachrow").size();
    

      if( size_li_review < xcnt || size_li_review == xcnt)
      {
         $('#showLess').hide();
         $('#loadMore').hide();
      }
      if(reviewLength <= xcnt || size_li_review > xcnt)  
      {
         $('#showLess').hide();
      } 

    $('#loadMore').click(function () {
        xcnt= (xcnt+5 <= size_li_review) ? xcnt+5 : size_li_review;
        $('div.eachrow:lt('+xcnt+')').show();
         $('#showLess').show();
        if(xcnt >= size_li_review){
            $('#loadMore').hide();
        }
    });
    $('#showLess').click(function () {
         //xcnt=(xcnt-5<0) ? 3 : xcnt-5;
         xcnt=3;  
         if(xcnt <= 3 || xcnt <=5) { 
            $('#showLess').hide();
            $('html, body').animate({
                scrollTop: $("#profile_reviews").offset().top
            }, 800); 
            setTimeout(function() {
               $('#myList div.eachrow').not(':lt('+xcnt+')').hide();
               $('#loadMore').show();
             }, 1000); 
          } 

    });
});


/*Show more/less for profile listings.*/
$(document).ready(function () {
   let eachlistLength, size_li;
    var x=3;
    eachlistLength = $('div.eachlisting:lt('+x+')').css('display', 'inline-block');
    size_li = $("div.eachlisting").size();

    if( size_li < x || size_li == x)
    {
      $('#loadMoreList').hide();
      $('#showLessList').hide();
    } else if(eachlistLength.length <= x)
    {
      $('#showLessList').hide(); 
    }

    $('#loadMoreList').click(function () {
        x= (x+3 <= size_li) ? x+3 : size_li;
        $('div.eachlisting:lt('+x+')').css('display', 'inline-block');
        $('#showLessList').show();

        if(x >= size_li){  
            $('#loadMoreList').hide();
        }
    });
    $('#showLessList').click(function () {
         //x=(x-3<0) ? 3 : x-3;
         x=3;
         if(x <= 3 || xcnt <=5) { 
            $('#showLessList').hide();
            $('html, body').animate({
                scrollTop: $("#profile_listing").offset().top
            }, 800); 
            setTimeout(function() {
              $('div.eachlisting').not(':lt('+x+')').hide(); 
              $('#loadMoreList').show();
             }, 1000); 
          } 
         
        
    });
});
</script>
<style type="text/css">
div.eachrow{ display:none;
}
div.eachlisting{ display:none;
}
#loadMore {
    color:#ccc;
    cursor:pointer;
}
#loadMore:hover {
    color:black;
}
#showLess {
    color:red;
    cursor:pointer;
}
#showLess:hover {
    color:black;
}

/*
Load More And Show More Lists.
*/

#loadMoreList {
    color:#000;
    cursor:pointer;
}
#loadMoreList:hover {
    color:black;
}
#showLessList {
    color:#000;
    cursor:pointer;
}
#showLessList:hover {
    color:black;
}
</style>
<div class="modal fade" id="report-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header clearfix">
         <span class="modal-title">Do you want to anonymously report this user?</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
               <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
            </svg>
          </span>
        </button>        
      </div>

      <div class="modal-body report-user-pop">
         <p>If so, please choose one of the following reasons.</p> 

         <div class="body-report">
                     </div>
      </div>
          
    </div>
  </div>
</div>



<div class="modal fade" id="report-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header clearfix">
         <span class="modal-title">Thank You</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
               <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
            </svg>
          </span>
        </button>        
      </div>
      <div class="modal-body report-user-pop">
         <div class="body-report">
               <p>Thanks for taking the time to report this user. These reports help make Airbnb better for everyone, so we take them seriously. We’ll reach out if we have questions about your report.</p>
         </div>
      </div>
          
    </div>
  </div>
</div>


<div class="modal fade" id="delete-report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header clearfix">
         <span class="modal-title">Thank You</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
               <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
            </svg>
          </span>
        </button>        
      </div>
      <div class="modal-body report-user-pop">
         <div class="body-report">
               <p>Your report was deleted.</p>
         </div>
      </div>
          
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>	</div>
<div class="footer">
   <div class="airfcfx-home-cnt-width container margin_bottom30">
      <div class="col-xs-12 col-sm-4 margin_bottom20">
         <div class="col-xs-12 col-sm-12 airfcfx-footer-dd-cnt no-hor-padding">
            <select id="language_select" class="col-xs-12 col-sm-6 airfcfx-footer-select form-control margin10 no-hor-padding" onchange="change_language()">
            <option selected value="en">English</option>            <option value="fr">French</option>            <option value="zh">Chinese</option>            </select>
         </div>
         <div class="col-xs-12 col-sm-12 airfcfx-footer-dd-cnt no-hor-padding">
            <select id="currency_select" class="col-xs-12 col-sm-6 airfcfx-footer-select form-control margin10 no-hor-padding" onchange="change_currency()"><option selected value="1">USD</option><option value="2">EUR</option><option value="3">GBP</option><option value="4">MXN</option><option value="5">RUB</option><option value="6">AUD</option><option value="7">SGD</option></select>         </div>
         <!-- <h4 class="text_white">Contact Us</h4>
            <ul class="footer_menu list-unstyled">
            <li> kamala 1st street, chinnachokikulam, madurai -625002</li>
               <li> <b>Phone:</b> 1234567899</li>
               <li> <b>Email:</b>
                       info@hitasoft.commm</li>
                           </ul> -->
                 <div class="airfcfx-footer-app-section col-xs-12 col-sm-12 no-padding">
          <div class="airfcfx-app-section-txt">Native Apps</div>
          <div class="airfcfx-footer-app-link">
                      <a href="index.php" target="_blank" class="airfcfx-app-link"><img src="<?php echo $app_url; ?>assets/images/ios-app-link.png" width="32px" height="32px" alt="ios link"></a>
                      <a href="index.php" target="_blank" class="airfcfx-app-link"><img src="<?php echo $app_url; ?>assets/images/android-app-link.png" width="32px" height="32px" alt="ios link"></a> 
           
          </div>
        </div>
              </div>
      <!-- col-sm-4 end -->
      <div class="col-xs-12 col-sm-8">
         <h4 class="text_black bold-font">Informations</h4>
         <ul class="airfcfx-footer-ul footer_menu list-unstyled"><li><a href="<?php echo $app_url; ?>1.php">Help</a></li><li><a href="<?php echo $app_url; ?>2.php">Policies</a></li><li><a href="<?php echo $app_url; ?>3.php">Reservation</a></li><li><a href="<?php echo $app_url; ?>4.php">Contact host</a></li></ul>      </div>
            <!-- col-sm-4 end -->
      <!--div class="col-xs-12 col-sm-4">
         <h4 class="text_white">Top Destinations</h4>
         <ul class="footer_menu list-unstyled">
             <li><a href="#">London</a></li>
             <li><a href="#">New York</a></li>
             <li><a href="#">Amsterdam</a></li>
             <li><a href="#">Paris</a></li>
             <li><a href="#">Berlin</a></li>
             <li><a href="#">Barcelona</a></li>
             <li><a href="#">Rome</a></li>
         </ul>
         </div-->
      <!-- col-sm-4 end -->
   </div>
   <!-- container end -->
   <div class="airfcfx-home-cnt-width container margin_bottom20">
      <div class="airfcfx-footer-border border_bottom1 margin_top20 margin_bottom30"></div>
      <div class="text-center">
         <!--<div class="airfcfx-joinus-txt">Join Us On</div>-->
         <div class="footer-social-icons margin_bottom10"><a class="airfcfx-socialicon-padding" href="https://www.facebook.com/bedforest/"><i class="fa fa-facebook social_icon"></i></a> 
            <a class="airfcfx-socialicon-padding" href="https://twitter.com/hitasoft_/"><i class="fa fa-twitter social_icon"></i></a> 
            <a class="airfcfx-socialicon-padding" href="https://plus.google.com/u/0/118220092516248577075/"><i class="fa fa-google-plus social_icon"></i></a> 
            <a class="airfcfx-socialicon-padding" href="https://www.linkedin.com/company/bedforest/"><i class="fa fa-linkedin social_icon"></i></a> 
            <a class="airfcfx-socialicon-padding" href="https://www.youtube.com/"><i class="fa fa-youtube-play social_icon"></i></a> 
            <a class="airfcfx-socialicon-padding" href="https://www.pinterest.com/bedforest/"><i class="fa fa-pinterest-p social_icon"></i></a> 
            <a class="airfcfx-socialicon-padding" href="https://www.instagram.com/bedforest/"><i class="fa fa-instagram social_icon"></i></a></div>
            <div class="foter-copyright"><p class="airfcfx-copyright">Copyright &copy; AirFinch
                2019</p></div>      </div>
   </div>
   <!-- container end -->
</div>

			<!-- footer end -->

	<script src="<?php echo $app_url; ?>/assets/c0b7f169/yii.js"></script>	
 </div>

 <style type="text/css">
	ul.home-menu {
		padding: 0px 20px !important;
	}
	ul.home-menu li a.home-menu-text,ul.home-menu li a.home-menu-text:focus {
		padding: 0px;
		background: transparent;
		color: #484848 !important;
		font-size: 15px !important; 
		font-family: Circular, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, sans-serif;
		font-weight: 600;
		/*letter-spacing: 0.5px !important;*/
		opacity: 0.9;
	}
	ul.home-menu li a.home-menu-text:hover {
		background: transparent !important;
		color: #484848 !important; 
	}
	ul.home-menu li.note-msg a:hover {
		background: transparent !important;
		color:#FE5771 !important; 
	}
	.note_count {
		font-size: 14px !important;
	}
	.note_view {
		font-size: 14px !important;
	 	font-weight: 500 !important;
	 	float: right;
	} 
	.notify-round {
		fill: rgb(0, 132, 137) !important;
		height: 6px !important; 
		position: absolute !important;
		top: 50% !important;
		transform: translate3d(4px, -8px, 0px) !important;
		width: 6px !important;
		animation-name: keyframe_p1skye !important;
		animation-duration: 0.5s !important;
		animation-timing-function: ease !important;
		animation-fill-mode: both !important;
		opacity: 1 !important;
		right: 10px !important;
	}
</style>

</body>


</html>
<script type="text/javascript" src="<?php echo $app_url; ?>assets/js/fileinput.js"></script>
<script
	type="text/javascript" src="<?php echo $app_url; ?>assets/js/owl.carousel.js"></script>
	
<script
	type="text/javascript" src="<?php echo $app_url; ?>assets/js/jquery-ui.min.js"></script>
<script>
	google.maps.event.addDomListener(window, 'load', initialize);
	
	$(document).ready(function(){
$("#check-in-main").keydown(function(event){
if (event.which == 13) {
$("#check-in-main").readonlyDatepicker(true);
}
});
$("#check-out-main").keydown(function(event){
if (event.which == 13) {
$("#check-out-main").readonlyDatepicker(true);
}
});		
	$("#check-in-main").datepicker({
		minDate:new Date(),
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#check-out-main").datepicker("option", "minDate", dt);
        },
		onClose: function (selectedDate) {
		$("#check-out-main").datepicker('show');
		}		
    });
edate = new Date();
edate.setDate(edate.getDate()+1);	
    $("#check-out-main").datepicker({
		minDate:edate,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#check-in-main").datepicker("option", "maxDate", dt);
        }
    });		
		
		var docHeight = $(window).height();
		   var footerHeight = $('.footer').height();
		   var footerTop = $('.footer').position().top + footerHeight;
	
		   if (footerTop < docHeight) {
		    $('.footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
		   }	
		
		$("body").css("overflow-x","hidden");
		$(".alert-success").addClass("flashcss");
	
		$("#closebutton").click(function(){
			$(".alert-success").removeClass("flashcss");
		});

		if($('body > div > div.alert').hasClass('alert-success')){
			setTimeout(function(){
            $(".alert-success").removeClass("flashcss");
      	},5000);
		} 
		

		/* loginSession = readCookie('PHPSESSID');
		function readCookie(name) {
		    var nameEQ = escape(name) + "=";
		    var ca = document.cookie.split(';');//console.log(document.cookie);
		    for (var i = 0; i < ca.length; i++) {
		        var c = ca[i];
		        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
		        if (c.indexOf(nameEQ) === 0) return unescape(c.substring(nameEQ.length, c.length));
		    }
		    return null;
		}
		if (typeof timerId != 'undefined'){
			clearInterval(timerId);
		}
		var timerId = setInterval(function() {
			var currentSession = readCookie('PHPSESSID');
		    if(loginSession != currentSession) {
			    console.log('in reload '+loginSession+" "+currentSession);
			    window.location = 
		        //Or whatever else you want!
		    }
		    
		},1000);*/
	});

function initMapmain() {
	autocomplete = new google.maps.places.Autocomplete((document
			.getElementById('where-to-go')), { 
		types : [ 'geocode' ]
	});
}
google.maps.event.addDomListener(window, 'load', initMapmain);
</script>
