<?php

namespace MR\BlizzardSdk\Model\Wow\Items;

class ItemSource
{
    private $sourceId;
    private $sourceType;

    /**
     * @return int
     */
    public function getSourceId(): int
    {
        return $this->sourceId;
    }

    /**
     * @param int $sourceId
     *
     * @return ItemSource
     */
    public function setSourceId(int $sourceId): ItemSource
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceType(): string
    {
        return $this->sourceType;
    }

    /**
     * @param string $sourceType
     *
     * @return ItemSource
     */
    public function setSourceType(string $sourceType): ItemSource
    {
        $this->sourceType = $sourceType;

        return $this;
    }
}