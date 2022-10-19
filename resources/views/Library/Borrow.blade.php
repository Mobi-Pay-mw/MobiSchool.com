<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrow a Book.</title>
</head>
<body>
    <form action="{{ URL('borrowstore') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <label for="date">Return Date</label>
        <input type="date" name="date" id="">
        @error('date')
            <p>Date should be greater than today.</p>
        @enderror
        <input type="submit" value="Borrow">
    </form>
</body>
</html>