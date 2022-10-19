<!-- pdf card -->
<div class="w3-card w3-white">

  <div class="w3-container w3-center">
    <h3>{{ $book->name }}</h3>
    <img src="https://st2.depositphotos.com/1055089/5923/v/950/depositphotos_59232215-stock-illustration-modern-vector-book-cover-template.jpg" alt="Avatar" style="width:50%">
    <hr>  
    {{-- @if (Auth::user('administrator')) --}}
      <button onclick="document.getElementById('id0{{ $book->id }}').style.display='block'" class="w3-button">Open Modal</button>
    {{-- @endif --}}
    @if (Auth::user('student'))
      <a href="{{ URL::to('borrow/'.$book->id) }}" class="w3-button">Borrow</a>
    @endif
  </div>

</div>

<!-- The Modal -->
<div id="id0{{ $book->id }}" class="w3-modal w3-animate-zoom" style="height: 100%;">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id0{{ $book->id }}').style.display='none'"
      class="w3-button w3-red w3-display-topright">&times;</span>
      <h3>{{ $book->name }}</h3>
      <embed allow="fullscreen" fetchpriority="auto" src="{{ Storage::url( $book->url ).'#toolbar=0' }}" frameborder="1" style="width: 100%; height: 1000px;"></embed>
    </div>
  </div>
</div>