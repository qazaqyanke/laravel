
@extends('layout.navbar')
@extends('layout.footer')
@extends('layout.main')

<div class="col-lg-9">
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img src="{{$products->image}}" class="card-img-top" alt="..." style="width: 250px; ">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p>12$</p>
                <a href="#" class="btn btn-primary">add to cart</a>
            </div>
        </div>
        <div class="card card-outline-secondary my-4">
            <div class="card-header">
                Product Reviews
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                <hr>
                <a href="#" class="btn btn-success">Leave a Review</a>
            </div>
        </div>
    </div>
</div>

