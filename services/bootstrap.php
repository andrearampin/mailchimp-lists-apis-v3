<?php

/*
 *  Path for the application services.
 */
defined("SERVICES_PATH") 
    or define("SERVICES_PATH", realpath(realpath(dirname(__FILE__))));

/*
 * Load vendors.
 */
require SERVICES_PATH . '/../vendor/autoload.php';

/*
 * Load config.
 */
require_once SERVICES_PATH . DIRECTORY_SEPARATOR . 'config.php';

/*
 *  Enable/Disable errors reporting.
 */
ini_set("error_reporting", $config['error_reporting']);
error_reporting(E_ALL|E_STRCT);

/*
 *  Path for the mailchimp service classes.
 */
defined("MAILCHIMP_SERVICES_PATH") 
    or define("MAILCHIMP_SERVICES_PATH", SERVICES_PATH . DIRECTORY_SEPARATOR . 'mailchimp' . DIRECTORY_SEPARATOR);

/*
 * Load classes.
 */
$scan = scandir(MAILCHIMP_SERVICES_PATH);
foreach ($scan as $class) {
  if (strpos($class, '.class.php') !== false) {
    include(MAILCHIMP_SERVICES_PATH . $class);
  }
}