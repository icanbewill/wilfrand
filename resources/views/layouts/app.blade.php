<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wilfrand ATCHI</title>
    <meta name="description" content="Site Web de ATCHI Wilfrand, représentant son portfolio, son CV, et autres">
    <link rel="stylesheet" href="{{ asset('welcome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/style-starter.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/perso.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400&display=swap" rel="stylesheet">
    <style>
        /* Progress bar */
        *{
            font-family: "Karla", sans-serif; /* Default font */
        }
        #progress {
            width: 100%;
            border-radius: 10px;
            background-color: #f5ecec;
            padding: 7px 5px;
        }

        #fill {
            padding: 5px 5px;
            background-color: #ffc845;
            /* Fill colour */
            width: 30%;
            border-radius: 10px;
            animation: proanimate 2s;
        }

        #barpercent h3 {
            color: #707070;
            /* Bar percentage text colour */
            margin: 0;
            padding: 0;
            opacity: 1;
            animation: fadein 3s forwards;
        }

        /* Fades in animation */
        @keyframes fadein {
            from {
                opacity: 0;
            }
        }

        /* Animates bar on page load */
        @keyframes proanimate {
            from {
                width: 0%;
            }
        }

        @media screen and (max-width: 600px) {
            img {
                width: 60%;
            }

            h1 {
                font-size: 1.3em;
            }

            h2 {
                margin: 1.1em;
                font-size: 1.1em;
            }

            #progress {
                width: 80%;
                /* Bar width */
            }
        }

    </style>
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container" id="">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <span class="lostyle-1">W</span>
                        ilfrand
                    </a>
                </h1>

                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Qui suis-je ? </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Techs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Curriculum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactez-moi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ne cliquez pas ici !</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!--//header-->
    @yield('content')
    <!-- Js scripts -->
    <!-- move top -->
    {{-- <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button> --}}




    @section('scripts')

    @endsection
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{ asset('welcome/js/jquery-3.3.1.min.js') }}"></script>
    <!-- //common jquery plugin -->

    <!-- owl carousel -->
    <script src="{{ asset('welcome/js/owl.carousel.js') }}"></script>
    <!-- script for tesimonials carousel slider -->
    <!-- <script>
        $(document).ready(function () {
            $(".owl-wilfrand").owlCarousel({
                // loop: true,
                // nav: false,
                // margin: 50,
                responsiveClass: true,
                // autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: true,
            })
        })
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        var typed = new Typed('#typed', {
            strings: ['git push --force ^1000\n `fontions ....`', 'Mobile Dev.',
                '^2000Web Dev.', '^2000Googleur Professionnel',
                '^2000Beau &#128540 (^1000Oui, c\'est aussi une fonction)'
            ],
            smartBackspace: true,
            typeSpeed: 100,
            startDelay: 10,
            backSpeed: 30,
            autoInsertCss: true,
        });

    </script>

    <!-- magnific popup -->
    <script src="{{ asset('welcome/js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>
    <!-- //magnific popup -->

    <!-- theme switch js (light and dark)-->
    <script src="{{ asset('welcome/js/theme-change.js') }}"></script>

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('welcome/js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tsparticles/1.18.1/tsparticles.min.js"
        integrity="sha512-PYHWDEuXOTJ9MZ+/QHqkbgiEYZ+LImQv3i/9NyYOABFvK37e4q4Wg7aQDN1JpoGiEu1TYZh6JMrZluZox2gbDA=="
        crossorigin="anonymous"></script>
    <script>
        const particles = {
            "fpsLimit": 60,
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ff0000",
                    "animation": {
                        "enable": true,
                        "speed": 20,
                        "sync": true
                    }
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 3,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 20,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "links": {
                    "enable": true,
                    "distance": 100,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 0.8
                    },
                    "repulse": {
                        "distance": 200
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true,
            "background": {
                "color": "#000000",
                "image": "",
                "position": "50% 50%",
                "repeat": "no-repeat",
                "size": "cover"
            }
        };

        tsParticles.load('myVideo', particles);

    </script>

</body>

</html>
