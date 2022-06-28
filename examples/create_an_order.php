<?php

/**
 * Create an Order
 * https://docs.wegift.io/#9d98f03c-bd13-44e8-b208-e9cd108249cf
 */

use AllDigitalRewards\WeGift\Client;
use AllDigitalRewards\WeGift\Entity\OrderRequest;

require __DIR__ . "/bootstrap.php";
/** @var Client $client */


$orderRequest = new OrderRequest('ZAPPO-US',10,'USD');
$orderRequest->setIdempotencyKey(uniqid());

$orderResponse = $client->createAnOrder($orderRequest);

var_dump($orderResponse);
