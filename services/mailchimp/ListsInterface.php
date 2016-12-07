<?php

namespace Services\Mailchimp;

/**
 * Define the lists interface for the Mailchimp List API V3.
 * @author Andrea Rampin
 * @version 1.0
 */
interface ListsInterface {
    
    /**
     * Create a new list in your MailChimp account if the list_id is not 
     * provided otherwise execute a batch subscribe or unsubscribe list 
     * members for the list_id privided as parameter.
     * @param array $data List parameters for the new list/list_id.
     *                    Array(
     *                          name => type: string
     *                          contact => type: Contact
     *                          permission_reminder => type: string
     *                          use_archive_bar => type: boolean
     *                          campaign_defaults => type: Campaign
     *                          notify_on_subscribe => type: string
     *                          notify_on_unsubscribe => type: string
     *                          email_type_option => type: boolean
     *                          visibility  => type: string
     *                    )
     * @param int $list_id List to update.
     * @return array|null Mailchimp response as array.
     */
    public function create($data, $list_id);
    
    /**
     * Get information about a specific list or if $list_is is not provided
     * get information about all lists.
     * @param type $list_id
     * @return array|null Mailchimp response as array.
     */
    public function read($list_id);
    
    /**
     * Update a specific list.
     * @param int $list_id
     * @param array updated data
     * @return array|null Mailchimp response as array.
     */
    public function update($list_id, $data);
    
    /**
     * Delete a list.
     * @param int $list_id
     * @return boolean True is list has been deleted otherwise false.
     */
    public function delete($list_id);
}
