<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stuff
 *
 * @ORM\Table(name="stuff", indexes={@ORM\Index(name="FK_STUFF_APPARTENI_CATEGORY", columns={"CATEGORY_ID"})})
 * @ORM\Entity(repositoryClass="App\Repository\StuffRepository")
 */
class Stuff
{
    /**
     * @var string
     *
     * @ORM\Column(name="STUFF_ID", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stuffId;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY_ID", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $categoryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="STUFF_NAME", type="string", length=255, nullable=true)
     */
    private $stuffName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="STUFF_QUANTITY", type="string", length=255, nullable=true)
     */
    private $stuffQuantity;

    public function getStuffId(): ?string
    {
        return $this->stuffId;
    }

    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    public function setCategoryId(string $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getStuffName(): ?string
    {
        return $this->stuffName;
    }

    public function setStuffName(?string $stuffName): self
    {
        $this->stuffName = $stuffName;

        return $this;
    }

    public function getStuffQuantity(): ?string
    {
        return $this->stuffQuantity;
    }

    public function setStuffQuantity(?string $stuffQuantity): self
    {
        $this->stuffQuantity = $stuffQuantity;

        return $this;
    }


}
