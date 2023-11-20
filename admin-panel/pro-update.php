

<?php
	 require 'connection.php';
	
		
?>
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
		
       
	<div class="top-section">
        <h2> 
			Edit Product </h2>
    </div>
				

	<?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($con, "SELECT * FROM `product` WHERE pro_id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>
	<section name="update">
		<form action="" method="POST" enctype="multipart/form-data">
			<img src="uploaded_img/<?php echo $fetch_edit['proPic']; ?>" height="200" alt=""> <br><br>
			<input type="hidden" name="updateId" value="<?php echo $fetch_edit['pro_id']; ?>">
			<input type="text" class="box" name="updateProCode" value="<?php echo $fetch_edit['proCode']; ?>"><br><br>
			<input type="text" class="box1" name="updateProName" value="<?php echo $fetch_edit['proName']; ?>"><br><br>
			<input type="file" class="box" name="updateImage" accept="image/png, image/jpg, image/jpeg" required><br><br>
			<input type="text" class="box" name="updateSprice" required value="<?php echo $fetch_edit['sprice']; ?>"><br><br>
			
			
			
			<button type="submit" value="update the product" name="update" class="btn">update the prodcut</button>
			<input type="reset" value="cancel" id="close-edit" class="btn">
		</form>
	</section>
   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };

	  if(isset($_POST['update'])){
		$updateId=$_POST['updateId'];
		$updateProCode=$_POST['updateProCode'];
		$updateProName=$_POST['updateProName'];
		$updateImage=$_FILES['updateImage']['name'];
		$updateImage_tmp_name=$_FILES['updateImage']['tmp_name'];
		$updateImage_folder='uploaded_img/'.$updateImage;
		$updateSprice=$_POST['updateSprice'];

		$update_query=mysqli_query($con, "UPDATE `product` 
		SET `proCode`='$updateProCode',`proName`='$updateProName',`proPic`='$updateImage',`sprice`='$updateSprice' 
		WHERE pro_id='$updateId'");

		if($update_query){
			move_uploaded_file($updateImage_tmp_name, $updateImage_folder);
			?>
			<script>
			   swal({ 
				   title: "Successfully Updated",
			   
			   icon:"success",
			   type: "success"}).then(okay => {
			   if (okay) {
				   window.location.href = "adminProducts.php";
			   }
			   });
				   
		   </script>
		   <?php
		}else{
			?>
			<script>
			   swal({ 
				   title: "can't Update",
			   
			   icon:"invalid",
			   type: "invalid"}).then(okay => {
			   if (okay) {
				   window.location.href = "adminProducts.php";
			   }
			   });
				   
		   </script>
		   <?php
		}
	}
   ?>