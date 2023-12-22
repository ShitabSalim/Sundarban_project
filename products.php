<?php 
include("admin/admin_inc/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sundarban's Oasis</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Growing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/lightcase.css" rel="stylesheet" type="text/css" /> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head>

<style>
      .owl-item{
          height:300px;
      }
	  .ser {
  background-color: #f8f8f8;
  border: 1px solid #e0e0e0;
  border-radius: 5px;
  padding: 20px;
  margin-bottom: 20px;
  text-align: center;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.ser:hover {
  transform: translateY(-5px);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.ser h5 {
  padding: 10px;
  font-size: 14px;
  color: #333;
}

</style>
<body>
<!-- banner -->
	<div class="banner-1">  
		<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.html"><i class="fa fa-pagelines" aria-hidden="true"></i>Sundarban's Oasis</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left"> 
							<li><a href="index.php" class="btn w3ls-hover">Home</a></li>
							<li><a href="about.php" class="btn w3ls-hover">About</a></li>   
					
							<li><a href="products.php" class="btn w3ls-hover">Products</a></li> 
							<li><a href="contact.php" class="btn w3ls-hover">Contact</a></li>
						</ul>	   
						<div class="social-icon">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div> 
						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	
		
	</div>
	<!-- //banner --> 
<!-- portfolio -->
		<div class="banner-bottom">
			<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">Products</h2>
				
			</div>

            <div class="row">

            <?php
$s="SELECT * FROM products";
$rs=$con->query($s);
while($row=$rs->fetch_assoc()){
?>

            <div class="col-lg-3 col-md-3 col-sm-6 propClone">
                    <div class="ser">
                 <img src="admin/product_img/<?php echo $row['pimg']; ?>" alt="product" style="height:200px; width:100%"  class="img-responsive about-me">
                    <div class="about-grids ">
                        <h5><a href="" class=""><?php echo $row['pname']; ?></a></h5>
                        <h5><a href="" class=""><?php echo $row['pprice']; ?></a></h5>

                           <button class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $row['pid']; ?>">Details</button>
                           <button class="btn btn-primary" data-toggle="modal" data-target="#bm<?php echo $row['pid']; ?>">Book Now</button>
                    </div>
                </div>
                </div>






                <div class="modal" id="myModal<?php echo $row['pid']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $row['pname']; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php echo $row['pd']; ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


             <div class="modal" id="bm<?php echo $row['pid']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $row['pname']; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <h3>Call Us: 9876543210</h3>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<?php } ?>



</div>
				
		</div>
	</div>
<!-- portfolio -->
	<!-- footer start here --> 
	<?php include 'footer.php';?> 
	<!-- //footer end here -->  
	<!-- light-case -->
	<script src="js/lightcase.js"></script>
	<script>
		$('.showcase').lightcase();
	</script>
	<!-- //light-case -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>