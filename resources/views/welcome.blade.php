@extends('layouts.app')

@section('content')

    <!-- banner section -->
    <section class="banner-19">
        <div class="banner-layer">
            <div id="myVideo">

            </div>
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <!-- if logo is image enable this
                                                                    <a class="logo" href="index.html">
                                                                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                                                    </a> -->
                        <h4>Hello, je suis Wilfrand ... </h4>
                        <p class="mb-5">Et ceci est mon monde </p>
                        <span class="" id="typed"></span>
                        <div></div>
                        {{-- <a data-toggle="modal" data-target="#exampleModalCenter"
                            class="btn btn-style-simple mt-md-1 mt-1 text-uppercase">Admirer mon sourire</a>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Le sourire de Wilfrand</h5>
                                        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                    </div>
                                    <div class="modal-body owl-wilfrand">
                                        <img style="width:100%;max-width:800px"
                                            src="https://images.pexels.com/photos/7915428/pexels-photo-7915428.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                            alt="Wilfrand ATCHI">
                                        <div>
                                            <p style="color: rgb(56, 43, 43);">Evidemment, c'est pas moi &#128540; !</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-style-simple btn-sm"
                                            data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        <div id="progress" class="mt-5">
                            <div id="fill">
                                <div id="barpercent">
                                    <h3>65%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- about section -->
    <div id="about" class="w3l-content-photo-5 py-5">
        <div class="container py-lg-5 py-sm-4">
            <div class="row align-items-center">
                <div class="col-lg-6 content-image order-lg-first order-last">
                    <a href="#image"><img src="{{ asset('welcome/images/img2.jpg') }}" class="img-responsive"
                            alt="content-photo"></a>
                </div>
                <div class="col-lg-6 col-md-10 mx-auto content-right mb-lg-0 mb-5 pl-lg-5 order-lg-last order-first">
                    <h5 class="small-title-2">JE SUIS</h5>
                    <h3 class="title-style-2">AMATEUR DE SOLUTIONS CREATIVES.</h3>
                    <p class="my-3">Je pourrais dire que je suis <strong>juste un autre deV (Just another one)</strong>,
                        mais ce n'est pas le cas... (enfin, un peu quand-même hein).</p>
                    <p class="border-top-w3l pt-4 mt-4">
                        Anyway, je sais dire que je fais partie de ces jeunes là qui en ont plein la tête, et qui s'essaient
                        à donner, à partir de leur clavier AZERTY - d'un écran - et d'une paire d'écouteurs, un autre sens à
                        la vie des autres.
                    </p>
                    <br>
                    <p>
                        Non, je ne connais pas les mecs sur l'image à gauche.
                    </p>

                    <a href="#small-dialog" class="popup-with-zoom-anim d-flex align-items-center mt-md-5 mt-4">
                        NE PAS CLIQUER ICI
                    </a>

                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide text-justify">
                        <div class="mb-5">
                            <img src="{{ asset('welcome/images/curieux.jpg') }}" class="img-responsive curieux mx-auto"
                                alt="content-photo">
                        </div>
                        La curiosité n’a rien de mauvais. Elle ne le devient que lorsqu’elle est mal orientée. Mais il est
                        bien possible de se sortir de l’impasse si on apprend à se connaître et à se faire soi-même
                        confiance.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- services section -->
    <div class="service-section py-2">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 section-heading">
                    <h5 class="small-title-2">Mes Services</h5>
                    <h3 class="title-style-2">
                        Ce que je fais</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative border-0">
                            <a href="">
                                <img class="d-block img-responsive" src="{{ asset('welcome/images/s4.jpg') }}"
                                    alt="card-image">
                            </a>
                        </div>
                        <div class="card-body service-details w3l-skills">
                            <a href="" class="service-heading">Développement Mobile</a>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">Ionic Framework</li>
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">Flutter Framwework</li>
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">Kotlin (Learning)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative border-0">
                            <a href="">
                                <img class="d-block img-responsive" src="{{ asset('welcome/images/s5.jpg') }}"
                                    alt="card-image">
                            </a>
                        </div>
                        <div class="card-body service-details w3l-skills">
                            <a href="" class="service-heading">Développement Web</a>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">Laravel / October CMS </li>
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">AngularJS / VueJS</li>
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">Wordpress / NodeJS (Learning)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative border-0">
                            <a href="">
                                <img class="d-block img-responsive" src="{{ asset('welcome/images/s2.jpg') }}"
                                    alt="card-image">
                            </a>
                        </div>
                        <div class="card-body service-details w3l-skills">
                            <a href="services.html" class="service-heading">Développement IA</a>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 35%"
                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">Python (Learning) </li>
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">Laravel Botman</li>
                                <li class="list-group-item" style="padding: 0.75rem 0rem;">   </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="timeline_area section_padding_130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center">
                    <h6>Our History</h6>
                    <h3>A brief stories of our 2 years company journey</h3>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Timeline Area-->
                <div class="apland-timeline-area">
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Near Future</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                    <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                    <div class="timeline-text">
                                        <h6>Updated 5.0</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="timeline-icon"><i class="fa fa-archive" aria-hidden="true"></i></div>
                                    <div class="timeline-text">
                                        <h6>Fixed bug</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                                    <div class="timeline-icon"><i class="fa fa-address-book" aria-hidden="true"></i></div>
                                    <div class="timeline-text">
                                        <h6>Reach 1k Users</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>2020</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                    <div class="timeline-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                    <div class="timeline-text">
                                        <h6>Updated 4.4.0</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="timeline-icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                                    <div class="timeline-text">
                                        <h6>Fixed bug</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>2019</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                    <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                    <div class="timeline-text">
                                        <h6>Updated 4.0</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="timeline-icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                                    <div class="timeline-text">
                                        <h6>Fixed bug</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                                    <div class="timeline-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                                    <div class="timeline-text">
                                        <h6>Reach 500 Users</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    <!-- //about section -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>

@endsection
