<?php

namespace Services\Mailchimp;

/**
 * Define the member basic interface for the Mailchimp List API V3.
 * @author Andrea Rampin
 * @version 1.0
 */
interface MemberInterface {
    
    /**
     * Set memeber email address.
     * @param string $data
     */
    public function setEmailAddress($data);
    
    /**
     * Get memeber email address.
     * @return string email address.
     */
    public function getEmailAddress();
    
    /**
     * Set memeber status.
     * @param string $data staus within: "subscribed", "unsubscribed", "cleaned", "pending".
     */
    public function setStatus($data);
    
    /**
     * Get memeber status.
     * @return string status.
     */
    public function getStatus();
    
    /**
     * Convert object to array for API calls.
     * @return string array version of object.
     */
    public function toArray();
}
