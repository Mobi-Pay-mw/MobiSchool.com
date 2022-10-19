<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrowed Books</title>
    <link rel="stylesheet" href="assets/css/w3css/w3.css" type="text/css">
</head>
<body>
    @if (count($borrowed) > 0)
        <div class="w3-green w3-container w3-quarter w3-margin">
        @foreach ($borrowed as $item)
        @foreach ($item->books as $book)
            
            <div class="w3-card w3-white">
                <div class="w3-container w3-center">
                   <h3>{{ $book->name }}</h3>
                    <hr>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAkxdJVIlh-HQwPa3zLlF0wKcsWnPy54z7kg&usqp=CAU" alt="Avatar" style="width:50%">
                    <hr>
                    <button onclick="document.getElementById('id0{{ $item->id }}').style.display='block'" class="w3-button">Open Modal</button>

                    {{-- @if (Auth::user('student'))
                    <a href="{{ URL::to('borrow/'.$value->id) }}" class="site-btn">Borrow</a>
                    @endif --}}
                </div>
            </div>

        @endforeach
        @endforeach
        </div>
    @endif
    <!-- The Modal -->
    
    <div id="id0{{ $item->name }}" class="w3-modal w3-animate-zoom" style="height: 100%;">
        <div class="w3-modal-content">
            <div class="w3-container">
            <span onclick="document.getElementById('id0{{ $item->id }}').style.display='none'"
            class="w3-button w3-red w3-display-topright">&times;</span>
            <h3>{{ $item->id }}</h3>
            <embed allow="fullscreen" fetchpriority="auto" src="{{ Storage::url( $item->url ).'#toolbar=0' }}" frameborder="1" style="width: 100%; height: 1000px;"></embed>
            </div>
        </div>
    </div>
</body>
</html>