<style>
@media(max-width:767px){
  .menu-vertical-01{
    display:flex;
    margin-bottom:20px;
  }
  ul.menu-vertical-01 li a {
    border:none;
    font-size:12px;    
    padding: 13px 9px 13px;
    text-align: center;
  }
  ul.menu-vertical-01 li a:after {
    border-style:none;
  }
    }
    @media(max-width:500px){
      ul.menu-vertical-01 li a {
    font-size:0.420rem;    
 
  }
    }

</style>
<div style="margin-bottom: 25px; margin-right: 0px; background: #eee; padding: 25px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
      <div class="row align-items-center pl-30">
        <div class="col-md-4">
          <img src="<?php echo PT_DEFAULT_IMAGE."user.png";?>" class="img-responsive go-right img-thumbnail">
        </div>
        <div class="col-md-8">

        <h3 style="margin-left: 17px" class="text-align-left"><?php echo trans('0307');?> <?php echo $profile[0]->ai_first_name; ?> <?php echo $profile[0]->ai_last_name; ?></h3>
        </div>
      </div>
      </div>
      <div class="col-md-6 go-left RTL">
        <div class="go-right px-5">
          <script> function startTime() { var today=new Date(); var h=today.getHours(); var m=today.getMinutes(); var s=today.getSeconds(); m=checkTime(m); s=checkTime(s); document.getElementById('txt').innerHTML=h+":"+m+":"+s; t=setTimeout(function(){startTime()},500); } function checkTime(i) { if (i<10) { i="0" + i; } return i; } </script>
          <strong class="size22">
            <body onload="startTime()">
              <div id="txt"></div>
            </body>
          </strong>
          <span class="h4">
            <script> var tD = new Date(); var datestr =  tD.getDate(); document.write(""+datestr+""); </script> <script type="text/javascript"> var d=new Date(); var weekday=new Array("","","","","","", ""); var monthname=new Array("January","February","March","April","May","June","July","August","September","Octobar","November","December"); document.write(monthname[d.getMonth()] + " "); </script>
            <script> var tD = new Date(); var datestr = tD.getFullYear(); document.write(""+datestr+""); </script>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CONTENT -->
<div class="container">
  <div class="clearfix"></div>
  <div class="container mt25 offset-0">
    <!-- CONTENT -->
    <div class="col-md-12 offset-0">
      <!-- LEFT MENU -->
      <div class="row mywishlist">
        <div class="col-12 col-md-4 col-lg-4 o2">
          <aside class="sidebar-wrapper">
            <nav>
              <ul class="menu-vertical-01">
                <li class="nav-item"><a href="#bookings"data-toggle="tab" onclick="mySelectUpdate()" class="nav-link go-text-right active"><?php echo trans('072');?></a></li>
                <li class="nav-item"><a href="#profile"data-toggle="tab" onclick="mySelectUpdate()" class="nav-link go-text-right"><?php echo trans('073');?></a></li>
                <li class="nav-item"><a href="#wishlist"data-toggle="tab" onclick="mySelectUpdate()" class="nav-link go-text-right"><?php echo trans('074');?></a></li>
                <li class="nav-item"><a href="#newsletter"data-toggle="tab" onclick="mySelectUpdate()" class="go-text-right nav-link"><?php echo trans('023');?></a></li>
                <!-- <li class="nav-item"><a href="#faq_section-05" class="nav-link">Logout</a></li> -->
              </ul>
            </nav>
          </aside>
        </div>
        <!-- LEFT MENU -->
        <!-- RIGHT CPNTENT -->
        <div class="col-md-8 offset-0 bgwhite">
          <!-- Tab panes from left menu -->
          <div class="tab-content">
            <!-- TAB 1 -->
            <div class="tab-pane fade in active show" id="bookings">
              <div class="clearfix"></div>
              <?php include $themeurl.'views/account/bookings.php'; ?>
            </div>
            <!-- END OF TAB 1 -->
            <!-- TAB 2 -->
            <div class="tab-pane fade in" id="profile">
              <?php include $themeurl.'views/account/profile.php'; ?>
            </div>
            <!-- END OF TAB 2 -->
            <!-- TAB 3 -->
            <div class="tab-pane fade in" id="wishlist">
              <?php include $themeurl.'views/account/wishlist.php'; ?>
            </div>
            <!-- END OF TAB 3 -->
            <!-- TAB 7 -->
            <div style="min-height:464px" class="tab-pane fade in" id="newsletter">
              <?php include $themeurl.'views/account/newsletter.php'; ?>
            </div>
            <!-- END OF TAB 7 -->
          </div>
          <!-- End of Tab panes from left menu -->
        </div>
      </div>
      <!-- END OF RIGHT CPNTENT -->
      <div class="clearfix"></div>
    </div>
    <br/><br/><br><br><br><br>
    <!-- END CONTENT -->
  </div>
</div>
<style>
  .tab-content {
  height: 100%;
  }
</style>
<!-- END OF CONTENT -->
<script type="text/javascript">
 // $('.comments').popover({ trigger: "hover" });
  // Update Profile
  $('.updateprofile').on('click',function(){
//  $('html, body').animate({
//  scrollTop: $(".toppage").offset().top - 100
//  },'slow');
  $.post("<?php echo base_url();?>account/update_profile", $("#profilefrm").serialize(), function(msg){
  $(".accountresult").html(msg).fadeIn("slow");
  slidediv();
      location.reload();
  });
});

  //newsletter subscription
  $(".newsletter").click(function(){
  var email = $(this).val();
  var action = '';
  var msg = '';
  if($(this).prop( "checked" )){
  action = 'add';
  msg = "<?php echo trans('0487');?>";
  }else{
  action = 'remove';
  msg = "<?php echo trans('0489');?>";
  }
  $.post("<?php echo base_url();?>account/newsletter_action", { email: email, action: action }, function(resp){
  $(".accountresult").html('<div class="alert alert-success">'+msg+'</div>').fadeIn("slow");
  slidediv();
  });
  });
  // Remove wish
  $(".removewish").on('click',function(){
  var id = $(this).prop('id');
  var confirm1 = confirm("<?php echo trans('0436');?>");
  if(confirm1){
     $("#wish"+id).fadeOut("slow");
  $.post("<?php echo base_url();?>account/wishlist/single", { id: id }, function(theResponse){
  });
  }
  });

  // Request Cancellation
  $(".cancelreq").on('click',function(){
  var id = $(this).prop('id');
  $.alert.open('confirm', 'Are you sure you want to Cancel this booking', function(answer) {
  if (answer == 'yes'){
  $.post("<?php echo base_url();?>account/cancelbooking", { id: id }, function(theResponse){
  location.reload();
  });
  }
  })
  });

  // Request EAN Cancellation
  $(".ecancel").on('click',function(){
  var id = $(this).prop('id');
  $.alert.open('confirm', 'Are you sure you want to Cancel this booking', function(answer) {
  if (answer == 'yes'){
  $.post("<?php echo base_url();?>ean/cancel", { id: id }, function(theResponse){
    if(theResponse != "0"){
      alert(theResponse);
    }
  //console.log(theResponse);
  location.reload();
  });
  }
  })
  });

  $('.reviewscore').change(function(){
  var sum = 0;
  var avg = 0;
  var id = $(this).attr("id");
  $('.reviewscore_'+id+' :selected').each(function() {
  sum += Number($(this).val());
  });
  avg = sum/5;
  $("#avgall_"+id).html(avg);
  $("#overall_"+id).val(avg);
  });

  //submit review
  $(".addreview").on("click",function(){
  var id = $(this).prop("id");
  $.post("<?php echo base_url();?>account/addreview", $("#reviews-form-"+id).serialize(), function(resp){
  if($.trim(resp) == "done"){
  $("#review_result"+id).html("<div class='matrialprogress'><div class='indeterminate'></div></div>").fadeIn("slow");
  location.reload();
  }else{
  $("#review_result"+id).html(resp).fadeIn("slow");
  }
  });
  setTimeout(function(){
  $("#review_result"+id).fadeOut("slow");
  }, 3000);
  });

  function slidediv(){
  setTimeout(function(){
  $(".accountresult").fadeOut("slow");
  }, 4000);
  }
  function mySelectUpdate(){
    var act = document.querySelectorAll('.active')
    for(var i = 0; i < act.length;i++){
      act[i].classList.remove('active')
    }
  }

</script>