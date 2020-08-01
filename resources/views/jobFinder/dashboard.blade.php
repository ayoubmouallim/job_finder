@extends('layouts.site')

@section('content')

<!--  header -->
@include('jobFinder.includes.header')
<!--  end header -->
@include('jobFinder.includes.avantage')

@include('jobFinder.includes.top-categories')
<!--  serch job -->
@include('jobFinder.includes.serch-job')

<!--  Recent Jobs -->

@include('jobFinder.includes.recent-jobs')
<!--  statistic -->
@include('jobFinder.includes.statistic')
<!--  happy clients -->
@include('jobFinder.includes.happy-client')
<!--  candidat -->
@include('jobFinder.includes.candidat')

@endsection