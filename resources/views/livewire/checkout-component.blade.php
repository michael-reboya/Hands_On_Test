<div class="span9">
	<a href="/cart" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Your Cart </a></h3>	
	<div>
        <h3>Checkout</h3>
    </div>
    <hr class="soft"/>
	<table class="table table-bordered">
              <thead>
			  
                <tr>
                  <th>Product</th>
                  <th>Description</th>
				  <th>Price</th>
                  <th>Discount</th>
                  <th>Tax</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
				@foreach (Cart::content() as $item)
                <tr>
                  <td> <img width="60" src="{{ asset('assets/themes/images/products') }}/{{$item->model->image}}" alt="{{$item->model->image}}"/></td>
                  <td><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></td>
                  <td>P {{$item->model->regular_price}}</td>
                  <td>P 0.00</td>
                  <td>P 0.00</td>
                  <td>P {{$item->subtotal}}</td>
                </tr>
				@endforeach
				<tr>
			 
				
                <tr>
                  <td colspan="5" style="text-align:right">Subtotal Price:	</td>
                  <td> $ {{Cart::subtotal()}}</td>
                </tr>
				 <tr>
                  <td colspan="5" style="text-align:right">Total Discount:	</td>
                  <td> $ 0.00</td>
                </tr>
                 <tr>
                  <td colspan="5" style="text-align:right">Total Tax:	</td>
                  <td> $ {{Cart::tax()}}</td>
                </tr>
				 <tr>
                  <td colspan="5" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> $ {{Cart::total()}} </strong></td>
                </tr>
				</tbody>
            </table>
    <div class="pull-right" id="paypal-button-container"></div>
			
</div>
</div></div>
</div>