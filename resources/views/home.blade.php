@extends('layouts.app')


    
@section('content')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Demo E-commerce!</h1>
            </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        
          @if(!isset($catagory))
          @foreach($products as $product)
          <div class="col-md-3">
            <h2>{{$product->name}}</h2>
            <img src="{{url('/img/'.$product->image_path)}}" width="240px" height="240px" alt=""/>
            <p><b>Description:-</b>{{$product->description}} </p>
            <p><b>Details:-</b>{{$product->details}} </p>
            <p><b>Price:-</b> {{$product->price}} </p>
            <p><a class="btn btn-secondary" href="{{route('products.addToCart',$product->id)}}" role="button">Add To Cart</a></p>
          </div>
          @endforeach
          @else
          @foreach($catagory->products as $product)
          <div class="col-md-3">
            <h2>{{$product->name}}</h2>
            <img src="{{url('/img/'.$product->image_path)}}" width="240px" height="240px" alt=""/>
            <p><b>Description:-</b>{{$product->description}} </p>
            <p><b>Details:-</b>{{$product->details}} </p>
            <p><b>Price:-</b> {{$product->price}} </p>
            <p><a class="btn btn-secondary" href="{{route('products.addToCart',$product->id)}}" role="button">Add To Cart</a></p>
          </div>
          @endforeach
          @endif
         
        
        </div>

        <hr>

      </div> <!-- /container -->

@endsection 
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
 
