<?php

namespace Tests;

use AllDigitalRewards\WeGift\Client as WeGiftClient;
use AllDigitalRewards\WeGift\Entity\OrderDetails;
use AllDigitalRewards\WeGift\Entity\OrderRequest;
use AllDigitalRewards\WeGift\Entity\OrderResponse;
use AllDigitalRewards\WeGift\Entity\Product;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testAuthentication()
    {
        $fixtureJson = file_get_contents(__DIR__ . '/fixtures/authentication_response.json');
        $weGiftClient = $this->createMockClient($fixtureJson);
        $authentication = $weGiftClient->authentication();
        $fixtureData = json_decode($fixtureJson, true);

        self::assertSame($fixtureData['status'], $authentication->getStatus());
    }

    public function testGetBalanceByCurrency()
    {
        $fixtureJson = file_get_contents(__DIR__ . '/fixtures/get_balance_by_currency_response.json');
        $weGiftClient = $this->createMockClient($fixtureJson);
        $balance = $weGiftClient->getBalanceByCurrency('USD');
        $fixtureData = json_decode($fixtureJson, true);

        self::assertSame($fixtureData['currency_code'], $balance->getCurrencyCode());
        self::assertSame((float)$fixtureData['balance'], $balance->getBalance());
    }

    public function testListAllProducts()
    {
        $fixtureJson = file_get_contents(__DIR__ . '/fixtures/list_all_products_response.json');
        $weGiftClient = $this->createMockClient($fixtureJson);

        foreach ($weGiftClient->listAllProducts() as $key => $product) {
            self::assertInstanceOf(Product::class, $product);
        }
    }

    public function testCreateAnOrder()
    {
        $fixtureJson = file_get_contents(__DIR__ . '/fixtures/order_response.json');
        $weGiftClient = $this->createMockClient($fixtureJson);
        $orderResponse = $weGiftClient->createAnOrder(new OrderRequest('CODE', '10', 'USD'));

        self::assertInstanceOf(OrderResponse::class, $orderResponse);
    }

    public function testFindAProduct()
    {
        $fixtureJson = file_get_contents(__DIR__ . '/fixtures/find_a_product_response.json');
        $weGiftClient = $this->createMockClient($fixtureJson);
        $product = $weGiftClient->findAProduct('PRODUCT_CODE');

        self::assertInstanceOf(Product::class, $product);
    }

    public function testFindOrderDetails()
    {
        $fixtureJson = file_get_contents(__DIR__ . '/fixtures/find_order_details_response.json');
        $weGiftClient = $this->createMockClient($fixtureJson);
        $orderDetails = $weGiftClient->findOrderDetails('order-id');

        self::assertInstanceOf(OrderDetails::class, $orderDetails);

        $fixtureData = json_decode($fixtureJson, true);
        self::assertSame($fixtureData['status'], $orderDetails->getStatus());
        self::assertSame($fixtureData['order']['created_on'], $orderDetails->getOrder()->getCreatedOn());
    }

    private function createMockClient(string $fixtureJson)
    {
        $mock = new MockHandler([
            new Response(200, [], $fixtureJson),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $httpClient = new HttpClient(['handler' => $handlerStack]);

        $weGiftClient = new WeGiftClient('user_id', 'api_key');
        $weGiftClient->setHttpClient($httpClient);

        return $weGiftClient;
    }
}
