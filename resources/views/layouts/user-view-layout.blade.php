<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title ?? 'Joeys Ramen house'}}</title>
    
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.6.0-web\css\all.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

    <style>
      *{
      font-family: "Architects Daughter", cursive;
      font-weight: 400;
      font-style: normal;
    }
    

        .btn-custom {
      width: 100%;
      max-width: 200px; /* Set a max width */
      min-width: 100px; /* Set a minimum width */
      text-align: center;
    }

    .overlay-container {
  position: relative;
  width: 100%;
  height: auto; /* Allows height to adjust based on content */
}

.overlay-container img {
  width: 100%; /* Makes the image fluid */
  height: auto; /* Keeps the aspect ratio */
  display: block; /* Removes bottom space in some browsers */
}

.overlay-text {
  position: absolute;
  top: 50%;
  left: 0; /* Aligns to the left */
  right: 0; /* Ensures it stretches to the right */
  transform: translateY(-50%); /* Center the text vertically */
  text-align: center; /* Center the text */
  color: rgba(255, 255, 255, 0.9); /* Light color for contrast */
  background-color: rgba(0, 0, 0, 0.644); /* Gray background with transparency */
  padding: 100px; /* Add some padding for better readability */
  border-radius: 10px; /* Optional: rounded corners */
}

h1 {
  font-size: 8vw; /* Responsive font size based on viewport width */
  margin: 0; /* Removes default margin */
}

p {
  color: rgb(223, 222, 222);
  font-size: 1vw; /* Responsive font size based on viewport width */
}

.card-img {
            max-width: 100%;  /* Ensures the image doesn't exceed the container width */
            max-height: 200px; /* Adjust the height to your desired card size */
            object-fit: cover; /* Ensures the image covers the area without distorting */
}



    </style>
</head>
<body style="background-color: #04030F">

    <x-partials.navbar/>

    <div>
        {{$slot}}
    </div>
    

    <!-- Footer -->
<footer class="text-center text-lg-start  text-muted" style="background-color: #04030F">
    <!-- Section: Social media -->
    <section class="d-flex pt-5 justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span class="text-white">Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
       
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
            <h6 class="text-uppercase text-white fw-bold mb-4">
              <i class="fas  "></i>Company name
            </h6>
            <p>
              JOEY'S RAMEN HOUSE 
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-white">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Ramen</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-white" >
              Links
            </h6>
            <p>
              <a href="https://www.facebook.com/p/JoeyS-RAMEN-HOUSE-100063778308490/" target="_blank" class="text-reset">Facebook</a>
            </p>
            <p>
              <a  href="https://www.instagram.com/explore/locations/281627251691151/joeys-ramen-house-pagadian-branch/" target="_blank" class="text-reset">Twitter</a>
            </p>
           
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-white">Direct Info</h6>
            <p><i class="fas "></i>Ozamiz City - LEDESMA EXTENSION tapat ng PARKING LOT ng chowking drivethru, Philippines</p>
            <p><i class="fas  "></i>Pagadian City - BRANCH PUROK ESMERALDA B. SABATE ST. BRGY. SAN JOSE DISTRICT, Philippines</p>
            <p>
              <i class="fas"></i>
              yeoj_po@yahoo.com
            </p>
            <p><i class="fas "></i>0917 770 4309</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4 text-white" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2025 Copyright:
      <a class="text-reset fw-bold text-white" href="https://mdbootstrap.com/">joeysramenhouse.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    

    {{$script ?? ''}}
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>