<?php

namespace MR\BlizzardSdk\Model\Wow;

class Npc
{
    private $id;
    private $name;
    private $urlSlug;
    private $creatureDisplayId;


    /**
     * @param int $id
     *
     * @return Npc
     */
    public function setId(int $id): Npc
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     *
     * @return Npc
     */
    public function setName(string $name): Npc
    {
        $this->name = $name;
    }

    /**
     * @param string $urlSlug
     *
     * @return Npc
     */
    public function setUrlSlug(string $urlSlug): Npc
    {
        $this->urlSlug = $urlSlug;
    }

    /**
     * @param int $creatureDisplayId
     *
     * @return Npc
     */
    public function setCreatureDisplayId(int $creatureDisplayId): Npc
    {
        $this->creatureDisplayId = $creatureDisplayId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrlSlug(): string
    {
        return $this->urlSlug;
    }

    /**
     * @return int
     */
    public function getCreatureDisplayId(): int
    {
        return $this->creatureDisplayId;
    }
}