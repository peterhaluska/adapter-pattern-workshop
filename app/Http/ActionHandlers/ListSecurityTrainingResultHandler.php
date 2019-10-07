<?php

namespace App\Http\ActionHandlers;

use App\Repository\TrainingEntryRepository;

class ListSecurityTrainingResultHandler
{
    /** @var TrainingEntryRepository */
    private $trainingEntryRepository;

    /**
     * @param TrainingEntryRepository $trainingEntryRepository
     */
    public function __construct(TrainingEntryRepository $trainingEntryRepository)
    {
        $this->trainingEntryRepository = $trainingEntryRepository;
    }

    public function viewResultsPage()
    {
        $trainingEntries = $this->trainingEntryRepository->getAllEntries();

        $viewData = [
            'trainingEntries' => $trainingEntries->getItems(),
        ];

        return view('security_training_result.index')->with($viewData);
    }
}
