<div class="hotels-detail-page pt-20">
  <div class="contain">
    <div class>
      <div class="sticky">
        <div class="list-wrapper">
          <div class="row row-rtl">
            <div class="c2 p-10">
              <a href="">
              <img
                class="main-img"
                src="<?php echo $theme_url;?>assets/img/hotel.jpg"
                title="Holiday Inn Citystars"
                alt="Holiday Inn Citystars"
                />
              </a>
            </div>
            <div class="c10">
              <div class="row h-100 row-rtl">
                <div class="c9 border-right">
                  <div class="detail rtl-align-right">
                    <div class="flex flex-content-between row-rtl">
                      <div class="trust-you">
                        <p>4.5</p>
                        <div class="vrified">
                          <span>Fabulous</span>
                        </div>
                      </div>
                      <div class="social_share social-container">
                        <span class="share icon-share hide-m">&#9737;</span>
                      </div>
                    </div>
                    <h6 class="title flex row-rtl">
                      <a target="_blank" href="#">Holiday Inn Citystars</a>
                      <div class="rating ml-10">
                        <span>&#10029;</span>
                        <span>&#10029;</span>
                        <span>&#10029;</span>
                        <span>&#10029;</span>
                        <span>&#10029;</span>
                      </div>
                    </h6>
                    <small class="text-muted">Ali Rashed St.,Heliopolis</small>
                  </div>
                </div>
                <div class="c3 p-10">
                  <div class="total-price">
                    <span>starts from</span>
                    <span>390</span>
                    <span> SAR </span>
                  </div>
                  <div class="text-center mt-10">
                    <a class="book-room hide-m" href="#available-room">Available Rooms </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ul class="tabs flex flex-content-between row-rtl">
          <li>
          <a href="#hotel" class="active">hotels</a>
         </li>
          <li>
         <a href="#available-room">Available Rooms</a>
        </li>
          <li>
            <a href="#guest-rating">Guests Rating
            </a>
          </li>
          <li>
          <a href="#hotel-detail">hotel details</a></li>
        </ul>
      </div>
      <div class="row row-rtl" id="hotel">
        <div class="c3">
          <div style="overflow:hidden;max-width:100%;width:500px;height:300px;">
            <div id="embeddedmap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=tecfare+lahore&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div>
            <a class="embedded-maphtml" href="https://www.embed-map.com" id="enable-mapdata">https://www.embed-map.com</a>
            <style>#embeddedmap-display img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style>
          </div>
        </div>
        <div class="c9">
          <div class="grid-img">
            <div class="row">
              <div class="c8 pr-0">
                <img class="main-img"
                  src="<?php echo $theme_url;?>assets/img/hotel.jpg"
                  title="Holiday Inn Citystars"
                  alt="Holiday Inn Citystars"
                  />
              </div>
              <div class="c4">
                <ul class="other-img">
                  <li>
                    <img src="<?php echo $theme_url;?>assets/img/hotel.jpg"title="Holiday Inn Citystars"alt="Holiday Inn Citystars"
                      />
                  </li>
                  <li>
                    <img src="<?php echo $theme_url;?>assets/img/hotel.jpg"title="Holiday Inn Citystars"alt="Holiday Inn Citystars"
                      />
                  </li>
                  <li>
                    <img src="<?php echo $theme_url;?>assets/img/hotel.jpg"title="Holiday Inn Citystars"alt="Holiday Inn Citystars"
                      />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="c12">
          <section class="content-section" id="available-room">
            <div class="head">
              <span>available rooms for <span class="number"><span> 1 </span> nights 
              </span>
              </span>
            </div>
            <div class="p-10">
                <?php include $themeurl. 'views/modules/hotels/search.php';?>
            </div>
            <div class="room-wrapper p-10">
              <div class="row row-rtl">
                <div class="c3">
                  <div class="filter-section">
                    <div class="service-title">
                      <span>bed Types</span>
                    </div>
                    <label for="bed-type-single">
                    <input type="checkbox" id="bed-type-single" class="mr-5">
                    Single
                    </label>
                    <label for="bed-type-king">
                    <input type="checkbox" id="bed-type-king" class="mr-5">
                    King
                    </label>
                    <label for="bed-type-dubble">
                    <input type="checkbox" id="bed-type-dubble" class="mr-5">
                    Dubble
                    </label>
                    <label for="bed-type-suite">
                    <input type="checkbox" id="bed-type-suite" class="mr-5">
                    Suite
                    </label>
                  </div>
                  <div class="filter-section">
                    <div class="service-title">
                      <span>Room Basis</span>
                    </div>
                    <label for="room-only">
                    <input type="checkbox" id="room-only" class="mr-5">
                    Room only
                    </label>
                    <label for="bed">
                    <input type="checkbox" id="bed" class="mr-5">
                    Bed and Breakfast
                    </label>
                  </div>
                  <div class="filter-section">
                    <div class="service-title">
                      <span>Room Classes</span>
                    </div>
                    <label for="standrad">
                    <input type="checkbox" id="standrad" class="mr-5">
                    Standrad
                    </label>
                    <label for="superior">
                    <input type="checkbox" id="superior" class="mr-5">
                    Superior
                    </label>
                    <label for="deluxe">
                    <input type="checkbox" id="deluxe" class="mr-5">
                    Deluxe
                    </label>
                  </div>
                  <div class="filter-section">
                    <div class="service-title">
                      <span>Refundability</span>
                    </div>
                    <label for="non-refundable">
                    <input type="checkbox" id="non-refundable" class="mr-5">
                    Non-refundable
                    </label>
                    <label for="refundable">
                    <input type="checkbox" id="refundable" class="mr-5">
                    Refundable
                    </label>
                  </div>
                </div>
                <div class="c9">
                  <?php for ($i = 1; $i <= 5; $i++) { ?>
                  <div class="room-cart">
                    <div class="room-header rtl-align-right">
                      <h3>Standard 
                        <span> 1  nights ,  Rooms </span>
                      </h3>
                    </div>
                    <div class="room-wrapper-inner">
                      <div class="row row-rtl">
                        <div class="c9">
                          <div class="single-room-header rtl-align-right">
                            <h3>Standard / Single Standard Room</h3>
                          </div>
                          <ul>
                            <li>max number of guests 1</li>
                            <li>Room only</li>
                            <li>Non-refundable</li>
                          </ul>
                        </div>
                        <div class="c3">
                          <div class="price-sec">
                            <h6 >Total stay for <span><span> 1 </span>nights </span></h6>
                            <!--<small><h4 class="price-before-discount"><span>433</span><span class="currency"> SAR</span></h4></small>-->
                            <h3  class="price">
                              <span>200</span>
                              <span  class="currency">USD</span>
                            </h3>
                            <!--<h6 class="text-success mt-10">(incl.tax)</h6>-->
                            <a  class="btn success" href="<?php echo base_url(); ?>hotels/booking">Book now</a>
                          </div>
                        </div>
                      </div>
                      <button class="load_more">Load More</button>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </section>
          <section class="content-section mt-30 pb-50" id="guest-rating">
            <div class="head rtl-align-right"><span>Guests Rating</span></div>
            <div class="contain px-20">
              <div class="overview">
                <div class="trust-score mr-10">
                  <div class="value">4.4</div>
                </div>
                <div class="score">
                  Excellent
                  <div>
                    <span>✭</span>
                    <span>✭</span>
                    <span>✭</span>
                    <span>✭</span>
                    <span>✭</span>
                  </div>
                </div>
                <h1>Summary of 3,521 verified reviews</h1>
                <div class="clear"></div>
              </div>
              <div class="row">
                <div class="c7">
                  <div class="summary rtl-align-right">
                    <p class="summary-score">Rated <strong>4.4</strong>/5 based on reviews from <strong>all travelers</strong>.</p>
                    <span class="summary-sentence">"Excellent business hotel. Great location."</span>
                  </div>
                  <div class="review-highlights">
                    <?php for ($i = 1; $i <= 9; $i++) { ?>
                    <div class="category">
                      <div class="category-stats">
                        <h2 class="rtl-align-right">Location</h2>
                        <div class="rating">
                          <div class="bar-chart">
                            <div class="value value-pos" style="width: 95%;"></div>
                          </div>
                          <div class="score"><span class="text-pos">4.8</span>/5</div>
                        </div>
                        <div class="review-count rtl-align-right">11 reviews</div>
                      </div>
                      <div class="category-details">
                        <p>
                          <strong> "Great location near the airport."</strong>
                          Near to the city centre with good shopping options nearby.
                          Parking is rare.
                        </p>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="c4 ml-auto mt-20">
                  <aside>
                    <div class="rank">
                      <div class="starburst">
                        <span>&#9813;</span>
                        <div class="ribbon-tail"></div>
                      </div>
                      <div class="rank-value">
                        <div>
                          <strong class="label">Great</strong> Overall Ranking
                          <span class="ranking-percentage">Top 13% in city</span>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="rank">
                      <div class="starburst">
                        <span>&#9813;</span>
                        <div class="ribbon-tail"></div>
                      </div>
                      <div class="rank-value">
                        <div>
                          <strong class="label">EXCELLENT</strong> Business Hotel
                          <span class="ranking-percentage">Top 13% in city</span>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="rank">
                      <div class="starburst">
                        <span>&#9813;</span>
                        <div class="ribbon-tail"></div>
                      </div>
                      <div class="rank-value">
                        <div>
                          <strong class="label">EXCELLENT</strong> City Hotel
                          <span class="ranking-percentage">Top 13% in city</span>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="gtk">
                      <h1 class="pb-20">Good to know</h1>
                      <ul>
                        <li>
                          <h2><span class="mr-10">&#10003;</span>Great shopping</h2>
                        </li>
                        <li>
                          <h2><span class="mr-10">&#10003;</span>Good access to airport</h2>
                        </li>
                        <li>
                          <h2><span class="mr-10">&#10005;</span>Rooms could be larger</h2>
                        </li>
                        <li>
                          <h2><span class="mr-10">&#10005;</span>Could be quieter</h2>
                        </li>
                      </ul>
                    </div>
                  </aside>
                </div>
              </div>
            </div>
          </section>
          <section class="mt-30 mb-30" id="hotel-detail">
            <div class="row row-rtl">
              <div class="c9">
                <div class="extra-hotel-info  p-10">
                  <h3 class="rtl-align-right">Hotel Details</h3>
                  <p class="rtl-align-right">The Holiday Inn Cairo City Stars hotel is located 7 km from Cairo International Airport and 12 km from the city centre and The Egyptian Museum.</p>
                  <p class="rtl-align-right">Hotel facilitoes include restaurant, bar, gym, WiFi access and swimming pool.The guest rooms are equipped with bathroom/shower, air conditioning, safe, internet access, mini bar, hair dryer, cable TV and telephone.** Please note that some of the above facilities may be closed due to weather / seasonal conditions.**Address: Sharia Ali Rashid St. 11757 Cairo, Egypt</p>
                  <p class="rtl-align-right">Don't miss out on recreational opportunities including an outdoor pool and a fitness center. This hotel also features complimentary wireless Internet access, concierge services, and babysitting/childcare (surcharge).</p>
                </div>
              </div>
              <div class="c3">
                <div class="hotel-amenities">
                  <div>
                    <span class="amenities-header rtl-align-right">amenities</span>
                    <ul>
                      <li><i class="mr-10">&#10003;</i>Air conditioning</li>
                      <li><i class="mr-10">&#10003;</i>ifts</li>
                      <li><i class="mr-10">&#10003;</i>Outdoor pool</li>
                      <li><i class="mr-10">&#10003;</i>TV</li>
                      <li><i class="mr-10">&#10003;</i>Barber/Beauty Salon</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
var tabs = document.getElementsByClassName("tabs")[0];
tabs.addEventListener('click',function(e){
  let activeTab = document.querySelectorAll(".active");
  for (var i = 0; i < activeTab.length; i++) {
    activeTab[i].classList.remove("active");
  }
  e.target.classList.add("active");
  
  
})

</script>