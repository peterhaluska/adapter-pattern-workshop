<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Adapter Pattern - Workshop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        <small>
                            The Adapter Pattern - Workshop
                        </small>
                    </div>
                </div>
                <div>
                    <h3>Application</h3>
                    <p>
                        Our application displays the Security Training results of our company's employees and currently let's you generate
                        CSV reports.
                    </p>
                    <p>
                        The application is not connected to any Database, it is using a dummy repository for the training results.
                    </p>

                    <h3>
                        The Task
                    </h3>
                    <p>
                        Currently the application generates CSV reports with personal data of the employees. The project owner has decided, that from now on,
                        we will need a JSON report which is GDPR compliant (the employee names should not be visible). The report should contain only the employee_id,
                        attended_at and grade attributes.
                    </p>
                    <p>
                        Luckily, there exists a nice 3rd party library called <strong>JsonFileCreator</strong> which help us creating JSON files.
                    </p>
                    <p>
                        <strong>The goal is to implement the Adapter pattern, to be able to generate reports in JSON format.</strong>
                    </p>
                </div>
                <div>
                    <p class="center">
                        <a class="btn" href="{{ route('security_training_results.index') }}">
                            Go to the Application
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
