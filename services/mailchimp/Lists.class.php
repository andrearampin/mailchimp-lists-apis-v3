<?php

namespace Services\Mailchimp;

require MAILCHIMP_SERVICES_PATH . 'ListsInterface.php';

/**
 * Implements ListsInterface.
 * @author Andrea Rampin
 * @version 1.0
 */
class Lists implements ListsInterface {
    
    /** @var GuzzleHttp\Client api connector to the MailChimp API */
    private $connector;
    
    public function __construct($apicon) {
        $this->connector = $apicon;
    }
    
    /**
     * Create a new list in your MailChimp account if the list_id is not 
     * provided otherwise execute a batch subscribe or unsubscribe list 
     * members for the list_id privided as parameter.
     * @param int $list_id List to update.
     * @return array|null Mailchimp response as array.
     */
    public function create($data, $list_id = null) {
        $endpoint = 'lists' . ($list_id ? '/' . $list_id : '');
        $response = $this->connector->sendRequest('POST', $endpoint, $data);
        return $response && $response->getStatusCode() == 200 ? \GuzzleHttp\json_decode($response->getBody()) : null;
    }
    
    /**
     * Get information about a specific list or if $list_is is not provided
     * get information about all lists.
     * @param type $list_id
     * @return array|null Mailchimp response as array.
     */
    public function read($list_id = null) {
        $endpoint = 'lists' . ($list_id ? '/' . $list_id : '');
        $response = $this->connector->sendRequest('GET', $endpoint);
        return $response && $response->getStatusCode() == 200 ? \GuzzleHttp\json_decode($response->getBody()) : null;
    }
    
    /**
     * Update a specific list.
     * @param int $list_id
     * @param array updated data
     * @return array|null Mailchimp response as array.
     */
    public function update($list_id, $data) {
        $endpoint = 'lists/' . $list_id;
        $response = $this->connector->sendRequest('PATCH', $endpoint, $data);
        return $response && $response->getStatusCode() == 200 ? \GuzzleHttp\json_decode($response->getBody()) : null;
    }
    
    /**
     * Delete a list.
     * @param int $list_id
     * @return boolean True is list has been deleted otherwise false.
     */
    public function delete($list_id) {
        $endpoint = 'lists' . ($list_id ? '/' . $list_id : '');
        $response = $this->connector->sendRequest('DELETE', $endpoint);
        return $response && $response->getStatusCode() == 204;
    }
    
}
