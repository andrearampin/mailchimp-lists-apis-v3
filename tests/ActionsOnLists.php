<?php

use PHPUnit\Framework\TestCase;

class ActionsOnLists extends TestCase {

    // Lists connector.
    private $lists;
    
    // Config file.
    private $config;
    
    // Mailchimp campaign data.
    private $data;
    
    // List id once created.
    private $list_id;

    public function __construct($name = null, array $data = array(), $dataName = '') {
        parent::__construct($name, $data, $dataName);

        // Load Config.
        include realpath(realpath(dirname(__FILE__))) . '/../services/config.php';
        $this->config = $config;

        // Create lists connector.
        $this->lists = new Services\Mailchimp\Lists(new Services\Mailchimp\ApiConnector($this->config['mailchimp']['api']));

        // Mailchimp list contact data.
        $contact = new \Services\Mailchimp\Contact('Company', 'YYYYY', 'XXXXX', 'Melbourne', 'VIC', '3000', 'Australia', '(03) 1234 5678');

        // Mailchimp campaign default.
        $campaign_defaults = new \Services\Mailchimp\CampaignDefaults('Andrea Rampin', 'ar@test.com', 'Test', 'en');
        
        // Campaign data.
        $this->data = array(
            "name" => "Company test",
            "contact" => $contact->toArray(),
            "permission_reminder" => "You are receiving this email because you signed up for updates about Company",
            "campaign_defaults" => $campaign_defaults->toArray(),
            "email_type_option" => true
        );
    }

    public function testListActions() {

        // Create list.
        $return = $this->lists->create($this->data);
        $this->list_id = isset($return->id) ? $return->id : null;
        $this->assertTrue(isset($this->list_id) && !is_null($this->list_id));

        // Add memeber to list.
        $member = new Services\Mailchimp\Member('test@company.com');
        $return = $this->lists->create(array("members" => array($member->toArray()), "update_existing" => true), $this->list_id);
        $this->assertTrue(isset($return->new_members[0]->email_address) && $return->new_members[0]->email_address == $member->getEmailAddress());
        
        // Updated List data.
        $newName = "Company test Updated";
        $this->data["name"] = $newName;

        // Update list.
        $return = $this->lists->update($this->list_id, $this->data);
        $this->assertTrue($return->name == $newName);

        // Delete list
        $this->assertTrue($this->lists->delete($this->list_id));
    }

}
