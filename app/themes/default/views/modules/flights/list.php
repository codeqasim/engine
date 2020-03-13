<div class="flight-list-page">
  <div class="edit-search">
    <div class="contain">
      <div class="row mb-20 row-rtl">
        <div class="c10">
          <div class="left-side-info rtl-align-right">
            <span><strong>Dubai, United Arab Emirates</strong></span>
            <span>Lahore, Pakistan </span>
            <span>( Round Trip )</span>
            <div>
              <p><strong>20 February </strong> 2020 29 , February 2020</p>
              <p>1 Adult Economy</p>
            </div>
          </div>
        </div>
        <div class="c2">
          <div class="right-side-info">
            <label for="inputFlight" class="btn prime-outline w100">Edit</label> 
          </div>
        </div>
      </div>
    </div>
    <div class="contain">
    <input type="checkbox" name="" id="inputFlight" hidden>
        <?php include $themeurl. 'views/modules/flights/search.php';?>
    </div>
  </div>
  <div class="contain">
    <div class="row row-rtl">
      <div class="c3">
      <label for="filter" class="btn prime-outline w100 mb-20 btn-filter">Filter</label>
      <input type="checkbox" name="" id="filter" hidden>
        <aside>
          <div class="filter-section">
            <div class="filter-header">
              <h5>Filters</h5>
            </div>
            <div class="pb-10">
              <button>Clear Filter</button>
            </div>
          </div>
          <div class="filter-section mt-30 pb-10">
            <div class="filter-header">
              <h5>Price</h5>
              <p class="rtl-align-right">includes taxes and services</p>
            </div>
            <select name="" id="">
              <option value="">Total</option>
              <option value="">Per Person</option>
            </select>
            <input type="range" class="mt-20">
            <div class="prices flex flex-content-between mt-20">
              <span class="from">
              <span>1518 </span>
              <span class="currency d-block">SAR</span>
              </span>
              <span class="resultCount">
              <span>100</span>trips</span>
              <span class="to"><span>2879 </span>
              <span class="currency d-block">SAR</span>
              </span>
            </div>
          </div>
          <div class="filter-section mt-30 pb-10">
            <div class="filter-header">
              <h5 class="mb-20">Stops</h5>
              <div class="mt-10">
                <label for="no-stop" class="rtl-f-right">
                <input type="checkbox" id="no-stop">
                No Stop
                </label>
                <div class="clear"></div>
              </div>
              <div class="mt-10">
                <label for="one-stop" class="rtl-f-right">
                <input type="checkbox" id="one-stop">
                1 Stop
                </label>
                <div class="clear"></div>
              </div>
              <div class="mt-10">
                <label for="two-stop" class="rtl-f-right">
                <input type="checkbox" id="two-stop">
                2 Stop
                </label>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div class="filter-section pb-10">
            <div class="filter-header">
              <h5 class="mb-20">Airlines</h5>
            </div>
            <div class="mt-10 airlines">
              <label for="airline-1">
              <input type="checkbox" id="airline-1" />
              <img src="<?php echo $theme_url;?>assets/img/WY.png" alt="Airlines">
              Oman International Airlines
              </label>
            </div>
            <div class="mt-10 airlines">
              <label for="airline-2">
              <input type="checkbox" id="airline-2" />
              <img src="<?php echo $theme_url;?>assets/img/WY.png" alt="Airlines">
              Oman International Airlines
              </label>
            </div>
            <div class="mt-10 airlines">
              <label for="airline-3">
              <input type="checkbox" id="airline-3" />
              <img src="<?php echo $theme_url;?>assets/img/WY.png" alt="Airlines">
              Oman International Airlines
              </label>
            </div>
          </div>
          <div class="filter-section pb-10">
            <div class="filter-header">
              <h5 class="mb-20">Refund</h5>
            </div>
            <div class="mt-10">
              <label for="Refundable" class="rtl-f-right">
              <input type="checkbox" id="Refundable" />
              Refundable
              </label>
              <div class="clear"></div>
            </div>
            <div class="mt-10">
              <label for="Non-Refundable" class="rtl-f-right">
              <input type="checkbox" id="Non-Refundable" />
              Non Refundable
              </label>
              <div class="clear"></div>
            </div>
          </div>
          <div class="filter-section mt-30 pb-10">
            <div class="filter-header">
              <h5 class="mb-20">Timing</h5>
            </div>
            <div class="timing">
              <span>Dubai departure time</span>
              <input type="range" class="mt-20 d-block">
              <div class="depart-time flex flex-content-between mt-20">
                <span class="from">
                <span class="day">Thu</span>
                <span class="time">12:45</span>
                </span>
                <span class="total-trip">
                <span>100</span>trips</span>
                <span class="to">
                <span class="day">Thu </span>
                <span class="time">11:45</span>
                </span>
              </div>
            </div>
            <div class="timing mt-20">
              <span>Lahore departure time</span>
              <input type="range" class="mt-20 d-block">
              <div class="depart-time flex flex-content-between mt-20">
                <span class="from">
                <span class="day">Thu</span>
                <span class="time">12:45</span>
                </span>
                <span class="total-trip">
                <span>100</span>trips</span>
                <span class="to">
                <span class="day">Thu </span>
                <span class="time">11:45</span>
                </span>
              </div>
            </div>
            <div class="timing mt-20">
              <span>Dubai Arrival time</span>
              <input type="range" class="mt-20 d-block">
              <div class="depart-time flex flex-content-between mt-20">
                <span class="from">
                <span class="day">Thu</span>
                <span class="time">12:45</span>
                </span>
                <span class="total-trip">
                <span>100</span>trips</span>
                <span class="to">
                <span class="day">Thu </span>
                <span class="time">11:45</span>
                </span>
              </div>
            </div>
            <div class="timing mt-20">
              <span>Lahore arrival time</span>
              <input type="range" class="mt-20 d-block">
              <div class="depart-time flex flex-content-between mt-20">
                <span class="from">
                <span class="day">Thu</span>
                <span class="time">12:45</span>
                </span>
                <span class="total-trip">
                <span>100</span>trips</span>
                <span class="to">
                <span class="day">Thu </span>
                <span class="time">11:45</span>
                </span>
              </div>
            </div>
          </div>
          <div class="filter-section mt-30 pb-10">
            <div class="filter-header">
              <h5 class="mb-20">Stopping Airports</h5>
              <div class="mt-10 stoping-airport">
                <input type="checkbox" class="f-left" id="stop-1">
                <label for="stop-1" class="f-left ml-5">
                Muscat
                <span class='d-block airport-name'>Seeb Int</span> 
                </label>
                <div class="clear"></div>
              </div>
              <div class="mt-10 stoping-airport">
                <input type="checkbox" class="f-left" id="stop-2">
                <label for="stop-2" class="f-left ml-5">
                Karachi
                <span class='d-block airport-name'>Quaid E Azam International</span> 
                </label>
                <div class="clear"></div>
              </div>
              <div class="mt-10 stoping-airport">
                <input type="checkbox" class="f-left" id="stop-3">
                <label for="stop-3" class="f-left ml-5">
                Muscat
                <span class='d-block airport-name'>Seeb Int</span> 
                </label>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div class="filter-section mt-30 pb-10">
            <div class="filter-header">
              <h5 class="mb-20">Flight Duration</h5>
            </div>
            <div class="timing">
              <span>Flight leg(s)</span>
              <input type="range" class="mt-20 d-block">
              <div class="depart-time flex flex-content-between mt-20">
                <span class="from">
                <span class="time">6h 20m</span>
                </span>
                <span class="total-trip">
                <span>100</span>trips</span>
                <span class="to">
                <span class="time">6h 20m</span>
                </span>
              </div>
            </div>
            <div class="timing mt-20">
              <span>Layover(s)</span>
              <input type="range" class="mt-20 d-block">
              <div class="depart-time flex flex-content-between mt-20">
                <span class="from">
                <span class="time">6h 20m</span>
                </span>
                <span class="total-trip">
                <span>100</span>trips</span>
                <span class="to">
                <span class="time">6h 20m</span>
                </span>
              </div>
            </div>
          </div>
          <div class="filter-section pb-10">
            <div class="filter-header">
              <h5 class="mb-20">cabin class</h5>
            </div>
            <div class="mt-10">
              <label for="Economy" class="rtl-f-right">
              <input type="checkbox" id="Economy">
              Economy
              </label>
              <div class="clear"></div>
            </div>
            <div class="mt-10">
              <label for="Premium-Economy" class="rtl-f-right">
              <input type="checkbox" id="Premium-Economy">
              Premium Economy
              </label>
              <div class="clear"></div>
            </div>
            <div class="mt-10">
              <label for="Business" class="rtl-f-right">
              <input type="checkbox" id="Business">
              Business
              </label>
              <div class="clear"></div>
            </div>
            <div class="mt-10">
              <label for="First" class="rtl-f-right">
              <input type="checkbox" id="First">
              First
              </label>
              <div class="clear"></div>
            </div>
          </div>
          <button class="btn prime" type="button"> Search </button>
        </aside>
      </div>
      <div class="c9">
        <div class="row">
          <div class="c12">
            <div class="flex flex-content-between items-center mt-5 mb-20 row-rtl">
              <div class="sortby">
                <small>sort by</small> <strong>Cheapest</strong>
                <div class="sortby-dropdown hide">
                  <span>Guest reviews (5-0)</span>
                  <ul>
                    <li>Price</li>
                    <li>Price</li>
                    <li>Hotel Rate (0-5)</li>
                    <li>Hotel Rate (5-0)</li>
                    <li>Name (A-Z)</li>
                    <li>Name (Z-A)</li>
                  </ul>
                </div>
              </div>
              <div>
                <div>
                  <strong>
                  179 Availabel Flights
                  </strong>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="c12">
            <ul class="filter-tabs row-rtl">
              <li class="filter-tab active">
                <h3>all</h3>
              </li>
              <li class="filter-tab">
                <h3 class="mb-5">cheapest</h3>
                <div>
                  <span>1394 </span>
                  <span>SAR</span>
                </div>
              </li>
              <li class="filter-tab">
                <h3 class="mb-5">shortest</h3>
                <div>
                  <span>6h 20m</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="c12">
            <div class="visa-transits-note">
              <p class="rtl-align-right">Phptravels website is not responsible for visa required  in transits</p>
            </div>
          </div>
        </div>
        <div class="flight-list">
          <?php for ($i = 1; $i <= 9; $i++) { ?>
            <?php include 'flight.php' ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>