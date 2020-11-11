<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participate
 *
 * @ORM\Table(name="participate", indexes={@ORM\Index(name="FK_PARTICIP_PARTICIPE_GUEST", columns={"GUEST_ID"})})
 * @ORM\Entity(repositoryClass="App\Repository\ParticipateRepository")
 */
class Participate
{
    /**
     * @var string
     *
     * @ORM\Column(name="PARTY_ID", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $partyId;

    /**
     * @var string
     *
     * @ORM\Column(name="GUEST_ID", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guestId;

    public function getPartyId(): ?string
    {
        return $this->partyId;
    }

    public function getGuestId(): ?string
    {
        return $this->guestId;
    }


}
