<link rel="stylesheet" href="https://classless.de/classless.css">
<h1>SIGN IN</h1>
<form method="POST" action="/session">
    @csrf
    <div>
 
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    Email<br>
                    <input 
                        name="email"
                        required
                        type="email"
                        id="email"
                        value="{{old('email')}}"
                        > 

                </div> <!-- form-group// -->

                       
                        
                <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                       Password<br>
                        <input 
                            name="password"  
                            type="text"
                            required
                            id="password"
                            value="{{old('password')}}"
                            >

                </div><!-- form-group// -->

                <div>
                   
                   <button type="submit">
                   Login
                   </button>
               </div>

               @if($errors->any())
                  <ul>
                      @foreach($errors->all() as $error)
                          <li class="text-danger p-1 m-1 text-left" style="font-size: small;"> {{$error}} </li>
                      @endforeach
                  </ul>

                @endif

              <p class="mt-3 mb-0 text-muted">© 2021–2022</p>

</form>
