@extends('layouts.app')
@section('content')
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
                        @if(Session::has('cart'))
                        @if($products)
                        @foreach($products as $product)
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-3 hidden-xs" style=""><img src="{{url('/img/'.$product['item']['image_path'])}}" alt="..." hieght="100px" width="100px"  class="img-responsive"/></div>
                                    <div class="col-sm-10">
										<h4 class="nomargin">{{$product['item']['name']}}</h4>
                                        <p>{{$product['item']['description']}}</p>
                                        <p>{{$product['item']['details']}}</p>
									</div>
								</div>
							</td>
							<td data-th="Price"><p>{{$product['item']['price']}}</p></td>
							<td data-th="Quantity">
                            <a href="{{route('products.reduceByOne',$product['item']['id'])}}" class="btn btn-danger" style="width: 70px;">-</a>

								<input type="number" readonly class="form-control text-center" value="{{$product['qty']}}">
                                <a href="{{route('products.addToCart',$product['item']['id'])}}" class="btn btn-primary"  style="width: 70px;">+</a>

                            </td>
							<td data-th="Subtotal" class="text-center">{{$product['price']}}</td>
							<td class="actions" data-th="">
								<a href="{{route('products.removeAll',$product['item']['id'])}}" class="btn btn-danger ">Remove</a>								
							</td>
                        </tr>
                        @endforeach
                        @else
                        <h1>Cart Empty</h1>                        
                        @endif

					</tbody>
					<tfoot>
						
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total {{$totalPrice}}</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                        </tr>
                        
                        @endif
					</tfoot>
				</table>
</div>
@endsection