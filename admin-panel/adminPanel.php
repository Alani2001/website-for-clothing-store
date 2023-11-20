<html>

<head>

	<meta name="viewpoint" content="width=device-width,initial-scale=1, maximum-scale=1">

	<title>Admin Panel</title>

	<link rel="stylesheet" href="adminpanelStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet"
		href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>


<body>

	<!--header-->

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
						<a href="adminCustomer.php"><span class="las la-users"></span>
							<span>Customers</span></a>
					</li>

					<li>
						<a href="adminProducts.php"><span class="las la-tshirt"></span>
							<span>Products</span></a>
					</li>

					<li>
						<a href="adminOrders.php"><span class="las la-shopping-bag"></span>
							<span>Orders</span></a>
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
			<main>
				<div class="cards">
					<div class="card-single">

						<div>
							<?php
							require 'connection.php';

							$sql = 'SELECT user_id FROM users ORDER BY user_id';
							$query = mysqli_query($con, $sql);
							$row = mysqli_num_rows($query);
							echo '<h1>' . $row . '</h1>';
							?>

							<span>Customers</span>
						</div>

						<div>

							<span class="las la-users">

						</div>

					</div>

					<div class="card-single">

						<div>



							<h1>
								<?php
								require 'connection.php';

								$sql = 'SELECT pro_id FROM product ORDER BY pro_id';
								$query = mysqli_query($con, $sql);
								$row = mysqli_num_rows($query);
								echo '<h1>' . $row . '</h1>';


								?>
							</h1>
							<span>Products</span>

						</div>

						<div>

							<span class="las la-tshirt">

						</div>

					</div>

					<div class="card-single">

						<div>
							<?php
							require 'connection.php';

							$sql = 'SELECT OrderId FROM orders ORDER BY orderId';
							$query = mysqli_query($con, $sql);
							$row = mysqli_num_rows($query);
							echo '<h1>' . $row . '</h1>';

							?>
							</h1>
							<span>Orders</span>

						</div>

						<div class="item">

							<span class="las la-shopping-bag">

						</div>

					</div>

					<div class="card-single">

						<div>

							<?php
							// income display
							$total_income = 0;
							$sql = mysqli_query($con, "SELECT totalBill FROM payment");
							while ($result = mysqli_fetch_array($sql)) {
								$total_income += $result['totalBill'];

							}
							echo '<h1>' . 'Rs.' . $total_income . '/-' . '</h1>';
							?>
							<span>Income</span>

						</div>

						<div>

							<span class="las la-wallet">

						</div>

					</div>

				</div>

				<div class="recent-grid">

					<div class="Customers">


						<div class="card">

							<div class="card-header">

								<h3>Recent Orders</h3>

								<button>See All<span class="las la-arrow-right"></span></button>


							</div>

							<div class="card-body">

								<div class="table-responsive">

									<table width="100%">

										<thead>

											<thead>
												<tr>
													<th>order id</th>
													<th>User id</th>
													<th>name</th>
													<th>Address </th>
													<th colspan="2">Phone</th>
													<th>order</th>
													<th>date</th>
													<th>status</th>

												</tr>

											</thead>

										<tbody>

											<?php

											require 'connection.php';
											$select_products = mysqli_query($con, "SELECT * FROM `orders`ORDER BY orderId DESC LIMIT 5");
											if (mysqli_num_rows($select_products) > 0) {
												while ($row = mysqli_fetch_assoc($select_products)) {
													?>

													<tr>

														<td>
															<?php echo $row['orderId']; ?>
														</td>
														<td>
															<?php echo $row['user_id']; ?>
														</td>
														<td>
															<?php echo $row['name']; ?>
														</td>
														<td>
															<?php echo $row['address']; ?>
														</td>
														<td>
															<?php echo $row['phone1']; ?>
														</td>
														<td>
															<?php echo $row['phone2']; ?>
														</td>
														<td>
															<?php echo $row['orderProduct']; ?>
														</td>
														<td>
															<?php echo $row['orderDate']; ?>
														</td>
														<td>
															<?php echo $row['status']; ?>
														</td>



													</tr>
													<?php
												}
												;

											}
											;
											?>

								</div>

								</table>

							</div>

						</div>


					</div>

					<div class="customers">



					</div>

				</div>

			</main>

		</div>

	</body>



</html>