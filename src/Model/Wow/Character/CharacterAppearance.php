<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterAppearance
{
    private $faceVariation;
    private $skinColor;
    private $hairVariation;
    private $hairColor;
    private $featureVariation;
    private $showHelm;
    private $showCloak;
    private $customDisplayOptions = [];

    /**
     * @return int
     */
    public function getFaceVariation(): int
    {
        return $this->faceVariation;
    }

    /**
     * @param int $faceVariation
     *
     * @return CharacterAppearance
     */
    public function setFaceVariation(int $faceVariation): CharacterAppearance
    {
        $this->faceVariation = $faceVariation;

        return $this;
    }

    /**
     * @return int
     */
    public function getSkinColor(): int
    {
        return $this->skinColor;
    }

    /**
     * @param int $skinColor
     *
     * @return CharacterAppearance
     */
    public function setSkinColor(int $skinColor): CharacterAppearance
    {
        $this->skinColor = $skinColor;

        return $this;
    }

    /**
     * @return int
     */
    public function getHairVariation(): int
    {
        return $this->hairVariation;
    }

    /**
     * @param int $hairVariation
     *
     * @return CharacterAppearance
     */
    public function setHairVariation(int $hairVariation): CharacterAppearance
    {
        $this->hairVariation = $hairVariation;

        return $this;
    }

    /**
     * @return int
     */
    public function getHairColor(): int
    {
        return $this->hairColor;
    }

    /**
     * @param int $hairColor
     *
     * @return CharacterAppearance
     */
    public function setHairColor(int $hairColor): CharacterAppearance
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureVariation(): int
    {
        return $this->featureVariation;
    }

    /**
     * @param int $featureVariation
     *
     * @return CharacterAppearance
     */
    public function setFeatureVariation(int $featureVariation): CharacterAppearance
    {
        $this->featureVariation = $featureVariation;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShowHelm(): bool
    {
        return $this->showHelm;
    }

    /**
     * @param bool $showHelm
     *
     * @return CharacterAppearance
     */
    public function setShowHelm(bool $showHelm): CharacterAppearance
    {
        $this->showHelm = $showHelm;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShowCloak(): bool
    {
        return $this->showCloak;
    }

    /**
     * @param bool $showCloak
     *
     * @return CharacterAppearance
     */
    public function setShowCloak(bool $showCloak): CharacterAppearance
    {
        $this->showCloak = $showCloak;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getCustomDisplayOptions(): array
    {
        return $this->customDisplayOptions;
    }

    /**
     * @param int[] $customDisplayOptions
     *
     * @return CharacterAppearance
     */
    public function setCustomDisplayOptions(array $customDisplayOptions): CharacterAppearance
    {
        $this->customDisplayOptions = $customDisplayOptions;

        return $this;
    }
}