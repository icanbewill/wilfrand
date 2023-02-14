@extends('layouts.app')

@section('content')
    <!-- banner section -->
        <!-- about section -->
        <div id="about" class="w3l-content-photo-5 py-5">
            <div class="container py-lg-5 py-sm-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 content-image order-lg-first order-last">
                        <a href="#image"><img src="{{ asset('https://cdn.pixabay.com/photo/2023/02/04/16/07/motorcycle-7767517_960_720.jpg') }}" class="img-responsive"
                                alt="content-photo"></a>
                    </div>
                    <div class="col-lg-6 col-md-10 mx-auto content-right mb-lg-0 mb-5 pl-lg-5 order-lg-last order-first">
                        <h5 class="small-title-2">ON VA TE</h5>
                        <h3 class="title-style-2">GBRAAAA.</h3>
                        <p class="my-3">Le coeur c'est pour <strong>pomper le sang</strong>, et toi fais mishubichu avec.
                            Reste concentré(e).</p>
                        <p class="border-top-w3l pt-4 mt-4">
                            La St Valentin c'est pour les grands.
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection
