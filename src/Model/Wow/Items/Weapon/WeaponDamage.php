<?php

namespace MR\BlizzardSdk\Model\Wow\Items\Weapon;

class WeaponDamage
{
    private $min;
    private $max;
    private $exactMin;
    private $exactMax;

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     *
     * @return WeaponDamage
     */
    public function setMin(int $min): WeaponDamage
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     *
     * @return WeaponDamage
     */
    public function setMax(int $max): WeaponDamage
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return int
     */
    public function getExactMin(): float
    {
        return $this->exactMin;
    }

    /**
     * @param int $exactMin
     *
     * @return WeaponDamage
     */
    public function setExactMin(float $exactMin): WeaponDamage
    {
        $this->exactMin = $exactMin;

        return $this;
    }

    /**
     * @return int
     */
    public function getExactMax(): float
    {
        return $this->exactMax;
    }

    /**
     * @param int $exactMax
     *
     * @return WeaponDamage
     */
    public function setExactMax(float $exactMax): WeaponDamage
    {
        $this->exactMax = $exactMax;

        return $this;
    }
}