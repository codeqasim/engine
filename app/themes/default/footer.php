<footer>
    <div class="apps">
        <div class="contain">
            <div class="row row-rtl">
                <div class="c3 o2-sm">
                    <div class="apps-image">
                        <img class="img-fluid" src="<?php echo $theme_url;?>assets/img/phones.png">
                    </div>
                </div>
                <div class="c9 o1-sm">
                    <div class="section-info mt-50 rtl-align-right">
                        <h2>Download App &amp; Get the latest offers</h2>
                        <h3>Download app now for easier hotel &amp; flights bookings. Enjoy the best booking experience.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="contain">
            <div class="row row-rtl">
                <div class="c6">
                    <h3><strong>B2B</strong> Booking Engine</h3>
                    <div class="row links row-rtl">
                        <div class="c4">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>about">about us</a></li>
                                <li><a  href="<?php echo base_url(); ?>careers">careers</a></li>
                            </ul>
                        </div>
                        <div class="c4">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>policy">privacy policy</a></li>
                                <li><a href="<?php echo base_url(); ?>faq">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="c4">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>contact">contact us</a></li>
                                <li><a  href="<?php echo base_url(); ?>account"><span >register </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="c3">
                    <div class="contact">
                        <h3>Need help ?</h3>
                        <ul class="rtl-align-right">
                            <li><span class="phone_number">( +123 ) 1122 33 4444</span></li>
                            <li><a class="footer-email" href="">support@travel.com</a></li>
                        </ul>
                        <ul>
                            <li><a href="">FB</a></li>
                            <li><a href="">TW</a></li>
                            <li><a href="">LI</a></li>
                            <li><a href="">YT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c3">
                    <h3>Download our app now!</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="contain">
        <div class="sub-footer">
            <div class="flex items-center row-rtl">
                <a  href="<?php echo base_url(); ?>" class="mr-10 d-block">
                <img alt="" width="100px" src="<?php echo base_url(); ?>assets/img/logo.png">
                </a>
                <p class="coy_right">
                    <span>&copy; 2020 Appname</span>
                    <span class="reserved">  All rights reserved.</span>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo $theme_url;?>assets/js/jquery.min.js"></script>
<script src="<?php echo $theme_url;?>assets/js/app.js"></script>
<script src="<?php echo $theme_url;?>assets/js/datepicker.js"></script>

<!-- scroll to hero section -->
<script>
$(".hero,input").click(function() {
 $('html, body').animate({
  scrollTop: $("#search").offset().top
 }, 1);
});
</script>

<script>

        var flight_type = 'oneway';
        $("#submit").click(function(){
        var origin = $("#autocomplete").val();
        var destination = $("#autocomplete2").val();
        var cdeparture = $("#departure").val();
        var returnn = $("#return").val();
        var adult = $("#adult").text();
        var children  = $("#children").text();
        var infant  = $("#infant").text();

        /*origin & destination validation*/
        if(origin == ''){
          alert('Please fill out origin');
          $('#autocomplete').focus();
        }else if(destination == ''){
          alert('Please fill out destination');
          $('#autocomplete2').focus();
        }else{ 

        /*(from origin) url settings*/
        var origin_res1 = origin.split(" ",1)[0];

        /*(to destination) url settings*/
        var destination_res1 = destination.split(" ",1)[0];

        /*cdeparture change data format (like 23/03/2020 to 23-03-2020)*/
        var parts = cdeparture.split('/');
        var departur = parts[0] + '-' + parts[1] + '-' + parts[2];

         /*return change data format (like 23/03/2020 to 23-03-2020)*/
        var partss = returnn.split('/');
        var re_turn = partss[0] + '-' + partss[1] + '-' + partss[2];

        /* finally url*/
        var base_url = "<?php echo base_url() ?>";

        var url = base_url+"flights/"+origin_res1.toLowerCase()+"/"+destination_res1.toLowerCase()+"/"+flight_type+"/"+departur+"/"+re_turn+"/"+adult+"/"+children+"/"+infant;

        window.location.href = url;

        // $.ajax({
        // type: 'ajax',
        // method: 'get',
        // async: false,
        // url: '<?php echo base_url() ?>Flights/flight',
        // data:{
        //     origin_res1:origin_res1,
        //     origin_res2:origin_res2,
        //     destination_res1:destination_res1,
        //     destination_res2:destination_res2,
        //     departur:departur,
        //     re_turn:re_turn,
        //     adult:adult,
        //     children:children
        // },
        // dataType: 'json',
        // success: function(response){
        // alert('Status update successfully');
        // },
        // error: function(){
        // alert('Status update Error');
        // }
        // });
    }

});

    function FlighType(value){
    flight_type = value;
    }

    $(document).ready(function(){
        $('#increase').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#adult').text());
        // If is not undefined
        $('#adult').text(quantity + 1);
        // Increment
        });

        $('#decrease').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#adult').text());
        // If is not undefined
        // Increment
        if(quantity>1){
        $('#adult').text(quantity - 1);
        }
        });
    });

    $(document).ready(function(){
        var quantitiy=0;
        $('#increasee').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#children').text());
        // If is not undefined
        $('#children').text(quantity + 1);
        });

        $('#decreasee').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#children').text());
        if(quantity>0){
        $('#children').text(quantity - 1);
        }
        });
    });

    $(document).ready(function(){
        var quantitiy=0;
        $('#increasee').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#intant').text());
        // If is not undefined
        $('#intant').text(quantity + 1);
        });

        $('#decreasee').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#intant').text());
        if(quantity>0){
        $('#intant').text(quantity - 1);
        }
        });
    })
</script>
</body>
</html>