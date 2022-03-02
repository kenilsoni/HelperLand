<!DOCTYPE html>
<html lang="en">
<!-- Head tag start -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>HomePage</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./assets/css/Homepage.css" />

<body>

    <section id="header">

        <?php include "header-2.php"; ?>
        <?php include "Login_modal.php"; ?>
        <?php if (isset($_SESSION['fpassword'])) {
            if ($_SESSION['fpassword'] == 1) { ?>

                <script>
                    swal({
                        title: "Great Job",
                        text: "Password Updated",
                        icon: "success",
                    });
                </script>
            <?php unset($_SESSION['fpassword']);
            } elseif ($_SESSION['fpassword'] == 2) { ?>

                <script>
                    swal({
                        title: "sorry!",
                        text: "something went wrong",
                        icon: "warning",
                    });
                </script>

        <?php unset($_SESSION['fpassword']);
            }
        } ?>


        <?php if (isset($_SESSION['sendmail'])) {
            if ($_SESSION['sendmail'] == 1) { ?>

                <script>
                    swal({
                        title: "Great Job",
                        text: "Send mail successfully",
                        icon: "success",
                    });
                </script>
            <?php unset($_SESSION['sendmail']);
            } elseif ($_SESSION['sendmail'] == 2) { ?>

                <script>
                    swal({
                        title: "sorry!",
                        text: "something went wrong",
                        icon: "warning",
                    });
                </script>

            <?php unset($_SESSION['sendmail']);
            } elseif ($_SESSION['sendmail'] == 3) { ?>

                <script>
                    swal({
                        title: "sorry!",
                        text: "Email is not exist in our record!",
                        icon: "warning",
                    });
                </script>

        <?php unset($_SESSION['sendmail']);
            }
        } ?>

<?php if (isset($_SESSION['user_unset'])) { ?>
            <script>
swal({
					title: "Login!! ",
					text: "Please login first !",
					icon: "warning",
				});
            </script>
        <?php unset($_SESSION['user_unset']);
        } ?>


        <?php if (isset($_SESSION['checkemail'])) { ?>
            <script>
                swal({
                    title: "sorry!",
                    text: "Please check email or password!",
                    icon: "warning",
                });
            </script>
        <?php unset($_SESSION['checkemail']);
        } ?>
        <?php if (isset($_SESSION['booking'])) {
            if ($_SESSION['booking'] == 1) { ?>
                <script>
                    swal({
                        title: "Good job!",
                        text: "Your booking is successfully!",
                        icon: "success",
                    });
                </script>
            <?php unset($_SESSION['booking']);
            
            }
        } ?>
        <?php if (isset($_SESSION['registration'])) {
            if ($_SESSION['registration'] == 1) { ?>
                <script>
                    swal({
                        title: "Good job! ",
                        text: "Account created successfully!",
                        icon: "success",
                    });
                </script>
            <?php unset($_SESSION['registration']);
            } elseif ($_SESSION['registration'] == 2) { ?>
                <script>
                    swal({
                        title: "Sorry! ",
                        text: "Something went wrong!",
                        icon: "error",
                    });
                </script>
        <?php
                unset($_SESSION['registration']);
            }
        } ?>
        <!-- Navbar end -->
        <div class="title">
            <h1>Lorem ipsum dolor.</h1>
            <ul>
                <li>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit dsfa.</li>
                <li>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit dsfa.</li>
                <li>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit dsfa.</li>
            </ul>
        </div>
        <div class="text-center mt-5">
            <a class="button center-btn" type="button" href="?function=bookservice_page">Let's Book a Cleaner</a>
        </div>

        <div class="row process">
            <div class="col part">
                <img src="./assets/Images/postcode.svg" alt="postcode">
                <p>Enter your postcode</p>

            </div>
            <div class="col part arrow">
                <img src="./assets/Images/step-arrow-2.png" alt="arrow">
            </div>
            <div class="col part">
                <img src="./assets/Images/selectPlan.png" alt="plan">
                <p>Select your plan</p>
            </div>
            <div class="col part arrow">
                <img src="./assets/Images/step-arrow-1.png" alt="arrow">
            </div>
            <div class="col part">
                <img src="./assets/Images/payOnline.svg" alt="payonline">
                <p>Pay securely online</p>
            </div>
            <div class="col part arrow">
                <img src="./assets/Images/step-arrow-2.png" alt="arrow">
            </div>
            <div class="col part">
                <img src="./assets/Images/forma-1.svg" alt="service">
                <p>Enjoy amazing service</p>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-1">
            <svg id="scrollDown" xmlns="http://www.w3.org/2000/svg" width="47" height="47">
                <path stroke="#FFF" fill="none" d="M23.499 3.499c11.046 0 20 8.955 20 20 0 11.046-8.954 20-20 20-11.045 0-20-8.954-20-20 0-11.045 8.955-20 20-20z" />
                <path fill-rule="evenodd" fill="#FFF" d="M30.584 25.522a.835.835 0 0 0-1.188 0l-5.055 5.083V14.348c0-.47-.378-.85-.845-.85-.206 0-.845.38-.845.85v16.257l-5.049-5.083a.835.835 0 0 0-1.188 0c.426.331.426.863 0 1.195l6.491 6.527c.795.165.378.248.598.248a.837.837 0 0 0 .597-.248l6.491-6.527a.865.865 0 0 0-.007-1.195z" />
            </svg>
        </div>
        <!-- <div class="down">
                <i class="fas fa-arrow-down border border-1 p-2"></i>
            </div> -->
    </section>
    <!-- Why Helperland start -->
    <section id="Helperland">
        <h1>Why Helperland</h1>
        <div class="row list-reason">
            <div class="col-lg-4 reason" data-aos="slide-up" data-aos-duration="500" data-aos-delay="50" data-aos-easing="ease-out">
                <img src="./assets/Images/professionals.jpg" alt="exprience">
                <h3>Exprience & Vetted Professinals</h3>
                <p>dominate the industry in scale and scope with an
                    adaptable, extensive network that consistently
                    delivers exceptional results.</p>
            </div>
            <div class="col-lg-4 reason " data-aos="slide-up" data-aos-duration="500" data-aos-delay="100" data-aos-easing="ease-out">
                <img src="./assets/Images/group-23.png" alt="palyment">
                <h3>Secure Online Payment</h3>
                <p class="a">Payment is processed securely online. Customers
                    pay safely online and manage the booking.
                </p>
            </div>
            <div class="col-lg-4 reason" data-aos="slide-up" data-aos-duration="500" data-aos-delay="150" data-aos-easing="ease-out">
                <img src="./assets/Images/group-24.png" alt="service">
                <h3>Dedicated Customer Service</h3>
                <p>to our customers and are guided in all we do by their
                    needs. The team is always happy to support you
                    and offer all the information.</p>
            </div>
        </div>
    </section>

    <!-- About start -->
    <section id="about">
        <div class="container-fluid d-flex flex-wrap
                justify-content-center">
            <div class="row">
                <div class="about-text col-lg-7">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Donec nisi sapien, suscipit ut accumsan
                        vitae, pulvinar ac libero. </p>
                    <p>Aliquam erat volutpat. Nullam quis ex odio. Nam
                        bibendum cursus purus, vel efficitur urna finibus
                        vitae. Nullam finibus aliquet pharetra. Morbi in sem
                        dolor. Integer pretium hendrerit ante quis
                        vehicula.</p>
                    <p> Mauris consequat ornare enim, sed lobortis quam
                        ultrices sed.</p>
                </div>
                <div class="col-lg-3 align-items-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" data-aos-easing="ease-out">
                    <img class="about-image" src="./assets/Images/group-36.png" alt="peoples">

                </div>
            </div>
        </div>
        <!-- Blog start -->
        <div class="blog">
            <h1>Our Blog</h1>
            <div class="row d-flex flex-wrap justify-content-center">
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-out">
                    <div class="card card-box">
                        <img src="./assets/Images/card-img1.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit
                                amet</h5>
                            <h6 class="card-subtitle mb-2 text-muted">January
                                28, 2019</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Sed fermentum
                                metus pulvinar aliquet.</p>
                            <a href="#">Read the Post <img src="./assets/Images/shape-2.png" style="margin-left:4px;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="500" data-aos-delay="400" data-aos-easing="ease-out">
                    <div class="card card-box">
                        <img src="./assets/Images/card-img2.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit
                                amet</h5>
                            <h6 class="card-subtitle mb-2 text-muted">January
                                28, 2019</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Sed fermentum
                                metus pulvinar aliquet.</p>
                            <a href="#">Read the Post <img src="./assets/Images/shape-2.png" style="margin-left:4px;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="slide-up" data-aos-duration="500" data-aos-delay="500" data-aos-easing="ease-out">
                    <div class="card card-box">
                        <img src="./assets/Images/card-img3.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit
                                amet</h5>
                            <h6 class="card-subtitle mb-2 text-muted">January
                                28, 2019</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Sed fermentum
                                metus pulvinar aliquet.</p>
                            <a href="#">Read the Post <img src="./assets/Images/shape-2.png" style="margin-left:4px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customervoice Start -->
    <section id="CustomerVoice">
        <h1>What Our Customers Say</h1>
        <div class="row">
            <div class="col-lg-4" data-aos="slide-up" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-out">
                <div class="card card-box review position-relative">
                    <div class="card-body">
                        <div class="row">
                            <img class="customer-image col-sm-6" src="./assets/Images/customer1.png">
                            <div class="col-sm-6">
                                <h5 class="card-title">Lary Watson</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Manchester</h6>
                                <img class="batch" src="./assets/Images/message.png">
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Sed fermentum metus
                            pulvinar aliquet consequat. Praesent nec
                            malesuada nibh. </p>
                        <p>Nullam et metus congue, auctor augue sit amet,
                            consectetur tortor.</p>
                        <a href="#">Read the Post <img src="./assets/Images/shape-2.png" style="margin-left:4px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="slide-up" data-aos-duration="500" data-aos-delay="400" data-aos-easing="ease-out">
                <div class="card card-box review">
                    <div class="card-body">
                        <div class="row">
                            <img class="customer-image col-sm-6" src="./assets/Images/customer2.png">
                            <div class="col-sm-6">
                                <h5 class="card-title">John Smith</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Manchester</h6>
                                <img class="batch" src="./assets/Images/message.png">
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Sed fermentum metus
                            pulvinar aliquet consequat. Praesent nec
                            malesuada nibh. </p>
                        <p>Nullam et metus congue, auctor augue sit amet,
                            consectetur tortor.</p>
                        <a href="#">Read the Post <img src="./assets/Images/shape-2.png" style="margin-left:4px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="slide-up" data-aos-duration="500" data-aos-delay="500" data-aos-easing="ease-out">
                <div class="card card-box review">
                    <div class="card-body">
                        <div class="row">
                            <img class="customer-image col-sm-6" src="./assets/Images/customer3.png">
                            <div class="col-sm-6">
                                <h5 class="card-title">Lars Johnson</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Manchester</h6>
                                <img class="batch" src="./assets/Images/message.png">
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Sed fermentum metus
                            pulvinar aliquet consequat. Praesent nec
                            malesuada nibh. </p>
                        <p>Nullam et metus congue, auctor augue sit amet,
                            consectetur tortor.</p>
                        <a href="#">Read More <img src="./assets/Images/shape-2.png" style="margin-left:4px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <a href="#"><svg class="up-arrow fixed-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
                <path d="M10 9.172l3.536
                        3.535a1 1 0 0 0 1.414-1.414L10.707 7.05a1 1 0 0 0-1.414
                        0L5.05 11.293a1 1 0 0 0 1.414 1.414L10 9.172zM10
                        20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10
                        10-4.477 10-10 10z"></path>
            </svg>
        </a>
        <div class="newsletter my-5 container d-flex flex-column align-items-center justify-content-center">
            <div class="newsletterHeader">GET OUR NEWSLETTER</div>
            <div class="newsletterForm d-flex flex-wrap align-items-center justify-content-center">
                <input type="email" class="rounded-pill" name="email" id="email" placeholder="Your Email" required />
                <button class="send rounded-pill" type="submit">Submit</button>
            </div>
        </div>

        <div class="msgboat"><img class="chat" src="./assets/Images/layer-598.png"></a>
        </div>
    </section>
    <!-- Footer Start -->
    <footer class="d-flex align-items-center justify-content-between">
        <div class="footerLogo">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106" height="78">
                <image width="106" height="78" xlink:href="data:img/png;base64,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" />
            </svg>
        </div>
        <div class="footerMenu d-flex flex-wrap align-items-center justify-content-center">
            <div class="footerMenuItem"><a href="#">HOME</a></div>
            <div class="footerMenuItem"><a href="?function=aboutpage">ABOUT</a></div>
            <div class="footerMenuItem"><a href="#">TESTIMONIALS</a></div>
            <div class="footerMenuItem"><a href="?function=faqpage">FAQS</a></div>
            <div class="footerMenuItem"><a href="#">INSURANCE POLICY</a></div>
            <div class="footerMenuItem"><a href="#">IMPRESSUM</a></div>
        </div>
        <div class="socialMedia d-flex flex-nowrap align-items-center justify-content-center">
            <a class="d-flex align-items-center justify-content-center rounded-circle" href="https://facebook.com/helperDE" target="_blank">
                <svg class="d-block" xmlns="http://www.w3.org/2000/svg" width="9" height="18">
                    <path fill-rule="evenodd" fill="#CCC" d="M1.947 3.48v2.481H0v3.033h1.947V18.1h4.001V8.995h2.685S8.885 7.541 9.7 5.95H5.963V3.876c0-.31.437-.728.868-.728H9.11V.9H6.46C1.848.9 1.947 3.27 1.947 3.48z" />
                </svg>
            </a>
            <a class="d-flex align-items-center justify-content-center rounded-circle" href="https://www.instagram.com/helperlandde" target="_blank">
                <svg class="d-block" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                    <path fill-rule="evenodd" fill="#CCC" d="M14.48 20H5.519A5.524 5.524 0 0 1 0 14.482V5.52C0 2.477 2.475.2 5.519.2h8.961c3.043 0 5.519 2.277 5.519 5.32v8.962A5.525 5.525 0 0 1 14.48 20zm3.744-5.518V5.52a3.748 3.748 0 0 0-3.744-3.744H5.519A3.749 3.749 0 0 0 1.774 5.52v8.962a3.749 3.749 0 0 0 3.745 3.744h8.961a3.748 3.748 0 0 0 3.744-3.744zm-2.855-8.536c-.099 0-.678-.14-.92-.381-.242-.243.221-.578.221-.921 0-.342-.463-.678-.221-.92.242-.242.821-.381.92-.381.343 0 1.111.139.92.381.242.242.381.578.381.92 0 .342-.139.678-.381.921.171.241-.577.381-.92.381zm-5.37 9.208c-2.841 0-5.153-2.312-5.153-5.054 0-2.941 2.312-5.252 5.153-5.252 2.842 0 5.153 2.311 5.153 5.252 0 2.742-2.311 5.054-5.153 5.054zm0-8.532c-1.863 0-3.379 1.516-3.379 3.478 0 1.764 1.516 3.28 3.379 3.28s3.379-1.516 3.379-3.28c0-1.962-1.516-3.478-3.379-3.478z" />
                </svg>
            </a>
        </div>
    </footer>

    <div class="policy d-flex align-items-center justify-content-around fixed-bottom" id="policy1">

        <div class="policywidth">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
            feugiat nunc libero, ac malesuada ligula aliquam ac. <a href="#">Privacy Policy</a>


        </div>
        <button class="ok-btn" onclick="closefun()">OK!</button>

    </div>

</body>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="./assets/js/Homepage.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>