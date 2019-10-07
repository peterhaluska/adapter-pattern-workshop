<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('security-training-results', [
    'uses' => 'SecurityTrainingResultController@index',
    'as' => 'security_training_results.index',
]);

Route::get('download-training-results', [
    'uses' => 'DownloadSecurityTrainingResultController@show',
    'as' => 'download_security_training_results.show',
]);

Route::get('test-json-file-creator', function() {
    $jsonFileCreator = new \Lib\JsonFileCreator\JsonFileCreator();
    $testFilepath = public_path('test.json');

    $jsonFileCreator->createFile($testFilepath);

    $jsonFileCreator->writeToFile(config('training_entries_db'));

    return response()->json(file_get_contents($testFilepath));
});
