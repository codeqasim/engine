<style>body{  background-color: #f2f6fb;}</style>
<div class="flight-booking">
  <div class="wizard hide-m row-rtl">
    <div class="item active">
      <div class="item-hint">
        1
      </div>
      <span class="item-title">Choose Flight</span>
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
        <?php for ($i = 1; $i <= 1; $i++) { ?>
        <?php include 'flight.php' ?>
        <?php } ?>
        <div class="wrapper-shared">
          <h4 class="rtl-align-right">Review & complete your booking</h4>
          <strong class=" d-block rtl-align-right">We care about you & wish you a good flight so, please have a final look at your flight details</strong>
          <ol class="mx-10 mb-20 ">
            <li>
              <h5>Review your flight details ( dates & times )</h5>
            </li>
            <ul class="mt-10 mb-20">
              <li>Departing from Dubai on Thursday 00:45, 20 Feb 2020, arriving Lahore on Thursday 16:45, 20 Feb 2020
                Departing from Lahore on Saturday 10:20, 29 Feb 2020, arriving Dubai on Saturday 12:45, 29 Feb 2020
              </li>
            </ul>
            <li>
              <h5>Review your flight details ( dates & times )</h5>
            </li>
            <ul class="mt-5">
              <li>Traveller 1 Adult saim malik</li>
              <li class="mt-20"><a href="">Edit Traveller Details</a></li>
            </ul>
            <li class="mt-20">
              <h5>For more info , please read our <a href="">Cancellation Policy</a></h5>
            </li>
          </ol>
        </div>
        <form action="">
            <?php include $themeurl. 'views/partcials/cuppon.php';?>
            <?php include $themeurl. 'views/partcials/payment.php';?>
          <div class="clear"></div>
        </form>
      </div>
      <div class="c4">
        <?php include $themeurl. 'views/modules/flights/booking_aside.php';?>
      </div>
    </div>
  </div>
</div>