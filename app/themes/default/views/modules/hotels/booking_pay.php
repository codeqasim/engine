<style>body{  background-color: #f2f6fb;}</style>
<div class="booking-payment">
  <div class="wizard hide-m row-rtl">
    <div class="item active">
      <div class="item-hint">
        1
      </div>
      <span class="item-title">Choose Room</span>
      <div class="clear"></div>
    </div>
    <div class="item active">
      <div class="item-hint">
        2
      </div>
      <span class="item-title">Details
      </span>
      <div class="clear"></div>
    </div>
    <div class="item active">
      <div class="item-hint">
        3
      </div>
      <span class="item-title">Payment Details</span>
      <div class="clear"></div>
    </div>
    <div class="item">
      <div class="item-hint">
        4
      </div>
      <span class="item-title">Conformation</span>
      <div class="clear"></div>
    </div>
  </div>
  <div class="contain">
    <div class="row row-rtl">
      <div class="c8">
        <div class="list-wrapper mb-20">
          <div class="row row-rtl">
            <div class="c4 p-10">
              <a href="">
              <img class="main-img" src="<?php echo $theme_url;?>assets/img/hotel.jpg" title="Holiday Inn Citystars" alt="Holiday Inn Citystars">
              </a>
            </div>
            <div class="c8">
              <div class="row h-100">
                <div class="c12">
                  <div class="detail">
                    <h6 class="title flex row-rtl">
                      <a target="_blank" href="#">Holiday Inn Citystars</a>
                      <div class="rating ml-10">
                        <span>✭</span>
                        <span>✭</span>
                        <span>✭</span>
                        <span>✭</span>
                        <span>✭</span>
                      </div>
                    </h6>
                    <small class="text-muted rtl-f-right">Ali Rashed St.,Heliopolis</small>
                    <div class="clear"></div>
                    <ul>
                      <li><i class="mr-10">✓</i>Air conditioning</li>
                      <li><i class="mr-10">✓</i>ifts</li>
                      <li><i class="mr-10">✓</i>Outdoor pool</li>
                      <li><i class="mr-10">✓</i>TV</li>
                      <li><i class="mr-10">✓</i>Barber/Beauty Salon</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form action="">
          <div class="wrapper-shared rtl-align-right">
            <button class="outline-btn">sign in</button>
            <span> or </span>
            <button class="outline-btn">sign up</button>
          </div>
            <?php include $themeurl. 'views/partcials/cuppon.php';?>
            <?php include $themeurl. 'views/partcials/payment.php';?>
          <button class="btn-succes f-right mt-30 mb-20 rtl-f-left">716 SAR <span class="ml-10">Pay Now</span></button>
          <div class="clear"></div>
        </form>
      </div>
      <div class="c4">
        <?php include 'booking_aside.php' ?>
      </div>
    </div>
  </div>
</div>