<?php

namespace App\Generator;

use App\Collection\TrainingEntryCollection;

interface SecurityTrainingReportGenerator
{
    /**
     * @param TrainingEntryCollection $reportData
     *
     * @return string
     */
    public function generateReport(TrainingEntryCollection $reportData): string;
}
