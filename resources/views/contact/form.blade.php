<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a car Ireland</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Full-screen background video */
        #myVideo {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        /* Layout container */
        .content {
    display: grid;
    grid-template-columns:  1fr 550px;/* Left section smaller, form section larger */
    gap: 30px;
    align-items: center;
    height: 100vh;
    padding: 0 30px;
}
        .content2 {
            display: flex;
            justify-content: space-between; /* Spacing between left and right sections */
            align-items: center;
            height: 100vh; /* Full height */
            padding: 0 80px;
           
            color: white;
        }


        /* Book Your Car (Left Side) */
        .left-section {
            max-width: 300px;
            text-align: left;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-left: 50px;
        }

        .right-section {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 70%;
    margin-left: 25px;
}
        /* Form (Right Side) */
        .right-section form {
    flex: 2.0;
    width: 50%;
    max-width: 500px;
    background: rgba(255, 255, 255, 0.8);
    padding: 50px;
    border-radius: 10px;
    color: black;
}

        /* Navbar background */
        .navbar {
            background: rgba(255, 255, 255, 0.8) !important;
            top: 0;
            box-sizing: border-box;margin: 0.5rem;
  height: 100%;
  width: 85%;
  border: 2px solid grey;
  margin-left: 5%;
  background-color: transparent;
  border-radius: 1em;
  position: sticky;
 
}


.navbar-nav > li{
  padding-left:30px;
  padding-right:30px;
}
            
            ;
        
        /* Pause button */
        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: black;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }

        #myBtn:hover {
            background: gray;
        }
        div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  width: 100%;
  text-align: left;
  color:black;
}

#example1 {
  background-color: whitesmoke;
  background-size: 300px 100px;
}

.btns {
    
    display: block;
  width: 100%;
  border: none;
  background-color: #04AA6D;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
        

}

ul li {

}


.btns:hover {
  background-color: #ddd;
  color: black;
}

.topnav-right {
  float: right;
}
</style>
</head>
<div>
    
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        
            <a class="navbar-brand" href="#">

            <img src="{{URL('/images/Logo.jpg')}}" class="rounded-circle"  width="150" height="50" >

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  
       
                    <li class="nav-item"><a class="nav-link"  href="#" onClick="document.location.href='contact'" >Home</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="#" onClick="document.location.href='second'">About us</a></li>

                    <li class="nav-item"><a class="nav-link" href="#">Our Vision</a></li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- Video Background -->
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('videos/Cars.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Main Content with Two Sections -->
    <div class="content">
        
        <!-- Left Section (Book Your Car) -->
        <div class="left-section">
            <h1>Book Your Car</h1>
            <p>Find the best car rental deals for your next journey.</p>
            <button class="btn btn-primary">Book Now</button>
            <button class="btn btn-primary">Call Us</button>
        </div>

        <!-- Right Section (Contact Form) -->
        <div class="right-section">
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <h2>Contact Us</h2>

                @if(Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
              

                
                <div class="row">
                <div class="col">

                     <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required placeholder="Enter Name">
                </div>
               

                <div class="col">
               
                    <label for="email" class="form-label">Email:</label> 
                    <input type="email" class="form-control" name="email" id="email" required placeholder="Enter Email">
                </div>
                
</div>
<div class="row">
                <div class="col">
                    <label for="pickupdate" class="form-label">Pick up:</label>
                    <input type="date" class="form-control" id="pickupdate" name="pickupdate">
                
</div>
                
                <div class="col">
                    <label for="dropoffdate" class="form-label">Drop off:</label>
                    <input type="date" class="form-control" id="dropoffdate" name="dropoffdate">
                </div>
</div>

<p>
</p>
<label for="pickupdate" class="form-label">Age:</label>
<select name="cars" id="cars">
    <option value="volvo">21</option>
    <option value="saab">22</option>
    <option value="opel">23</option>
    <option value="audi">24</option>
    <option value="audi">25</option>
    <option value="audi">26</option>
    <option value="audi">27</option>
    <option value="audi">28</option>
    <option value="audi">29</option>
    <option value="audi">30+</option>
  </select>

                <div class="col">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" name="message" id="message" rows="3" required placeholder="Enter Message"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Send Message</button>
            </form>

            </div>
          </div>
    
          <form>
 
      </div>
    

      
</div>
    
    

<div id="example1">
   <div class="content2">
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="{{URL('/images/FIA002.jpg')}}" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">
  <p>From €26/Day</p>
 <p>4 Seats</p> 
 <p>1 Large Luggage</p>
 
  </div>
  
<button class="btns"> Book</button>
</div>


<div class="gallery">
  <a target="_blank" href="img_forest.jpg" >
    <img src="{{URL('/images/TOY015-1038x692.jpg')}}" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">
 <p>From €34/Day</p> 
<p>5 Seats</p>
<p>2 Large Luggage</p>

</div>

<button id="myButton"  class="btns" > Book</button>

</div>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "www.yoursite.com";
    };
</script>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="{{URL('/images/MAZ021-1038x692.jpg')}}" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">
<p>From €38/Day</p> 
<p>5 Seats</p>
<p>3 Large Luggage</p>

</div>

<button class="btns"> Book</button>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="{{URL('/images/HOL023.jpg')}}" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">
    <p>From €99/ day</p>
<p>8 Seats</p>
<p>3 large Luggages</p>
</div>

<button class="btns"> Book</button>
  </div>
</div>
  

</div>
</div>

<div id ="example1">

<!-- Elfsight Google Reviews | Untitled Google Reviews -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-23e9a4bc-cf1f-4f03-a1e1-2de094f0f378" data-elfsight-app-lazy></div>

</div>

<div id = "example1">
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Move
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Cars</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Bikes</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Scooters</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vans</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Perth, Doubleview, Aus</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2025 Move Copyright
  
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>
    <script>
        function toggleVideo() {
            var video = document.getElementById("myVideo");
            var btn = document.getElementById("myBtn");
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }
    </script>

</body>
</html>
