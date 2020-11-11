<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guest
 *
 * @ORM\Table(name="guest", indexes={@ORM\Index(name="LAW", columns={"LAW_ID"})})
 * @ORM\Entity
 */
class Guest
{
    /**
     * @var int
     *
     * @ORM\Column(name="GUEST_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guestId;

    /**
     * @var int
     *
     * @ORM\Column(name="LAW_ID", type="integer", nullable=false)
     */
    private $lawId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GUEST_FIRSTNAME", type="string", length=255, nullable=true)
     */
    private $guestFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GUEST_LASTNAME", type="string", length=255, nullable=true)
     */
    private $guestLastname;

    public function getGuestId(): ?int
    {
        return $this->guestId;
    }

    public function getLawId(): ?int
    {
        return $this->lawId;
    }

    public function setLawId(int $lawId): self
    {
        $this->lawId = $lawId;

        return $this;
    }

    public function getGuestFirstname(): ?string
    {
        return $this->guestFirstname;
    }

    public function setGuestFirstname(?string $guestFirstname): self
    {
        $this->guestFirstname = $guestFirstname;

        return $this;
    }

    public function getGuestLastname(): ?string
    {
        return $this->guestLastname;
    }

    public function setGuestLastname(?string $guestLastname): self
    {
        $this->guestLastname = $guestLastname;

        return $this;
    }


}
