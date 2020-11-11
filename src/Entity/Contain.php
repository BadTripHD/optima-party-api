<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contain
 *
 * @ORM\Table(name="contain", indexes={@ORM\Index(name="FK_CONTAIN_CONTAIN2_STUFF", columns={"STUFF_ID"})})
 * @ORM\Entity
 */
class Contain
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
     * @ORM\Column(name="STUFF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stuffId;

    public function getPartyId(): ?int
    {
        return $this->partyId;
    }

    public function getStuffId(): ?int
    {
        return $this->stuffId;
    }


}
