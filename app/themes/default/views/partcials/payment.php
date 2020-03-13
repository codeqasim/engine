<div class="wrapper-shared">
  <h4 class="rtl-align-right">Choose your payment method</h4>
  <div class="row">
    <div class="c5 mx-auto">
      <ul class="flex row-rtl">
        <li class="active mr-10 tab-btn"><label for="Credit-Card">Credit Card</label></li>
        <li class="tab-btn"> <label for="STC-Pay">STC Pay</label></li>
      </ul>
    </div>
  </div>
  <input type="radio"  id="Credit-Card" hidden name="content" checked>
  <div class="credit-card-content mt-30">
    <div class="row no-gutters items-center row-rtl">
      <div class="c3 rtl-align-right">
        <label for="name_title" class="label-title">Card Holder</label>
      </div>
      <div class="c9">
        <div class="row items-center">
          <div class="c12">
            <label class="pure-material-textfield-outlined mb-10">
            <input placeholder=" ">
            <span>Card Holder</span>
            </label> 
          </div>
        </div>
      </div>
    </div>
    <div class="row no-gutters items-center row-rtl">
      <div class="c3 rtl-align-right">
        <label for="name_title" class="label-title">Card Number</label>
      </div>
      <div class="c9">
        <div class="row items-center">
          <div class="c12">
            <label class="pure-material-textfield-outlined mb-10">
            <input placeholder=" ">
            <span>Card Number</span>
            </label> 
          </div>
        </div>
      </div>
    </div>
    <div class="row no-gutters items-center row-rtl">
      <div class="c3 rtl-align-right">
        <label for="name_title" class="label-title">Expiry Date</label>
      </div>
      <div class="c9">
        <div class="row items-center">
          <div class="c6">
            <label class="pure-material-textfield-outlined mb-10">
            <input placeholder=" ">
            <span>MM/YY</span>
            </label> 
          </div>
          <div class="c6">
            <label class="pure-material-textfield-outlined mb-10">
            <input placeholder=" ">
            <span>CVV</span>
            </label> 
          </div>
        </div>
      </div>
    </div>
    <div class="supported_cards mt-10 row-rtl">
      <span> Accepted Payment Methods </span>
      <img alt="" src="<?php echo base_url(); ?>assets/img/payment-methods-visa1.jpg">
      <img alt="" src="<?php echo base_url(); ?>assets/img/payment-methods-master1.png" class="mr-10">
      <img alt="" src="<?php echo base_url(); ?>assets/img/amex-blue.png" class="mr-10">
      <img alt="" src="<?php echo base_url(); ?>assets/img/mada.png"class="mr-10">
      <img alt="" src="<?php echo base_url(); ?>assets/img/stc.png">
    </div>
  </div>
  <input type="radio" id="STC-Pay" hidden  name="content">
  <div class="stc-content mt-30">
    <div class="stc-option">
      <div class="active">
        Mobile
      </div>
      <div>
        Qr-Code
      </div>
    </div>
    <div class="mobile-content mt-30">
      <div class="form-group">
        <div class="row no-gutters items-center row-rtl">
          <div class="c3 rtl-align-right">
            <label for="name_title" class="label-title">Phone</label>
          </div>
          <div class="c9">
            <div class="row items-center">
              <div class="c3">
                <select name="" id="" class="mb-10">
                  <option value="">Saudi Arabia (+966)</option>
                </select>
              </div>
              <div class="c9">
                <label class="pure-material-textfield-outlined mb-10">
                <input placeholder=" ">
                <span>Phone Number</span>
                </label> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="supported_cards mt-10 row-rtl">
      <span> Accepted Payment Methods </span>
      <img alt="" src="<?php echo base_url(); ?>assets/img/payment-methods-visa1.jpg">
      <img alt="" src="<?php echo base_url(); ?>assets/img/payment-methods-master1.png" class="mr-10">
      <img alt="" src="<?php echo base_url(); ?>assets/img/amex-blue.png" class="mr-10">
      <img alt="" src="<?php echo base_url(); ?>assets/img/mada.png"class="mr-10">
      <img alt="" src="<?php echo base_url(); ?>assets/img/stc.png">
    </div>
  </div>
</div>