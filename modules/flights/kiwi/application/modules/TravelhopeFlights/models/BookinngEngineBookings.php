<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 4/29/2019
 * Time: 10:17 PM
 */
class BookinngEngineBookings extends CI_Model
{
    const DB_TABLE = 'travelhope_flights_bookings';
    const SESSION_KEY = 'session_key';
    const DB_PK = 'id';

    public $user_id;
    public $session_key;
    public $booking_id;
    public $currency;
    public $total;
    public $book_fee;
    public $origin;
    public $destination;
    public $departure_date;
    public $arrival_date;
    public $adults;
    public $children;
    public $infants;
    public $search_request;
    public $search_response;
    public $checkout_request;
    public $checkout_response;
    public $booking_request;
    public $booking_response;

    public function __construct()
    {
        parent::__construct();

        $this->setSessionKey(0);
        $this->setBookingId(0);
        $this->setSearchRequest('NULL');
        $this->setSearchResponse('NULL');
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
    public function setUserId($user_id): void
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
    public function setSessionKey($session_key): void
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
    public function setBookingId($booking_id): void
    {
        $this->booking_id = $booking_id;
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
    public function setCurrency($currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getBookFee()
    {
        return $this->book_fee;
    }

    /**
     * @param mixed $book_fee
     */
    public function setBookFee($book_fee): void
    {
        $this->book_fee = $book_fee;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin): void
    {
        $this->origin = $origin;
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
    public function setDestination($destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getDepartureDate()
    {
        return $this->departure_date;
    }

    /**
     * @param mixed $departure_date
     */
    public function setDepartureDate($departure_date): void
    {
        $this->departure_date = date('Y-m-d H:i:s', strtotime($departure_date));
    }

    /**
     * @return mixed
     */
    public function getArrivalDate()
    {
        return $this->arrival_date;
    }

    /**
     * @param mixed $arrival_date
     */
    public function setArrivalDate($arrival_date): void
    {
        $this->arrival_date = date('Y-m-d H:i:s', strtotime($arrival_date));
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
    public function setAdults($adults): void
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
    public function setChildren($children): void
    {
        $this->children = $children;
    }

    /**
     * @return mixed
     */
    public function getInfants()
    {
        return $this->infants;
    }

    /**
     * @param mixed $infants
     */
    public function setInfants($infants): void
    {
        $this->infants = $infants;
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
    public function setSearchRequest($search_request): void
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
    public function setSearchResponse($search_response): void
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
     * @param $checkout_request
     */
    public function setCheckoutRequest($checkout_request): void
    {
        $this->checkout_request = $checkout_request;
    }

    /**
     * @return mixed
     */
    public function getCheckoutResponse()
    {
        return json_decode($this->checkout_response);
    }

    /**
     * @param $checkout_response
     */
    public function setCheckoutResponse($checkout_response): void
    {
        $this->checkout_response = $checkout_response;
    }

    /**
     * @return mixed
     */
    public function getBookingRequest()
    {
        return json_decode($this->booking_request);
    }

    /**
     * @param mixed $booking_request
     */
    public function setBookingRequest($booking_request): void
    {
        $this->booking_request = $booking_request;
    }

    /**
     * @return mixed
     */
    public function getBookingResponse()
    {
        return json_decode($this->booking_response);
    }

    /**
     * @param mixed $booking_response
     */
    public function setBookingResponse($booking_response): void
    {
        $this->booking_response = $booking_response;
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