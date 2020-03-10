<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 4/26/2019
 * Time: 5:07 PM
 */
class Booking
{
    public $custom_payload;
    public $flight_id;
    public $account;
    public $adults;
    public $children;
    public $infants;
    public $special_request;
    public $payment_details;
    public $flight_data;
    public $voucher;
    public $ota_id;
    public $vendor;
    public $test;
    public $ip_address;

    /**
     * @return mixed
     */
    public function getCustomPayload()
    {
        return $this->custom_payload;
    }

    /**
     * @param mixed $custom_payload
     */
    public function setCustomPayload($custom_payload): void
    {
        $this->custom_payload = $custom_payload;
    }

    /**
     * @return mixed
     */
    public function getFlightId()
    {
        return $this->flight_id;
    }

    /**
     * @param mixed $flight_id
     */
    public function setFlightId($flight_id): void
    {
        $this->flight_id = $flight_id;
    }

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
    public function setAccount($account): void
    {
        $this->account = $account;
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
    public function getSpecialRequest()
    {
        return $this->special_request;
    }

    /**
     * @param mixed $special_request
     */
    public function setSpecialRequest($special_request): void
    {
        $this->special_request = $special_request;
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
    public function setPaymentDetails($payment_details): void
    {
        $this->payment_details = $payment_details;
    }

    /**
     * @return mixed
     */
    public function getFlightData()
    {
        return $this->flight_data;
    }

    /**
     * @param mixed $flight_data
     */
    public function setFlightData($flight_data): void
    {
        $this->flight_data = $flight_data;
    }

    /**
     * @return mixed
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * @param mixed $voucher
     */
    public function setVoucher($voucher): void
    {
        $this->voucher = $voucher;
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
    public function setOtaId($ota_id): void
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
    public function setVendor($vendor): void
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
    public function setIpAddress($ip_address): void
    {
        $this->ip_address = $ip_address;
    }

    /**
     * @param mixed $test
     */
    public function setpaymentmetod($test): void
    {
        $this->test = $test;
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