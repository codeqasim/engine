<script>
//var nowTemp5 = new Date();
//var now5 = new Date(nowTemp5.getFullYear(), nowTemp5.getMonth(), nowTemp5.getDate(), 0, 0, 0, 0);
//
//var departcar = $('#departcar').datepicker({
//format: fmt, onRender: function (date) {
//return date.valueOf() < now5.valueOf() ? 'disabled' : ''
//}
//}).on('changeDate', function (ev) {
//var newDate5 = new Date(ev.date)
//newDate5.setDate(newDate5.getDate() + 0);
//returncar.setValue(newDate5);
//departcar.hide();
//$('#returncar')[0].focus()
//}).data('datepicker');
//
//var returncar = $('#returncar').datepicker({
//format: fmt, onRender: function (date) {
//return date.valueOf() <= departcar.date.valueOf() ? 'disabled' : ''
//}
//}).on('changeDate', function (ev) {
//var cnewDate = new Date(ev.date);
//returncar.hide()
//}).data('datepicker');
//
//
//var nowTemp52 = new Date();
//var now52 = new Date(nowTemp52.getFullYear(), nowTemp52.getMonth(), nowTemp52.getDate(), 0, 0, 0, 0);
//
//
//var departcar2 = $('#departcar2').datepicker({
//format: fmt, onRender: function (date) {
//return date.valueOf() < now52.valueOf() ? 'disabled' : ''
//}
//}).on('changeDate', function (ev) {
//var newDate52 = new Date(ev.date)
//newDate52.setDate(newDate52.getDate() + 0);
//returncar2.setValue(newDate52);
//departcar2.hide();
//$('#returncar2')[0].focus()
//}).data('datepicker');
//
//var returncar2 = $('#returncar2').datepicker({
//format: fmt, onRender: function (date) {
//return date.valueOf() <= departcar2.date.valueOf() ? 'disabled' : ''
//}
//}).on('changeDate', function (ev) {
//var cnewDate2 = new Date(ev.date);
//returncar2.hide()
//}).data('datepicker');


var baseURL = "<?php echo base_url(); ?>";

var totalsVal = $("#cartotals").val();
if (totalsVal == "1") {
$(".showTotal").show()
} else {
$(".showTotal").hide()
}
var pickupLocation = $('#pickuplocation').val();
var dropoffLocation = $('#droplocation').val();
$('#carlocations').on('change', function () {
var location = $(this).val();
$.post(baseURL + 'cars/carajaxcalls/onChangeLocation', {location: location}, function (resp) {
var response = $.parseJSON(resp);
if (response.hasResult) {
$("#carlocations2").html(response.optionsList).select2({width: '100%', maximumSelectionSize: 1})
}
})
});
$('#pickuplocation').on('change', function () {
var location = $('#pickuplocation').val();
var carid = $("#itemid").val();
var pickupDate = $("#departcar").val();
var dropoffDate = $("#returncar").val();
$.post(baseURL + 'cars/carajaxcalls/getDropoffLocations', {
location: location,
carid: carid,
pickupDate: pickupDate,
dropoffDate: dropoffDate
}, function (resp) {
var response = $.parseJSON(resp);
console.log(response);
if (response.hasResult) {
$(".showTotal").show();
$(".totaldeposit").html(response.priceInfo.depositAmount);
$(".totalTax").html(response.priceInfo.taxAmount);
$(".grandTotal").html(response.priceInfo.grandTotal);
$("#droplocation").html(response.optionsList);
}
})
});
$('.carDates').blur(function () {
setTimeout(function () {
getCarPrice()
}, 500)
});
$('#droplocation').on("change", (function () {
getCarPrice()
}));

function getCarPrice() {
var pickupLocation = $('#pickuplocation').val();
var dropoffLocation = $('#droplocation').val();
var carid = $("#itemid").val();
var pickupDate = $("#departcar").val();
var dropoffDate = $("#returncar").val();
$.post(baseURL + 'cars/carajaxcalls/getCarPriceAjax', {
pickupLocation: pickupLocation,
dropoffLocation: dropoffLocation,
carid: carid,
pickupDate: pickupDate,
dropoffDate: dropoffDate
}, function (resp) {
var response = $.parseJSON(resp);
console.log(response);
$(".showTotal").show();
$(".totaldeposit").html(response.depositAmount);
$(".totalTax").html(response.taxAmount);
$(".grandTotal").html(response.grandTotal)
})
};

var $dropdate=$('#dropdate'),
$returndate=$('#returndate');
$dropdate.datepicker({onSelect:function(fd,date){$returndate.data('datepicker').update('minDate',date);
$returndate.focus()},language:"en",
minDate:new Date(),
dateFormat:'dd/mm/yyyy',});
$returndate.datepicker({onSelect:function(fd,date){$dropdate.data('datepicker')
.update('maxDate',date)},
autoClose:true,
language:"en",
dateFormat:'dd/mm/yyyy',});
</script>