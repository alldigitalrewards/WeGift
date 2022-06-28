<?php
/**
 * Verify Auth
 * https://docs.wegift.io/#0583bf3c-1524-4618-86f2-c2e95805b4db
 */
require __DIR__ . '/../vendor/autoload.php';
$client = new \AllDigitalRewards\WeGift\Client('c-r6ab7r8y','xqY0boxcswPR?a5%TF');
$authResponse = $client->authentication();

var_dump($authResponse);