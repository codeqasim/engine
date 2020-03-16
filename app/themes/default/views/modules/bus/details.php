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
              <form action="" method="get">
                <div class="row flex-content-between items-center">
                  <div  class="seat driver-seat">
                    <img src="<?php echo $theme_url;?>assets/img/icons/driver.png" alt="" id="driver">
                    <audio src="<?php echo $theme_url;?>assets/mp3/Bus_Horn_1.mp3" id="bus_horn"></audio>
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
                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat1" hidden>
                  <label for="seat1" class="seat"></label>
                  <input type="checkbox" name="" id="seat1" hidden>
                  <label for="seat1" class="seat"></label>
                  <input type="checkbox" name="" id="seat1" hidden>
                  <label for="seat1" class="seat"></label>
                  <input type="checkbox" name="" id="seat1" hidden>
                  <label for="seat1" class="seat"></label>
                  <input type="checkbox" name="" id="seat1" hidden>
                  <label for="seat1" class="seat"></label>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="extra-info trip-detail mb-20" >
          <h3>Changing station changed</h3>
          <div class="flex mt-20">
            <input type="radio" id="tab-trip-1"name="tab" hidden checked>
            <label for="tab-trip-1" class="trip-detail-tab">Some Text</label>
            <input type="radio" id="tab-trip-2"name="tab" hidden>
            <label for="tab-trip-2" class="trip-detail-tab">Some Text</label>
            <input type="radio" id="tab-trip-3"name="tab" hidden>
            <label for="tab-trip-3" class="trip-detail-tab">Some Text</label>
          </div>
          <div class="tab-detail">
            <h3 class="mb-10">Trip detail</h3>
            <hr>
            <ul class="mt-20">
              <li><i class="mdi mdi-flight-land mr-5"></i>Flight number: 552</li>
              <li><i class="mdi mdi-flight-land mr-5"></i>The time for doing is at <span>01:30</span>  am from Almaza on <span>17-03-2020</span></li>
              <li><i class="mdi mdi-flight-land mr-5"></i>The arrival time is 07:30 in the morning to Sharm El-Sheikh</li>
            </ul>
            <hr>
            <ul class="mt-20">
              <li><i class="mdi mdi-flight-land mr-5"></i>The trip is provided by East Delta Transport and Tourism Company</li>
            </ul>
            <div class="row no-gutters">
              <div class="c6">Phone number: 0100000000000</div>
              <div class="c6">Email: it_eastdeltatravel@yahoo.com</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  let _bushorn = document.getElementById('bus_horn')
  let driver = document.getElementById('driver')
  driver.addEventListener("click", function(){
    _bushorn.play()
  });
  
</script>