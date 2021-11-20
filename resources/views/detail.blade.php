@extends('master')
@section("content")
<div class="wrap">
    <div class="row">
        <div class="col-sm-6">
           <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <h2 class="pName">{{$product['name']}}</h2></br>
        <h3 class="pName">Price: {{$product['price']}}</h3>
            <h3 class="Desc">Details-: {{$product['description']}}</h3>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="btn btn-success btnn">Add To Cart</button>
        </form>
    </div>

        

@endsection