<?php

namespace App\Adapter;

use App\Collection\TrainingEntryCollection;
use App\Generator\SecurityTrainingReportGenerator;
use Exception;
use Lib\JsonFileCreator\JsonFileCreator;

class JsonFileCreatorAdapter implements SecurityTrainingReportGenerator
{
    /** @var JsonFileCreator */
    private $jsonFileCreator;

    /**
     * @param JsonFileCreator $jsonFileCreator
     */
    public function __construct(JsonFileCreator $jsonFileCreator)
    {
        $this->jsonFileCreator = $jsonFileCreator;
    }

    /**
     * @param TrainingEntryCollection $reportData
     *
     * @return string
     * @throws Exception
     */
    public function generateReport(TrainingEntryCollection $reportData): string
    {
        $testFilepath = public_path('report.json');

        $this->jsonFileCreator->createFile($testFilepath);

        $formattedData = $this->formatArray($reportData->getItems());

        $this->jsonFileCreator->writeToFile($formattedData);

        return $this->jsonFileCreator->getCreatedFilepath();
    }

    /**
     * @param array $data
     *
     * @return array
     */
    private function formatArray(array $data): array
    {
        $temp = [];

        foreach ($data as $trainingEntry) {
            $temp[] = [
                'employee_id' => $trainingEntry->getEmployeeId(),
                'attended_at' => $trainingEntry->getAttendedAtDate(),
                'grade'       => $trainingEntry->getGrade(),
            ];
        }

        return $temp;
    }
}
