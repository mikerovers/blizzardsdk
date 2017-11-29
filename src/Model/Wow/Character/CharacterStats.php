<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterStats
{
    private $health;
    private $powerType;
    private $power;
    private $str;
    private $agi;
    private $int;
    private $sta;
    private $speedRating;
    private $speedRatingBonus;
    private $crit;
    private $critRating;
    private $haste;
    private $hasteRating;
    private $hasteRatingPercent;
    private $mastery;
    private $masteryRating;
    private $leech;
    private $leechRating;
    private $versatility;
    private $versatilityDamageDoneBonus;
    private $versatilityHealingDoneBonus;
    private $versatilityDamageTakenBonus;
    private $avoidanceRating;
    private $avoidanceRatingBonus;
    private $spellPen;
    private $spellCrit;
    private $spellCritRating;
    private $mana5;
    private $mana5Combat;
    private $armor;
    private $dodge;
    private $dodgeRating;
    private $parry;
    private $parryRating;
    private $block;
    private $blockRating;
    private $mainHandDmgMin;
    private $mainHandDmgMax;
    private $mainHandSpeed;
    private $mainHandDps;
    private $offHandDmgMin;
    private $offHandDmgMax;
    private $offHandSpeed;
    private $offHandDps;
    private $rangedDmgMin;
    private $rangedDmsMax;
    private $rangedSpeed;
    private $rangedDps;

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     *
     * @return CharacterStats
     */
    public function setHealth(int $health): CharacterStats
    {
        $this->health = $health;

        return $this;
    }

    /**
     * @return string
     */
    public function getPowerType(): string
    {
        return $this->powerType;
    }

    /**
     * @param string $powerType
     *
     * @return CharacterStats
     */
    public function setPowerType(string $powerType): CharacterStats
    {
        $this->powerType = $powerType;

        return $this;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @param int $power
     *
     * @return CharacterStats
     */
    public function setPower(int $power): CharacterStats
    {
        $this->power = $power;

        return $this;
    }

    /**
     * @return int
     */
    public function getStr(): int
    {
        return $this->str;
    }

    /**
     * @param int $str
     *
     * @return CharacterStats
     */
    public function setStr(int $str): CharacterStats
    {
        $this->str = $str;

        return $this;
    }

    /**
     * @return int
     */
    public function getAgi(): int
    {
        return $this->agi;
    }

    /**
     * @param int $agi
     *
     * @return CharacterStats
     */
    public function setAgi(int $agi): CharacterStats
    {
        $this->agi = $agi;

        return $this;
    }

    /**
     * @return int
     */
    public function getInt(): int
    {
        return $this->int;
    }

    /**
     * @param int $int
     *
     * @return CharacterStats
     */
    public function setInt(int $int): CharacterStats
    {
        $this->int = $int;

        return $this;
    }

    /**
     * @return int
     */
    public function getSta(): int
    {
        return $this->sta;
    }

    /**
     * @param int $sta
     *
     * @return CharacterStats
     */
    public function setSta(int $sta): CharacterStats
    {
        $this->sta = $sta;

        return $this;
    }

    /**
     * @return float
     */
    public function getSpeedRating(): float
    {
        return $this->speedRating;
    }

    /**
     * @param float $speedRating
     *
     * @return CharacterStats
     */
    public function setSpeedRating(float $speedRating): CharacterStats
    {
        $this->speedRating = $speedRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getSpeedRatingBonus(): float
    {
        return $this->speedRatingBonus;
    }

    /**
     * @param float $speedRatingBonus
     *
     * @return CharacterStats
     */
    public function setSpeedRatingBonus(float $speedRatingBonus): CharacterStats
    {
        $this->speedRatingBonus = $speedRatingBonus;

        return $this;
    }

    /**
     * @return float
     */
    public function getCrit(): float
    {
        return $this->crit;
    }

    /**
     * @param float $crit
     *
     * @return CharacterStats
     */
    public function setCrit(float $crit): CharacterStats
    {
        $this->crit = $crit;

        return $this;
    }

    /**
     * @return int
     */
    public function getCritRating(): int
    {
        return $this->critRating;
    }

    /**
     * @param int $critRating
     *
     * @return CharacterStats
     */
    public function setCritRating(int $critRating): CharacterStats
    {
        $this->critRating = $critRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getHaste(): float
    {
        return $this->haste;
    }

    /**
     * @param float $haste
     *
     * @return CharacterStats
     */
    public function setHaste(float $haste): CharacterStats
    {
        $this->haste = $haste;

        return $this;
    }

    /**
     * @return int
     */
    public function getHasteRating(): int
    {
        return $this->hasteRating;
    }

    /**
     * @param int $hasteRating
     *
     * @return CharacterStats
     */
    public function setHasteRating(int $hasteRating): CharacterStats
    {
        $this->hasteRating = $hasteRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getHasteRatingPercent(): float
    {
        return $this->hasteRatingPercent;
    }

    /**
     * @param float $hasteRatingPercent
     *
     * @return CharacterStats
     */
    public function setHasteRatingPercent(float $hasteRatingPercent): CharacterStats
    {
        $this->hasteRatingPercent = $hasteRatingPercent;

        return $this;
    }

    /**
     * @return float
     */
    public function getMastery(): float
    {
        return $this->mastery;
    }

    /**
     * @param float $mastery
     *
     * @return CharacterStats
     */
    public function setMastery(float $mastery): CharacterStats
    {
        $this->mastery = $mastery;

        return $this;
    }

    /**
     * @return int
     */
    public function getMasteryRating(): int
    {
        return $this->masteryRating;
    }

    /**
     * @param int $masteryRating
     *
     * @return CharacterStats
     */
    public function setMasteryRating(int $masteryRating): CharacterStats
    {
        $this->masteryRating = $masteryRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getLeech(): float
    {
        return $this->leech;
    }

    /**
     * @param float $leech
     *
     * @return CharacterStats
     */
    public function setLeech(float $leech): CharacterStats
    {
        $this->leech = $leech;

        return $this;
    }

    /**
     * @return float
     */
    public function getLeechRating(): float
    {
        return $this->leechRating;
    }

    /**
     * @param float $leechRating
     *
     * @return CharacterStats
     */
    public function setLeechRating(float $leechRating): CharacterStats
    {
        $this->leechRating = $leechRating;

        return $this;
    }

    /**
     * @return int
     */
    public function getVersatility(): int
    {
        return $this->versatility;
    }

    /**
     * @param int $versatility
     *
     * @return CharacterStats
     */
    public function setVersatility(int $versatility): CharacterStats
    {
        $this->versatility = $versatility;

        return $this;
    }

    /**
     * @return float
     */
    public function getVersatilityDamageDoneBonus(): float
    {
        return $this->versatilityDamageDoneBonus;
    }

    /**
     * @param float $versatilityDamageDoneBonus
     *
     * @return CharacterStats
     */
    public function setVersatilityDamageDoneBonus(float $versatilityDamageDoneBonus): CharacterStats
    {
        $this->versatilityDamageDoneBonus = $versatilityDamageDoneBonus;

        return $this;
    }

    /**
     * @return float
     */
    public function getVersatilityHealingDoneBonus(): float
    {
        return $this->versatilityHealingDoneBonus;
    }

    /**
     * @param float $versatilityHealingDoneBonus
     *
     * @return CharacterStats
     */
    public function setVersatilityHealingDoneBonus(float $versatilityHealingDoneBonus): CharacterStats
    {
        $this->versatilityHealingDoneBonus = $versatilityHealingDoneBonus;

        return $this;
    }

    /**
     * @return float
     */
    public function getVersatilityDamageTakenBonus(): float
    {
        return $this->versatilityDamageTakenBonus;
    }

    /**
     * @param float $versatilityDamageTakenBonus
     *
     * @return CharacterStats
     */
    public function setVersatilityDamageTakenBonus(float $versatilityDamageTakenBonus): CharacterStats
    {
        $this->versatilityDamageTakenBonus = $versatilityDamageTakenBonus;

        return $this;
    }

    /**
     * @return float
     */
    public function getAvoidanceRating(): float
    {
        return $this->avoidanceRating;
    }

    /**
     * @param float $avoidanceRating
     *
     * @return CharacterStats
     */
    public function setAvoidanceRating(float $avoidanceRating): CharacterStats
    {
        $this->avoidanceRating = $avoidanceRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getAvoidanceRatingBonus(): float
    {
        return $this->avoidanceRatingBonus;
    }

    /**
     * @param float $avoidanceRatingBonus
     *
     * @return CharacterStats
     */
    public function setAvoidanceRatingBonus(float $avoidanceRatingBonus): CharacterStats
    {
        $this->avoidanceRatingBonus = $avoidanceRatingBonus;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpellPen(): int
    {
        return $this->spellPen;
    }

    /**
     * @param int $spellPen
     *
     * @return CharacterStats
     */
    public function setSpellPen(int $spellPen): CharacterStats
    {
        $this->spellPen = $spellPen;

        return $this;
    }

    /**
     * @return float
     */
    public function getSpellCrit(): float
    {
        return $this->spellCrit;
    }

    /**
     * @param float $spellCrit
     *
     * @return CharacterStats
     */
    public function setSpellCrit(float $spellCrit): CharacterStats
    {
        $this->spellCrit = $spellCrit;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpellCritRating(): int
    {
        return $this->spellCritRating;
    }

    /**
     * @param int $spellCritRating
     *
     * @return CharacterStats
     */
    public function setSpellCritRating(int $spellCritRating): CharacterStats
    {
        $this->spellCritRating = $spellCritRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getMana5(): float
    {
        return $this->mana5;
    }

    /**
     * @param float $mana5
     *
     * @return CharacterStats
     */
    public function setMana5(float $mana5): CharacterStats
    {
        $this->mana5 = $mana5;

        return $this;
    }

    /**
     * @return float
     */
    public function getMana5Combat(): float
    {
        return $this->mana5Combat;
    }

    /**
     * @param float $mana5Combat
     *
     * @return CharacterStats
     */
    public function setMana5Combat(float $mana5Combat): CharacterStats
    {
        $this->mana5Combat = $mana5Combat;

        return $this;
    }

    /**
     * @return int
     */
    public function getArmor(): int
    {
        return $this->armor;
    }

    /**
     * @param int $armor
     *
     * @return CharacterStats
     */
    public function setArmor(int $armor): CharacterStats
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * @return float
     */
    public function getDodge(): float
    {
        return $this->dodge;
    }

    /**
     * @param float $dodge
     *
     * @return CharacterStats
     */
    public function setDodge(float $dodge): CharacterStats
    {
        $this->dodge = $dodge;

        return $this;
    }

    /**
     * @return int
     */
    public function getDodgeRating(): int
    {
        return $this->dodgeRating;
    }

    /**
     * @param int $dodgeRating
     *
     * @return CharacterStats
     */
    public function setDodgeRating(int $dodgeRating): CharacterStats
    {
        $this->dodgeRating = $dodgeRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getParry(): float
    {
        return $this->parry;
    }

    /**
     * @param float $parry
     *
     * @return CharacterStats
     */
    public function setParry(float $parry): CharacterStats
    {
        $this->parry = $parry;

        return $this;
    }

    /**
     * @return int
     */
    public function getParryRating(): int
    {
        return $this->parryRating;
    }

    /**
     * @param int $parryRating
     *
     * @return CharacterStats
     */
    public function setParryRating(int $parryRating): CharacterStats
    {
        $this->parryRating = $parryRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getBlock(): float
    {
        return $this->block;
    }

    /**
     * @param float $block
     *
     * @return CharacterStats
     */
    public function setBlock(float $block): CharacterStats
    {
        $this->block = $block;

        return $this;
    }

    /**
     * @return int
     */
    public function getBlockRating(): int
    {
        return $this->blockRating;
    }

    /**
     * @param int $blockRating
     *
     * @return CharacterStats
     */
    public function setBlockRating(int $blockRating): CharacterStats
    {
        $this->blockRating = $blockRating;

        return $this;
    }

    /**
     * @return float
     */
    public function getMainHandDmgMin(): float
    {
        return $this->mainHandDmgMin;
    }

    /**
     * @param float $mainHandDmgMin
     *
     * @return CharacterStats
     */
    public function setMainHandDmgMin(float $mainHandDmgMin): CharacterStats
    {
        $this->mainHandDmgMin = $mainHandDmgMin;

        return $this;
    }

    /**
     * @return float
     */
    public function getMainHandDmgMax(): float
    {
        return $this->mainHandDmgMax;
    }

    /**
     * @param float $mainHandDmgMax
     *
     * @return CharacterStats
     */
    public function setMainHandDmgMax(float $mainHandDmgMax): CharacterStats
    {
        $this->mainHandDmgMax = $mainHandDmgMax;

        return $this;
    }

    /**
     * @return float
     */
    public function getMainHandSpeed(): float
    {
        return $this->mainHandSpeed;
    }

    /**
     * @param float $mainHandSpeed
     *
     * @return CharacterStats
     */
    public function setMainHandSpeed(float $mainHandSpeed): CharacterStats
    {
        $this->mainHandSpeed = $mainHandSpeed;

        return $this;
    }

    /**
     * @return float
     */
    public function getMainHandDps(): float
    {
        return $this->mainHandDps;
    }

    /**
     * @param float $mainHandDps
     *
     * @return CharacterStats
     */
    public function setMainHandDps(float $mainHandDps): CharacterStats
    {
        $this->mainHandDps = $mainHandDps;

        return $this;
    }

    /**
     * @return float
     */
    public function getOffHandDmgMin(): float
    {
        return $this->offHandDmgMin;
    }

    /**
     * @param float $offHandDmgMin
     *
     * @return CharacterStats
     */
    public function setOffHandDmgMin(float $offHandDmgMin): CharacterStats
    {
        $this->offHandDmgMin = $offHandDmgMin;

        return $this;
    }

    /**
     * @return float
     */
    public function getOffHandDmgMax(): float
    {
        return $this->offHandDmgMax;
    }

    /**
     * @param float $offHandDmgMax
     *
     * @return CharacterStats
     */
    public function setOffHandDmgMax(float $offHandDmgMax): CharacterStats
    {
        $this->offHandDmgMax = $offHandDmgMax;

        return $this;
    }

    /**
     * @return float
     */
    public function getOffHandSpeed(): float
    {
        return $this->offHandSpeed;
    }

    /**
     * @param float $offHandSpeed
     *
     * @return CharacterStats
     */
    public function setOffHandSpeed(float $offHandSpeed): CharacterStats
    {
        $this->offHandSpeed = $offHandSpeed;

        return $this;
    }

    /**
     * @return float
     */
    public function getOffHandDps(): float
    {
        return $this->offHandDps;
    }

    /**
     * @param float $offHandDps
     *
     * @return CharacterStats
     */
    public function setOffHandDps(float $offHandDps): CharacterStats
    {
        $this->offHandDps = $offHandDps;

        return $this;
    }

    /**
     * @return float
     */
    public function getRangedDmgMin(): float
    {
        return $this->rangedDmgMin;
    }

    /**
     * @param float $rangedDmgMin
     *
     * @return CharacterStats
     */
    public function setRangedDmgMin(float $rangedDmgMin): CharacterStats
    {
        $this->rangedDmgMin = $rangedDmgMin;

        return $this;
    }

    /**
     * @return float
     */
    public function getRangedDmsMax(): float
    {
        return $this->rangedDmsMax;
    }

    /**
     * @param float $rangedDmsMax
     *
     * @return CharacterStats
     */
    public function setRangedDmsMax(float $rangedDmsMax): CharacterStats
    {
        $this->rangedDmsMax = $rangedDmsMax;

        return $this;
    }

    /**
     * @return float
     */
    public function getRangedSpeed(): float
    {
        return $this->rangedSpeed;
    }

    /**
     * @param float $rangedSpeed
     *
     * @return CharacterStats
     */
    public function setRangedSpeed(float $rangedSpeed): CharacterStats
    {
        $this->rangedSpeed = $rangedSpeed;

        return $this;
    }

    /**
     * @return float
     */
    public function getRangedDps(): float
    {
        return $this->rangedDps;
    }

    /**
     * @param float $rangedDps
     *
     * @return CharacterStats
     */
    public function setRangedDps(float $rangedDps): CharacterStats
    {
        $this->rangedDps = $rangedDps;

        return $this;
    }
}