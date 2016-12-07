<?php

namespace Services\Mailchimp;

/**
 * Define the campaign defaults interface for the Mailchimp List API V3.
 * @author Andrea Rampin
 * @version 1.0
 */
interface CampaignDefaultsInterface {
    
    /**
     * Get from name.
     * @return string from name.
     */
    public function getFromName();
    
    /**
     * Set from name.
     * @param string $data
     */
    public function setFromName($data);
    
    /**
     * Get from email.
     * @return string from email.
     */
    public function getFromEmail();
    
    /**
     * Set from email.
     * @param string $data
     */
    public function setFromEmail($data);
    
    /**
     * Get sugbject.
     * @return string sugbject.
     */
    public function getSubject();
    
    /**
     * Set sugbject.
     * @param string $data
     */
    public function setSubject($data);
    
    /**
     * Get language.
     * @return string language.
     */
    public function getLanguage();
    
    /**
     * Set language.
     * @param string $data
     */
    public function setLanguage($data);
    
    /**
     * Convert object to array for API calls.
     * @return string array version of object.
     */
    public function toArray();
}
