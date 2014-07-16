<?php require 'includes/header.html'; ?>
<body>
<div class="navbar">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand" href="#"></a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav navbar-right">
    	<!-- loop for regions -->
      	<li><a href="#">Link</a></li>
      	<!-- end loop -->
    </ul>
  </div>
</div>

<section id="destinations">
	<div class="container list-group">
		
		<!-- loop over LI for destination listing -->
		<?php foreach(range(0,10) as $index) { ?>
		<div class="list-group-item row">
			<div class="col-xs-10 col-md-11">
			  	<a class="item-link" href="">
			  		<img class="dest-list-img" src="images/nyc.jpg" />
			  		<h5 class="dest-heading">
			  			Cras justo odio
			  		</h5>
			  	</a>
			</div>  	
		  	<div class="col-xs-1 col-md-1">	
		  		<button class="btn check-button" data-check="false" id="<?php echo $index; ?>" ><i class="fa fa-square-o"></i>&nbsp;</button>
		  	</div>
	  	</div>
	  	<?php } ?>		
		<div class="list-group-item row">
			<div class="col-xs-6 col-md-6">
				<a href="#"><i class="fa fa-shopping-cart"></i>&nbsp;<span id="cart-count" class="badge">42</span></a>
			</div>
			<div class="col-xs-6 col-md-6">	
				<form id="save-form" name="save-form">
					<input type="hidden" name="guides" value=""> 
					<button id="place-order" class="pull-right btn btn-primary">Place Order</button>
				</form>	
			</div>
		</div>
		<div><h4 id="error">&nbsp;</h4></div>

	</div>
</section>


</body>
</html>