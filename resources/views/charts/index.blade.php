@extends('layouts.backend-dashboard.app')
@section('title', 'Chart')
@section('breadcrumb', 'Chart')
@section('content')
    @include('Charts.penjualan-grafik')
@endsection

@section('extra_javascript')
    @include('Charts.javascript')
@endsection