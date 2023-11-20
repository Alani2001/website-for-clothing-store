<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel ="stylesheet" href="adminpanelStyle.css">
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Add Product</title>
</head>
<body>
<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
	
		<div class="sidebar-brand">
		
			<h1>Floaty Wear</h1>
		
		</div>
		
		<div class="sidebar-menu">
		<ul>
					<li>
						<a href="adminPanel.php" ><span class="las la-igloo"></span>
						<span>Dashboard</span></a>
					</li> 
					
					<li>
						<a href="adminCustomer.php"><span class="las la-users"></span>
						<span>Customers</span></a>
					</li>
					
					<li>
						<a href="adminProducts.php" class="active"><span class="las la-tshirt"></span>
						<span>products</span></a>
					</li>
					
					<li>
						<a href="adminOrders.php"><span class="las la-shopping-bag"></span>
						<span>orders</span></a>
					</li>

					<li>
                        <a href="adminPayment.php"><span class="las la-money-bill-wave"></span>
                        <span>Payment</span></a>
                    </li>
					
					<li>
                        <a href="adminReviews.php"><span class="las la-comments"></span>
                        <span>Reviews</span></a>
                    </li>
					
					<li>
                        <a href="adminLogout.php"><span class="las la-sign-out-alt"></i></span>
                        <span>Log out</span></a>
                    </li>
				</ul>
			
		
		</div>
		
	</div>

	<div class="main-content">
	
		<header>
		
			<h3>
			
				<label for ="nav-toggle">
				
					<span class="las la-bars"></span>
					
				</label>
					
					
			
			</h3>
		</header>
		
       

    <div class="login-block"> 
    <form action="" method="POST" enctype="multipart/form-data">
	<div class="top-section">
            <h2> Add New Product </h2>
        </div>
		<div class="first-row">
            <div class="product-code">
                <p>Product Nmae</p>
                <div class="input-code">
                    <input type="text" name="proName" required >
				</div>
            </div>
        </div>
		<div class="second-row">
            <div class="Product-name">
                <p>Product Code</p>
                <div class="input-name">
    				<input type="text" name="proCode" required>
				</div>
            </div>
        </div>
		<div class="third-row">
            <div class="image">
                <p>Image</p>
                    <div class="input-img">
    					<input type="file" name="proPic"accept="image/png, image/jpg, image/jpeg" placeholder="upload image"required>
					</div>
            </div>
        </div>
		<div class="fifth-row">
            <div class="start-price">
                <p>Price</p>
                    <div class="input-price">
    					<input type="text" name="sprice" required placeholder="enter price">
					</div>
            </div>
        </div>
    <input type="submit" class="btn" value="Add product" name="addProduct">
</form> 

</div>
</body>
</html> 
<?php
	require 'connection.php';
    	
	if(isset($_POST['addProduct']))
	{
		
		$proName=$_POST['proName'];
        $proCode=$_POST['proCode'];
		$proPic=$_FILES['proPic'] ['name'];
        $image_tmp_name=$_FILES['proPic'] ['tmp_name'];
        $image_folder='uploaded_img/'.$proPic;
        
        $price=$_POST['sprice'];
       
	
	
	   $sql = "INSERT INTO `product`(`proName`,`proCode`, `proPic`,`sprice`) 
       VALUES('$proName','$proCode','$proPic',' $price')";
	   $insertQuery=mysqli_query( $con,$sql);
	   if($insertQuery){
		  move_uploaded_file($image_tmp_name, $image_folder);{
            ?>
            <script>
               swal({ 
                   title: "SUCCESSFULL",
               text: "Succefully Add New Product",
               icon:"success",
               type: "success"}).then(okay => {
               if (okay) {
                   window.location.href = "adminProducts.php";
               }
               });
                   
           </script>
           <?php
	   }
      
	   }else{
        ?>
        <script>
           swal({ 
               title: "can't add products",
           text: "something went wrong",
           icon:"Error",
           type: "error"}).then(okay => {
           if (okay) {
               window.location.href = "adminProducts.php";
           }
           });
               
       </script>
       <?php
	   }
    }
	
?>