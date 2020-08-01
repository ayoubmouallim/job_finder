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
                                <form action="#" class="search-job">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="icon-user"></span></div>
                                                    <input type="text" class="form-control"
                                                        placeholder="eg. Adam Scott">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">Category</option>
                                                            <option value="">Full Time</option>
                                                            <option value="">Part Time</option>
                                                            <option value="">Freelance</option>
                                                            <option value="">Internship</option>
                                                            <option value="">Temporary</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                                    <input type="text" class="form-control" placeholder="Location">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@include('jobFinder.includes.top-categories')
@include('jobFinder.includes.recent-jobs')

@endsection