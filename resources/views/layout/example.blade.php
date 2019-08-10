@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
        <a class="navbar-brand" href="{{ url('home') }}">
            {{ __('Dashboard') }}
        </a>
        <a class="navbar-brand" href="{{ url('/users') }}">
            {{ __('Users') }}
        </a>
        <a class="navbar-brand" href="{{ url('/products') }}">
            {{ __('Products') }}
        </a>
        <a class="navbar-brand" href="{{ url('/tasks') }}">
            {{ __('Tasks') }}
        </a>
        <a class="navbar-brand" href="{{ url('/testing') }}">
            {{ __('Testing') }}
        </a>
        <a class="navbar-brand" href="{{ url('/layout') }}">
            {{ __('Lay-Out') }}
        </a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8" >
                <h1 class="text-center border-black bg-red"> Main </h1>
            <div class="row">
                <div class="col-sm-6"> 
                    <i class="fas fa-pencil-alt"></i>
                    <!-- <h2 class="h2 border-black bg-red"> H2 </h2> -->
                </div>
                <div class="col-sm-6">
                    <h2 class="h22 border-black"> H2 </h2> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="border-black"> H3 </h3> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="border-black"> H4 </h4> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="border-black"> H5 </h5> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h6 class="border-black"> H6 </h6> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <p class="lead border-black">I</p>
                </div>
                <div class="col-sm-10 text-left">
                     <p class="lead border-black"> paragraph </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                     <span> para <mark>graph</mark> </span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                     <span> para<del>graph</del> </span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                     <span> paragraph </span>
                     <ins>INSERTED</ins>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                     <span> paragraph </span>
                     <p class="text-lowercase">Lowercased text.</p>
                    <p class="text-uppercase">Uppercased text.</p>
                    <p class="text-capitalize">Capitalized text.</p>
                </div>
                <div class="col-sm-4">
                     <span> paragraph </span>
                </div>
                <div class="col-sm-4">
                     <span> paragraph </span>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center">
                <h2 style="margin-bottom: 50px"> SIDEBAR </h2>
            <div class="row">
                <div class="col-sm-12">
                     <span> paragraph </span>
                </div>
                <div class="col-sm-12">
                     <span> paragraph </span>
                </div>
                <div class="col-sm-12">
                     <span> paragraph </span>
                </div>
                <div class="col-sm-12">
                     <span> BOX </span>
                </div>
        </div>
    </div>
</div>
@endsection
