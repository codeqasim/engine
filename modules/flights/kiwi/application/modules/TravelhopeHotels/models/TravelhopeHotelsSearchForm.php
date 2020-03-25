<?php

class TravelhopeHotelsSearchForm
{
    public $action;
    public $slug;
    public $city;
    public $checkin;
    public $checkout;
    public $adults;
    public $children;
    public $ota_id;
    public $currency;
    public $vendor;
    public $ip_address;

    public function __construct()
    {
        $this->setAction(base_url('thhotels/search'));
        $this->setSlug('thhotels');
        $this->setAdults(2);
        $this->setChildren(0);
        $this->setVendor(3);
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->city;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->city = $destination;
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
        $this->checkin = date('m/d/Y', strtotime($checkin));
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
        $this->checkout = date('m/d/Y', strtotime($checkout));
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

    public function getPassengerFieldValue()
    {
        return $this->getAdults() . ' Adult ' . $this->getChildren() .' Child';
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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * @return mixed
     */
    public function getTotalNight()
    {
        $checkin = $this->getCheckout();
        $checkout = $this->getCheckin();

        return round(abs(strtotime($checkout) - strtotime($checkin)) / 86400);
    }

    /**
     * @return mixed
     */
    public function getTotalRooms()
    {
        return 1;
    }

    public function parseUriString($args)
    {
        $this->setDestination($args[1]);
        $this->setCheckin($args[2]);
        $this->setCheckout($args[3]);
        $this->setAdults($args[4]);
        $this->setChildren($args[5]);
    }

    public function populate($data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function getInJson()
    {
        return json_encode($this);
    }
}
