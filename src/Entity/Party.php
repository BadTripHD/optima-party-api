<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Party
 *
 * @ORM\Table(name="party", indexes={@ORM\Index(name="FK_PARTY_DEROULER_PLACE", columns={"PLACE_ID"})})
 * @ORM\Entity(repositoryClass="App\Repository\PartyRepository")
 */
class Party
{
    /**
     * @var string
     *
     * @ORM\Column(name="PARTY_ID", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $partyId;

    /**
     * @var string
     *
     * @ORM\Column(name="PLACE_ID", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $placeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PARTY_NAME", type="string", length=100, nullable=true)
     */
    private $partyName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PARTY_DATE", type="datetime", nullable=true)
     */
    private $partyDate;

    public function getPartyId(): ?string
    {
        return $this->partyId;
    }

    public function getPlaceId(): ?string
    {
        return $this->placeId;
    }

    public function setPlaceId(string $placeId): self
    {
        $this->placeId = $placeId;

        return $this;
    }

    public function getPartyName(): ?string
    {
        return $this->partyName;
    }

    public function setPartyName(?string $partyName): self
    {
        $this->partyName = $partyName;

        return $this;
    }

    public function getPartyDate(): ?\DateTimeInterface
    {
        return $this->partyDate;
    }

    public function setPartyDate(?\DateTimeInterface $partyDate): self
    {
        $this->partyDate = $partyDate;

        return $this;
    }


}
