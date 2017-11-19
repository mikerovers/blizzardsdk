<?php

namespace MR\BlizzardSdk\Model\Wow\Items\Weapon;

class WeaponInfo
{
    private $damage;
    private $weaponSpeed;
    private $dps;

    /**
     * @return WeaponDamage
     */
    public function getDamage(): WeaponDamage
    {
        return $this->damage;
    }

    /**
     * @param WeaponDamage $damage
     *
     * @return WeaponInfo
     */
    public function setDamage(WeaponDamage $damage): WeaponInfo
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeaponSpeed(): float
    {
        return $this->weaponSpeed;
    }

    /**
     * @param float $weaponSpeed
     *
     * @return WeaponInfo
     */
    public function setWeaponSpeed(float $weaponSpeed): WeaponInfo
    {
        $this->weaponSpeed = $weaponSpeed;

        return $this;
    }

    /**
     * @return float
     */
    public function getDps(): float
    {
        return $this->dps;
    }

    /**
     * @param float $dps
     *
     * @return WeaponInfo
     */
    public function setDps(float $dps): WeaponInfo
    {
        $this->dps = $dps;

        return $this;
    }
}