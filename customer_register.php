<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php"); 
?>
<html>
	<head>
		<title>Agency</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<?php 

include("toppage/bannernav.php");

?>
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">Sizes</div>
				
				<ul id="cats">
				
				<?php getCats(); ?>
				
				<ul>
					
				<div id="sidebar_title">Location</div>
				
				<ul id="cats">
					
					<?php getBrands(); ?>
				
				<ul>
			
			
			</div>
		
			<div id="content_area">
			
			<?php cart(); ?>
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					
					Welcome!<a href="cart.php" style="color:yellow">Go to Cart</a>
					
					
					
					</span>
			</div>
			
				<form action="customer_register.php" method="post" enctype="multipart/form-data">
					
					
				
				</form>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
				<?php 

include("footer/footer.php");

?>
	
	</div> 
<!--Main Container ends here-->


</body>
</html>











