<?php

/*
 *  MailChimp V3 API test configurations.
 *
 *  Services:
 *  1) Mailchimp
 *     This solution is based on MailChimp V3 APIs calls using HTTP Basic authentication.
 *     Please provide API "user" and "key", the secrete key can be found under Account > Extras > API keys. 
*     Once you have a key, the last part of it after the "-" is your region for the endpoints. For example for
 *     the key xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-us13 the end point is https://us13.api.mailchimp.com/3.0/.
 */
$config = array(
    "error_reporting" => true,
    "mailchimp" => array(
        "api" => array(
            "url" => "https://usX.api.mailchimp.com/3.0/",
            "secret" => array(
                "user" => "xxxxxxxxxxxxxxx",
                "key" => "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-us13-us13",
            ),
        ),
    ),
);