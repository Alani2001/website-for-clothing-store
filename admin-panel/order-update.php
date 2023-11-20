

<?php
	 require 'connection.php';
	
	
	if(isset($_POST['update'])){
        $updateId = $_POST['updateId'];
		$status=$_POST['status'];
		
      
		   $update_query = mysqli_query($con, "UPDATE `orders` SET `status`='$status' WHERE orderId='$updateId'");
		   if($update_query){
			  
			 echo"
						<script>
							alert('order staus has been updated');
							window.location.href='adminOrders.php';
						</script>
					";
				
		   }else{
			  echo"
						<script>
							alert('can't update');
							window.location.href='orders.php';
						</script>
				";
			}
	}
		
?>