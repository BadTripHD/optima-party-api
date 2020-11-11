<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place")
 * @ORM\Entity
 */
class Place
{
    /**
     * @var int
     *
     * @ORM\Column(name="PLACE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $placeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PLACE_POSTCODE", type="string", length=25, nullable=true)
     */
    private $placePostcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PLACE_STREET_ADRESS", type="string", length=255, nullable=true)
     */
    private $placeStreetAdress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PLACE_CITY", type="string", length=255, nullable=true)
     */
    private $placeCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PLACE_LOCALITY", type="string", length=255, nullable=true)
     */
    private $placeLocality;

    public function getPlaceId(): ?int
    {
        return $this->placeId;
    }

    public function getPlacePostcode(): ?string
    {
        return $this->placePostcode;
    }

    public function setPlacePostcode(?string $placePostcode): self
    {
        $this->placePostcode = $placePostcode;

        return $this;
    }

    public function getPlaceStreetAdress(): ?string
    {
        return $this->placeStreetAdress;
    }

    public function setPlaceStreetAdress(?string $placeStreetAdress): self
    {
        $this->placeStreetAdress = $placeStreetAdress;

        return $this;
    }

    public function getPlaceCity(): ?string
    {
        return $this->placeCity;
    }

    public function setPlaceCity(?string $placeCity): self
    {
        $this->placeCity = $placeCity;

        return $this;
    }

    public function getPlaceLocality(): ?string
    {
        return $this->placeLocality;
    }

    public function setPlaceLocality(?string $placeLocality): self
    {
        $this->placeLocality = $placeLocality;

        return $this;
    }


}
