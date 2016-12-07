# Mailchimp Lists API calls
- Author:   Andrea Rampin
- LinkedIn: https://au.linkedin.com/in/andrea-rampin

## Source code
- Libraries: `services/`
- Configuration: `services/config.php`
- Tests: `tests/`
- Documentation: `docs/`

## Installation

### Configuration
Please update the `user` and `key` parameters in the configuration file `services/config.php` as well as the `url` for the API calls.

**Note**
This solution is based on [MailChimp V3 APIs](http://developer.mailchimp.com/documentation/mailchimp/reference/lists/#) calls using HTTP Basic authentication. The secrete `key` can be found under **Account > Extras > API keys**. Once you have a key, the last part of it after the "-" is your region for the endpoints. For example for the key **xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-`us13`** the end point is **https://`us13`.api.mailchimp.com/3.0/.**

### Composer
From the root folder of the project
`$ php composer.phar install` 
or if availabe globally 
`$ php composer install`

### Run test
From the root folder of the project
`$ vendor/bin/phpunit --bootstrap services/bootstrap.php tests/ActionsOnLists.php`

The test will create a new list, add a memeber, update the list and then delete it.

**Output**
```
$ vendor/bin/phpunit --bootstrap services/bootstrap.php tests/ActionsOnLists.php 
PHPUnit by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 3.14 seconds, Memory: 4.00MB

OK (1 test, 4 assertions)
```