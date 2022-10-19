<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Assessment</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <a href="{{ URL::to('assesmake') }}"><button type="submit">Add</button></button></a>
    @if (count($asses) > 0)
        @foreach ($asses as $item)
            <x-asses :item="$item"/>
        @endforeach
    @endif
</body>
</html>