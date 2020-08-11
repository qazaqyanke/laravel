@extends('layout.main')

@include('layout.navbar')
    @foreach($products->chunk(4) as $productChank)
        <!-- Page Content -->
        <div class="row">
            @foreach($productChank as $product)
            <div class="card" style="width: 18rem;">
                <img src="{{$product->image}}" class="img-fluid" alt="..." ">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p>{{$product->price}}$</p>
                    <a href="{{route('show')}}" class="btn btn-primary">See More</a>
                    @auth()
                    <a href="{{route('cart', ['id' => $product->id])}}" class="btn btn-primary">add to cart</a>
                    @endauth
                </div>
            </div>
            @endforeach
        </div>
    @endforeach




<!-- /.container -->

@include('layout.footer')


