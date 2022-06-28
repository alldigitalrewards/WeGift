<?php

namespace AllDigitalRewards\WeGift;

use AllDigitalRewards\WeGift\Entity\Balance;
use AllDigitalRewards\WeGift\Entity\OrderDetails;
use AllDigitalRewards\WeGift\Entity\OrderRequest;
use AllDigitalRewards\WeGift\Entity\OrderResponse;
use AllDigitalRewards\WeGift\Entity\Product;
use AllDigitalRewards\WeGift\Entity\AuthResponse;
use Exception;
use Generator;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;

class Client
{
    public const PLAYGROUND_URL = 'https://playground.wegift.io/api/b2b-sync/v1';
    public const PRODUCTION_URL = 'https://api.wegift.io/api/b2b-sync/v1';

    private HttpClient $http_client;

    public function __construct(protected string $user_id, protected string $api_key)
    {
    }

    protected function getEndpoint(): string
    {
        if (getenv('ENVIRONMENT') === 'production') {
            return self::PRODUCTION_URL;
        }

        return self::PLAYGROUND_URL;
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient(): HttpClient
    {
        if (!isset($this->http_client)) {
            $this->http_client = new HttpClient();
        }

        return $this->http_client;
    }

    /**
     * @param HttpClient $http_client
     */
    public function setHttpClient(HttpClient $http_client): void
    {
        $this->http_client = $http_client;
    }

    /**
     * Authentication
     *
     * https://docs.wegift.io/#0583bf3c-1524-4618-86f2-c2e95805b4db
     *
     * @return AuthResponse
     * @throws GuzzleException
     */
    public function authentication(): AuthResponse
    {
        $response = $this->getHttpClient()->get($this->getEndpoint() . '/auth', [
            'auth' => [$this->user_id, $this->api_key]
        ]);

        return new AuthResponse(json_decode($response->getBody(), true));
    }

    public function getBalanceByCurrency(string $currency_code): Balance
    {
        if (
            !in_array(
                $currency_code,
                ['AUD', 'CAD', 'CHF', 'CZK', 'DKK', 'EUR', 'GBP', 'HUF', 'NOK', 'NZD', 'PLN', 'SEK', 'USD']
            )
        ) {
            // Murder a kitten...
            throw new Exception('Unsupported currency code: ' . $currency_code);
        }

        $response = $this->getHttpClient()->get($this->getEndpoint() . '/balance/' . $currency_code, [
            'auth' => [$this->user_id, $this->api_key]
        ]);

        return new Balance(json_decode($response->getBody(), true));
    }

    /**
     * List all Products
     *
     * https://docs.wegift.io/#81ddc631-8525-4464-ae9b-85aaf99b031a
     *
     * @return Generator
     * @throws GuzzleException
     */
    public function listAllProducts(): Generator
    {
        $response = $this->getHttpClient()->get($this->getEndpoint() . '/products', [
            'auth' => [$this->user_id, $this->api_key]
        ]);

        $json = json_decode($response->getBody(), true);
        foreach ($json['products'] as $product) {
            yield new Product($product);
        }
    }

    public function findAProduct($product_code): Product
    {
        $response = $this->getHttpClient()->get($this->getEndpoint() . '/products/' . $product_code, [
            'auth' => [$this->user_id, $this->api_key]
        ]);

        return new Product(json_decode($response->getBody(), true));
    }

    public function createAnOrder(OrderRequest $order_request): OrderResponse
    {
        $response = $this->getHttpClient()->post($this->getEndpoint() . '/order-digital-card', [
            'headers' => [
                'content-type' => 'application/json',
            ],
            'auth' => [$this->user_id, $this->api_key],
            'body' => json_encode($order_request)
        ]);

        return new OrderResponse(json_decode($response->getBody(), true));
    }

    public function findOrderDetails($order_id)
    {
        $response = $this->getHttpClient()->get($this->getEndpoint() . '/order-details/' . $order_id, [
            'auth' => [$this->user_id, $this->api_key]
        ]);

        return new OrderDetails(json_decode($response->getBody(), true));
    }
}
