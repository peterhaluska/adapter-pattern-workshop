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
                    Security Training Results
                </small>
            </div>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th class="center">Attended test on</th>
                        <th class="center">Score</th>
                        <th class="center">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainingEntries as $trainingEntry)
                        <tr>
                            <td>{{ $trainingEntry->getEmployeeId() }}</td>
                            <td>{{ $trainingEntry->getEmployeeName() }}</td>
                            <td class="center">{{ $trainingEntry->getAttendedAtDate() }}</td>
                            <td class="center">{{ $trainingEntry->getScore() }}</td>
                            <td class="center">{{ $trainingEntry->getGrade() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-wrapper">
            <a href="{{ route('download_security_training_results.show') }}">
                Download the Results
            </a>
        </div>
    </div>
</div>
</body>
</html>
