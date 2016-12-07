<?php

namespace Services\Mailchimp;

/**
 * Define the contact interface for the Mailchimp List API V3.
 * @author Andrea Rampin
 * @version 1.0
 */
interface ContactInterface {
    
    /**
     * Get company name.
     * @return string company name.
     */
    public function getContactCompany();
    
    /**
     * Set company name.
     * @param string $data
     */
    public function setContactCompany($data);
    
    /**
     * Get contact address 1.
     * @return string contact address 1.
     */
    public function getContactAddress1();
    
    /**
     * Set ontact address 1.
     * @param string $data
     */
    public function setContactAddress1($data);
    
    /**
     * Get contact address 2.
     * @return string contact address 2.
     */
    public function getContactAddress2();
    
    /**
     * Set contact address 2.
     * @param string $data
     */
    public function setContactAddress2($data);
    
    /**
     * Get city name.
     * @return string city name.
     */
    public function getContactCity();
    
    /**
     * Set city name.
     * @param string $data
     */
    public function setContactCity($data);
    
    /**
     * Get state name.
     * @return string state name.
     */
    public function getContactState();
    
    /**
     * Set state name.
     * @param string $data
     */
    public function setContactState($data);
    
    /**
     * Get zip code.
     * @return int zip code.
     */
    public function getContactZip();
    
    /**
     * Set zip code.
     * @param int $data
     */
    public function setContactZip($data);
    
    /**
     * Get country name.
     * @return string country name.
     */
    public function getContactCountry();
    
    /**
     * Set country name.
     * @param string $data
     */
    public function setContactCountry($data);
    
    /**
     * Get phone number.
     * @return string phone number.
     */
    public function getContactPhone();
    
    /**
     * Set phone number.
     * @param string $data
     */
    public function setContactPhone($data);
    
    /**
     * Convert object to array for API calls.
     * @return string array version of object.
     */
    public function toArray();
}
