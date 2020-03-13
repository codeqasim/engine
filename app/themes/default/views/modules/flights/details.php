<style>body{  background-color: #f2f6fb;}</style>
<?php include 'header.php' ?>
<div class="flight-detail-page mt-20">
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
      <div class="item">
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
        <div class="wrapper-shared">
        <div class="rtl-align-right">
          <span class="rtl-f-right rtl-ml">create new</span>
          <button class="outline-btn">account</button>
        </div>
        </div>
        <?php include 'flight-list.php' ?>
        <div class="details-header flex flex-content-between items-center mb-20 rtl-flex-end">
        <h2>Please, make sure that names are the same as passport details</h2>
        </div>
        <form action="">
          <div class="wrapper-shared">
          <div class="flex flex-content-between mb-20 row-rtl">
          <strong class="traveller-hint">*You can fill your data once in your profile to be loaded here easily</strong>
          <span class="parimary-contact">Primary Contact</span>  
          </div>
          <h1 class="rtl-align-right"> Traveller 1: Adult</h1>
          <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">full name</label>
                </div>
                <div class="c9">
                  <div class="row items-center">
                    <div class="c3">
                      <select name="" id="" class="mb-10">
                        <option value="">Mr</option>
                        <option value="">Mrs</option>
                        <option value="">Ms</option>
                      </select>
                    </div>
                    <div class="c3">
                      <label class="pure-material-textfield-outlined mb-10">
                      <input placeholder=" ">
                      <span>First Name</span>
                      </label> 
                    </div>
                    <div class="c3">
                      <label class="pure-material-textfield-outlined mb-10">
                      <input placeholder=" ">
                      <span>Middle</span>
                      </label> 
                    </div>
                    <div class="c3">
                      <label class="pure-material-textfield-outlined mb-10">
                      <input placeholder=" ">
                      <span>Last Name</span>
                      </label> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Email</label>
                </div>
                <div class="c9">
                  <div class="row items-center row-rtl">
                    <div class="c6">
                      <label class="pure-material-textfield-outlined mb-10">
                      <input placeholder=" ">
                      <span>Email</span>
                      </label> 
                      <span class="hint">We will send a booking confirmation email via this email</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Date of Birth</label>
                </div>
                <div class="c9">
                  <div class="row items-center">
                    <div class="c4">
                      <select name="" id="" class="mb-10">
                        <option value="">Day</option>
                      </select>
                    </div>
                    <div class="c4">
                      <select name="" id="" class="mb-10">
                        <option value="">Month</option>
                      </select>
                    </div>
                    <div class="c4">
                      <select name="" id="" class="mb-10">
                        <option value="">Year</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Gender</label>
                </div>
                <div class="c9 rtl-align-right">
                <label for="">
                <input type="radio" id="gender">
                male
                </label>
                <label for="">
                <input type="radio" id="gender">
                female
                </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Document</label>
                </div>
                <div class="c9">
                <div class="row no-gutters row-rtl">
                <div class="c6">
                <select name="" id="">
                <option value="">Passport</option>
                </select>
                </div>
                </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Nationality</label>
                </div>
                <div class="c9">
                  <div class="row items-center no-gutters row-rtl">
                    <div class="c6">
                      <select name="" id="" class="mb-10">
                        <option value="">Nationality</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Issuing Country</label>
                </div>
                <div class="c9">
                  <div class="row items-center no-gutters row-rtl">
                    <div class="c6">
                      <select name="" id="" class="mb-10">
                        <option value="">Saudi Arabia</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Passport Details</label>
                </div>
                <div class="c9">
                  <div class="row items-center no-gutters row-rtl">
                    <div class="c6">
                      <label class="pure-material-textfield-outlined mb-10">
                      <input placeholder=" ">
                      <span>Passport number</span>
                      </label> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Passport Expiry Date</label>
                </div>
                <div class="c9">
                  <div class="row items-center">
                    <div class="c4">
                      <select name="" id="" class="mb-10">
                        <option value="">Day</option>
                      </select>
                    </div>
                    <div class="c4">
                      <select name="" id="" class="mb-10">
                        <option value="">Month</option>
                      </select>
                    </div>
                    <div class="c4">
                      <select name="" id="" class="mb-10">
                        <option value="">Year</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row no-gutters items-center row-rtl">
                <div class="c3 rtl-align-right">
                  <label for="name_title" class="label-title">Phone</label>
                </div>
                <div class="c9">
                  <div class="row items-center">
                    <div class="c6">
                      <select name="" id="" class="mb-10">
                        <option value="">Saudi Arabia (+966)</option>
                      </select>
                    </div>
                    <div class="c6">
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
          <button class="btn prime-outline mb-20 rtl-f-right" type="button"> Back to search results </button>
          <button class="btn-succes f-right rtl-f-left">Proceed to Payment</button>
          <div class="clear"></div>
        </form>
      </div>
      <div class="c4">
      <?php include 'flight-aside.php' ?>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>