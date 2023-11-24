@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    @include('components.home')
    @include('components.about')
@endsection
