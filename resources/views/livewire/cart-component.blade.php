<div class="span9">
    <ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ 
		@if (Cart::count() > 0)
			<small>{{Cart::count()}} Item(s) </small>]
		@else
			<small>0 Item(s) </small>]
		@endif
	<a href="/shop" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	@if(Session::has('success_message'))
		<div class="alert alert-success">
			<strong>Success</strong> {{Session::get('success_message')}}
		</div>
	@endif		
	<table class="table table-bordered">
              <thead>
			  @if (Cart::count() > 0)
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
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
				  <td>
					<div class="input-append">
						<input value="{{$item->qty}}" class="span1" style="max-width:34px" placeholder="0" id="appendedInputButtons" size="16" type="text">
							<button class="btn" type="button"  wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">
							<i class="icon-minus"></i>
							</button>

							<button class="btn" type="button" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">
							<i class="icon-plus"></i></button>

							<button class="btn btn-danger" type="button" wire:click.prevent="destroy('{{$item->rowId}}')">
							<i class="icon-remove icon-white"></i></button>				
					</div>
				  </td>
                  <td>P {{$item->model->regular_price}}</td>
                  <td>P 0.00</td>
                  <td>P 0.00</td>
                  <td>P {{$item->subtotal}}</td>
                </tr>
				@endforeach
				<tr>
			 
				
                <tr>
                  <td colspan="6" style="text-align:right">Subtotal Price:	</td>
                  <td> $ {{Cart::subtotal()}}</td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right">Total Discount:	</td>
                  <td> $ 0.00</td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Total Tax:	</td>
                  <td> $ {{Cart::tax()}}</td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> $ {{Cart::total()}} </strong></td>
                </tr>
				</tbody>
            </table>
		
		
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="btn"> ADD </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table>
			
			<!-- <table class="table table-bordered">
			 <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Country </label>
					<div class="controls">
					  <input type="text" id="inputCountry" placeholder="Country">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
					<div class="controls">
					  <input type="text" id="inputPost" placeholder="Postcode">
					</div>
				  </div>
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">ESTIMATE </button>
					</div>
				  </div>
				</form>				  
			  </td>
			  </tr>
            </table>		 -->
			<a href="/shop" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
			<a href="/checkout" class="btn btn-large pull-right">Checkout <i class="icon-arrow-right"></i></a>
			<!-- <div class="pull-right" id="paypal-button-container"></div> -->
			
			@else
			 	<p>No Item in cart!</p>
			 @endif
</div>
</div></div>
</div>
<br><br><br><br>