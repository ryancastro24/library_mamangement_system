<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     
        <link href="{{ asset('assets/styles.css') }}" rel="stylesheet" />

        <!-- Styles -->
       
    </head>
    <body>

        <main>
      


            <form id="register-form"  action="{{ route('registerSave') }}" method="POST">

                @csrf

                <div class="logo-container">
                    <img src="/assets/img/csu_logo.png" alt="">
                    <div>
                        <h2>CARSU-LIB</h2>
                        <h5>Caraga State Univesity</h5>
                    </div>
                </div>


                <h4 style="text-align: center; font-weight:400">REGISTER FORM</h4>



                <div id="input-field-container">


                    <div class="input-field-container-inner">
                    
                        <div class="input-field">
                            <label for="idNumber">Id Number</label>
                            <input required type="text" name="idnumber" placeholder="Enter Id Number"  id="idNUmber">
                        </div>

                        <div class="input-field">
                            <label for="idNumber">Name</label>
                            <input required type="text" name="name" placeholder="Enter Name"  id="idNUmber">
                        </div>

                    </div>



                    <div class="input-field-container-inner">

                        <div class="input-field">
                            <label for="email">Email</label>
                            <input required type="email" name="email" placeholder="Enter Email"  id="email">
                        </div>


                        <div class="input-field">
                            <label for="password">Password</label>
                            <input required name="password" type="password" placeholder="Enter Password"  id="password">
                        </div>

                     
                    </div>

                
                </div>

                <button id="login-btn" type="submit">REGISTER</button>


              
                
                <h4>don't have an account? <a href="{{ route('home') }}">login</a></h4>

                <h6>Copyright © 2023 | Privacy Policy</h6>

                
            </form>

        </main>
    </body>
</html>
