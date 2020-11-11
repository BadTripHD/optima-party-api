<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contain
 *
 * @ORM\Table(name="contain", indexes={@ORM\Index(name="FK_CONTAIN_CONTAIN2_STUFF", columns={"STUFF_ID"})})
 * @ORM\Entity(repositoryClass="App\Repository\ContainRepository")
 */
class Contain
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
     * @ORM\Column(name="STUFF_ID", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stuffId;

    public function getPartyId(): ?string
    {
        return $this->partyId;
    }

    public function getStuffId(): ?string
    {
        return $this->stuffId;
    }


}
