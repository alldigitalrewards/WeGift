<?php

namespace AllDigitalRewards\WeGift\Entity;

class Ecode extends AbstractEntity
{
    protected string $delivery_url;
    protected string $error_code;
    protected string $error_string;
    protected string $expiry_date;
    protected string $status;

    /**
     * @return string
     */
    public function getDeliveryUrl(): string
    {
        return $this->delivery_url;
    }

    /**
     * @param string $delivery_url
     */
    public function setDeliveryUrl(string $delivery_url): void
    {
        $this->delivery_url = $delivery_url;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->error_code;
    }

    /**
     * @param string $error_code
     */
    public function setErrorCode(string $error_code): void
    {
        $this->error_code = $error_code;
    }

    /**
     * @return string
     */
    public function getErrorString(): string
    {
        return $this->error_string;
    }

    /**
     * @param string $error_string
     */
    public function setErrorString(string $error_string): void
    {
        $this->error_string = $error_string;
    }

    /**
     * @return string
     */
    public function getExpiryDate(): string
    {
        return $this->expiry_date;
    }

    /**
     * @param string $expiry_date
     */
    public function setExpiryDate(string $expiry_date): void
    {
        $this->expiry_date = $expiry_date;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}