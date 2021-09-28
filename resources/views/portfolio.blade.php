@extends('layouts.app')

@section('content')

    <section class="inner-banner">
        <div class="w3l-breadcrumb py-5">
            <div class="container py-xl-5 py-md-4 mt-5">
                <h4 class="inner-text-title font-weight-bold mb-sm-2">Mon Portfolio</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('/') }}">Accueil</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Portfolio</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
    <div style="margin: 4px auto; display: block; text-align:center;">


    </div>
    <section class="w3l-text-6" id="about">
        <div class="text-6-mian py-md-5 py-4">
            <div class="container">
                <div class="top-cont-grid align-items-center">
                    <div class="text-6-info mb-lg-0 mb-5 pl-xl-5 order-lg-last order-first">
                        <h5 class="small-title-2">Projets</h5>
                        <p>Les projet listés ci-dessous ne représentent qu'une liste minime de projets réalisés, ou sur
                            lesquels je
                            suis intervenu soit dans le cadre d'un contrat, soit dans le cadre d'un travail ! Allez,
                            savourez-les !!!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mb-5">
        <div class="row align-items-center">

            <div class="col-md-4 p-3">
                <div class="popup-gallery portfolio-style">
                    <div class="portfolio-item">
                        <img class="img-responsive img-fluid"
                            src="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-description">
                                <div class="portfolio-info">
                                    <h3 class="mb-0">
                                        <a href="" class="portfolio-title">Koonach</a>
                                    </h3>
                                    <span class="text-white">Application mobile de géolocalisation pour vendeurs de
                                        proximité & gestion de crédits</span>
                                </div>
                                <div class="portfolio-icon">
                                    <a class="portfolio-img"
                                        href="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="popup-gallery portfolio-style">
                    <div class="portfolio-item">
                        <img class="img-responsive img-fluid"
                            src="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-description">
                                <div class="portfolio-info">
                                    <h3 class="mb-0">
                                        <a href="" class="portfolio-title">Geri-Services</a>
                                    </h3>
                                    <span class="text-white">Application web & mobile de Gestion de syndics & cotisations à
                                        caractère d'épargne, Commande d'artisans</span>
                                </div>
                                <div class="portfolio-icon">
                                    <a class="portfolio-img"
                                        href="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="popup-gallery portfolio-style">
                    <div class="portfolio-item">
                        <img class="img-responsive img-fluid"
                            src="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-description">
                                <div class="portfolio-info">
                                    <h3 class="mb-0">
                                        <a href="https://etkcontent.com" class="portfolio-title">ETKCONTENT</a>
                                    </h3>
                                    <span class="text-white">Application web de mise en relation entre rédacteurs web &
                                        annonceurs</span>
                                </div>
                                <div class="portfolio-icon">
                                    <a class="portfolio-img"
                                        href="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="popup-gallery portfolio-style">
                    <div class="portfolio-item">
                        <img class="img-responsive img-fluid"
                            src="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-description">
                                <div class="portfolio-info">
                                    <h3 class="mb-0">
                                        <a href="https://bifalcorp.com" class="portfolio-title">BIFAL CORP</a>
                                    </h3>
                                    <span class="text-white">Application web & site vitrine pour une agence d'accompagement
                                        pour projets d'étude</span>
                                </div>
                                <div class="portfolio-icon">
                                    <a class="portfolio-img"
                                        href="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="popup-gallery portfolio-style">
                    <div class="portfolio-item">
                        <img class="img-responsive img-fluid"
                            src="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-description">
                                <div class="portfolio-info">
                                    <h3 class="mb-0">
                                        <a href="" class="portfolio-title">MAMAS FOOD / KAAWAN</a>
                                    </h3>
                                    <span class="text-white">Application mobiles de géolocation pour streetfood, commande &
                                        gestion de crédit </span>
                                </div>
                                <div class="portfolio-icon">
                                    <a class="portfolio-img"
                                        href="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="popup-gallery portfolio-style">
                    <div class="portfolio-item">
                        <img class="img-responsive img-fluid"
                            src="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-description">
                                <div class="portfolio-info">
                                    <h3 class="mb-0">
                                        <a href="" class="portfolio-title">CHATCONTRACT</a>
                                    </h3>
                                    <span class="text-white">Chatbot + Application web pour la génération de documents
                                        juridiques en ligne à partir d'un système mi-autonome</span>
                                </div>
                                <div class="portfolio-icon">
                                    <a class="portfolio-img"
                                        href="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="popup-gallery portfolio-style">
                    <div class="portfolio-item">
                        <img class="img-responsive img-fluid"
                            src="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-description">
                                <div class="portfolio-info">
                                    <h3 class="mb-0">
                                        <a href="" class="portfolio-title">DAABAARU MOBILE</a>
                                    </h3>
                                    <span class="text-white">Application mobile pour magazine en ligne</span>
                                </div>
                                <div class="portfolio-icon">
                                    <a class="portfolio-img"
                                        href="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="popup-gallery portfolio-style">
                    <div class="portfolio-item">
                        <img class="img-responsive img-fluid"
                            src="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-description">
                                <div class="portfolio-info">
                                    <h3 class="mb-0">
                                        <a href="" class="portfolio-title">BENIN BEST NEWS - BBN</a>
                                    </h3>
                                    <span class="text-white">Site magazine pour le journal BBN</span>
                                </div>
                                <div class="portfolio-icon">
                                    <a class="portfolio-img"
                                        href="https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .portfolio .thumb {
        position: relative;
        margin-bottom: 20px;
        -webkit-box-shadow: 0 0.75rem 1.5rem rgba(23, 26, 41, 0.05);
        box-shadow: 0 0.75rem 1.5rem rgba(23, 26, 41, 0.05);
        -webkit-transition: all 0.3s cubic-bezier(0.65, 0.05, 0.36, 1);
        transition: all 0.3s cubic-bezier(0.65, 0.05, 0.36, 1);
    }

    .portfolio .pv-port-info h5 a {
        color: #171a29;
        font-size: 18px;
        line-height: 1.39;
    }

    .portfolio .pv-port-info h5 a:hover {
        color: #3e50f7;
    }

    .portfolio:hover .thumb {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
    }

    /*************************
        Portfolio
*************************/
    .portfolio-item {
        position: relative;
        overflow: hidden;
    }

    .portfolio-item:hover .portfolio-overlay {
        background: rgba(34, 79, 228, 0.774);
        opacity: 1;
    }

    .portfolio-item:hover .portfolio-info {
        bottom: 20px;
    }

    .portfolio-item:hover .portfolio-icon {
        top: 20px;
    }

    .portfolio-overlay {
        padding: 20px;
        position: absolute;
        bottom: 0;
        width: 100%;
        left: 0;
        opacity: 0;
        height: 100%;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        color: #ffffff;
    }

    .portfolio-overlay .portfolio-title {
        color: #ffffff;
    }

    .portfolio-info {
        position: absolute;
        bottom: 0px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        width: 100%;
        left: 20px;
    }

    .portfolio-icon {
        position: absolute;
        top: 0px;
        left: 20px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        -ms-flex-item-align: center;
        align-self: center;
    }

    .portfolio-icon span {
        color: #131e3f;
        font-size: 18px;
    }

    .portfolio-icon i {
        color: #3e50f7;
        font-size: 20px;
    }

    .portfolio-title {
        color: #ffffff;
        margin-bottom: 0;
    }

    .isotope-filters {
        display: table;
        margin: 0 auto 50px;
        text-align: center;
    }

    .isotope-filters button {
        margin: 0 10px 10px;
        padding: 14px 30px;
        cursor: pointer;
        font-size: 14px;
        background: transparent;
        border: none;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        border: 1px solid rgba(23, 26, 41, 0.05);
        font-weight: 500;
        line-height: 18px;
        border-radius: 3px;
    }

    .isotope-filters button:hover {
        color: #ffffff;
        border: 1px solid #3e50f7;
        background: #3e50f7;
    }

    .isotope-filters button.active {
        color: #ffffff;
        border: 1px solid #3e50f7;
        background: #3e50f7;
    }

    .isotope-filters.text-left {
        display: block;
        margin: 30px 0;
        text-align: left;
    }

    .isotope {
        margin-left: -15px;
        margin-right: -15px;
    }

    .isotope .grid-item img {
        width: 100%;
    }

    .isotope.columns-1 .grid-item {
        width: 100%;
        padding: 15px;
    }

    .isotope.columns-2 .grid-item {
        width: 50%;
        padding: 15px;
    }

    .isotope.columns-3 .grid-item {
        width: 33.33333333%;
        padding: 15px;
    }

    .isotope.columns-4 .grid-item {
        width: 25%;
        padding: 15px;
    }

    .isotope.columns-5 .grid-item {
        width: 20%;
        padding: 15px;
    }

    @media (max-width: 767.98px) {
        .isotope.columns-3 .grid-item {
            width: 50%;
        }

        .isotope.columns-4 .grid-item {
            width: 50%;
        }

        .isotope.columns-5 .grid-item {
            width: 50%;
        }
    }

    @media (max-width: 575.98px) {
        .isotope.columns-2 .grid-item {
            width: 100%;
        }

        .isotope.columns-3 .grid-item {
            width: 100%;
        }

        .isotope.columns-4 .grid-item {
            width: 100%;
        }

        .isotope.columns-5 .grid-item {
            width: 100%;
        }

        .isotope-filters button {
            font-size: 13px;
            margin: 0px 10px 10px;
        }
    }

</style>
