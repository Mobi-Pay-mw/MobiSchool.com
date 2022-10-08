<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make a Question</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <form action="{{ URL('queupdate/'.$que->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="question">Question</label>
        <textarea name="question" id="" cols="30" rows="3">{{ $que->question }}</textarea>
        <label for="answer">Answer</label>
        <textarea name="answer" id="" cols="30" rows="3">{{ $que->answer }}</textarea>
        <label for="marks">Marks</label>
        <input type="number" name="marks" id="" value="{{ $que->marks }}">
        <label for="option1">Option 1</label>
        <textarea name="option1" id="" cols="30" rows="3">{{ $que->Option_1 }}</textarea>
        <label for="option2">Option 2</label>
        <textarea name="option2" id="" cols="30" rows="3">{{ $que->Option_2 }}</textarea>
        <label for="option3">Option 3</label>
        <textarea name="option3" id="" cols="30" rows="3">{{ $que->Option_3 }}</textarea>
        <label for="option4">Option 4</label>
        <textarea name="option4" id="" cols="30" rows="3">{{ $que->Option_4 }}</textarea>
        <input type="submit" value="Submit">
    </form>
    <a href="{{ URL::to('asses') }}"><button>Back</button></a>
</body>
</html>