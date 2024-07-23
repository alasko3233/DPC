@extends('layouts.master')
@section('title', 'Nos Projets')
@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Our Projects</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Our Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

    
    

                <!-- Portfolio Start -->
                <div class="portfolio">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Our Projects</p>
                            <h2>Visit Our Projects</h2>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".first">Complete</li>
                                    <li data-filter=".second">Running</li>
                                    <li data-filter=".third">Upcoming</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row portfolio-container">
                @foreach ($projets as $projet )

                            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item {{$projet->status}} wow fadeInUp" data-wow-delay="0.1s">
                                <div class="portfolio-warp">
                                    <div class="portfolio-img">
                                        <img src="{{ asset('assets/geocom/img/projet/'.$projet->image_p) }}" alt="Image">
                                        <div class="portfolio-overlay d-flex row">
                                            <p>
                                                {{ substr($projet->name, 0, 200) }}...                                            </p>
                                        {{-- <a class="btn" data-lightbox="portfolio">lire</a> --}}

                                        </div>
                                    </div>
                                    <div class="portfolio-text">
                                        <a href="{{route('projet.show',$projet)}}">
                                        <h3> {{ substr($projet->name, 0, 50) }}...</h3>
                                    </a>
                                        {{-- <a class="btn" href="{{asset('assets/frontend/img/portfolio-1.jpg')}}" data-lightbox="portfolio">+</a> --}}
                                    </div>
                                </div>
                            </div>
                @endforeach


                        </div>
                        {{-- <div class="row">
                            <div class="col-12 load-more">
                                <a class="btn" href="#">Load More</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- Portfolio End -->

    
    
    
   
   
 

@endsection