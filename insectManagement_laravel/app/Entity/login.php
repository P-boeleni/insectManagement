<?

/**
 * loginのEntity定義
 * @author takahiro hirose <ita.ark.takahiroh@gmail.com>
 */

namespace App\Entity;

class login
{
    private ?int $id = null;

    private ?string $administratorId = '';

    private ?string $password = '';

    private ?string $administratorName = '';

    private ?int $admin = null;


    // setter method
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function setAdministratorId(?string $administratorId): void
    {
        $this->administratorId = $administratorId;
    }
    public function password(?string $password): void
    {
        $this->password = $password;
    }
    public function setAdministratorName(?string $administratorName): void
    {
        $this->administratorName = $administratorName;
    }
    public function setAdmin(?int $admin): void
    {
        $this->admin = $admin;
    }


    //getter method
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getAdministratorId(): ?string
    {
        return $this->administratorId;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function getAdministratorName(): ?string
    {
        return $this->administratorName;
    }
    public function getAdmin(): ?int
    {
        return $this->admin;
    }
}
