<div class="bus-detail-page">
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
                  <span class="seat-bage-text">Available</span>
                </div>
                <div class="flex items-center mt-10">
                  <span class="seat-bage-2"></span>
                  <span class="seat-bage-text">Reserve</span>
                </div>
                <div class="flex items-center mt-10">
                  <span class="seat-bage-3"></span>
                  <span class="seat-bage-text">Occupaid</span>
                </div>
                <div class="flex items-center mt-10">
                  <span class="seat-bage-4"></span>
                  <span class="seat-bage-text">Female</span>
                </div>
                <div class="available">
                  You choose <span>1</span> seat <br><br>
                  total <span class="total-price"> <strong>360</strong> </span>USD
                </div>
                <a href="" class="btn-succes mt-20">1 Reserved</a>
              </div>
            </div>
            <div class="c9 flex items-center flex-content-start">
              <div class="bus-seat-contain">
              <form action="" method="get">
                <div class="row flex-content-between items-center">
                  <div  class="seat driver-seat">
                    <img src="<?php echo $theme_url;?>assets/img/icons/driver.png" alt="" id="driver">
                    <audio src="<?php echo $theme_url;?>assets/mp3/Bus_Horn_1.mp3" id="bus_horn"></audio>
                  </div>
                  <input type="checkbox" name="" id="1" hidden>
                  <label for="1" class="seat empty-seat">1</label>
                  <input type="checkbox" name="" id="2" hidden>
                  <label for="2" class="seat empty-seat">2</label>
                  <input type="checkbox" name="" id="3" hidden>
                  <label for="3" class="seat empty-seat">3</label>
                  <input type="checkbox" name="" id="4" hidden>
                  <label for="4" class="seat empty-seat">4</label>
                </div>
                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="5" hidden>
                  <label for="5" class="seat">1</label><input type="checkbox" name="" id="6" hidden>
                  <label for="6" class="seat">2</label><input type="checkbox" name="" id="7" hidden>
                  <label for="7" class="seat empty-seat"></label><input type="checkbox" name="" id="8" hidden>
                  <label for="8" class="seat">3</label><input type="checkbox" name="" id="9" hidden>
                  <label for="9" class="seat">4</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="10" hidden>
                  <label for="10" class="seat">5</label><input type="checkbox" name="" id="11" hidden>
                  <label for="11" class="seat">6</label><input type="checkbox" name="" id="12" hidden>
                  <label for="12" class="seat empty-seat"></label><input type="checkbox" name="" id="13" hidden>
                  <label for="13" class="seat">7</label><input type="checkbox" name="" id="14" hidden>
                  <label for="14" class="seat">8</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="15" hidden>
                  <label for="15" class="seat">9</label><input type="checkbox" name="" id="16" hidden>
                  <label for="16" class="seat">10</label><input type="checkbox" name="" id="17" hidden>
                  <label for="17" class="seat empty-seat"></label><input type="checkbox" name="" id="18" hidden>
                  <label for="18" class="seat">11</label><input type="checkbox" name="" id="19" hidden>
                  <label for="19" class="seat">12</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="20" hidden>
                  <label for="20" class="seat">13</label><input type="checkbox" name="" id="21" hidden>
                  <label for="21" class="seat">14</label><input type="checkbox" name="" id="22" hidden>
                  <label for="22" class="seat empty-seat"></label><input type="checkbox" name="" id="23" hidden>
                  <label for="23" class="seat">15</label><input type="checkbox" name="" id="24" hidden>
                  <label for="24" class="seat">16</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat5" hidden>
                  <label for="seat5" class="seat">17</label><input type="checkbox" name="" id="seat6" hidden>
                  <label for="seat6" class="seat">18</label><input type="checkbox" name="" id="seat7" hidden>
                  <label for="seat7" class="seat empty-seat"></label><input type="checkbox" name="" id="seat8" hidden>
                  <label for="seat8" class="seat">19</label><input type="checkbox" name="" id="seat9" hidden>
                  <label for="seat9" class="seat">20</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat5" hidden>
                  <label for="seat5" class="seat">21</label><input type="checkbox" name="" id="seat6" hidden>
                  <label for="seat6" class="seat">22</label><input type="checkbox" name="" id="seat7" hidden>
                  <label for="seat7" class="seat empty-seat"></label><input type="checkbox" name="" id="seat8" hidden>
                  <label for="seat8" class="seat">23</label><input type="checkbox" name="" id="seat9" hidden>
                  <label for="seat9" class="seat">24</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat5" hidden>
                  <label for="seat8" class="seat">25</label><input type="checkbox" name="" id="seat9" hidden>
                  <label for="seat9" class="seat">26</label>
                  <label for="seat7" class="seat empty-seat"></label><input type="checkbox" name="" id="seat8" hidden>
                  <label for="seat5" class="seat empty-seat"></label><input type="checkbox" name="" id="seat6" hidden>
                  <label for="seat6" class="seat empty-seat"></label><input type="checkbox" name="" id="seat7" hidden>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat5" hidden>
                  <label for="seat5" class="seat">27</label><input type="checkbox" name="" id="seat6" hidden>
                  <label for="seat6" class="seat">28</label><input type="checkbox" name="" id="seat7" hidden>
                  <label for="seat7" class="seat empty-seat"></label><input type="checkbox" name="" id="seat8" hidden>
                  <label for="seat8" class="seat">29</label><input type="checkbox" name="" id="seat9" hidden>
                  <label for="seat9" class="seat">30</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat5" hidden>
                  <label for="seat5" class="seat">31</label><input type="checkbox" name="" id="seat6" hidden>
                  <label for="seat6" class="seat">32</label><input type="checkbox" name="" id="seat7" hidden>
                  <label for="seat7" class="seat empty-seat"></label><input type="checkbox" name="" id="seat8" hidden>
                  <label for="seat8" class="seat">33</label><input type="checkbox" name="" id="seat9" hidden>
                  <label for="seat9" class="seat">34</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat5" hidden>
                  <label for="seat5" class="seat">34</label><input type="checkbox" name="" id="seat6" hidden>
                  <label for="seat6" class="seat">35</label><input type="checkbox" name="" id="seat7" hidden>
                  <label for="seat7" class="seat empty-seat"></label><input type="checkbox" name="" id="seat8" hidden>
                  <label for="seat8" class="seat">37</label><input type="checkbox" name="" id="seat9" hidden>
                  <label for="seat9" class="seat">38</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat5" hidden>
                  <label for="seat5" class="seat">39</label><input type="checkbox" name="" id="seat6" hidden>
                  <label for="seat6" class="seat">40</label><input type="checkbox" name="" id="seat7" hidden>
                  <label for="seat7" class="seat empty-seat"></label><input type="checkbox" name="" id="seat8" hidden>
                  <label for="seat8" class="seat">41</label><input type="checkbox" name="" id="seat9" hidden>
                  <label for="seat9" class="seat">42</label>
                </div>

                <div class="row flex-content-between items-center">
                <input type="checkbox" name="" id="seat5" hidden>
                  <label for="seat5" class="seat">43</label><input type="checkbox" name="" id="seat6" hidden>
                  <label for="seat6" class="seat">44</label><input type="checkbox" name="" id="seat7" hidden>
                  <label for="seat7" class="seat empty-seat"></label><input type="checkbox" name="" id="seat8" hidden>
                  <label for="seat8" class="seat">45</label><input type="checkbox" name="" id="seat9" hidden>
                  <label for="seat9" class="seat">46</label>
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
              <div class="c6">Email: info@bus.com</div>
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