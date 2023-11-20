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

    <body>

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
                        <a href="adminCustomer.php" class="active"><span class="las la-users"></span>
                            <span>Customers</span></a>
                    </li>

                    <li>
                        <a href="adminProducts.php"><span class="las la-tshirt"></span>
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


            <body>

                <div class="top-section">
                    <h2> Registered user </h2>




                </div>
                <div class="card-body">
                    <center>
                        <div class="table-responsive">

                            <table border="1">

                                <thead>

                                    <tr>
                                        <th>user_id</th>
                                        <th>userName</th>
                                        <th>email</th>
                                        <th>phoneNum</th>
                                        <th>date </th>

                                        <th>Action</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <?php

                                    require 'connection.php';
                                    $select_products = mysqli_query($con, "SELECT * FROM `users`");
                                    if (mysqli_num_rows($select_products) > 0) {
                                        while ($row = mysqli_fetch_assoc($select_products)) {
                                            ?>

                                            <tr>

                                                <td>
                                                    <?php echo $row['user_id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['userName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['phoneNum']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['date']; ?>
                                                </td>


                                                <td>
                                                    <button class="btn-delete" style="border:none"><a
                                                            href="user-delete.php?delete=<?php echo $row['user_id']; ?>">Delete</a></button>
                                                    <br>

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