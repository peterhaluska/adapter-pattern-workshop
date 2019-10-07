<?php

namespace App\Generator;

use App\Collection\TrainingEntryCollection;

class SecurityTrainingCsvReportGenerator implements SecurityTrainingReportGenerator
{
    /**
     * @param TrainingEntryCollection $reportData
     *
     * @return string
     */
    public function generateReport(TrainingEntryCollection $reportData): string
    {
        $filepath = public_path('tmp-report.csv');

        foreach ($reportData->getItems() as $trainingEntry) {
            $csvData = [
                $trainingEntry->getEmployeeId(),
                $trainingEntry->getEmployeeName(),
                $trainingEntry->getEmployeeName(),
                $trainingEntry->getScore(),
                $trainingEntry->getGrade(),
            ];

            file_put_contents($filepath, implode(',', $csvData) . PHP_EOL, FILE_APPEND | LOCK_EX);
        }

        return $filepath;
    }
}
