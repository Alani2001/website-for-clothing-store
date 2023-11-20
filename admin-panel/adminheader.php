<html>

<head>

	<meta name="viewpoint" content="width=device-width,initial-scale=1, maximum-scale=1">

	<title>Admin Panel</title>
	
	<link rel ="stylesheet" href="adminpanelStyle.css">
	<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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
					
						<a href="adminPanel.php" class="active"><span class="las la-igloo"></span>
						
						<span>Dashboard</span></a>
					
					</li> 
					
					<li>
					
						<a href="#"><span class="las la-users"></span>
						
						<span>Customers</span></a>
					
					</li>
					
					<li>
					
						<a href="#"><span class="las la-book"></span>
						
						<span>products</span></a>
					
					</li>
					
					<li>
					
						<a href="#"><span class="las la-shopping-bag"></span>
						
						<span>orders</span></a>
					
					</li>
					
					<li>
					
						<a href="#"><span class="las la-truck"></span>
						
						<span>Delived orders</span></a>
					
					</li>
					
					<li>
					
					<a href="#"><span class="las la-wallet"></span>
					
					<span>payments</span></a>
				
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
						
						Dashboard
				
				</h3>
	

				<div class="user-wrapper">
					<form method="POST">
						
						<button type="submit" name="logout"> Log Out </button>
				
				</div>
			<?php
					/*if(isset($_POST['logout']))
					{
						session_destroy();
						header("location: adminLogin.php");
					}*/
				?>
			</header>
			