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
                    <p>
                        <a href="{{ route('security_training_results.index') }}">
                            Go to the Security Training Results page
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
