<style> body{background-color: #f2f6fb;"}</style>
<div class="account">
  <div class="contain">
    <div class="row row-rtl">
      <div class="c7 rtl-align-right">
        <h1>Travel is now easier</h1>
        <ul class="list-info">
          <li><i class="mdi mdi-check-all"></i> Ongoing Travel Offers</li>
          <li><i class="mdi mdi-check-all"></i> Fast Booking Experience</li>
          <li><i class="mdi mdi-check-all"></i> Rich Recommendations</li>
          <li><i class="mdi mdi-check-all"></i> Smart and Accurate Search</li>
          <li><i class="mdi mdi-check-all"></i> 24/7 Friendly Customer Servcie</li>
        </ul>
        <div class="desc-img hide-m">
          <img src="assets/img/sign-bg.png" />
        </div>
      </div>
      <div class="c5">
        <div class="account-tab">
          <ul class="flex mb-30 tabs-btn flex-content-center">
            <li>
              <label for="singin" class="active">
                sign in
              </label>
            </li>
            <li>
              <label  for="registar"> sign up</label>
            </li>
          </ul>
          <input type="radio" id="singin" name="account" hidden checked>
          <div class="login">
            <!--<h3 class="rtl-align-right">Continue with</h3>
            <center>
            <a href="" class="btn btn-facebook">Facebook</a>
            <a href="" class="btn btn-google">Google</a>
            </center>
            <hr />-->
            <h3 class="rtl-align-right">Log in to your account</h3>
            <form action="">
              <label class="pure-material-textfield-outlined mb-10">
                <input placeholder=" " type="email" />
                <span>Email</span>
              </label>
              <label class="pure-material-textfield-outlined mb-10">
                <input placeholder=" " type="password" />
                <span>Password</span>
              </label>

              <div class="remember-sec row-rtl">
                <label>
                  <input type="checkbox" />
                  Remember me.</label>


                <a href="" class="forgetPassword" type="button">
                  Forgot my Password
                </a>
              </div>
              <button class="f-right btn-succes mt-20 rtl-f-left" type="submit">
                log in
              </button>
              <div class="clear"></div>
            </form>
          </div>
          <input type="radio" id="registar" name="account" hidden>
          <div class="signup">
            <!--<h3 class="rtl-align-right">Continue with</h3>
            <div class="text-center">
              <a href="" class="btn btn-facebook">Facebook</a>
              <a href="" class="btn btn-google">Google</a>
            </div>
            <hr />-->
            <h3 class="rtl-align-right">Create account with your email</h3>
            <form action="">
              <div class="row">
                <div class="c6">
                  <label class="pure-material-textfield-outlined mb-10">
                    <input placeholder=" " type="text" />
                    <span>First Name</span>
                  </label>
                </div>
                <div class="c6">
                  <label class="pure-material-textfield-outlined mb-10">
                    <input placeholder=" " type="text" />
                    <span>Last Name</span>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="c12">
                  <label class="pure-material-textfield-outlined mb-10">
                    <input placeholder=" " type="email" />
                    <span>Enter Email Address</span>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="c12">
                  <label class="pure-material-textfield-outlined mb-10">
                    <input placeholder=" " type="password" />
                    <span>Create Your Password</span>
                  </label>
                </div>
              </div>
              <div class="row mt-10">
                <div class="c12">
                  <label for="check-policy">
                    <input
                      type="checkbox"
                      class="f-left mr-10 rtl-f-right"
                      id="check-policy"
                    />
                    By registering you agree to our
                    <a href="">privacy policy </a>,
                    <a href="">terms & conditions</a> .
                  </label>
                </div>
              </div>
              <div class="row mt-40">
                <div class="c12">
                  <button class="f-right btn-succes rtl-f-left" type="submit">
                    Create account
                  </button>
                  <div class="clear"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
var tabs = document.querySelectorAll(".tabs-btn > li > label");
tabs.forEach(tab =>{
  tab.addEventListener('click',function(){
    let activeTab = document.querySelectorAll(".active");
  for (var i = 0; i < activeTab.length; i++) {
    activeTab[i].classList.remove("active");
  }
  this.classList.add("active");
  
  })
})
</script>