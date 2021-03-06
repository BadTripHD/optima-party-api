<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Law
 *
 * @ORM\Table(name="law")
 * @ORM\Entity(repositoryClass="App\Repository\LawRepository")
 */
class Law
{
    /**
     * @var string
     *
     * @ORM\Column(name="LAW_ID", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lawId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LAW_ACCESS", type="integer", nullable=true)
     */
    private $lawAccess;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LAW_ACCESS_NAME", type="string", length=255, nullable=true)
     */
    private $lawAccessName;

    public function getLawId(): ?string
    {
        return $this->lawId;
    }

    public function getLawAccess(): ?int
    {
        return $this->lawAccess;
    }

    public function setLawAccess(?int $lawAccess): self
    {
        $this->lawAccess = $lawAccess;

        return $this;
    }

    public function getLawAccessName(): ?string
    {
        return $this->lawAccessName;
    }

    public function setLawAccessName(?string $lawAccessName): self
    {
        $this->lawAccessName = $lawAccessName;

        return $this;
    }


}
