<?php

namespace AllDigitalRewards\WeGift\Response;

use AllDigitalRewards\WeGift\Entity\AbstractEntity;

class AuthResponse extends AbstractEntity
{
    protected string $errorCode;
    protected string $errorDetails;
    protected string $errorString;
    protected string $status;

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode(string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorDetails(): string
    {
        return $this->errorDetails;
    }

    /**
     * @param string $errorDetails
     */
    public function setErrorDetails(string $errorDetails): void
    {
        $this->errorDetails = $errorDetails;
    }

    /**
     * @return string
     */
    public function getErrorString(): string
    {
        return $this->errorString;
    }

    /**
     * @param string $errorString
     */
    public function setErrorString(string $errorString): void
    {
        $this->errorString = $errorString;
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