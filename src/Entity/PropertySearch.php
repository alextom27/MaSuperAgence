<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 19/12/18
 * Time: 23:13
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class PropertySearch
{
    /**
     * @var int|null
     */
    private $maxPrice;

    /**
     * @return int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param int|null $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @var int|null
     * @Assert\Range(min=10, max=2000)
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * @param int|null $minSurface
     * @return PropertySearch
     */
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }

    /**
     * @var int|null
     */
    private $minSurface;

}