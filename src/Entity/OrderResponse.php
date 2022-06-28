<?php

/**
 * Create an Order
 * https://docs.wegift.io/#9d98f03c-bd13-44e8-b208-e9cd108249cf
 */

namespace AllDigitalRewards\WeGift\Entity;

class OrderResponse extends AbstractEntity
{
    protected Ecode $e_code;
    /**
     * @var Ecode[]
     */
    protected array $e_codes = [];
    protected string $error_code;
    protected string $error_details;
    protected string $error_string;
    protected string $order_id;
    protected string $status;

    /**
     * @return Ecode
     */
    public function getECode(): Ecode
    {
        return $this->e_code;
    }

    /**
     * @param array $e_code
     */
    public function setECode(array $e_code): void
    {
        $this->e_code = new Ecode($e_code);
    }

    /**
     * @return Ecode[]
     */
    public function getECodes(): array
    {
        return $this->e_codes;
    }

    /**
     * @param array $e_codes
     */
    public function setECodes(array $e_codes): void
    {
        $this->e_codes = [];

        foreach ($e_codes as $e_code) {
            $this->e_codes[] = new Ecode($e_code);
        }
    }

    public function hasError(): bool
    {
        return isset($this->error_code);
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
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     */
    public function setOrderId(string $order_id): void
    {
        $this->order_id = $order_id;
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
