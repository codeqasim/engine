<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 4/26/2019
 * Time: 5:07 PM
 */
class Booking
{
    public $account;
    public $payment_details;
    public $hotel_data;
    public $room_data;
    public $ota_id;
    public $vendor;
    public $ip_address;

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return mixed
     */
    public function getPaymentDetails()
    {
        return $this->payment_details;
    }

    /**
     * @param mixed $payment_details
     */
    public function setPaymentDetails($payment_details)
    {
        $this->payment_details = $payment_details;
    }

    /**
     * @return mixed
     */
    public function getHotelData()
    {
        return $this->hotel_data;
    }

    /**
     * @param mixed $hotel_data
     */
    public function setHotelData($hotel_data)
    {
        $this->hotel_data = $hotel_data;
    }

    /**
     * @return mixed
     */
    public function getRoomData()
    {
        return $this->room_data;
    }

    /**
     * @param mixed $room_data
     */
    public function setRoomData($room_data)
    {
        $this->room_data = $room_data;
    }

    /**
     * @return mixed
     */
    public function getOtaId()
    {
        return $this->ota_id;
    }

    /**
     * @param mixed $ota_id
     */
    public function setOtaId($ota_id)
    {
        $this->ota_id = $ota_id;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * @param mixed $ip_address
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return (array) $this;
    }
}