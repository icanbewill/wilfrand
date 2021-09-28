<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wilfrand ATCHI</title>
    <meta name="description" content="Wilfrand ATCHI, Développeur 360°, et exprit créatif qui, à l'aide d'un clavier QWERTY essaie de donner vie à vos rêves !">
    <meta name="keyword" content="Wilfrand, ATCHI, developer, Wilfrand ATCHI, wilfrand.com, Portfolio wilfrand, site web wilfrand">

    <meta property="og:title" content="Wilfrand ATCHI | Developer"/>
    <meta property="og:description" content="JavaScript wizard, chaotic good" />
    {{-- <meta property="og:image" content="https://example.com/image.jpg"/> --}}
    <meta property="og:url" content="https://wilfrand.com" />
    <meta property="og:type" content="website" />
    <meta name="google-site-verification" content="YQx-FsydDSd2OdsqeDIykulNO1u49W3nQNzfQ_8UTE0" />
    <link rel="stylesheet" href="{{ asset('welcome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/style-starter.css') }}">
    <link rel="stylesheet" href="{{ asset('welcome/css/perso.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        /* Progress bar */
        * {
            font-family: "Karla", sans-serif;
            /* Default font */
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
            width: 65%;
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
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('/') }}">
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
                            <a class="nav-link" href="#about">A Popos de moi </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Techs</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Curriculum</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contactez-moi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog !</a>
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

    <!-- footer -->
    <footer id="footer" class="w3l-footer-22 py-5">
        <div class="container py-md-5 py-4">
            <div class="row sub-columns">
                <div class="col-lg-4 col-sm-6 sub-one-left">
                    <h6>À Propos </h6>
                    <p>Loin d'être un simple portfolio, ce site se veut être un mirroir de ma personnalité.</p>
                    <div class="columns-2">
                        <ul class="social">
                            <li><a href="https://facebook.com/wilfrand.atchi" title="facebook"><span
                                        class="fab fa-facebook-f" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/mrwilfrand/" title="linkedin"><span
                                        class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="https://twitter.com/mrwilfrand" title="twitter"><span class="fab fa-twitter"
                                        aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-5">
                    <h6>Mes services</h6>
                    <ul>
                        <li><a href="{{ route('/') }}"><span class="fas fa-angle-right mr-2"></span>Développement
                                Web</a>
                        </li>
                        <li><a href="{{ route('/') }}"><span class="fas fa-angle-right mr-2"></span>Développement
                                Mobile</a>
                        </li>
                        <li><a href="{{ route('/') }}"><span class="fas fa-angle-right mr-2"></span>Développement
                                AI</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 sub-two-right mt-lg-0 mt-sm-5 mt-4">
                    <h6>Liens rapides</h6>
                    <ul>
                        <li><a href="{{ route('/') }}"><span class="fas fa-angle-right mr-2"></span>Accueil</a>
                        </li>
                        <li><a href="{{ route('/') }}"><span class="fas fa-angle-right mr-2"></span>A Propos</a>
                        </li>
                        <li><a href="{{ route('/') }}"><span
                                    class="fas fa-angle-right mr-2"></span>Contactez-moi</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-4">
                    <h6>Support</h6>
                    <ul>
                        <li><a href="{{ route('/') }}"><span class="fas fa-angle-right mr-2"></span>Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="sub-contact mt-5 pt-lg-4">
                <div class="row">
                    <div class="col-md-4 footer-contact d-flex align-items-center">
                        <span class="fas fa-envelope-open" aria-hidden="true"></span>
                        <div>
                            <a href="mailto:atchiwilfrand@gmail.com">atchiwilfrand@gmail.com</a>
                            <p>Déposez-moi un joli message</p>
                        </div>
                    </div>
                    <div class="col-md-4 footer-contact d-flex align-items-center active">
                        <span class="fas fa-phone-alt" aria-hidden="true"></span>
                        <div>
                            <a href="tel:+229 XX XX XX XX">+229 XX XX XX XX</a>
                            <p>Appelez-moi (si vous décodez le numéro)</p>
                        </div>
                    </div>
                    <div class="col-md-4 footer-contact d-flex align-items-center">
                        <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                        <div>
                            <h5> Planète Terre, Continent A.</h5>
                            <p>Retrouvez-moi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="columns">
                    <p>@2021 Tous droits reservés !
                        <a href="https://wilfrand.com/"> YINWE</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //copyright -->
    </footer>
    <!-- //footer -->




    @section('scripts')

    @endsection

    <script src="{{ asset('welcome/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('welcome/js/owl.carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        var typed = new Typed('#typed', {
            strings: ['git push --force ^1000\n `fontions ....`', 'Je suis Développeur Mobile.',
                '^2000Je suis Développeur Web.', '^2000Je suis Googleur',
                '^2000Je suis Gentil à certains moments (^1000Oui, c\'est aussi un métier)'
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
