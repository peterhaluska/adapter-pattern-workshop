<?php

namespace App\Http\Controllers;

use App\Http\ActionHandlers\DownloadSecurityTrainingResultHandler;

class DownloadSecurityTrainingResultController extends Controller
{
    /** @var DownloadSecurityTrainingResultHandler */
    private $downloadResultsHandler;

    /**
     * @param DownloadSecurityTrainingResultHandler $downloadResultsHandler
     */
    public function __construct(DownloadSecurityTrainingResultHandler $downloadResultsHandler)
    {
        $this->downloadResultsHandler = $downloadResultsHandler;
    }

    /**
     * @return string
     */
    public function show()
    {
        $this->downloadResultsHandler->download();
        return;
    }
}
