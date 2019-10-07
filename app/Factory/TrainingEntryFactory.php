<?php

namespace App\Factory;

use App\Entity\TrainingEntry;
use App\Entity\TrainingEntryInterface;

class TrainingEntryFactory implements TrainingEntryFactoryInterface
{
    /**
     * @param array $data
     *
     * @return TrainingEntryInterface
     */
    public function createTrainingEntry(array $data): TrainingEntryInterface
    {
        $trainingEntry = new TrainingEntry();

        $trainingEntry->setEmployeeId($data['id']);
        $trainingEntry->setEmployeeName($data['name']);
        $trainingEntry->setAttendedAtDate($data['attended_at_date']);
        $trainingEntry->setScore($data['score']);
        $trainingEntry->setGrade($data['grade']);

        return $trainingEntry;
    }
}
