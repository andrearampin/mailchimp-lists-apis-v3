<?php
namespace Services\Mailchimp;

require MAILCHIMP_SERVICES_PATH . 'ApiConnectorInterface.php';

use GuzzleHttp\Client;

/**
 * Implements ApiConnectorInterface.
 * @author Andrea Rampin
 * @version 1.0
 */
class ApiConnector implements ApiConnectorInterface {
    
    /** @var array auth credentials */
    private $auth;
    
    /** @var GuzzleHttp\Client */
    private $connector;
    
    public function __construct($api_config) {
        $this->auth = array('auth' => array_values($api_config['secret']));
        $this->connector = new Client(array(
            'base_uri' => $api_config['url'],
            'timeout'  => 60.0,
        ));
    }
    
    /**
     * Get connector.
     * @return GuzzleHttp\Client().
     */
    private function getConnector() {
        return $this->connector;
    }
    
    /**
     * Get auth credentials.
     * @return array
     */
    private function getAuth() {
        return $this->auth;
    }
    
    public function sendRequest($method, $endpoint, $data = null) {
        $postdata = $this->getAuth();
        if($data) {
            $postdata = array_merge($postdata, array('body' => json_encode($data)));
        }

        try {
            $return = $this->connector->request($method, $endpoint, $postdata);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $return ? $return : null;
    }
}
