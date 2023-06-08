<?

/**
 * matingの定義
 * @author takahiro hirose <ita.ark.takahiroh@gmail.com>
 */

namespace App\Entity;

class mating
{
    private ?int $id = null;

    private ?int $pairId = null;

    private ?string $matingStart = '';

    private ?string $matingEnd = '';

    private ?string $matingMemo = '';


    // setter method
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function setPairId(?int $pairId): void
    {
        $this->pairId = $pairId;
    }
    public function setMatingStart(?string $matingStart): void
    {
        $this->matingStart = $matingStart;
    }
    public function setMatingEnd(?string $matingEnd): void
    {
        $this->matingEnd = $matingEnd;
    }
    public function setMatingMemo(?string $matingMemo): void
    {
        $this->matingMemo = $matingMemo;
    }


    //getter method
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getPairId(): ?int
    {
        return $this->pairId;
    }
    public function getMatingStart(): ?string
    {
        return $this->matingStart;
    }
    public function getMatingEnd(): ?string
    {
        return $this->matingEnd;
    }
    public function getmatingMemo(): ?string
    {
        return $this->matingMemo;
    }
}
