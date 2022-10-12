<!-- audio book card -->
<div class="w3-card w3-white">

  <div class="w3-container w3-center">
    <h3>{{ $book->name }}</h3>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAkxdJVIlh-HQwPa3zLlF0wKcsWnPy54z7kg&usqp=CAU" alt="Avatar" style="width:50%">

    <button onclick="document.getElementById('id0{{ $book->id }}').style.display='block'" class="w3-button">Open Modal</button>
  </div>

</div>

<!-- The Modal -->
<div id="id0{{ $book->id }}" class="w3-modal w3-animate-zoom" style="height: 100%;">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id0{{ $book->id }}').style.display='none'"
      class="w3-button w3-red w3-display-topright">&times;</span>
      <h3>{{ $book->name }}</h3>
      <audio controls>
        <source src="{{ Storage::url( $book->url )}}" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
    </div>
  </div>
</div>