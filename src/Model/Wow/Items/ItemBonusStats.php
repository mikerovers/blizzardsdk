<?php

namespace MR\BlizzardSdk\Model\Wow\Items;

class ItemBonusStats
{
    private $stat;
    private $amount;

    /**
     * @return int
     */
    public function getStat(): int
    {
        return $this->stat;
    }

    /**
     * @param int $stat
     *
     * @return ItemBonusStats
     */
    public function setStat(int $stat): ItemBonusStats
    {
        $this->stat = $stat;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     *
     * @return ItemBonusStats
     */
    public function setAmount(int $amount): ItemBonusStats
    {
        $this->amount = $amount;

        return $this;
    }
}