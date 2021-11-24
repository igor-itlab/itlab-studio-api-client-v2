<?php

namespace ApiClient\Api\ControlPanel\Response\Rate;


use ApiClient\Api\ControlPanel\Response\Currency\Currency;
use ApiClient\Api\ControlPanel\Response\Service\Service;

class RateHistory
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var int
     */
    protected int $createAt;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var string
     */
    protected string $service;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RateHistory
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return RateHistory
     */
    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreateAt(): int
    {
        return $this->createAt;
    }

    /**
     * @param int $createAt
     * @return RateHistory
     */
    public function setCreateAt(int $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return RateHistory
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param string $service
     * @return RateHistory
     */
    public function setService(string $service): self
    {
        $this->service = $service;

        return $this;
    }
}