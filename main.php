<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="mainStyle.css">
    <!--swiper js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zuck.js/2.1.0/zuck.min.js"></script>

</head>

<body>
    <!--navigation bar-->
    <?php
    include_once('nav.php')
        ?>
    <!--header image-->
    <section id="hero">
        <h2>Awesome Dresses for Little Cuties</h2>

        <h4>Checkout this chance</h4>
        <div class="logBtn">
            <a href="form-login.php"><button>Login</button></a>
        </div>

    </section>

    <!--features section-->
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/delivery.png">
            <h4> Island wide Delivery</h4>
        </div>
        <div class="fe-box">
            <img src="images/cashon.png">
            <h4> Cash on Delivery</h4>
        </div>
        <div class="fe-box">
            <img src="images/secure-pay.png">
            <h4> Secure Payments</h4>
        </div>
        <div class="fe-box">
            <img src="images/unique2.jpg">
            <h4> Unique Design</h4>
        </div>
        <div class="fe-box">
            <img src="images/cloth.jpg">
            <h4> Linean material</h4>
        </div>
    </section>
    <!--product-->
    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Dress your cutie as a Princess</p>

        <div class="pro-container">
            <?php
            $select_pro = mysqli_query($con, "SELECT * FROM `product`ORDER BY pro_id DESC LIMIT 4");
            if (mysqli_num_rows($select_pro) > 0) {
                while ($fetch_pro = mysqli_fetch_assoc($select_pro)) {
                    ?>
                    <div class="pro">
                        <img src="admin-panel/uploaded_img/<?php echo $fetch_pro['proPic']; ?>">
                        <div class="pro1">
                            <h5>
                                <?php echo $fetch_pro['proName']; ?>
                            </h5>
                        </div>
                        <h4>Rs:
                            <?php echo $fetch_pro['sprice']; ?>
                        </h4>
                        <div class="btnQuick">
                            <a href="singleClothe.php?id=<?php echo $fetch_pro['pro_id']; ?>"><button class="btn-buy">Quick view
                                </button></a>
                        </div>

                    </div>

                    <!-- <div class="pro">
                <img src="images/pro1.jpg" >
                <div class="pro1">
                    <h5>Off-Shoulder Frock</h5>
                </div>  
            <h4>Rs: 1000 <I>onwards</I></h4>
            </div>
            <div class="pro">
                <img src="images/pro1.jpg" >
                <div class="pro1">
                    <h5>Off-Shoulder Frock</h5>
                </div>  
            <h4>Rs: 1000 <I>onwards</I></h4>
            </div><div class="pro">
                <img src="images/pro1.jpg" >
                <div class="pro1">
                    <h5>Off-Shoulder Frock</h5>
                </div>  
            <h4>Rs: 1000 <I>onwards</I></h4>
            </div>-->
                    <?php
                }
                ;
            }
            ;
            ?>
        </div>
    </section>

    <!--about us-->
    <section id="about" class="section-p1">
        <div class="about-container">
            <h2>about us</h2>
            <h6>Welcome to floaty Wear</h6>

            <p class="section-p1">

                <span> F</span>loaty Wear is dedicated to providing trendy and stylish clothing options for the
                little fashionists in your life.Our mission is to empower young girls to express their unique
                personalities through their clothing choices.We understand that every child is special and has their
                own individual style. That's why we offer a wide range of clothing options to suit various tastes and
                preferences. we have everything you need to create the perfect wardrobe for your little girl.<br><br>
                our collection is not only fashionable but also age-appropriate. We prioritize comfort and quality,
                using only Linean fabrics that are gentle on your child's delicate skin.
                We believe that clothing should not only look good but also feel good,
                allowing children to move and play freely.We also offer detailed size charts and product descriptions,
                ensuring that you make the right choice for your child. <br><br>
                Customer satisfaction is our top priority, and we go above and beyond to ensure that you are happy with
                your purchase.
                Our dedicated customer service team is always ready to assist you with any questions or concerns you may
                have.
                We value your feedback and continuously work towards improving our products and services. <br><br>

                Thank you for choosing Floaty Wear as your go-to destination for stylish clothing for kid girls.
                We hope that our collection inspires your little one to embrace her unique style and feel confident in
                her own skin.
                Start exploring our website today and let your child's fashion journey begin!

        </div>


    </section>


    <!--reveiw section-->
    <section id="review" class="section-p1">
        <h2>Reviews</h2>
        <p id="p">what client say about us</p>
        <div class="review-container">
            <div class="swiper review-slider js-review-slider">
                <div class="swiper-wrapper">
                    <?php
                    $select_com = mysqli_query($con, "SELECT * FROM `review`");
                    if (mysqli_num_rows($select_com) > 0) {
                        while ($fetch_com = mysqli_fetch_assoc($select_com)) {
                            ?>
                            <div class="swiper-slide reveiw-content">

                                <div class="client-name">
                                    <h6>
                                        <?php echo $fetch_com['name']; ?>
                                    </h6>
                                </div>
                                <div class="client-star">
                                    <?php
                                    $count = 1;
                                    while ($count <= 5) {
                                        if ($fetch_com['star'] >= $count) {
                                            ?>
                                            <i class="fa fa-star"></i>
                                            <?php
                                        } else {
                                            ?>
                                            <i class="fa-star-o"></i>
                                            <?php
                                        }
                                        $count++;
                                    }
                                    ?>


                                </div>
                                <div class="review-para">
                                    <p>
                                        <?php echo $fetch_com['comment'] ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="swiper-pagination js-testimonials-pagination"></div>
            </div>
        </div>
        <a href='review.php'><I> Reveiw </I></a>

    </section>
    <section id="contact" class="section-p1">
        <h2>Contact Us</h2>
        <p>we are here to resolve your doughts</p>
        <center>
            <table>
                <tr>
                    <th><i class="fa fa-location-dot"></i></th>
                    <td>558/M-1/20 "kuda aruggoda, Alubomulla, Panadura</td>
                </tr>
                <tr>
                    <th><i class="fa fa-phone"></i></th>
                    <td>078 5413175</td>
                </tr>
                <tr>
                    <th><i class="fa fa-envelope"></i></i></td>
                    <td>floatywearofficial@gamil.com</td>
                </tr>
        </center>
        </table>
    </section>
    <!--footer-->

    <?php
    include_once('footer.php');
    include_once('chat.php');
    ?>
    <script src="main.js"></script>
    <!--review-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.js-review-slider', {
            grabCursor: true,
            spaceBetween: 50,
            pagination: {
                el: '.js-testimonials-pagination',
                clickable: true
            },
            breakpoints: {
                767: {
                    slidesPerView: 4
                }
            }
        })
    </script>
</body>

</html>