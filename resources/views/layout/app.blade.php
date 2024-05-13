<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARSU-Lib</title>
    
    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/fafa53201f.js" crossorigin="anonymous" defer></script>

</head>
<body>


 
<nav style="display:flex;justify-content:space-evenly;align-items:center;">

  
        <h2> <strong>CSU</strong> LIBRARY</h2>

 <a href=""></a>

    <ul>


                  
      @auth
          @if(Auth::user()->role == "admin")
              <li> <a href="{{ route('add_books') }}"> ADD BOOKS </a></li>
          @endif

          
            <li><a href="{{ route('dashboard') }}"> HOME </a></li>
            <li><a href=""> CSU HOMEPAGE </a></li>
            <li><a href=""> PERSONNEL </a></li>
            <li><a href=""> SECTION GALLERY</a></li>
            <li><a href=""> ONLINE ACCESS </a></li>
            <li><a href=""> FEATURES </a></li>
            <li><a href=""> ABOUT US </a></li>
            <li><a href=""> SERVICES </a></li>
            <li><a href="{{ route('recommendations') }}"> RECOMMENDATION </a></li>
            <li><a href=""> ABOUT US </a></li>

      @endauth


           
        </ul>



        <form action="{{ route('logout') }}" method="POST">
        @csrf
          <button id="logout-btn">LOGOUT</button>
      </form>


</nav>






  @yield('contents')





  <footer>


      <div class="informations">

            <div class="informationContainer">
                  <h3>Undergraduate</h3>

                  <div>
                    <span class="information-date">Monday-Friday</span>
                    <span>8:00 AM - 6:00 PM</span>
                  </div>

                  <span>No Noon Break</span>
                  <div>
                    <span class="information-date">Saturday</span>
                    <span>8:00 AM - 12:00 PM</span>
                  </div>
            </div>



            <div class="informationContainer">

                <div class="informationContainer">
                      <h3>Graduate</h3>

                      <div>
                        <span class="information-date">Monday-Friday</span>
                        <span>8:00 AM - 6:00 PM</span>
                      </div>

                      <span>No Noon Break</span>


                      <div>
                        <span class="information-date">Saturday</span>
                        <span>8:00 AM - 12:00 PM</span>
                      </div>
                </div>
            </div>
            
      </div>



      <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.147102095922!2d125.59318287410069!3d8.958589990089028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301eac565a4abe5%3A0x87859279e2e3f66a!2sCaraga%20State%20University!5e0!3m2!1sen!2sph!4v1714528160798!5m2!1sen!2sph" width="450" height="220" style="border:0;border-radius:7px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>



      <div class="social-media-container">

          <h3>follow us on:</h3>

            <button class="social-media"><i class="fa-brands fa-facebook-f"></i> Facebook</button>
            <button class="social-media"><i class="fa-brands fa-instagram"></i> Instagram</button>
            <button class="social-media"><i class="fa-brands fa-google"></i> Gmail</button>
            

      

      </div>


  </footer>






  <!-- ======= Footer ======= -->
 

    
</body>
</html>