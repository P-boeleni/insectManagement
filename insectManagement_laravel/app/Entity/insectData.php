<?php

/**
 * insect_dataのEntity定義ファイル
 * @author takahiro hirose <ita.ark.takahiroh@gmail.com>
 */

namespace App\Entity;

class insectData
{
    private ?int $id = null;

    private ?string $individualId = '';

    private ?string $name = '';

    private ?string $eon = '';

    private ?string $origin = '';

    private ?float $size = null;

    private ?string $memo = '';

    private ?string $pupation = '';

    private ?string $emergenceDay = '';

    private ?string $mealDay = '';

    private ?string $gender = '';

    private ?string $percentage = '';

    private ?string $parentsId = '';

    private ?string $bloodId = '';

    private ?string  $dieData = '';

    private ?int $administratorId = null;

    private ?string $producer = '';


    //setter method
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function setIndividualId(?string $individualId): void
    {
        $this->individualId = $individualId;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function setEon(?string $eon): void
    {
        $this->eon = $eon;
    }
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }
    public function setSize(?float $size): void
    {
        $this->size = $size;
    }
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }
    public function setPupation(?string $pupation): void
    {
        $this->pupation = $pupation;
    }
    public function setEmergenceDay(?string $emergenceDay): void
    {
        $this->emergenceDay = $emergenceDay;
    }
    public function setMealDay(?string $mealDay): void
    {
        $this->mealDay = $mealDay;
    }
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }
    public function setPercentage(?string $percentage): void
    {
        $this->percentage = $percentage;
    }
    public function setParentsId(?string $parentsId): void
    {
        $this->parentsId = $parentsId;
    }
    public function setBloodId(?string $bloodId): void
    {
        $this->bloodId = $bloodId;
    }
    public function setDieData(?string $dieData): void
    {
        $this->dieData = $dieData;
    }
    public function setAdministratorId(?int $administratorId): void
    {
        $this->administratorId = $administratorId;
    }
    public function setProducer(?string $producer): void
    {
        $this->producer = $producer;
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
    public function getName(): ?string
    {
        return $this->name;
    }
    public function getEon(): ?string
    {
        return $this->eon;
    }
    public function getOrigin(): ?string
    {
        return $this->origin;
    }
    public function getSize(): ?float
    {
        return $this->size;
    }
    public function getMemo(): ?string
    {
        return $this->memo;
    }
    public function getPupation(): ?string
    {
        return $this->pupation;
    }
    public function getEmergenceDay(): ?string
    {
        return $this->emergenceDay;
    }
    public function getMealDay(): ?string
    {
        return $this->mealDay;
    }
    public function getGender(): ?string
    {
        return $this->gender;
    }
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }
    public function getParentsId(): ?string
    {
        return $this->parentsId;
    }
    public function getBloodId(): ?string
    {
        return $this->bloodId;
    }
    public function getDieData(): ?string
    {
        return $this->dieData;
    }
    public function getAdministratorId(): ?int
    {
        return $this->administratorId;
    }
    public function getProducer(): ?string
    {
        return $this->producer;
    }
}
