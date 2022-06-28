<?php

/**
 * List all products
 * https://docs.wegift.io/#81ddc631-8525-4464-ae9b-85aaf99b031a
 */
use AllDigitalRewards\WeGift\Client;

require __DIR__ . "/bootstrap.php";
/** @var Client $client */

$product = $client->findAProduct('ZAPPO-US');
var_dump($product);
