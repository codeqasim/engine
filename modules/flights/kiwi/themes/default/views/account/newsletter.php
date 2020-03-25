<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #3E50B4;
}

input:focus + .slider {
  box-shadow: 0 0 1px #3E50B4;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


</style>
<div class="panel-body">
  <div class="go-right">
    <h4 class="float-none"><?php echo trans('024');?></h4>
        <strong style="display: inline-block;transform: translate(-6px,6px);">NO</strong>
         <label class="switch float-none">
        <input type="checkbox" class="newsletter" value="<?php echo $profile[0]->accounts_email;?>" <?php if($is_subscribed){echo "checked";}?>>
      <span class="slider round"></span>
   </label> 
   <strong style="display: inline-block;transform: translate(6px,6px);">YES</strong>
</div>
<div class="clear"></div>
</div>






