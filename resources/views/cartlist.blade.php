@extends('master')
@section("content")

  
       <div class="wrap-cart">
            <h4 class="container">Result for Products</h4>
          
            @foreach($products as $item)
            
                <div class="row align-items-start">
                <a href="detail/{{$item->id}}">
                    <img class="cimg" src="{{$item->gallery}}">
                  </a></div>
             
           
                   <div class="details">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                      <a href="/remove/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
                    </div>
                    @endforeach
            </div>
            

    

@endsection 