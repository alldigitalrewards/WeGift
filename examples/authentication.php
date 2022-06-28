<?php

/**
 * Verify Auth
 * https://docs.wegift.io/#0583bf3c-1524-4618-86f2-c2e95805b4db
 */

use AllDigitalRewards\WeGift\Client;

require __DIR__ . "/bootstrap.php";
/** @var Client $client */
$authResponse = $client->authentication();

var_dump($authResponse);