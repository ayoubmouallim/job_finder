@extends('layouts.site')
@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('assest/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>About</span></p>
                <h1 class="mb-3 bread">About Us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="intro row text-center justify-content-center">
                    <div class="col-md-9">
                        <img class="img-fluid" src="assest/images/undraw_work_time_lhoj.svg" alt="">
                    </div>
                    <h2 class="mb-4">Welcome to Jobpply</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                        would have been rewritten a thousand times and everything that was left from its origin would be
                        the word "and" and the Little Blind Text should turn around and return to its own, safe country.
                        But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for their.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('jobFinder.includes.statistic')
@include('jobFinder.includes.happy-client')

@endsection