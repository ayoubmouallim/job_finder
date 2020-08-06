@extends('layouts.site')

@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('assest/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Job Posts</span></p>
                <h1 class="mb-3 bread">Apply Jobs</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a>

                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content p-4" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-nextgen-tab">
                                <form action=" {{ route('want.job') }}" method="POST" class="search-job">
                                    @csrf
                                    <div class="row no-gutters">
                                        <div class="col-md mr-md-2">
                                            <div class="col-md mr-md-2">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="category_id" class="form-control">
                                                                <option value="0">Category</option>
                                                                @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{$category->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md mr-md-2">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select name="type_id" class="form-control">
                                                            <option value="0">Job Type</option>
                                                            @foreach ($types as $type)
                                                            <option value="{{ $type->id }}">{{$type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md mr-md-2">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select name="location_id" class="form-control">
                                                            <option value="0">Location</option>
                                                            @foreach ($locations as $location)
                                                            <option value="{{ $location->id }}">{{$location->location}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <button type="submit"
                                                        class="form-control btn btn-secondary">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                aria-labelledby="v-pills-performance-tab">
                                <form action="{{ route('find.candidat') }}" method="POST" class="search-job">
                                    @csrf
                                    <div class="row no-gutters">
                                        <div class="col-md mr-md-2">
                                            <div class="col-md mr-md-2">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="category_id" class="form-control">
                                                                <option value="0">Category</option>
                                                                @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{$category->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md mr-md-2">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select name="type_id" class="form-control">
                                                            <option value="0">Job Type</option>
                                                            @foreach ($types as $type)
                                                            <option value="{{ $type->id }}">{{$type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md mr-md-2">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select name="location_id" class="form-control">
                                                            <option value="0">Location</option>
                                                            @foreach ($locations as $location)
                                                            <option value="{{ $location->id }}">{{$location->location}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <button type="submit"
                                                        class="form-control btn btn-secondary">Find</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--               searched jobs                    -->
@if (isset($jobs))

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 pr-lg-5">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        @if ( $jobs->count() <= 0) <span class="subheading">No Results</span>
                            @else
                            <span class="subheading">{{ $jobs->count() }} Results</span>
                            @endif
                            <!-- <h2 class="mb-4">Results</h2> -->
                    </div>
                </div>
                <div class="row">
                    @foreach ($jobs as $job)

                    <div class="col-md-12 ftco-animate">
                        <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                            <div class="one-third mb-4 mb-md-0">
                                <div class="job-post-item-header d-flex align-items-center">
                                    <h2 class="mr-3 text-black"><a href="#">{{$job->title}}</a>
                                    </h2>
                                    <div class="badge-wrap">
                                        <span class="bg-danger text-white badge py-2 px-3">{{$job->type->name}}</span>
                                    </div>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="icon-layers"></span> <a
                                            href="#">{{$job->company}}</a></div>
                                    <div><span class="icon-my_location"></span>
                                        <span>{{$job->location->location}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                <div>
                                    <a href="#"
                                        class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                        <span class="icon-heart"></span>
                                    </a>
                                </div>
                                <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
@endif
@if (isset($candidats))

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 pr-lg-5">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        @if ( $candidats->count() <= 0) <span class="subheading">No Results</span>
                            @else
                            <span class="subheading">{{ $candidats->count() }} Results</span>
                            @endif
                            <!-- <h2 class="mb-4">Results</h2> -->
                    </div>
                </div>
                <div class="row">
                    @foreach ($candidats as $candidat)

                    <div class="col-md-12 ftco-animate">
                        <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                            <div class="one-third mb-4 mb-md-0">
                                <div class="job-post-item-header d-flex align-items-center">
                                    <h2 class="mr-3 text-black"><a href="#">{{$candidat->name}}</a>
                                    </h2>
                                    <div class="badge-wrap">
                                        <span
                                            class="bg-danger text-white badge py-2 px-3">{{$candidat->type->name}}</span>
                                    </div>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="icon-layers"></span> <a
                                            href="#">{{$candidat->title}}</a></div>
                                    <div><span class="icon-my_location"></span>
                                        <span>{{$candidat->location->location}}</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div><!-- end -->
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
@endif

<!--               searched jobs                    -->

@include('jobFinder.includes.top-categories')
@include('jobFinder.includes.recent-jobs')

@endsection