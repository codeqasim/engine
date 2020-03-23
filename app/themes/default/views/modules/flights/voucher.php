<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Vocher</title>
</head>
<body style="background-color:rgb(82, 86, 89);">
    <div style="width:800px;margin:0 auto;background-color:#fff;padding:20px 10px">
    <div style="display:flex; justify-content:space-between;align-items:center">
    <h3>E-TICKET / ITINERARY</h3>
    <img alt="logo" src="<?php echo base_url(); ?>uploads/main/logo.png" width="35px" />
    </div>
    <h5 style="letter-spacing: 1.5px;margin-bottom:5px">BOOKING / INVOICE ID:<span style="font-weight:100">A00123547450</span> | AIRLINE REFERENCE (PNR): <span style="font-weight:100">72955123</span> | <span style="color:#00bc31">CONFIRMED</span></h5>
    <hr>
    <h3 style="margin:10px 0">Flight Detail</h3>
    <hr>
    <div><span style="font-size: 25px; transform: translate(2px, 4px); display: inline-block;margin-right:10px" >&#9992;</span > Alexandria to Riyadh on <strong>(Jan 28 2020)</strong></div>
    <table>
    <tbody>
    <tr>
    <td>
    <small style="color:#09b6c7;">Airline/Flight</small>
    <div style="display:flex;align-items:center;margin:5px 0">
    <img src="<?php echo $theme_url;?>assets/img/WY.png" alt="" width="20px">
    <strong style="font-size:13px;margin-left:5px">WY-333</strong>
    </div>
    <small style="font-weight:bold">Oman Air</small>
    <br>
    <small>Cabin:Economy</small>
    </td>
    <td>
    <div style="display:flex;flex-diraction:flex-column">
    <small style="color:#09b6c7;">Airline/Flight</small>
    <strong>10:00</strong>
    <small>Jan 28 2020</small>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
</body>
</html>