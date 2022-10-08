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
            <article>
                <h3>{{ $item->Lesson->name }}</h3>
                <h4>{{ $item->name }}</h4>
                <p>{{ $item->Status }}</p>
                <a href="{{ URL::to('assesshow/'.$item->id) }}"><button type="submit">View Questions</button></a>
                <a href="{{ URL::to('assesedit/'.$item->id) }}"><button type="submit">Update</button></a>
                <a href="{{ URL::to('assesdelete/'.$item->id) }}"><button type="submit">Delete</button></a>
            </article>
        @endforeach
    @endif
</body>
</html>