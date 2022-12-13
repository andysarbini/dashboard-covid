@extends('layouts.backend-dashboard.app')
@section('title', 'Dashboard Covid 19')
@section('breadcrumb', 'Dashboard')


@section('content')
    @include('dashboard.html')
@endsection
@section('extra_javascript')
    @include('dashboard.javascript')
@endsection