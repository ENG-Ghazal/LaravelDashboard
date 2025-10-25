<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <title>
         complete responsive Food website design
        </title>
        <!-- fontawesom links  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.css') }}" >
        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    </head>
<body>

    <!-- header section starts  -->
    <header>
    <a href="#" class="logo"><i class="fas fa-book"></i>School</a>
    <div id="menu-bar" class="fas fa-bars"> </div>
    <nav class="navbar">
    <a href="#home">home</a>
    <a href="#Courses">Courses</a>
    <a href="#Students">Students</a>
    <a href="#HeadMaster">HeadMaster</a>
    <a href="#Teachers">Teachers</a>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    </nav>
    </header>
    <!-- header section ends -->

     <!--home section starts  -->
     <section class="home" id="home">
           <div class="content">
             <h3>Make Learning Better </h3>
             <p>
                 Lorem ipsum dolor, sit amet consectetur
                  adipisicing elit. Quod fugiat, ea repellendus sed,
                  fugit debitis laudantium quae
                   distinctio architecto asperiores
                   voluptate facilis minus voluptatibus pariatur,
                 repellat ipsam totam modi. Sit.
             </p>
            <a href="#" class="btn">Register now</a>
           </div>
           <div class="image">
                        <img src="{{ asset('frontend/images/home-image.jpeg') }}" alt="nnn">
           </div>
     </section>
     <!-- home section ends  -->

    <!-- custom js files -->
    <script src="{{ asset('frontend/js/script.js') }}"> </script>

</body>

</html>
