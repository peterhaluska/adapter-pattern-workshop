<?php

namespace App\Http\Controllers;

use App\Http\ActionHandlers\ListSecurityTrainingResultHandler;
use App\Repository\TrainingEntryRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class SecurityTrainingResultController
{
    /** @var ListSecurityTrainingResultHandler */
    private $actionHandler;

    /**
     * @param ListSecurityTrainingResultHandler $actionHandler
     */
    public function __construct(ListSecurityTrainingResultHandler $actionHandler)
    {
        $this->actionHandler = $actionHandler;
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        return $this->actionHandler->viewResultsPage();
    }
}
