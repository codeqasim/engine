<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// EANSLUG => properties
$route['phpinfo'] = "home/phpinfo";
$route['default_controller'] = "home";
$route['404_override'] = 'home';

$route["search"] = 'api/travelhope_flights/search';

$route['m-(.*)'] = 'home'; // for new menu
$route['responsive'] = 'home/responsive'; // responsive check
$route['pull'] = 'home/pull'; // git pull origin master

$route['admin/modules/ajaxController(.*)'] = 'admin/ajaxController$1';
$route['admin/settings/modules/add'] = 'admin/modulesController/add';
$route['admin/settings/modules/edit(.*)'] = 'admin/modulesController/edit$1';
$route['admin/modules/delete(.*)'] = 'admin/modulesController/delete$1';
$route['admin/settings/modules(.*)'] = 'admin/modulesController$1';
$route['admin/modules(.*)'] = 'admin/modulesController$1';
$route['admin/flights/settings'] = 'flights/flightsback/setting_routes';
$route['admin/flights/flightsback/add_settings'] = 'flights/flightsback/add_settings';


$route['translate_uri_dashes'] = FALSE;
$route['supplier-register'] = 'home/supplier_register';
$route[str_replace("/", "",EANSLUG)] = 'Ean';
$route[EANSLUG.'loadMore'] = 'Ean/loadMore';
$route[EANSLUG.'listings/(:any)'] = 'Ean/listings/$1';
$route['properties/search/(.*)'] = 'Ean/search/$1';
$route[EANSLUG.'reservation/?(:any)?'] = 'Ean/reservation/$1';
$route[str_replace("/", "",EANSLUG)."/?(:any)?"] = 'Ean/index/$1';
$route[EANSLUG.'itin'] = 'Ean/itin';
$route[EANSLUG.'hotel/(:any)/(:any)/?(:any)'] = 'Ean/hotel/$1/$2/$3';
$route['car'] = 'Cartrawler';
$route['flightst'] = 'Travelstart';
$route['admin/flightst(.*)'] = 'Travelstart/Travelstartback$1';
$route['air'] = 'Travelpayouts';
$route['flightsw/search/(.*)'] = 'Wegoflights/flight_results/$1';
$route['flightsw'] = 'Wegoflights';
$route['hotelsc'] = 'Hotelscombined';
$route['sitemap\.xml'] = "Sitemap";
$route['getCities'] = "Home/getCities";
$route['visa'] = 'Ivisa';
$route['visa/booking'] = 'Ivisa/booking';
$route['visa/confirmation'] = 'Ivisa/confirmation';
$route['visa/invoice/(:any)'] = 'Ivisa/invoice/$1';
$route['admin/ivisa/bookings'] = 'ivisa/ivisaback/bookings';

$route['license'] = 'home/license';

$route['admin/flights/routes'] = 'flights/routesflights/routes';// For index page
$route['admin/flights/routes/add'] = 'flights/routesflights/add';
$route['admin/flights/airports'] = 'flights/flightsback/airports'; // For index page
$route['admin/flights/airlines'] = 'flights/flightsback/airlines'; // For index page
$route['admin/flights/countries'] = 'flights/flightsback/countries'; // For index page
$route['admin/flights/routes/manage/(.*)'] = 'flights/routesflights/manage/$1';

$route['flights/AjaxController/delMultipleRoutes'] = 'flights/AjaxController/delMultipleRoutes';// For index page
$route['admin/flights'] = 'flights/flightsback/index'; // For index page
$route['admin/flights/(.*)'] = 'flights/flightsback/$1'; // For index page
$route['admin/flights/ajaxController/(.*)'] = 'flights/AjaxController/$1';

// Iati
$route['flightsi(.*)'] = 'iati_flight$1';
$route['admin/flightsi(.*)'] = 'iati_flight/iatiback$1';

// Travelport Flight Module Routing
$route['flights/book(.*)'] = 'flights/flights/book$1'; // For index page
$route['flights/ajaxController(.*)'] = 'flights/AjaxController$1';

$route['flights(.*)'] = 'flights/flights/search$1';// For index page

// Client side
$route['flight'] = 'travelport_flight/flight/index';
$route['flight/search/(.*)'] = 'travelport_flight/flight/index/$1';
$route['flight/cart'] = 'travelport_flight/cart/checkout';
$route['flight/cart/(.*)'] = 'travelport_flight/cart/$1';
$route['flight/invoice'] = 'travelport_flight/invoice/index';
$route['flight/invoice/(.*)'] = 'travelport_flight/invoice/$1';
$route['flight/ajaxController/(.*)'] = 'travelport_flight/AjaxController/$1';
$route['flight/(.*)'] = 'travelport_flight/flight/$1';
$route['admin/flight(.*)'] = 'travelport_flight/flightback$1';

$route['admin/routes/add_post'] = 'flights/routesflights/add_post';
$route['admin/routes/manage_post'] = 'flights/routesflights/manage_post';

// Travelpayout Hotels
$route['tpflight/search/(.*)'] = 'Travelpayouts/flight_results/$1';

$route['tphotels/search/(.*)'] = 'travelpayoutshotels/travelpayoutshotels/index/$1';
$route['admin/travelpayoutshotels'] = 'travelpayoutshotels/travelpayoutshotelsback/index'; // For index page
$route['admin/travelpayoutshotels/(.*)'] = 'travelpayoutshotels/travelpayoutshotelsback/$1';

// Hotelbeds Module
$route['hotelb/filter(.*)'] = 'hotelbeds/index/filter$1';
$route['hotelb(.*)'] = 'hotelbeds/hotelbeds$1';
$route['admin/hotelbeds(.*)'] = 'hotelbeds/hotelbedsback$1';

// Travelport Hotels
$route['hotelport(.*)'] = 'travelport_hotels/HotelApi$1';
$route['admin/travelport_hotel/ajaxController/(.*)'] = 'travelport_hotels/AjaxController/$1';
$route['admin/travelport_hotel(.*)'] = 'travelport_hotels/HotelApiBack$1';

$route['admin/hotels/room_calender/data(.*)'] = 'hotels/room_Calender/data$1';
$route['admin/hotels/DeleteAll'] = 'hotels/hotelsback/DeleteAll';
$route['admin/hotels/room_calender/onEventChanged'] = 'hotels/room_Calender/onEventChanged';
$route['admin/hotels/room_calender(.*)'] = 'hotels/room_Calender/index$1';


//Hotelston
$route['hotelston(.*)'] = 'Hotelston/Hotelston$1';


// Amadeus
$route['airlines/booking'] = 'amadeus/booking';
$route['airlines/invoice'] = 'amadeus/invoice';
$route['airlines/search_result'] = 'amadeus/search_result';
$route['airlines/email'] = 'amadeus/email';
$route['admin/amadeus/settings'] = 'amadeus/Amadeusback/settings';
$route['admin/amadeus/bookings'] = 'amadeus/Amadeusback/bookings';
$route['admin/amadeus/update_settings'] = 'amadeus/Amadeusback/update_settings';
$route['airlines(.*)'] = 'amadeus/index$1';
$route['amadeus(.*)'] = 'amadeus/redirect';

// Juniper
$route['hotelsj'] = 'juniper';
$route['hotelsj/details(.*)'] = 'juniper/get_hotels_data$1';
$route['hotelsj/booking'] = 'juniper/booking';
$route['hotelsj/booking_confirm'] = 'juniper/booking_confirm';
$route['admin/juniper/settings'] = 'juniper/juniperback/settings';
$route['admin/juniper/update_settings'] = 'juniper/Juniperback/update_settings';
$route['admin/juniper/bookings'] = 'juniper/Juniperback/bookings';
$route['admin/juniper/bookings/view(.*)'] = 'juniper/Juniperback/view$1';
$route['juniper(.*)'] = 'juniper/redirect';

// Sabre
$route['airway(.*)'] = 'sabre$1';
$route['admin/sabre(.*)'] = 'sabre/sabreback$1';

// Viator
$route['packages(.*)'] = 'Viator$1';
$route['admin/viator(.*)'] = 'Viator/ViatorBack$1';

// tarco
$route['trflights/checkpaymentStatus'] = 'FlightTarco/checkpaymentStatus';
$route['trflight/invoice(.*)'] = 'FlightTarco/invoice/index$1';
$route['trflight/payments'] = 'FlightTarco/payments';
$route['trflight(.*)'] = 'FlightTarco$1';
$route['admin/trflight(.*)'] = 'FlightTarco/FlightTarcoBack$1';

// travelhopeflightst
$route['thflights/invoice(.*)'] = 'TravelhopeFlights/invoice/index$1';
$route['thflights/ajaxController(.*)'] = 'TravelhopeFlights/ajaxController$1';
$route['thflights(.*)'] = 'TravelhopeFlights/travelhopeFlights$1';
$route['admin/thflight(.*)'] = 'TravelhopeFlights/TravelhopeFlightsBack$1';

// Travelhope hotels
$route['thhotels/invoice(.*)'] = 'TravelhopeHotels/invoice/index$1';
$route['thhotels/ajaxController(.*)'] = 'TravelhopeHotels/ajaxController$1';
$route['thhotels(.*)'] = 'TravelhopeHotels/TravelhopeHotels$1';
$route['admin/thhotels(.*)'] = 'TravelhopeHotels/TravelhopeHotelsBack$1';

//KiwiTaxi
$route['taxi/invoice(.*)'] = 'Kiwitaxi/invoice/index$1';
$route['admin/kiwitaxi(.*)'] = 'kiwitaxi/kiwitaxiBack$1';
$route['taxi(.*)'] = 'kiwitaxi/kiwitaxi$1';

//Travelpayouts Api
$route['admin/tpflightapi(.*)'] = 'TravelPayoutsFlightsAPI/TravelpayoutsflightapiBack$1';
$route['tpflightapi(.*)'] = 'TravelPayoutsFlightsAPI/Travelpayoutsflightapi$1';

//PKFARE FLIGHT API
$route['admin/pfflight(.*)'] = 'Pkfareflight/PkfareflightBack$1';
$route['pfflight(.*)'] = 'Pkfareflight/Pkfareflight$1';