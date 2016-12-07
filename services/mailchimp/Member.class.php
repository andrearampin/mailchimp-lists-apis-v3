<?php

namespace Services\Mailchimp;

require MAILCHIMP_SERVICES_PATH . 'MemberInterface.php';

/**
 * Implements ListsInterface.
 * @author Andrea Rampin
 * @version 1.0
 */
class Member implements MemberInterface {

    private $email;
    private $status;
    
    public function __construct($email, $status = "subscribed") {
        $this->email = $email;
        $this->status = $status;
    }


    /**
     * Set memeber email address.
     * @param string $data
     */
    public function setEmailAddress($data) {
        $this->status = $data;
    }

    /**
     * Get memeber email address.
     * @return string email address.
     */
    public function getEmailAddress() {
        return $this->email;
    }

    /**
     * Set memeber status.
     * @param string $data staus within: "subscribed", "unsubscribed", "cleaned", "pending".
     */
    public function setStatus($data = "subscribed") {
        if(in_array($data, array("subscribed", "unsubscribed", "cleaned", "pending"))) {
            $this->status = $data;
        } else {
            $this->status = "subscribed";
        }
    }

    /**
     * Get memeber status.
     * @return string status.
     */
    public function getStatus() {
        return $this->status;
    }
    
    /**
     * Convert object to json for API calls.
     * @return array version of object.
     */
    public function toArray() {
        return array(
            "email_address" => $this->email,
            "status" => $this->status
        );
    }
}
