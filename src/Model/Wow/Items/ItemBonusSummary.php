<?php

namespace MR\BlizzardSdk\Model\Wow\Items;

class ItemBonusSummary
{
    private $defaultBonusLists = [];
    private $chanceBonusLists = [];
    private $bonusChance = [];

    /**
     * @return array
     */
    public function getDefaultBonusLists(): array
    {
        return $this->defaultBonusLists;
    }

    /**
     * @param array $defaultBonusLists
     *
     * @return ItemBonusSummary
     */
    public function setDefaultBonusLists(array $defaultBonusLists): ItemBonusSummary
    {
        $this->defaultBonusLists = $defaultBonusLists;

        return $this;
    }

    /**
     * @return array
     */
    public function getChanceBonusLists(): array
    {
        return $this->chanceBonusLists;
    }

    /**
     * @param array $chanceBonusLists
     *
     * @return ItemBonusSummary
     */
    public function setChanceBonusLists(array $chanceBonusLists): ItemBonusSummary
    {
        $this->chanceBonusLists = $chanceBonusLists;

        return $this;
    }

    /**
     * @return array
     */
    public function getBonusChance(): array
    {
        return $this->bonusChance;
    }

    /**
     * @param array $bonusChance
     *
     * @return ItemBonusSummary
     */
    public function setBonusChance(array $bonusChance): ItemBonusSummary
    {
        $this->bonusChance = $bonusChance;

        return $this;
    }
}