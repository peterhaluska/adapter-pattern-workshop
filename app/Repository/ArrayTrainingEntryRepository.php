<?php

namespace App\Repository;

use App\Collection\TrainingEntryCollection;
use App\Factory\TrainingEntryFactoryInterface;

class ArrayTrainingEntryRepository implements TrainingEntryRepository
{
    /** @var array */
    private $trainingEntryArrayDatabase;

    /** @var TrainingEntryFactoryInterface */
    private $trainingEntryFactory;

    /**
     * @param TrainingEntryFactoryInterface $trainingEntryFactory
     * @param array                         $trainingEntryArrayDatabase
     */
    public function __construct(
        TrainingEntryFactoryInterface $trainingEntryFactory,
        array $trainingEntryArrayDatabase = []
    )
    {
        $this->trainingEntryArrayDatabase = $trainingEntryArrayDatabase;
        $this->trainingEntryFactory       = $trainingEntryFactory;
    }

    /**
     * @return TrainingEntryCollection
     */
    public function getAllEntries(): TrainingEntryCollection
    {
        $entries = new TrainingEntryCollection();

        foreach ($this->trainingEntryArrayDatabase as $data) {
            $entry = $this->trainingEntryFactory->createTrainingEntry($data);
            $entries->add($entry);
        }

        return $entries;
    }
}
