<?php

namespace App\Factory;

use App\Entity\TrainingEntryInterface;

interface TrainingEntryFactoryInterface
{
    /**
     * @param array $data
     *
     * @return TrainingEntryInterface
     */
    public function createTrainingEntry(array $data): TrainingEntryInterface;
}
