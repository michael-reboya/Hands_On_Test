<div class="span9">
    <ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li class="active">Products Name</li>
    </ul>
	<h3> Products Name <small class="pull-right"> 40 products are available </small></h3>	
	<hr class="soft"/>
	<p>
		Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
	</p>
	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>
	  
<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
		@foreach($products as $product)
		<div class="row">	  
			<div class="span2">
				<img src="{{ asset('assets/themes/images/products') }}/{{$product->image}}" alt="{{$product->name}}"/>
			</div>
			<div class="span4">
				<h5>New | Available</h3>				
				<hr class="soft"/>
				<h3><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}} </a></h5>
				<p>
				{{$product->description}}
				</p>
				<a class="btn btn-small pull-right" href="{{route('product.details',['slug'=>$product->slug])}}">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> $ {{$product->regular_price}}</h3>
			
			  <a href="#" class="btn btn-large btn-primary"  wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"> Add to <i class=" icon-shopping-cart"></i></a>
			  <a href="{{route('product.details',['slug'=>$product->slug])}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>
			
				</form>
			</div>
		</div>
		<hr class="soft"/>
		@endforeach
		<hr class="soft"/>
	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
		@foreach($products as $product)
			<li class="span3">
			  <div class="thumbnail">
				<a href="{{route('product.details',['slug'=>$product->slug])}}"><img src="{{ asset('assets/themes/images/products') }}/{{$product->image}}" alt="{{$product->name}}"/></a>
				<div class="caption">
				  <h5><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}} </a></h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				   <h4 style="text-align:center">
				   <a class="btn" href="{{route('product.details',['slug'=>$product->slug])}}"> 
				   <i class="icon-zoom-in"></i></a> 
				   <button class="btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add to <i class="icon-shopping-cart"></i></button>
				   <p class="label label-info" > $ {{$product->regular_price}}</p></h4>
				</div>
			  </div>
			</li>
			@endforeach
		  </ul>
	<hr class="soft"/>

	</div>
</div>

	<div class="pagination">
			{{$products->links()}}
			</div>
			<br class="clr"/>
</div>
</div>
</div>
</div>