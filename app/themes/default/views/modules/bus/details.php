<div class="bus-detail-page pt-20">
<div class="extra-info mb-20">
<div class="contain">
  <?php include $themeurl. 'views/modules/bus/search.php';?>
  </div>
  </div>
  <div class="contain">
  <div class="row">
  <div class="c4">
    <aside>
      <img src="<?php echo $theme_url;?>assets/img/add.jpg" alt="">
    </aside>
  </div>
  <div class="c8">
  <div class="extra-info mb-20 p-10">
  <div class="row">
  <div class="c3">
    <div class="seats-map">
      <div class="flex items-center">
        <span class="seat-bage-1"></span>
        <span class="seat-bage-text">Some Text</span>
      </div>
      <div class="flex items-center mt-10">
        <span class="seat-bage-2"></span>
        <span class="seat-bage-text">Some Text</span>
      </div>
      <div class="flex items-center mt-10">
        <span class="seat-bage-3"></span>
        <span class="seat-bage-text">Some Text</span>
      </div>
      <div class="available">
      You choose <span>1</span> Chairs <br><br>
      total <span class="total-price">360</span>pounds
      </div>
      <a href="" class="btn-succes mt-20">Complete</a>
    </div>
  </div>
  <div class="c9">
  <div class="bus-seat-contain">
  <div class="row flex-content-center items-center">
  <div  class="seat driver-seat">
  <img src="<?php echo $theme_url;?>assets/img/icons/driver.png" alt="" id="driver">
  <audio src="<?php echo $theme_url;?>assets/mp3/Dog-woof-single-sound.mp3" id="dog"></audio>
  </div>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat"></label>
  </div>
  <div class="row flex-content-center items-center">
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat reserved-seat"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat female-seat"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat seat-empty"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat occupied"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat bus-door"></label>
  </div>
  <div class="row items-center flex-content-center">
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat reserved-seat"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat female-seat"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat seat-empty"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat occupied"></label>
  <input type="checkbox" name="" id="seat1" hidden>
  <label for="seat1" class="seat bus-door"></label>
  </div>
  </div>
  </div>
  </div>
  </div>     
  </div>
  </div>
  </div>
</div>
<script>
let dog = document.getElementById('dog')
let driver = document.getElementById('driver')
driver.addEventListener("click", function(){
  dog.play()
});

</script>