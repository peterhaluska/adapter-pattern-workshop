<?php

namespace App\Providers;

use App\Adapter\JsonFileCreatorAdapter;
use App\Factory\TrainingEntryFactory;
use App\Factory\TrainingEntryFactoryInterface;
use App\FileDownloader\FileDownloader;
use App\FileDownloader\TextFileDownloader;
use App\Generator\SecurityTrainingCsvReportGenerator;
use App\Generator\SecurityTrainingReportGenerator;
use App\Provider\ReportProvider;
use App\Provider\SecurityTrainingReportProvider;
use App\Repository\ArrayTrainingEntryRepository;
use App\Repository\TrainingEntryRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TrainingEntryFactoryInterface::class, TrainingEntryFactory::class);
        $this->app->bind(TrainingEntryRepository::class, ArrayTrainingEntryRepository::class);

        $this->app->when(ArrayTrainingEntryRepository::class)
            ->needs('$trainingEntryArrayDatabase')
            ->give(function() {
               return config('training_entries_db');
            });

        $this->app->bind(FileDownloader::class, TextFileDownloader::class);
        $this->app->bind(ReportProvider::class, SecurityTrainingReportProvider::class);
        $this->app->bind(SecurityTrainingReportGenerator::class, JsonFileCreatorAdapter::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
