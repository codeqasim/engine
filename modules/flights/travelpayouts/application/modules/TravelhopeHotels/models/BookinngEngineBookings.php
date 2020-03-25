<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 4/29/2019
 * Time: 10:17 PM
 */
class BookinngEngineBookings extends CI_Model
{
    const DB_TABLE = 'travelhope_hotels_bookings';
    const SESSION_KEY = 'session_key';
    const DB_PK = 'id';

    public $user_id;
    public $session_key;
    public $booking_id;
    public $destination;
    public $hotel_name;
    public $room_name;
    public $price;
    public $currency;
    public $checkin;
    public $checkout;
    public $adults;
    public $children;
    public $search_request;
    public $search_response;
    public $checkout_request;
    public $checkout_response;
    public $booking_request;
    public $booking_response;
    public $created_at;

    public function __construct()
    {
        parent::__construct();

        $this->setUserId(0);
        $this->setBookingId(0);
        $this->setCreatedAt(date('Y-m-d H:i:s'));
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getSessionKey()
    {
        return $this->session_key;
    }

    /**
     * @param mixed $session_key
     */
    public function setSessionKey($session_key)
    {
        $this->session_key = $session_key;
    }

    /**
     * @return mixed
     */
    public function getBookingId()
    {
        return $this->booking_id;
    }

    /**
     * @param mixed $booking_id
     */
    public function setBookingId($booking_id)
    {
        $this->booking_id = $booking_id;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getHotelName()
    {
        return $this->hotel_name;
    }

    /**
     * @param mixed $hotel_name
     */
    public function setHotelName($hotel_name)
    {
        $this->hotel_name = $hotel_name;
    }

    /**
     * @return mixed
     */
    public function getRoomName()
    {
        return $this->room_name;
    }

    /**
     * @param mixed $room_name
     */
    public function setRoomName($room_name)
    {
        $this->room_name = $room_name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getCheckin()
    {
        return $this->checkin;
    }

    /**
     * @param mixed $checkin
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;
    }

    /**
     * @return mixed
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * @param mixed $checkout
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * @return mixed
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * @param mixed $adults
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param mixed $children
     */
    public function setChildren($children)
    {
        $this->children = $children;
    }

    /**
     * @return mixed
     */
    public function getSearchRequest()
    {
        return $this->search_request;
    }

    /**
     * @param mixed $search_request
     */
    public function setSearchRequest($search_request)
    {
        $this->search_request = $search_request;
    }

    /**
     * @return mixed
     */
    public function getSearchResponse()
    {
        return $this->search_response;
    }

    /**
     * @param mixed $search_response
     */
    public function setSearchResponse($search_response)
    {
        $this->search_response = $search_response;
    }

    /**
     * @return mixed
     */
    public function getCheckoutRequest()
    {
        return $this->checkout_request;
    }

    /**
     * @param mixed $checkout_request
     */
    public function setCheckoutRequest($checkout_request)
    {
        $this->checkout_request = $checkout_request;
    }

    /**
     * @return mixed
     */
    public function getCheckoutResponse()
    {
        return $this->checkout_response;
    }

    /**
     * @param mixed $checkout_response
     */
    public function setCheckoutResponse($checkout_response)
    {
        $this->checkout_response = $checkout_response;
    }

    /**
     * @return mixed
     */
    public function getBookingRequest()
    {
        return $this->booking_request;
    }

    /**
     * @param mixed $booking_request
     */
    public function setBookingRequest($booking_request)
    {
        $this->booking_request = $booking_request;
    }

    /**
     * @return mixed
     */
    public function getBookingResponse()
    {
        return $this->booking_response;
    }

    /**
     * @param mixed $booking_response
     */
    public function setBookingResponse($booking_response)
    {
        $this->booking_response = $booking_response;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return date('Y-m-d', strtotime($this->created_at));
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getTotalNights()
    {
        $checkin = $this->getCheckin();
        $checkout = $this->getCheckout();
        $datediff = strtotime($checkout) - strtotime($checkin);
        return round($datediff / (60 * 60 * 24));
    }

    public function loadBySessionKey($id)
    {
        $row = $this->db->where(self::SESSION_KEY, $id)->get(self::DB_TABLE)->row();
        if (! empty($row)) {
            foreach ($row as $key => $val) {
                $this->{$key} = $val;
            }
        }
    }

    public function loadById($id)
    {
        $row = $this->db->where(self::DB_PK, $id)->get(self::DB_TABLE)->row();
        if (! empty($row)) {
            foreach ($row as $key => $val) {
                $this->{$key} = $val;
            }
        }
    }

    public function save()
    {
        $this->db->insert(self::DB_TABLE, $this);
        return $this->db->insert_id();
    }

    public function update()
    {
        $this->db->where(self::SESSION_KEY, $this->getSessionKey())->update(self::DB_TABLE, $this);
    }
}