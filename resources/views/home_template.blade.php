<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Apps Feel</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/
        
        html,
        body{
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: #304a74;
        }
        
        .top-nav-collapse {
            background-color: #304a74;
        }
        
        footer.page-footer {
            background-color: #304a74;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        /* Scrollbar */

        ::-webkit-scrollbar {
            width: 8px;
        }
        /* Track */

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }
        /* Handle */

        ::-webkit-scrollbar-thumb {
            -webkit-border-radius: 0px;
            border-radius: 0px;
            background: #304a74;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }

        ::-webkit-scrollbar-thumb:window-inactive {
           background: #your-color;
        }

        /* Carousel*/
        
        .carousel {
            height: 95%;
            background-color: #304a74;
        }
        
        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }
        
        .carousel-item,
        .active {
            height: 100%;
        }
        
        .carousel-inner {
            height: 100%;
        }
        
        /*Caption*/
        
        .flex-center {
            color: #fff;
        }

    </style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="images/ex2.ico" class="img-fluid">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Apps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

   @yield('carousel')

    <br>

    <!--Content-->
    <div class="container">
        
        @yield('page_content')

    </div>
    <!--/.Content-->



    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">ABOUT APPS INVENTORY</h5>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    quis nostrud exercitation </p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">Recent Apps</h5>
                    <ul>
                        <li><a href="/music-player-1">Music Player</a></li>
                        <li><a href="/music-player-2">Music Player</a></li>
                        <li><a href="/root-checker">Root Checker</a></li>
                        <li><a href="/all-maths-formula">All Maths Formula</a></li>
                        <li><a href="/system-app-remover">System App Remover</a></li>
                        <li><a href="/apps-backup-and-reinstall">Apps Backup and Reinstall</a></li>
                    </ul>
                </div>
                <!--/.Second column-->


                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Follow Us on</h5>
                    <ul>
                        <li><a href="#!">Facebook</a></li>
                        <li><a href="#!">Instagram</a></li>
                        <li><a href="#!">Twitter</a></li>
                        <li><a href="#!">Pinterest</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="#" rel="nofollow"> Apps Inventory </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript">
        $('.navbar-nav li').click(function(e) {
            $('.navbar li.active').removeClass('active');
            var $this = $(this);
            if (!$this.hasClass('active')) {
                $this.addClass('active');
            }
            e.preventDefault();
        });
    </script>

    <script type="text/javascript">
        $('.carousel').carousel({interval:2000});
    </script>

</body>

</html>