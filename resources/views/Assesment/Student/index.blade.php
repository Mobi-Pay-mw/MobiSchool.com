<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Available Quiz</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    @if (count($exam) > 0)
        @foreach ($exam as $item)
            <article>
                <h3>{{ $item->Lesson->name." ".$item->name }}</h3>
                <a href="{{ 'quizshow/'.$item->id }}"><button>Take</button></a>
                <hr>
            </article>
        @endforeach 
    @else
        
    @endif
</body>
</html>