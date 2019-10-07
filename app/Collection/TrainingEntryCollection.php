<?php

namespace App\Collection;

use App\Entity\TrainingEntryInterface;
use Countable;

class TrainingEntryCollection implements Countable
{
    /** @var array  */
    private $items = [];

    /**
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param TrainingEntryInterface $trainingEntry
     */
    public function add(TrainingEntryInterface $trainingEntry): void
    {
        $this->items[] = $trainingEntry;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->items);
    }
}
