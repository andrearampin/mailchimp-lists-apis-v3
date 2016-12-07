<?php

namespace Services\Mailchimp;

require MAILCHIMP_SERVICES_PATH . 'ContactInterface.php';

/**
 * Implements ContactInterface.
 * @author Andrea Rampin
 * @version 1.0
 */
class Contact implements ContactInterface {
    
    /** @var string company name. */
    private $company;
    
    /** @var string address1. */
    private $address1;
    
    /** @var string address2. */
    private $address2;
    
    /** @var string city name. */
    private $city;
    
    /** @var string state name. */
    private $state;
    
    /** @var string zip code. */
    private $zip;
    
    /** @var string country name. */
    private $country;
    
    /** @var string phone number. */
    private $phone;
    
    public function __construct($company, $address1, $address2, $city, $state, $zip, $country, $phone) {
        $this->company = $company;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->country = $country;
        $this->phone = $phone;
    }


    /**
     * Get company name.
     * @return string company name.
     */
    public function getContactCompany() {
        return $this->company;
    }
    
    /**
     * Set company name.
     * @param string $data
     */
    public function setContactCompany($data) {
        $this->company = (string) $data;
    }
    
    /**
     * Get contact address 1.
     * @return string contact address 1.
     */
    public function getContactAddress1() {
        return $this->address1;
    }
    
    /**
     * Set ontact address 1.
     * @param string $data
     */
    public function setContactAddress1($data) {
        $this->address1 = (string) $data;
    }
    
    /**
     * Get contact address 2.
     * @return string contact address 2.
     */
    public function getContactAddress2() {
        return $this->address2;
    }
    
    /**
     * Set contact address 2.
     * @param string $data
     */
    public function setContactAddress2($data) {
        $this->address2 = (string) $data;
    }
    
    /**
     * Get city name.
     * @return string city name.
     */
    public function getContactCity() {
        return $this->city;
    }
    
    /**
     * Set city name.
     * @param string $data
     */
    public function setContactCity($data) {
        $this->city = (string) $data;
    }
    
    /**
     * Get state name.
     * @return string state name.
     */
    public function getContactState() {
        return $this->state;
    }
    
    /**
     * Set state name.
     * @param string $data
     */
    public function setContactState($data) {
        $this->state = (string) $data;
    }
    
    /**
     * Get zip code.
     * @return string zip code.
     */
    public function getContactZip() {
        return $this->zip;
    }
    
    /**
     * Set zip code.
     * @param string $data
     */
    public function setContactZip($data) {
        $this->zip = (string) $data;
    }
    
    /**
     * Get country name.
     * @return string country name.
     */
    public function getContactCountry() {
        return $this->country;
    }
    
    /**
     * Set country name.
     * @param string $data
     */
    public function setContactCountry($data) {
        $this->country = (string) $data;
    }
    
    /**
     * Get phone number.
     * @return string phone number.
     */
    public function getContactPhone() {
        return $this->phone;
    }
    
    /**
     * Set phone number.
     * @param string $data
     */
    public function setContactPhone($data) {
        $this->phone = $data;
    }
    
    /**
     * Convert object to array for API calls.
     * @return string array version of object.
     */
    public function toArray() {
        return array(
            "company" => $this->company,
            "address1" => $this->address1,
            "address2" => $this->address2,
            "city" => $this->city,
            "state" => $this->state,
            "zip" => $this->zip,
            "country" => $this->country,
            "phone" => $this->phone
        );
    }
}
