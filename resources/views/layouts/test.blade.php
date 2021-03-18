<!doctype html>
<html lang="en">

<head>
    <title>Family Bazar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="{{ asset('https://kit.fontawesome.com/557e2fff86.js') }}" crossorigin="anonymous"></script>
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,400;1,700&display=swap') }}"
        rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('frontend/contact/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/contact/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/contact/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/contact/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/contact/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/contact/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/contact/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">


</head>

<body>
    <section>

        <!-- -----Nav------ -->
        <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color" id="main-navbar">
            <div class="container">
                <a style="color: #1d7d63;" href="{{ route('index') }}" class="navbar-brand">
                    Family Bazar
                </a>
                <div class="order-lg-last btn-group">
                    <a href="{{ route('show-cart') }}"><i class="fas fa-shopping-cart fa-2x"></i></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav"
                    aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="myNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-link">
                            <a href="{{ route('index') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-link">
                            <a href="{{ route('all.category') }}" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-link">
                            <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <!-- -------End Nav-------- -->


    </section>

    @yield('content')



    <!-- -----------------End of team section-------------------- -->

    <!-- ------------------footer start ---------------------------- -->
    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-about wow fadeInUp">
                        <a style="color: #1d7d63;" href="{{ route('index') }}" class="navbar-brand">
                            Family Bazar
                        </a>
                        <p id="footer-p">
                            Following government COVID-19 guidelines we are open between 12-2:00pm every day & between
                            5:30-10:00pm every evening.

                        </p>
                        <p id="footer-p">
                            Ashiana Spice was created with great cuisine, outstanding service and our customers in mind.
                            For nearly 10 years we have been continuously growing our restaurant and we are proud to
                            consistently deliver on our promise to you.
                        </p>
                    </div>
                    <div class="col-md-4 offset-md-2 footer-contact wow fadeInDown">
                        <h3>Contact</h3>
                        <p id="footer-contact-botton"><i class="fas fa-map-marker-alt"></i> We are situated on 7 Baldock
                            Street, Royston. SG8 5AY.
                        </p>
                        <p id="footer-contact-botton"> Feel free to give us a ring and we will answer as soon as
                            possible.</p>
                        <p id="footer-contact-botton"><i class="fas fa-phone"></i> Phone: (+88) 01763 246060</p>
                        <p id="footer-contact-botton"><i class="fas fa-phone"></i> Phone: (+88) 01763 246090</p>
                        <p id="footer-contact-botton"><i class="fas fa-envelope"></i> Email: <a
                                href="bookings@ashiana-spice.co.uk">bookings@ashiana-spice.co.uk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        &copy; by <a href=""> Family Bazar 2019
                            All Rights Reserved </a>
                    </div>
                    <div class="col-md-6 footer-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a style="text-decoration: none;" href="bookings@family-bazar.co.uk"><i
                                class="far fa-envelope"></i>
                            bookings@family-bazar.co.uk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ------------------end of footer-------------------------------- -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.min.js') }}"></script>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

    </script>

</body>

</html>
