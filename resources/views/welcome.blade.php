@extends('layouts.app')

@section('content')

    <!-- banner section -->
    <section class="banner-19">
        <div class="banner-layer">
            <div id="myVideo">
                {{-- <img src="https://images.pexels.com/photos/7915428/pexels-photo-7915428.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""> --}}
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
                                    <h3>30%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


@endsection
