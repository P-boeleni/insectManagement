<?

/**
 * spawningの定義
 * @author takahiro hirose <ita.ark.takahiroh@gmail.com>
 */

namespace App\Entity;

class spawning
{
    private ?int $id = null;

    private ?string $setId = '';

    private ?string $setStart = '';

    private ?string $setEnd = '';

    private ?int $larvaeNum = null;

    private ?int $eggNum = null;

    private ?int $pairId = null;

    private ?string $spMemo = '';

    // setter method
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function setSetId(?string $setId): void
    {
        $this->setId = $setId;
    }
    public function setSetStart(?string $setStart): void
    {
        $this->setStart = $setStart;
    }
    public function setSetEnd(?string $setEnd): void
    {
        $this->setEnd = $setEnd;
    }
    public function setLarvaeNum(?string $larvaeNum): void
    {
        $this->larvaeNum = $larvaeNum;
    }
    public function setEggNum(?int $eggNum): void
    {
        $this->eggNum = $eggNum;
    }
    public function setPairId(?int $pairId): void
    {
        $this->pairId = $pairId;
    }
    public function setSpMemo(?string $spMemo): void
    {
        $this->spMemo = $spMemo;
    }

    //getter method
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getSetId(): ?string
    {
        return $this->setId;
    }
    public function getSetStart(): ?String
    {
        return $this->setStart;
    }
    public function getSetEnd(): ?String
    {
        return $this->setEnd;
    }
    public function getLarvaeNum(): ?int
    {
        return $this->larvaeNum;
    }
    public function getEggNum(): ?int
    {
        return $this->eggNum;
    }
    public function getPairId(): ?int
    {
        return $this->pairId;
    }
    public function getSpMemo(): ?String
    {
        return $this->spMemo;
    }
}
