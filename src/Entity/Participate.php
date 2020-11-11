<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participate
 *
 * @ORM\Table(name="participate", indexes={@ORM\Index(name="FK_PARTICIP_PARTICIPE_GUEST", columns={"GUEST_ID"})})
 * @ORM\Entity
 */
class Participate
{
    /**
     * @var int
     *
     * @ORM\Column(name="PARTY_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $partyId;

    /**
     * @var int
     *
     * @ORM\Column(name="GUEST_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guestId;

    public function getPartyId(): ?int
    {
        return $this->partyId;
    }

    public function getGuestId(): ?int
    {
        return $this->guestId;
    }


}
