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
    

    <x-partials.footer/>
    

    {{$script ?? ''}}
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>