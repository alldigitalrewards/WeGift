<?php

/**
 * List all products
 * https://docs.wegift.io/#81ddc631-8525-4464-ae9b-85aaf99b031a
 */
use AllDigitalRewards\WeGift\Client;

require __DIR__ . "bootstrap.php";
/** @var Client $client */

foreach ($client->listAllProducts() as $product) {
    var_dump($product);
}
