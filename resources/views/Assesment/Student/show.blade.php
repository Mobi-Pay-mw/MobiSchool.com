<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <form action="{{ URL('quizstore') }}" method="post">
        @csrf
        @foreach ($exam as $item)
        {{-- {{ $x = array() }} --}}
            <h3>{{ $item->question }}</h3>
            {{-- <input type="hidden" name="que[{{ $item->id }}]" value="{{ $item->id }}"> --}}
            {{-- <input type="hidden" name="question_id" value="{{ $item->id }}"> --}}
            <hr>
            <label for="">
                <input type="radio" name="option[{{ $item->id }}]" id="" value="{{ $item->Option_1 }}">{{ $item->Option_1 }}
            </label>
            <label for="">
                <input type="radio" name="option[{{ $item->id }}]" id="" value="{{ $item->Option_2 }}">{{ $item->Option_2 }}
            </label>
            <label for="">
                <input type="radio" name="option[{{ $item->id }}]" id="" value="{{ $item->Option_3 }}">{{ $item->Option_3 }}
            </label>
            <label for="">
                <input type="radio" name="option[{{ $item->id }}]" id="" value="{{ $item->Option_4 }}">{{ $item->Option_4 }}
            </label>
            <hr>
        @endforeach
        <input type="submit" value="Submit">
    </form>
</body>
</html>