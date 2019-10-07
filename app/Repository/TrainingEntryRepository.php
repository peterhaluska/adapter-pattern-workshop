<?php

namespace App\Repository;

use App\Collection\TrainingEntryCollection;

interface TrainingEntryRepository
{
    /**
     * @return TrainingEntryCollection
     */
    public function getAllEntries(): TrainingEntryCollection;
}
