<html>

<head>

	<meta name="viewpoint" content="width=device-width,initial-scale=1, maximum-scale=1">

	<title>product store</title>

	<link rel="stylesheet" href="adminpanelStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet"
		href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>

<body>
	<!--header-->


	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">

		<div class="sidebar-brand">

			<h1>Floaty Wear</h1>

		</div>

		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="adminPanel.php"><span class="las la-igloo"></span>
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

				<label for="nav-toggle">

					<span class="las la-bars"></span>

				</label>

				

			</h3>
		</header>



		<div class="top-section">
			<h2> Products </h2>

			<button><a href="adminAddPro.php">Add new product</a></button>


		</div>
		<center>
			<div class="card-body">

				<div class="table-responsive">

					<table border="1">

						<thead>

							<tr>
								<th>p_code</th>
								<th>p_name</th>
								<th>p_image</th>

								<th>start_price </th>

								<th>Action</th>
							</tr>

						</thead>

						<tbody>

							<?php

							require 'connection.php';
							$select_products = mysqli_query($con, "SELECT * FROM `product`");
							if (mysqli_num_rows($select_products) > 0) {
								while ($row = mysqli_fetch_assoc($select_products)) {
									?>

									<tr>

										<td>
											<?php echo $row['proCode']; ?>
										</td>
										<td>
											<?php echo $row['proName']; ?>
										</td>
										<td><img src="uploaded_img/<?php echo $row['proPic']; ?>" height="100" alt=""></td>

										<td>
											<?php echo $row['sprice']; ?>
										</td>


										<td>
											<button class="btn-delete" style="border: none;"><a
													href="pro-delete.php?delete=<?php echo $row['pro_id']; ?>">Delete</button></a>
											<br>
											<br>
											<button class="btn-delete" style="border: none;"><a
													href="pro-update.php?edit=<?php echo $row['pro_id']; ?>">
													Update</button></a>
										</td>
									</tr>
									<?php
								}
								;

							}
							;
							?>

						</tbody>
					</table>
</body>

</html>