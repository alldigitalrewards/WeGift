<?php

namespace AllDigitalRewards\WeGift\Entity;

/**
 * https://docs.wegift.io/#81ddc631-8525-4464-ae9b-85aaf99b031a
 */
class Product extends AbstractEntity
{
    private string $availability;
    private int $available_in_days;
    private ?array $available_denominations;
    private ?string $barcode_format;
    private string $card_image_url;
    private string $logo_image_url;
    private array $categories;
    private string $code;
    private array $countries;
    private string $currency_code;
    private string $denomination_type;
    private string $description;
    private ?string $e_code_usage_type;
    private string $expiry_date_policy;
    private ?int $expiry_in_months;
    private float $maximum_value;
    private float $minimum_value;
    private string $name;
    private float $percent_discount;
    private string $redeem_instructions_html;
    private ?string $redeemable_at;
    private string $state;
    private string $terms_and_conditions_html;
    private string $terms_and_conditions_pdf_url;
    private bool $wrap_supported;

    /**
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }

    /**
     * @param string $availability
     */
    public function setAvailability(string $availability): void
    {
        $this->availability = $availability;
    }

    /**
     * @return int
     */
    public function getAvailableIndays(): int
    {
        return $this->available_in_days;
    }

    /**
     * @param int $available_in_days
     */
    public function setAvailableIndays(int $available_in_days): void
    {
        $this->available_in_days = $available_in_days;
    }

    /**
     * @return array|null
     */
    public function getAvailableDenominations(): ?array
    {
        return $this->available_denominations;
    }

    /**
     * @param array|null $available_denominations
     */
    public function setAvailableDenominations(?array $available_denominations): void
    {
        $this->available_denominations = $available_denominations;
    }

    /**
     * @return string|null
     */
    public function getBarcodeFormat(): ?string
    {
        return $this->barcode_format;
    }

    /**
     * @param string|null $barcode_format
     */
    public function setBarcodeFormat(?string $barcode_format): void
    {
        $this->barcode_format = $barcode_format;
    }

    /**
     * @return string
     */
    public function getCardImageurl(): string
    {
        return $this->card_image_url;
    }

    /**
     * @param string $card_image_url
     */
    public function setCardImageurl(string $card_image_url): void
    {
        $this->card_image_url = $card_image_url;
    }

    /**
     * @return string
     */
    public function getLogoImageurl(): string
    {
        return $this->logo_image_url;
    }

    /**
     * @param string $logo_image_url
     */
    public function setLogoImageurl(string $logo_image_url): void
    {
        $this->logo_image_url = $logo_image_url;
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param array $categories
     */
    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return array
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * @param array $countries
     */
    public function setCountries(array $countries): void
    {
        $this->countries = $countries;
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
    public function getDenominationType(): string
    {
        return $this->denomination_type;
    }

    /**
     * @param string $denomination_type
     */
    public function setDenominationType(string $denomination_type): void
    {
        $this->denomination_type = $denomination_type;
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
     * @return string|null
     */
    public function getECodeusagetype(): ?string
    {
        return $this->e_code_usage_type;
    }

    /**
     * @param string|null $e_code_usage_type
     */
    public function setECodeusagetype(?string $e_code_usage_type): void
    {
        $this->e_code_usage_type = $e_code_usage_type;
    }

    /**
     * @return string
     */
    public function getExpiryDatepolicy(): string
    {
        return $this->expiry_date_policy;
    }

    /**
     * @param string $expiry_date_policy
     */
    public function setExpiryDatepolicy(string $expiry_date_policy): void
    {
        $this->expiry_date_policy = $expiry_date_policy;
    }

    /**
     * @return int|null
     */
    public function getExpiryInmonths(): ?int
    {
        return $this->expiry_in_months;
    }

    /**
     * @param int|null $expiry_in_months
     */
    public function setExpiryInmonths(?int $expiry_in_months): void
    {
        $this->expiry_in_months = $expiry_in_months;
    }

    /**
     * @return float
     */
    public function getMaximumValue(): float
    {
        return $this->maximum_value;
    }

    /**
     * @param float $maximum_value
     */
    public function setMaximumValue(float $maximum_value): void
    {
        $this->maximum_value = $maximum_value;
    }

    /**
     * @return float
     */
    public function getMinimumValue(): float
    {
        return $this->minimum_value;
    }

    /**
     * @param float $minimum_value
     */
    public function setMinimumValue(float $minimum_value): void
    {
        $this->minimum_value = $minimum_value;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPercentDiscount(): float
    {
        return $this->percent_discount;
    }

    /**
     * @param float $percent_discount
     */
    public function setPercentDiscount(float $percent_discount): void
    {
        $this->percent_discount = $percent_discount;
    }

    /**
     * @return string
     */
    public function getRedeemInstructionshtml(): string
    {
        return $this->redeem_instructions_html;
    }

    /**
     * @param string $redeem_instructions_html
     */
    public function setRedeemInstructionshtml(string $redeem_instructions_html): void
    {
        $this->redeem_instructions_html = $redeem_instructions_html;
    }

    /**
     * @return string|null
     */
    public function getRedeemableAt(): ?string
    {
        return $this->redeemable_at;
    }

    /**
     * @param string|null $redeemable_at
     */
    public function setRedeemableAt(?string $redeemable_at): void
    {
        $this->redeemable_at = $redeemable_at;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getTermsAndconditionshtml(): string
    {
        return $this->terms_and_conditions_html;
    }

    /**
     * @param string $terms_and_conditions_html
     */
    public function setTermsAndconditionshtml(string $terms_and_conditions_html): void
    {
        $this->terms_and_conditions_html = $terms_and_conditions_html;
    }

    /**
     * @return string
     */
    public function getTermsAndconditionspdfurl(): string
    {
        return $this->terms_and_conditions_pdf_url;
    }

    /**
     * @param string $terms_and_conditions_pdf_url
     */
    public function setTermsAndconditionspdfurl(string $terms_and_conditions_pdf_url): void
    {
        $this->terms_and_conditions_pdf_url = $terms_and_conditions_pdf_url;
    }

    /**
     * @return bool
     */
    public function isWrapSupported(): bool
    {
        return $this->wrap_supported;
    }

    /**
     * @param bool $wrap_supported
     */
    public function setWrapSupported(bool $wrap_supported): void
    {
        $this->wrap_supported = $wrap_supported;
    }
}