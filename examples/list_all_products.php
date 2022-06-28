<?php

/**
 * List all products
 * https://docs.wegift.io/#81ddc631-8525-4464-ae9b-85aaf99b031a
 */
require __DIR__ . '/../vendor/autoload.php';
$client = new \AllDigitalRewards\WeGift\Client('c-r6ab7r8y', 'xqY0boxcswPR?a5%TF');


foreach ($client->listAllProducts() as $product) {
    var_dump($product);
}
