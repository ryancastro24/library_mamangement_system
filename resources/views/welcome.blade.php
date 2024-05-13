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
      


            <form  action="{{ route('loginSave') }}" method="POST">


            @csrf

                <div class="logo-container">
                    <img src="/assets/img/csu_logo.png" alt="">
                    <div>
                        <h2>CARSU-LIB</h2>
                        <h5>Caraga State Univesity</h5>
                    </div>
                </div>


                <h4 style="text-align: center; font-weight:400">LOGIN FORM</h4>



                <div id="input-field-container">
                    
                    <div class="input-field">
                        <label for="idNumber">Id Number</label>
                        <input type="text" name="idnumber" placeholder="Enter Id Number" required id="idNUmber">
                    </div>


                    <div class="input-field">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" required id="password">
                    </div>

                
                </div>

                <button id="login-btn" type="submit">LOGIN</button>


                <h4>don't have an account? <a href="{{ route('register') }}">register</a></h4>


                <h6>Copyright © 2023 | Privacy Policy</h6>

                
            </form>

        </main>
    </body>
</html>
