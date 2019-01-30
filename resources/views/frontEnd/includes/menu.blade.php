<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a></li>
					@foreach($publishedCategories as $publishedCategory )
					<li class="dropdown menu__item">
						<a href="{{url('/category-view/'.$publishedCategory->id)}}" class="dropdown-toggle menu__link" >
							{{$publishedCategory->categoryName}}
						</a>	
					</li>
					@endforeach

				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="{{ url('/cart/show')}}">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								 Cart({{$cartItems}} items)</div>
								
							</h3>
						</a>
						<p><a href="{{url('/cart/empty')}}" class="simpleCart_empty">Empty Cart</a></p>
			</div>
		</div>

					

		<div class="clearfix">
			
		</div>

	</div>

</div>
            