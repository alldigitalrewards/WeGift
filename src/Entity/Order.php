<?php

namespace AllDigitalRewards\WeGift\Entity;

class Order extends AbstractEntity
{
    protected string $created_by;
    protected string $created_on;
    protected string $description;
    protected string $id;
    protected string $idempotency_key;
    protected array $invoice_ids;
    protected string $status;
    protected float $total_price;

    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->created_by;
    }

    /**
     * @param string $created_by
     */
    public function setCreatedBy(string $created_by): void
    {
        $this->created_by = $created_by;
    }

    /**
     * @return string
     */
    public function getCreatedOn(): string
    {
        return $this->created_on;
    }

    /**
     * @param string $created_on
     */
    public function setCreatedOn(string $created_on): void
    {
        $this->created_on = $created_on;
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
     * @return array
     */
    public function getInvoiceIds(): array
    {
        return $this->invoice_ids;
    }

    /**
     * @param array $invoice_ids
     */
    public function setInvoiceIds(array $invoice_ids): void
    {
        $this->invoice_ids = $invoice_ids;
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

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->total_price;
    }

    /**
     * @param float $total_price
     */
    public function setTotalPrice(float $total_price): void
    {
        $this->total_price = $total_price;
    }
}
