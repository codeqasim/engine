<link href="<?php echo $theme_url; ?>assets/include/slider/slider.min.css" rel="stylesheet" />
<script src="<?php echo $theme_url; ?>assets/js/details.js"></script>
<script src="<?php echo $theme_url; ?>assets/include/slider/slider.js"></script>
<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
<style type="text/css">
body {
  font-family: 'Mukta Mahee', sans-serif !important;
}
</style>
<?php require $themeurl.'views/socialshare.php';?>
<div class="header-mob">
  <div class="container">
    <div class="row">
      <div class="col-xs-2 col-sm-1 text-left">
        <a data-toggle="tooltip" data-placement="right" title="<?php echo trans('0533');?>" class="mt10 icon-angle-left pull-left mob-back" onclick="goBack()"></a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2><?=$hotel_data['hotel_name'];?></h2>
  <h4>
    <?php $stars_count = $hotel_data['stars'];
    for ($i=0; $i < $stars_count ; $i++) {
      ?>
      <i class="star fa fa-star"></i>
    <?php  } ?>
  </h4>
  <h5><?=$hotel_data['address'];?></h5>
  <div class="row">
    <div class="col-md-8">
      <div style="width:100%" class="fotorama bg-dark" data-width="1000" data-height="490" data-allowfullscreen="true" data-autoplay="true" data-nav="thumbs">
        <?php foreach($hotel_data['pictures'] as $img){ ?>
          <img style="width:100%;height:450px !important" src="<?php echo $img; ?>" />
        <?php } ?>
      </div>
    </div>
    <div class="col-md-4">
      <iframe src="http://maps.google.com/maps?q=<?=$hotel_data['lt']?>,<?=$hotel_data['lg']?>&z=15&output=embed" width="100%" height="550px" frameborder="0" style="border:0"></iframe>
    </div>
  </div>
  <br>
  <div class="sharethis-inline-share-buttons"></div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <h3></h3>
      <div class="panel panel-default">
        <div class="panel-heading">
          <?php echo trans('0177'); ?>
        </div>
        <div class="panel-body">

          <p class="RTL"><strong><?=trans('055')?> : </strong></p>
          <div class="row">
            <?php if ($hotel_data['travel_agency'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Travel Agency <!-- Translation not found --></li>
            </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['park_auto'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">

                  <li>Auto Parking <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['sauna'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Suana <!-- Translation not found --></li>
                                  </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['film'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">

                  <li>Film <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['tennis'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">

                  <li>Tennis <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['soccer'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">

                  <li>Soccer <!-- Translation not found --></li>
                                  </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['fast'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">

                  <li>Fast <!-- Translation not found --></li>
                                  </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['nosmoking'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>No Smoking Rooms <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['conference'] > 0) { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li><?=$hotel_data['conference'];?> Conference Room <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['projector'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Projector <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['lifts'] > 0) { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li><?=$hotel_data['lifts'];?>Lifts <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['internet'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Internet <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>


            <?php if ($hotel_data['suites'] > 0) { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li><?=$hotel_data['suites'];?> Suites <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['laundry'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Laundry <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['beauty'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Beauty Parlour <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['park_bus'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Bus Parking <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['garage_auto'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Auto Garage <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['coach_dropoff'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Coach Dropoff <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['animals'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Animals <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['lightboard'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Lightbar <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['bar'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Bar <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['shuttle_station'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Shuttle Station <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['coach_parking'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Coach Parking <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['pool_hot'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Hot Pool <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['boutique'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Boutique <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['gym'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Gym <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['minibar'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Minibar <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['tv'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>TV <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['pantsiron'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Pants Iron <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['alarm'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Alarm <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['safe'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Safe <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['paytv'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Pay TV <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['wifi'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Wifi <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['rtelephone'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Telephone <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>

            <?php if ($hotel_data['radio'] == "true") { ?>
              <div class="col-md-2">
                <ul class="list_ok RTL">
                  <li>Radio <!-- Translation not found --></li>
                </ul>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <?php  require $themeurl.'views/modules/juniper/rooms.php'; ?>
    </div>
  </div>
  <br>