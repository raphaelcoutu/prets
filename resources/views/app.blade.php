@extends('layout')

@section('head')
    @inertiaHead
@endsection

@section('body')
    @inertia
    @vite('resources/js/app.js')
@endsection
