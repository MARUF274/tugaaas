@extends('layout')

@section('title', 'Products')

@section('content')


@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<div class="col-md-12">
    <div class="section-title">
        <h3 class="title" style="color:#fff">New Products</h3>
        <div class="section-nav">
            <ul class="section-tab-nav tab-nav">
                {{-- <li class="active"><a data-toggle="tab" href="#tab1">New Products</a></li>
                <li><a data-toggle="tab" href="#device">Devices</a></li>
                <li><a data-toggle="tab" href="#game">Game</a></li>
                <li><a data-toggle="tab" href="#acc">Accessories</a></li> --}}
            </ul>
        </div>
    </div>
</div>

<div class="container col-md-12">
    <div class="row">
        
        <div class="products-tabs">
           
            <div id="tab1" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-1">
                    

                    @foreach($products as $product)
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ $product->photo }}" width="500">
                        </div>
                        <div class="product-body">

                            <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                            <h4 class="product-price">${{ $product->price }}</h4>
                        </div>
                        <div class="add-to-cart">
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}"
                                    class="btn btn-warning btn-block text-center" role="button">Add
                                    to cart</a> </p>
                        </div>
                    </div>
                    @endforeach

                    


                </div>

            </div>
            <div class="col-md-12" style="margin-top: 50px!important;">
                <div class="section-title">
                    <a id="device"><h3 class="title" style="color:#fff">Devices</h3></a>
                    <div class="section-nav">

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                @foreach($products as $product)
                <div class="col-md-4" style="margin-top:40px!important;">

                    <div class="card bg-dark col-md-10 mx-auto">

                        <div class="product">
                            <div class="product-img">
                                <img src="{{ $product->photo }}" width="600!important">
                            </div>
                            <div class="product-body">

                                <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                                <h4 class="product-price">${{ $product->price }}</h4>
                            </div>
                            <div class="add-to-cart">
                                <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}"
                                        class="btn btn-warning btn-block text-center" role="button">Add
                                        to cart</a> </p>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="col-md-12" style="margin-top: 50px!important;">
                <div class="section-title">
                    <h3 class="title" style="color:#fff" id="game">Games</h3>
                    <div class="section-nav">

                    </div>
                </div>
            </div>
            <div class="col-md-12"> 
                @foreach($gameProduct as $product)
                <div class="col-md-4" style="margin-top:40px!important;">

                    <div class="card bg-dark col-md-10 mx-auto" style="">

                        <div class="product">
                            <div class="product-img">
                                <img src="{{ $product->photo }}" width="600!important">
                            </div>
                            <div class="product-body">

                                <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                                <h4 class="product-price">${{ $product->price }}</h4>
                            </div>
                            <div class="add-to-cart">
                                <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}"
                                        class="btn btn-warning btn-block text-center" role="button">Add
                                        to cart</a> </p>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="col-md-12" style="margin-top: 50px!important;">
                <div class="section-title">
                    <h3 class="title" style="color:#fff" id="acc">Gaming Accessories</h3>
                    <div class="section-nav">

                    </div>
                </div>
            </div>
            <div class="col-md-12"> 
                @foreach($accProduct as $product)
                <div class="col-md-4" style="margin-top:40px!important;">

                    <div class="card bg-dark col-md-10 mx-auto" style="">

                        <div class="product">
                            <div class="product-img">
                                <img src="{{ $product->photo }}" width="600!important">
                            </div>
                            <div class="product-body">

                                <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                                <h4 class="product-price">${{ $product->price }}</h4>
                            </div>
                            <div class="add-to-cart">
                                <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}"
                                        class="btn btn-warning btn-block text-center" role="button">Add
                                        to cart</a> </p>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>


        
    </div>
    









</div>

@endsection