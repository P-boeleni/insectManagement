<?php

/**
 * exchangeの定義
 * @author takahiro hirose <ita.ark.takahiroh@gmail.com>
 */

namespace App\Entity;

class exchange
{
    private ?int $id = null;

    private ?string $individualId = '';

    private ?string $exchange = '';

    private ?float $weight = null;

    private ?string $useMushroom = '';

    private ?int $bottle = null;

    private ?string $exMemo = '';


    //setter method
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function setIndividualId(?string $individualId): void
    {
        $this->individualId = $individualId;
    }
    public function setExchange(?string $exchange): void
    {
        $this->exchange = $exchange;
    }
    public function setWeight(?float $weight): void
    {
        $this->weight = $weight;
    }
    public function setUseMushroom(?string $useMushroom): void
    {
        $this->useMushroom = $useMushroom;
    }
    public function setBottle(?int $bottle): void
    {
        $this->bottle = $bottle;
    }
    public function setExMemo(?string $exMemo): void
    {
        $this->exMemo = $exMemo;
    }


    //getter method
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getIndividualId(): ?string
    {
        return $this->individualId;
    }
    public function getExchange(): ?string
    {
        return $this->exchange;
    }
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    public function getUseMushroom(): ?string
    {
        return $this->useMushroom;
    }
    public function getBottle(): ?int
    {
        return $this->bottle;
    }
    public function getExMemo(): ?string
    {
        return $this->exMemo;
    }
}
