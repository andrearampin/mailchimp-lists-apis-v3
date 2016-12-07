<?php

namespace Services\Mailchimp;

require MAILCHIMP_SERVICES_PATH . 'CampaignDefaultsInterface.php';

/**
 * Implements CampaignDefaults.
 * @author Andrea Rampin
 * @version 1.0
 */
class CampaignDefaults implements CampaignDefaultsInterface {
    
    /** @var string from name */
    private $from_name;
    
    /** @var string from email */
    private $from_email;
    
    /** @var string subject */
    private $subject;
    
    /** @var string language */
    private $language;
    
    public function __construct($from_name, $from_email, $subject, $language) {
        $this->from_name = $from_name;
        $this->from_email = $from_email;
        $this->subject = $subject;
        $this->language = $language;
    }
    
    /**
     * Get from name.
     * @return string from name.
     */
    public function getFromName() {
        return $this->from_name;
    }
    
    /**
     * Set from name.
     * @param string $data
     */
    public function setFromName($data) {
        $this->from_name = $data;
    }
    
    /**
     * Get from email.
     * @return string from email.
     */
    public function getFromEmail() {
        return $this->from_email;
    }
    
    /**
     * Set from email.
     * @param string $data
     */
    public function setFromEmail($data) {
        $this->from_email = $data;
    }
    
    /**
     * Get sugbject.
     * @return string sugbject.
     */
    public function getSubject() {
        return $this->subject;
    }
    
    /**
     * Set sugbject.
     * @param string $data
     */
    public function setSubject($data) {
        $this->subject = $data;
    }
    
    /**
     * Get language.
     * @return string language.
     */
    public function getLanguage() {
        return $this->language;
    }
    
    /**
     * Set language.
     * @param string $data
     */
    public function setLanguage($data) {
        $this->language = $data;
    }
    
    /**
     * Convert object to json for API calls.
     * @return string array version of object.
     */
    public function toArray() {
        return array(
            "from_name" => $this->from_name,
            "from_email" => $this->from_email,
            "subject" => $this->subject,
            "language" => $this->language
        );
    }
}
