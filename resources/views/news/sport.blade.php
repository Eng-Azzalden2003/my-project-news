
@extends('news.master')
@section('content')
        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Features Start -->
        {{-- اهم ترند --}}
        <div class="container-fluid features mb-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset('newstemp/img/features-sports-1.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <p class="text-uppercase mb-2">Sports</p>
                                    <a href="#" class="h6">
                                        Get the best speak market, news.
                                    </a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset('newstemp/img/features-technology.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <p class="text-uppercase mb-2">Technology</p>
                                    <a href="#" class="h6">
                                        Get the best speak market, news.
                                    </a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset('newstemp/img/features-fashion.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <p class="text-uppercase mb-2">Fashion</p>
                                    <a href="#" class="h6">
                                        Get the best speak market, news.
                                    </a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset('newstemp/img/features-life-style.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <p class="text-uppercase mb-2">Life Style</p>
                                    <a href="#" class="h6">
                                        Get the best speak market, news.
                                    </a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Main Post Section Start -->
        {{-- اخبار العالم --}}
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-7 col-xl-8 mt-0">
                        <div class="position-relative overflow-hidden rounded">
                            <img src="{{ asset('newstemp/img/news-9.jpg') }}" class="img-fluid rounded img-zoomin w-100" alt="">
                            <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute read</a>
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                                <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                            </div>
                        </div>
                        <div class="border-bottom py-3">
                            <a href="#" class="display-4 text-dark mb-0 link-hover">Lionel Messi the GOAT</a>
                        </div>
                        <p class="mt-3 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley standard dummy text ever since the 1500s, when an unknown printer took a galley...
                        </p>
                        <div class="bg-light p-4 rounded">
                            <div class="news-2">
                                <h3 class="mb-4">Top Story</h3>
                            </div>
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <div class="rounded overflow-hidden">
                                        <img src="{{ asset('newstemp/img/news-11.jpeg') }}" class="img-fluid rounded img-zoomin w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <a href="#" class="h3">Barcelona is the Spanish League champion</a>
                                        <p class="mb-0 fs-5"><i class="fa fa-clock"> 06 minute read</i> </p>
                                        <p class="mb-0 fs-5"><i class="fa fa-eye"> 3.5k Views</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                       <div class="bg-light rounded p-4 pt-0">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="rounded overflow-hidden">
                                        <img src="{{ asset('newstemp/img/news-10.jpg') }}" class="img-fluid rounded img-zoomin w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <a href="#" class="h4 mb-2">Get the best speak market, news.</a>
                                        <p class="fs-5 mb-0"><i class="fa fa-clock"> 06 minute read</i> </p>
                                        <p class="fs-5 mb-0"><i class="fa fa-eye"> 3.5k Views</i></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="{{ asset('newstemp/img/news-12.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Swimming World Championships postponed from summer 2025 to May 2026</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="{{ asset('newstemp/img/news-4.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="{{ asset('newstemp/img/news-5.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="{{ asset('newstemp/img/news-6.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="{{ asset('newstemp/img/news-7.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="{{ asset('newstemp/img/news-7.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                                <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Post Section End -->


        <!-- Banner Start -->
        {{-- في حال ارت الاعلان عن شيء --}}
        <div class="container-fluid py-5 my-5" style="background: linear-gradient(rgba(202, 203, 185, 1), rgba(202, 203, 185, 1));">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <h1 class="mb-4 text-primary">Newsers</h1>
                        <h1 class="mb-4">Lamine Yamal renews his contract with Barcelona and receives the number 10 jersey.</h1>
                        <p class="text-dark mb-4 pb-2">Lamine Yamal renews his contract with Barcelona and receives the number 10 jersey.

                        </p>
                        <div class="position-relative mx-auto">
                            <input class="form-control w-100 py-3 rounded-pill" type="email" placeholder="Your Busines Email">
                            <button type="submit" class="btn btn-primary py-3 px-5 position-absolute rounded-pill text-white h-100" style="top: 0; right: 0;">Subscribe Now</button>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="rounded">
                            <img src="{{ asset('newstemp/img/news-13.jpg') }}" class="img-fluid rounded w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->


        <!-- Latest News Start -->
        {{-- اهم الاخبار امس --}}
        <div class="container-fluid latest-news py-5">
            <div class="container py-5">
                <h2 class="mb-4">Latest News</h2>
                <div class="latest-news-carousel owl-carousel">
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{ asset('newstemp/img/news-7.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">by Willum Skeem</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{ asset('newstemp/img/news-6.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">by Willum Skeem</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{ asset('newstemp/img/news-3.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">by Willum Skeem</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{ asset('newstemp/img/news-4.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">by Willum Skeem</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{ asset('newstemp/img/news-5.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4 ">Lorem Ipsum is simply dummy text of...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">by Willum Skeem</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest News End -->


        <!-- Most Populer News Start -->
        <div class="container-fluid populer-news py-5">
            <div class="container py-5">
                <div class="tab-class mb-4">
                    <div class="row g-4">
                        <div class="col-lg-8 col-xl-9">
                            <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                                <h1 class="mb-4">What’s New</h1>

                            </div>
                            <div class="tab-content mb-4">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="position-relative rounded overflow-hidden">
                                                <img src="{{ asset('newstemp/img/news-14.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                                    Sports
                                                </div>
                                            </div>
                                            <div class="my-4">
                                                <a href="#" class="h4">Xabi Alonso prepares for a new season with Real Madrid.</a>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                                <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                            </div>
                                            <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-3.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Sports</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-4.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Sports</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-5.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Sports</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-6.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Sports</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-7.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Magazine</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="position-relative rounded overflow-hidden">
                                                <img src="{{ asset('newstemp/img/news-1.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                                    Magazine
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                            </div>
                                            <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                                <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-3.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Magazine</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-4.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Magazine</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-5.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Magazine</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-6.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Magazine</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-7.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Magazine</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="position-relative rounded overflow-hidden">
                                                <img src="{{ asset('newstemp/img/news-1.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                                    Politics
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                            </div>
                                            <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                                <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-3.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-4.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-5.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-6.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-7.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Politics</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="position-relative rounded overflow-hidden">
                                                <img src="{{ asset('newstemp/img/news-1.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                                    Technology
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                            </div>
                                            <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                                <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-3.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-16.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-5.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-6.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-7.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-5" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <div class="col-lg-8">
                                            <div class="position-relative rounded overflow-hidden">
                                                <img src="{{ asset('newstemp/img/news-1.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                                    Fashion
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <a href="#" class="h4">World Happiness Report 2023: What's the highway to happiness?</a>
                                            </div>
                                            <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                                                <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                                <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-3.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Fashion</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-4.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Fashion</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-5.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Fashion</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-6.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Fashion</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center">
                                                        <div class="col-5">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{ asset('newstemp/img/news-7.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Fashion</p>
                                                                <a href="#" class="h6">Get the best speak market, news.</a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-4">
                                <h2 class="my-4">Most Views News</h2>
                            </div>
                            <div class="whats-carousel owl-carousel">
                                <div class="latest-news-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="{{ asset('newstemp/img/news-19.jpeg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="{{ asset('newstemp/img/news-18.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="{{ asset('newstemp/img/news-17.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="{{ asset('newstemp/img/news-16.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">**What is the fate of the English Premier League?</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="{{ asset('newstemp/img/news-20.jpg') }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium Smith</a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="p-3 rounded border">
                                        <h4 class="mb-4">Stay Connected</h4>
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <a href="#" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                                    <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                                    <span class="text-white">13,977 Fans</span>
                                                </a>
                                                <a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                                    <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                                    <span class="text-white">21,798 Follower</span>
                                                </a>
                                                <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                                    <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                                    <span class="text-white">7,999 Subscriber</span>
                                                </a>
                                                <a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                                    <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                                    <span class="text-white">19,764 Follower</span>
                                                </a>
                                                <a href="#" class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                                    <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                                    <span class="text-white">31,999 Subscriber</span>
                                                </a>
                                                <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                                    <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                                    <span class="text-white">37,999 Subscriber</span>
                                                </a>
                                            </div>
                                        </div>
                                        <h4 class="my-4">Popular News</h4>
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="{{ asset('newstemp/img/features-sports-1.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                            <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Sports</p>
                                                            <a href="#" class="h6">
                                                                Get the best speak market, news.
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="{{ asset('newstemp/img/features-technology.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                            <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Technology</p>
                                                            <a href="#" class="h6">
                                                                Get the best speak market, news.
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="{{ asset('newstemp/img/features-fashion.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                            <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Fashion</p>
                                                            <a href="#" class="h6">
                                                                Get the best speak market, news.
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="{{ asset('newstemp/img/features-life-style.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                            <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Life Style</p>
                                                            <a href="#" class="h6">
                                                                Get the best speak market, news.
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Most Populer News End -->

@endsection
