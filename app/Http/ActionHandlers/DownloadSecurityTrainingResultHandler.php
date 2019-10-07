<?php

namespace App\Http\ActionHandlers;

use App\Provider\ReportProvider;

class DownloadSecurityTrainingResultHandler
{
    /** @var ReportProvider */
    private $reportProvider;

    /**
     * @param ReportProvider $reportProvider
     */
    public function __construct(ReportProvider $reportProvider)
    {
        $this->reportProvider = $reportProvider;
    }

    /**
     *
     */
    public function download()
    {
        $this->reportProvider->serveReport();
    }
}
