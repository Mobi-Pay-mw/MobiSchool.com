<div class="w3-card w3-white">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAkxdJVIlh-HQwPa3zLlF0wKcsWnPy54z7kg&usqp=CAU" alt="Avatar" style="width:50%">
    <hr>
    @if (Auth::user('student'))
      <a href="{{ URL::to('borrow/'.$item->id) }}" class="site-btn">Borrow</a>
    @endif
</div>