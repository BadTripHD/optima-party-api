<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stuff
 *
 * @ORM\Table(name="stuff", indexes={@ORM\Index(name="FK_STUFF_APPARTENI_CATEGORY", columns={"CATEGORY_ID"})})
 * @ORM\Entity
 */
class Stuff
{
    /**
     * @var int
     *
     * @ORM\Column(name="STUFF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stuffId;

    /**
     * @var int
     *
     * @ORM\Column(name="CATEGORY_ID", type="integer", nullable=false)
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

    public function getStuffId(): ?int
    {
        return $this->stuffId;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
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
