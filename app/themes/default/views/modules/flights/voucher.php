<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Vocher</title>
    <!--<style>
      @media screen and (max-width:768px){
      .vocher{ width:100% !important; } }
      .rtl-vocher{direction:rtl}
      .rtl-vocher .rtl-scale{transform:scale(-1)}
      .rtl-vocher .rtl-ml-0{margin-left:0 !important}
      .rtl-vocher .rtl-mr-0{margin-right:0 !important}
      .rtl-vocher .rtl-ml-10{margin-left:10px !important}
      .rtl-vocher .rtl-mr-40{margin-right:40px !important}
    </style>-->
  </head>
  <body style="background-color:rgb(82, 86, 89);">
    <div class="vocher rtl-vocher" style="width:800px;margin:40px auto;background-color:#fff;padding:25px 20px;">
      <div style="display:flex; justify-content:space-between;align-items:center">
        <h3>E-TICKET / ITINERARY</h3>
        <img alt="logo" src="<?php echo base_url(); ?>uploads/main/logo.png" width="35px" />
      </div>
      <h5 style="letter-spacing: 1.5px;margin-bottom:5px;font-size:12px">BOOKING / INVOICE ID:<span style="font-weight:100">A00123547450</span> | AIRLINE REFERENCE (PNR): <span style="font-weight:100">72955123</span> | <span style="color:#00bc31">CONFIRMED</span></h5>
      <hr>
      <h3 style="margin:10px 0">Flight Detail</h3>
      <hr>
      <div style="display:flex;align-items:center">
      <span class="rtl-scale rtl-ml-10 rtl-mr-0" style="font-size: 25px; display: inline-block;margin-right:10px" >&#9992;</span > 
      <span>Alexandria to Riyadh on</span>
      <strong>(Jan 28 2020)</strong></div>
      <div style="overflow-x:auto">
        <table width="100%;"style="border-bottom:2px solid #ddd;padding-bottom:15px">
          <tbody>
            <tr>
              <td style="vertical-align: top;width:15%">
                <small style="color:#09b6c7;font-size:10px">Airline/Flight</small>
                <div style="display:flex;align-items:center;margin:5px 0">
                  <img src="<?php echo $theme_url;?>assets/img/WY.png" class="rtl-ml-10" alt="" width="20px">
                  <strong style="font-size:13px;margin-left:5px">WY-333</strong>
                </div>
                <small style="font-weight:bold;font-size:10px">Oman Air</small>
                <br>
                <small style="font-size:10px">Cabin:Economy</small>
              </td>
              <td style="vertical-align: top;width:15%">
                <div style="display:flex;flex-direction: column;">
                  <small style="color:#09b6c7;font-size:10px">Departure</small>
                  <strong style="margin:5px 0">10:00</strong>
                  <small style="font-size:10px">Jan 28 2020</small>
                </div>
              </td>
              <td style="vertical-align: top;width:15%">
                <div style="display:flex;flex-direction: column;">
                  <small style="color:#09b6c7;font-size:10px">Form</small>
                  <strong style="margin:5px 0;font-size:14px">ALEXANDRIA</strong>
                  <small style="font-size:10px">Borg El Arab Airport</small>
                </div>
              </td>
              <td style="width:25%;text-align:center;padding-right:10px">
                <div style='display:flex;align-items:center'>
                  <span style="border-top:1px dotted #000;flex:2;"></span>
                  <span class="rtl-scale" style="font-size: 25px;">&#9992;</span >
                </div>
                <div style="">
                  <span >&#9991;</span>
                  <small style="font-size:10px">02h 35m</small>
                </div>
              </td>
              <td style="vertical-align: top;width:15%">
                <div style="display:flex;flex-direction: column;">
                  <small style="color:#09b6c7;font-size:10px">Arrival</small>
                  <strong style="margin:5px 0">14:00</strong>
                  <small style="font-size:10px">Jan 28 2020</small>
                </div>
              </td>
              <td style="vertical-align: top;width:15%">
                <div style="display:flex;flex-direction: column;">
                  <small style="color:#09b6c7;font-size:10px">To</small>
                  <strong style="margin:5px 0;font-size:14px">RIYADH</strong>
                  <small style="font-size:10px">King Khaled InternationalAirport</small>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h3 style="padding-top:10px"><span>&#9817;</span>Traveller details</h3>
      <div style="overflow-x:auto">
        <table width="100%" style="border-bottom:2px solid #ddd;padding-bottom:15px">
          <tbody>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Traveller</small>
                <small style="margin-top:5px;font-size:10px">MOHAMED RAMADAN ELDAMLAWY</small>
              </div>
            </td>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Flight</small>
                <small style="margin-top:5px;font-size:10px">E5-333</small>
              </div>
            </td>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Route</small>
                <small style="margin-top:5px;font-size:10px">HB<span style="margin:0 3px">&#10142;</span>RUD</small>
              </div>
            </td>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Cabin baggage</small>
                <small style="margin-top:5px;font-size:10px">7 KG</small>
              </div>
            </td>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Check-in baggage</small>
                <small style="margin-top:5px;font-size:10px">20 KG</small>
              </div>
            </td>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Check-in baggage</small>
                <small style="margin-top:5px;font-size:10px">20 KG</small>
              </div>
            </td>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Seat</small>
                <small style="margin-top:5px;font-size:10px">-</small>
              </div>
            </td>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Meal</small>
                <small style="margin-top:5px">-</small>
              </div>
            </td>
            <td style="vertical-align: top;padding-right:15px">
              <div style="display:flex;flex-direction: column;">
                <small style="color:#09b6c7;font-size:10px">Class</small>
                <small style="margin-top:5px;font-size:10px">Economy</small>
              </div>
            </td>
          </tbody>
        </table>
      </div>
      <small style="display:inline-block;margin-top:15px;font-style:italic;font-size:10px">Please be advised that you are required to produce various travel documents depending on your journey, destination and purpose of travel. The
      documents required may include the following:</small>
      <ul class="rtl-ml-0 rtl-mr-40" style="font-size:10px;font-style:italic;list-style:disc;margin-left:40px;margin-top:10px;min-height:200px">
        <li >FBA- Free Baggage Allowance, can vary depending on your class/fare purchased. You are requested to reconfirm.</li>
        <li>A passport with a minimum validity of 6 months is required, with sufficient empty pages in the back.</li>
        <li>A valid visa for the country you are visiting. Also check if a transit visa is required if you are transiting between other countries during your journey.</li>
        <li>A valid National ID for GCC nationals travelling with the Arabian Gulf region; please check if the country you are visiting allows entry with your
          National ID card.
        </li>
        <li>Immigration authorities require airlines to provide advance passenger information prior to departure, so please ensure that your bookings have
          been updated prior to your travel.
        </li>
        <li>Passengers from SAARC countries like India and Pakistan travelling to the GCC may require <strong>OK to board approval</strong>; please ensure your booking is
          updated with approval 24 hours prior to travel.
        </li>
      </ul>
      <div style="text-align:center;font-size:12px">
        <small>Please contact us at <a href="#">flightsupport@phptravels.com</a>or call our 24x7 team on <a href="tel:3177594940">317.759.4940</a> for any issue related to this booking</small>
        <div style="width:100px; height:2px;background-color:#000;margin:5px auto"></div>
        <small>You can also reach us by Whatsapp on <span style="color:#09b6c7;">(+966) 554400000</span></small>
      </div>
      <div style="background-color:#ddd;padding:10px;display:flex;justify-content:space-between;flex-wrap:wrap;margin-top:10px;direction:ltr">
        <strong style="font-size:12px">PHPTRAVELS Tourism and Travel Company</strong>
        <strong style="font-size:12px"><a href="https://www.phptravels.com">www.phptravels.com</a></strong>
      </div>
    </div>
    <div class="vocher" style="width: 800px; margin:30px auto; background-color:#fff;padding: 10px;border-radius:3px;box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.28);">
      <a href="#" style="width:100%" class="btn prime"> Download PDF</a>
    </div>
  </body>
</html>