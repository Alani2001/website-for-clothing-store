<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminLogin-style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
  
    <!--create login form-->
    
    <div class="container">
        <div class="form-box">
            <form action="" method="POST" enctype="multipart/form-data">
                <h2>Admin Login</h2>
                
                <div class="input-box">
                    <i class='bx bxs-envelope'></i>
                    <input type="text" name="adminName"placeholder="User Name" >
                    <div class="error">
                        <p id="result6"> </p>
                    </div>
                </div>

                <div class="input-box">
                    <i class='bx bxs-lock'></i>
                    <input type="password" name="adminPassword"placeholder="Password" >
                    <div class="error">
                        <p id="result7"> </p>
                    </div>
                </div>
                
                
                <div class="button">
                    <input type="submit" class="btn" name="btnlogin" value="Login"onclick="loginValidation()">
                </div>
                
            </form>
        </div>
        <?php
        require'connection.php';
			if(isset($_POST['btnlogin']))
			{
				$sql="SELECT * FROM `adminLogin` WHERE `adminName`='$_POST[adminName]' AND `adminPassword`='$_POST[adminPassword]'";
				$query=mysqli_query($con,$sql);
				if(mysqli_num_rows($query)==1)
				{
					session_start();
					$_SESSION['AdminLoginId']=$_POST['AdminName'];
					header("location: adminPanel.php");
					
				}else{
					?>
                     
         <script>
            swal({ 
                title: "INVALID",
            text: "Wrong Email or Password",
            icon:"error",
            type: "invalid"}).then(okay => {
            if (okay) {
                window.location.href = "adminLogin.php";
            }
            });
                
        </script>
        <?php
				}
			}
		?>
    </div>
    <script src="form.js"></script> 
</body>
</html>          