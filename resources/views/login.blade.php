<link rel="stylesheet" href="https://classless.de/classless.css">
<h1>SIGN IN</h1>
<form method="POST" action="/login">
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
