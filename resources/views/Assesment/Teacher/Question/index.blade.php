<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View all Questions</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <a href="{{ URL::to('asses') }}"><button type="submit">Back</button></a>
    <a href="{{ URL::to('quemake/') }}"><button type="submit">Add Question</button></a>
    {{-- @if (count($asses) > 0) --}}
        @foreach ($asses as $item)
            <article>
                <h3>{{ $item->question }}</h3>
                <hr>
                <label for=""><input type="radio" name="option[{{ $item->id }}]" id="" value="{{ $item->Option_1 }}">{{ $item->Option_1 }}</label>
                <label for=""><input type="radio" name="option[{{ $item->id }}]" id="" value="{{ $item->Option_2 }}">{{ $item->Option_2 }}</label>
                <label for=""><input type="radio" name="option[{{ $item->id }}]" id="" value="{{ $item->Option_3 }}">{{ $item->Option_3 }}</label>
                <label for=""><input type="radio" name="option[{{ $item->id }}]" id="" value="{{ $item->Option_4 }}">{{ $item->Option_4 }}</label>
                <hr>
                <p>The correct answer is {{ $item->answer }}</p>
                <p>This question consist of {{ $item->marks }}</p>
                <hr>
                <a href="{{ URL::to('queedit/'.$item->id) }}"><button>Edit</button></a>
                <a href="{{ URL::to('quedelete/'.$item->id) }}"><button>Delete</button></a>
                <hr>
            </article>
        @endforeach
    {{-- @endif --}}

</body>
</html>