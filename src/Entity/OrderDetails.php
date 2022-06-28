<?php

namespace AllDigitalRewards\WeGift\Entity;

class OrderDetails extends AbstractEntity
{
    protected string $error_code;
    protected string $error_details;
    protected string $error_string;
    protected Order $order;
    protected string $status;

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
    public function getErrorDetails(): string
    {
        return $this->error_details;
    }

    /**
     * @param string $error_details
     */
    public function setErrorDetails(string $error_details): void
    {
        $this->error_details = $error_details;
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
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param array $order
     */
    public function setOrder(array $order): void
    {
        $this->order = new Order($order);
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
