@extends('layouts.app')
@section('content')



    @include('pages.Home.components.Header_Top')
    @include('pages.Home.components.Item_List')
    @include('pages.Home.components.Carousel_Layer')



@endsection

@push('css')
    <style>

    </style>
@endpush



