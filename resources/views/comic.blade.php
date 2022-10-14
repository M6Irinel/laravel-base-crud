@extends('layouts.app')

@section('metaTitle' , 'DC Comic - ' . $comic['title'])

@section('main')
    @include('partials.main-comic')
@endsection

@section('top-footer')
    @include('partials.topFooter-comic')
@endsection