<?php

/**
 * Create an Order
 * https://docs.wegift.io/#9d98f03c-bd13-44e8-b208-e9cd108249cf
 */

namespace AllDigitalRewards\WeGift\Entity;

use Exception;

class OrderRequest extends AbstractEntity
{
    /**
     * Face value of the e-gift you wish to order in major units. This must be a string containing a decimal
     * representation of the amount. Based on your discounts we will calculate the amount to place an authorisation on
     *
     * Note 1: Even though JSON supports decimal point numbers, our request payload validation will throw an error
     * if the value is passed as number 7.50 rather than "7.50".
     * Note 2: When ordering Select products, amount must be a whole decimal, for example 10.00.
     *
     * @var string
     * @required
     */
    protected string $amount;
    /**
     * Currency code as defined by ISO 4217. It must match the currency code of the product
     *
     * @var string
     * @required
     */
    protected string $currency_code;
    /**
     * Recipients email address the product and product information.
     * For this to work email must be selected as the delivery_method
     *
     * @var string
     */
    protected string $delivery_email;
    /**
     *    This is the delivery format for the product which is an enumerated value of either url-instant or url-wrap
     *
     * url-instant means you will receive a URL to a page with the product details
     * url-wrap means you will receive a URL with the WeGift Wrap experience. For url-wrap the chosen product must have
     * Wrap support. You can check this using the product details method here.
     *
     * Note 1: when your account has breakage enabled, the accepted values are url-instant and url-wrap.
     * Note 2: when ordering Select products, the only accepted value is url-instant.
     *
     * @var string
     * @required
     */
    protected string $delivery_format = 'url-instant';
    /**
     * Enum: direct or email delivery method for the product.
     * direct means you will receive the product details in the response.
     * email means that WeGift will email the product directly to the recipient with our WeGift email template.
     *
     * @var string
     * @required
     */
    protected string $delivery_method = 'direct';
    protected string $description;
    protected string $email_template;
    protected string $idempotency_key;
    protected string $external_ref;
    protected string $notification_email;
    /**
     * The code of the product (specific gift card brand, e.g. tTV) you are ordering,
     * or Select template identifier (e.g. ST-ABC123DE).
     *
     * @var string
     * @required
     */
    protected string $product_code;
    protected string $quantity;
    protected string $stock_lock_token;
    protected string $url_expiry_period;

    public function __construct(
        string $product_code,
        string $amount,
        string $currency_code,
        string $delivery_method = 'direct'
    ) {
        $this->product_code = $product_code;
        $this->amount = $amount;
        $this->currency_code = $currency_code;
        $this->delivery_method = $delivery_method;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currency_code;
    }

    /**
     * @param string $currency_code
     */
    public function setCurrencyCode(string $currency_code): void
    {
        $this->currency_code = $currency_code;
    }

    /**
     * @return string
     */
    public function getDeliveryEmail(): string
    {
        return $this->delivery_email;
    }

    /**
     * @param string $delivery_email
     */
    public function setDeliveryEmail(string $delivery_email): void
    {
        $this->delivery_email = $delivery_email;
    }

    /**
     * @return string
     */
    public function getDeliveryFormat(): string
    {
        return $this->delivery_format;
    }

    /**
     * @param string $delivery_format
     */
    public function setDeliveryFormat(string $delivery_format): void
    {
        $this->delivery_format = $delivery_format;
    }

    /**
     * @return string
     */
    public function getDeliveryMethod(): string
    {
        return $this->delivery_method;
    }

    /**
     * @param string $delivery_method
     * @throws Exception
     */
    public function setDeliveryMethod(string $delivery_method): void
    {
        if (!in_array($delivery_method, ['direct', 'instant'])) {
            throw new Exception('Invalid delivery method: ' . $delivery_method);
        }

        $this->delivery_method = $delivery_method;
    }

    /**
     * direct means you will receive the product details in the response
     *
     * @return void
     * @throws Exception
     */
    public function setDeliveryMethodToDirect(): void
    {
        $this->setDeliveryMethod('direct');
    }

    /**
     * email means that WeGift will email the product directly to the recipient with our WeGift email template.
     *
     * @return void
     * @throws Exception
     */
    public function setDeliveryMethodToEmail(): void
    {
        $this->setDeliveryMethod('email');
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEmailTemplate(): string
    {
        return $this->email_template;
    }

    /**
     * @param string $email_template
     */
    public function setEmailTemplate(string $email_template): void
    {
        $this->email_template = $email_template;
    }

    /**
     * @return string
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotency_key;
    }

    /**
     * @param string $idempotency_key
     */
    public function setIdempotencyKey(string $idempotency_key): void
    {
        $this->idempotency_key = $idempotency_key;
    }

    /**
     * @return string
     */
    public function getExternalRef(): string
    {
        return $this->external_ref;
    }

    /**
     * @param string $external_ref
     */
    public function setExternalRef(string $external_ref): void
    {
        $this->external_ref = $external_ref;
    }

    /**
     * @return string
     */
    public function getNotificationEmail(): string
    {
        return $this->notification_email;
    }

    /**
     * @param string $notification_email
     */
    public function setNotificationEmail(string $notification_email): void
    {
        $this->notification_email = $notification_email;
    }

    /**
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->product_code;
    }

    /**
     * @param string $product_code
     */
    public function setProductCode(string $product_code): void
    {
        $this->product_code = $product_code;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getStockLockToken(): string
    {
        return $this->stock_lock_token;
    }

    /**
     * @param string $stock_lock_token
     */
    public function setStockLockToken(string $stock_lock_token): void
    {
        $this->stock_lock_token = $stock_lock_token;
    }

    /**
     * @return string
     */
    public function getUrlExpiryPeriod(): string
    {
        return $this->url_expiry_period;
    }

    /**
     * @param string $url_expiry_period
     */
    public function setUrlExpiryPeriod(string $url_expiry_period): void
    {
        $this->url_expiry_period = $url_expiry_period;
    }
}
