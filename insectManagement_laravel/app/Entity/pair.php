<?

/**
 * pairの定義
 * @author takahiro hirose <ita.ark.takahiroh@gmail.com>
 */

namespace App\Entity;

class matingData
{
    private ?int $id = null;

    private ?int $maleId = null;

    private ?int $femaleId = null;

    // setter method
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function setMaleId(?int $maleId): void
    {
        $this->maleId = $maleId;
    }
    public function setFemaleId(?int $femaleId): void
    {
        $this->femaleId = $femaleId;
    }

    //getter method
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getMaleId(): ?int
    {
        return $this->maleId;
    }
    public function getFemaleId(): ?int
    {
        return $this->femaleId;
    }
}
