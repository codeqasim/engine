<div class="flight-list-page" id="app">
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
              <button >Clear Filter</button>
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
              <li  class="filter-tab">
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


            <div v-for="(item , index ) in Response" class="flight-itenrary-group">
                <div class="result-card">
                    <div class="row no-gutters row-rtl">
                        <div class="c9 c-sm-9 left-side">
                            <div class="left-side-row has-stops">
                                <div class="row left-side-row-info row-rtl no-gutters">
                                    <div class="c3 c-sm-3 airline-info pr-0">
                                        <h5 class="airline-info__type"> departure </h5>
                                        <div class="flex flex-column items-center">
                                            <div class="airline-info__logo">
                                                <span class="logo-container"><span class="fit-alignment"></span>
                                                    <img  v-bind:src="''+GetAirLineImage(item.InBoundSegments.Carrier.Code)"></span>
                                            </div>
                                            <h3 class="airline-info__logoName">{{item.InBoundSegments.Carrier.Name}}</h3>
                                            <h5 class="airline-info__class"><span>economy</span></h5>
                                        </div>
                                    </div>
                                    <div class="c9 c-sm-9 direction-info flex flex-column items-start">
                                        <h5 ><i class="icon-calender"></i> {{ GetDate(item.InBoundSegments.DepartureTime) }} </h5>
                                        <div class="direction-info__row flex items-center">
                                            <span class="text-right"> {{GetTime(item.InBoundSegments.DepartureTime)}} <span class="location">{{item.InBoundSegments.Departure}}</span></span>
                                            <div class="direction-line">
                                                <h6 >{{item.InBoundSegments.Duration}}</h6>
<!--                                                <div class="direction-line__points">-->
<!--                                                    <div class="airpoint"><span class="airpoint__mark" placement="top"></span><span class="airpoint__name">(MCT)</span></div>-->
<!--                                                    <div class="airpoint"><span class="airpoint__mark" placement="top"></span><span class="airpoint__name">(MCT)</span></div>-->
<!--                                                    <div class="airpoint"><span class="airpoint__mark" placement="top"></span><span class="airpoint__name">(MCT)</span></div>-->
<!--                                                </div>-->
                                            </div>
                                            <span ><span >{{GetTime(item.InBoundSegments.ArrivalTime)}}</span>
              <span class="diff-days">+1</span><span class="location"> {{item.InBoundSegments.Arrival}} </span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-options flex flex-content-between items-center">
                                    <label v-bind:for="'flight-detail-InBound'+index" class="showDetails"> details <i class="icon-arrow-down"></i></label>
                                </div>
                                <input type="checkbox" name="flight-detail" v-bind:id="'flight-detail-InBound'+index" hidden>
                                <div  class="flight-detail-card">
                                    <div v-for="(Inbound,InBoundIndex) in item.InBoundSegments.Segments" class="flight-details">
                                        <div class="flight-detail-header flex flex-content-between row-rtl items-center">
                                            <h5>
                                                <i class="icon-location">&#9906;</i>
                                                <strong>{{Inbound.DepartureCity}} - {{Inbound.ArrivalCity}}</strong>
                                                <span class="time">{{Inbound.Duration}}</span>
                                            </h5>
                                            <div class="flight-detail-header-right flex flex-content-end row-rtl">
                                                <img v-bind:src="''+GetAirLineImage(Inbound.Carrier.Code)" alt="">
                                                <ul class="rtl-align-right ">
                                                    <li>{{Inbound.Carrier.Name}}</li>
                                                    <li>economy (AIRBUS)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="timeline-group">
                                            <div class="timeline-group__details departure">
                                                <ul class="list-unstyled">
                                                    <li><i class="icon-location"></i><span>{{Inbound.DepartureCity}}</span></li>
                                                    <li><i class="icon-calender"></i><span>{{GetDate(Inbound.DepartureTime)}} at {{GetTime(Inbound.ArrivalTime)}}</span></li>
                                                    <li>
                                                        <i class="icon-airport"></i>
                                                        <span>
                    <span>{{Inbound.DepartureCityCode}}</span>
                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="timeline-group__details stop">
                                                <ul class="list-unstyled">
                                                    <li><i class="icon-location"></i><span>{{Inbound.ArrivalCity}}</span></li>
                                                    <li><i class="icon-calender"></i><span>{{GetDate(Inbound.ArrivalTime)}} at {{GetTime(Inbound.ArrivalTime)}}</span></li>
                                                    <li>
                                                        <i class="icon-airport"></i>
                                                        <span>
                    <span>{{Inbound.ArrivalCityCode}}</span>
                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="timeline-group__details__extraInfo row-rtl">
                                                <img src="<?php echo $theme_url;?>assets/img/bag.svg">
                                                <ul class="list-unstyled">
                                                    <li class="bold">baggage info</li>
                                                    <li>
                                                        <span> 30 kg </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="timeline-seperator flex items-center flex-content-center">
                                            <h3> Flight# <span class="wait-time">{{Inbound.FlightNo}}</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="details-footer"></div>
                                </div>
                            </div>
                            <div v-if="item.OutBoundSegments.length != 0" class="left-side-row has-stops">
                                <div class="row left-side-row-info row-rtl no-gutters">
                                    <div class="c3 c-sm-3 airline-info pr-0">
                                        <h5 class="airline-info__type"> Return </h5>
                                        <div class="flex flex-column items-center">
                                            <div class="airline-info__logo">
                                                <span class="logo-container"><span class="fit-alignment"></span>
                                                    <img  v-bind:src="'' + GetAirLineImage(item.OutBoundSegments.Carrier.Code)"></span>
                                            </div>
                                            <h3 class="airline-info__logoName">{{item.OutBoundSegments.Carrier.Name}}</h3>
                                            <h5 class="airline-info__class"><span>economy</span></h5>
                                        </div>
                                    </div>
                                    <div class="c9 c-sm-9 direction-info flex flex-column items-start">
                                        <h5 ><i class="icon-calender"></i> {{ GetDate(item.OutBoundSegments.DepartureTime) }} </h5>
                                        <div class="direction-info__row flex items-center">
                                            <span class="text-right"> {{GetTime(item.OutBoundSegments.DepartureTime)}} <span class="location">{{item.OutBoundSegments.Departure}}</span></span>
                                            <div class="direction-line">
                                                <h6 >{{item.OutBoundSegments.Duration}}</h6>
<!--                                                <div class="direction-line__points">-->
<!--                                                    <div class="airpoint"><span class="airpoint__mark" placement="top"></span><span class="airpoint__name">(MCT)</span></div>-->
<!--                                                    <div class="airpoint"><span class="airpoint__mark" placement="top"></span><span class="airpoint__name">(MCT)</span></div>-->
<!--                                                    <div class="airpoint"><span class="airpoint__mark" placement="top"></span><span class="airpoint__name">(MCT)</span></div>-->
<!--                                                </div>-->
                                            </div>
                                            <span ><span >{{GetTime(item.OutBoundSegments.ArrivalTime)}}</span>
              <span class="diff-days">+1</span><span class="location"> {{item.OutBoundSegments.Arrival}} </span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-options flex flex-content-between items-center">
                                    <label v-bind:for="'flight-detail-OutBound'+index" class="showDetails"> details <i class="icon-arrow-down"></i></label>
                                </div>
                                <input type="checkbox" name="flight-detail" v-bind:id="'flight-detail-OutBound'+index" hidden>
                                <div  class="flight-detail-card">
                                    <div v-for="(Outbound,OutBoundIndex) in item.OutBoundSegments.Segments" class="flight-details">
                                        <div class="flight-detail-header flex flex-content-between row-rtl items-center">
                                            <h5>
                                                <i class="icon-location">&#9906;</i>
                                                <strong>{{Outbound.DepartureCity}} - {{Outbound.ArrivalCity}}</strong>
                                                <span class="time">{{Outbound.Duration}}</span>
                                            </h5>
                                            <div class="flight-detail-header-right flex flex-content-end row-rtl">
                                                <img v-bind:src="''+GetAirLineImage(Outbound.Carrier.Code)" alt="">
                                                <ul class="rtl-align-right ">
                                                    <li>{{Outbound.Carrier.Name}}</li>
                                                    <li>economy (AIRBUS)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="timeline-group">
                                            <div class="timeline-group__details departure">
                                                <ul class="list-unstyled">
                                                    <li><i class="icon-location"></i><span>{{Outbound.DepartureCity}}</span></li>
                                                    <li><i class="icon-calender"></i><span>{{GetDate(Outbound.DepartureTime)}} at {{GetTime(Outbound.ArrivalTime)}}</span></li>
                                                    <li>
                                                        <i class="icon-airport"></i>
                                                        <span>
                    <span>{{Outbound.DepartureCityCode}}</span>
                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="timeline-group__details stop">
                                                <ul class="list-unstyled">
                                                    <li><i class="icon-location"></i><span>{{Outbound.ArrivalCity}}</span></li>
                                                    <li><i class="icon-calender"></i><span>{{GetDate(Outbound.ArrivalTime)}} at {{GetTime(Outbound.ArrivalTime)}}</span></li>
                                                    <li>
                                                        <i class="icon-airport"></i>
                                                        <span>
                    <span>{{Outbound.ArrivalCityCode}}</span>
                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="timeline-group__details__extraInfo row-rtl">
                                                <img src="<?php echo $theme_url;?>assets/img/bag.svg">
                                                <ul class="list-unstyled">
                                                    <li class="bold">baggage info</li>
                                                    <li>
                                                        <span> 30 kg </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="timeline-seperator flex items-center flex-content-center">
                                            <h3> Flight# <span class="wait-time">{{Outbound.FlightNo}}</span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="details-footer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="c3 c-sm-3">
                            <div class="right-side">
                                <div class="text-center flex flex-column flex-content-center h-100">
                                    <div class="social-container">&#9887;</div>
                                    <div class="price">
                                        <h4>
                                            <span class="price-hint ">{{item.Price}}</span>
                                            <span class="price-currency">USD</span>
                                        </h4>
                                        <h3> Total</h3>
                                        <a class="btn prime" href="<?php echo base_url(); ?>flights/booking"> choose flight </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

<script src="<?=base_url('assets/js/app.js')?>"></script>

<script>
    function initVue(){

        app.RequestPayload.keys = JSON.parse('<?=json_encode($apis)?>');
        app.RequestPayload.payload = JSON.parse('<?=$payload?>');
        app.load_data();
    }
</script>
