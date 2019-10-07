<?php

namespace App\Provider;

use App\FileDownloader\FileDownloader;
use App\Generator\SecurityTrainingReportGenerator;
use App\Repository\TrainingEntryRepository;

class SecurityTrainingReportProvider implements ReportProvider
{
    /** @var FileDownloader */
    private $fileDownloader;

    /** @var SecurityTrainingReportGenerator */
    private $reportGenerator;

    /** @var TrainingEntryRepository */
    private $trainingEntryRepository;

    /**
     * @param FileDownloader                  $fileDownloader
     * @param SecurityTrainingReportGenerator $reportGenerator
     * @param TrainingEntryRepository         $trainingEntryRepository
     */
    public function __construct(
        FileDownloader $fileDownloader,
        SecurityTrainingReportGenerator $reportGenerator,
        TrainingEntryRepository $trainingEntryRepository
    )
    {
        $this->fileDownloader          = $fileDownloader;
        $this->reportGenerator         = $reportGenerator;
        $this->trainingEntryRepository = $trainingEntryRepository;
    }

    /**
     *
     */
    public function serveReport(): void
    {
        $trainingEntries = $this->trainingEntryRepository->getAllEntries();
        $reportFilepath  = $this->reportGenerator->generateReport($trainingEntries);

        $this->fileDownloader->download($reportFilepath);

        unlink($reportFilepath);

        exit();
    }
}
