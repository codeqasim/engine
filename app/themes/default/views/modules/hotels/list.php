<div class="list-page">
  <div class="edit-search">
    <div class="contain">
      <div class="row mb-20 row-rtl">
        <div class="c10">
          <div class="left-side-info rtl-align-right">
            <span><strong>Cairo, Cairo, Egypt</strong></span>
            <div>
              <p><strong>1 Night </strong>( 11 Feb , 2020 - 12 Feb , 2020 )</p>
              <p>1 Traveler , 1 Room</p>
            </div>
          </div>
        </div>
        <div class="c2 modify-search">
          <div class="right-side-info">
            <label for="edit" class="btn prime-outline w100">Edit</label>
          </div>
        </div>
      </div>
      <input id="edit" type="checkbox" hidden>
      <div class="panel">
        <div class="contain">
           <?php include $themeurl. 'views/modules/hotels/search.php';?>
        </div>
      </div>
    </div>
  </div>
  <div class="contain">
    <div class="row row-rtl">
      <div class="c3">

        <aside>
        <section class="scroll-box">
          <!--<button id="show-map-data" class="map-view" style="background-image:url('<?php echo $theme_url;?>assets/img/map-filter.png');">
          <span>Map View</span>
          </button>-->
          <div class="filter-section">
            <div class="filter-header">
              <h5>Filters</h5>
            </div>
            <div class="flex flex-content-between items-center pb-10 row-rtl">
              <span>Make search easier</span>
              <button>Clear Filter</button>
            </div>
          </div>
          <input type="text" placeholder="Search for hotel name" />
          <div class="filter-section mt-30 pb-10">
            <div class="filter-header">
              <h5>Price</h5>
              <input type="range" />
            </div>
          </div>
          <div class="filter-section star-rating mt-30 pb-10">
            <div class="filter-header">
              <h5>Star Rating</h5>
            </div>

            <div class="mt-30 row-rtl">

            <label for="s5"> <input type="checkbox" id="s5" name="stars" value="5"/>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <strong>28</strong>
            </label>
            <div class="clear"></div>

            <label for="s4"> <input type="checkbox" id="s4" name="stars" value="4"/>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <strong>20</strong>
            </label>
            <div class="clear"></div>

            <label for="s3"> <input type="checkbox" id="s3" name="stars" value="3"/>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <strong>20</strong>
            </label>
            <div class="clear"></div>

            <label for="s2"> <input type="checkbox" id="s2" name="stars" value="2"/>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <strong>15</strong>
            </label>
            <div class="clear"></div>

            <label for="s1"> <input type="checkbox" id="s1" name="stars" value="1"/>
              <span>&#10029;</span>
              <strong>5</strong>
            </label>
            <div class="clear"></div>

            </div>

          </div>
          <div class="clear"></div>
          <div class="filter-section chain-hotel pb-10">
            <div class="filter-header">
              <h5>Chain</h5>
            </div>
            <div class="mt-30 row-rtl">
            <?php for ($i = 1; $i <= 19; $i++) { ?>
            <label for="<?= $i; ?>"> <input type="checkbox" id="<?= $i; ?>" /> Content <strong>4</strong></label>
            <div class="clear"></div>
            <?php } ?>
            </div>
            <span class="more rtl-f-right">More +</span>
            <div class="clear"></div>
          </div>
          <div class="filter-section amenities pb-10">
            <div class="filter-header">
              <h5>Hotel Amenities</h5>
            </div>

            <div class="mt-30 row-rtl">
            <?php for ($l = 1; $l <= 19; $l++) { ?>
            <label for="<?= $l; ?>"> <input type="checkbox" id="<?= $l; ?>" /> Content <strong>4</strong></label>
            <div class="clear"></div>
            <?php } ?>
            </div>

            <span class="more rtl-f-right">More +</span>
            <div class="clear"></div>
          </div>
          <div class="filter-section amenities pb-10">
            <div class="filter-header">
              <h5>Rooms Amenities</h5>
            </div>
            <div class="mt-30 row-rtl">
            <?php for ($k = 1; $k <= 19; $k++) { ?>
            <label for="<?= $k; ?>"> <input type="checkbox" id="<?= $k; ?>" /> Content <strong>4</strong></label>
            <div class="clear"></div>
            <?php } ?>
            </div>
            <span class="more rtl-f-right">More +</span>
            <div class="clear"></div>
          </div>
         <div class="cover-bar"></div>
         </section>
         <button class="btn prime w100" style="margin-top:-70px"><span class="icon mdi mdi-search"></span> Search</button>
        </aside>
      </div>
      <div class="c9">
        <div class="row">
          <div class="c12">
            <div class="flex flex-content-between items-center mb-10 row-rtl">
              <div class="sortby">
                <small>sort by</small> <strong>Guest reviews (5-0)</strong>
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
                <div class="flex items-center">
                  <div>
                    <strong>
                    179 Hotels in Cairo
                    </strong>
                  </div>
                  <!--<div class="ml-30">
                    <strong> Cairo<span>℃</span> </strong>
                    <br />
                    <small class="text-muted">20/01/2020</small>
                  </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php for ($i = 1; $i <= 9; $i++) { ?>
        <div class="row row-rtl">
          <div class="c12">
            <div class="list-wrapper">
              <div class="row row-rtl">
                <div class="c-sm-5 c3 p-10">
                  <a href="">
                  <img
                    class="main-img"
                    src="<?php echo $theme_url;?>assets/img/hotel.jpg"
                    title="Holiday Inn Citystars"
                    alt="Holiday Inn Citystars"
                    />
                  </a>
                  <!--<div class="gallery flex-content-between hide-m">
                    <div class="gallery_img">
                      <img  alt="Holiday Inn Citystars" src="<?php echo $theme_url;?>assets/img/hotel.jpg">
                    </div>
                    <div class="gallery_img">
                      <img  alt="Holiday Inn Citystars" src="<?php echo $theme_url;?>assets/img/hotel.jpg">
                    </div>
                    <div class="gallery_img">
                      <img  alt="Holiday Inn Citystars" src="<?php echo $theme_url;?>assets/img/hotel.jpg">
                    </div>
                  </div>-->
                </div>
                <div class="c-sm-7 c9">
                  <div class="row h-100 row-rtl">
                    <div class="c7 border-right rtl-align-right">
                      <div class="detail">
                        <h6 class="title"><a target="_blank" href="#">Holiday Inn Citystars</a></h6>
                        <div class="rating mb-10">
                          <span>&#10029;</span>
                          <span>&#10029;</span>
                          <span>&#10029;</span>
                          <span>&#10029;</span>
                          <span>&#10029;</span>
                        </div>
                        <small class="text-muted">Ali Rashed St.,Heliopolis</small>
                      </div>
                      <!--<div class="aminities mt-10 hide-m">
                        <span>&#10070;</span>
                        <span>&#10070;</span>
                        <span>&#10070;</span>
                        <span>&#10070;</span>
                      </div>-->
                    </div>
                    <div class="c5 p-10">
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
                      <span class="discount-precentage">Save 10 %</span>
                      <div class="total-price">
                        <span class="title hide-m">Total price for 1 <span>nights</span></span>
                        <h5 class="total-price-value">
                          <span class="total-price-value-before-discount">
                          <!--<span class="price-before">250</span>
                          <span class="currency-before-discount">USD</span>-->
                          </span> <strong>521</strong> <span>USD</span>
                        </h5>
                      </div>
                      <div class="text-center mt-10">
                        <a class="btn prime-o hide-m w100" href="<?php echo base_url(); ?>hotels/details">Details </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>