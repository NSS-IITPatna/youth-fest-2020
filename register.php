<?php include("./api/functions.php");?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Youth Fest'20</title>
    <link rel="icon" href="img/index/nss.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
<header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="index.html"> <img src="img/index/nss.png" alt="logo"> </a>
                        <a class="navbar-brand single_page_logo" href="index.html"> <img src="img/index/nss.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="events.html">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="team.html">Team</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="pricing.html">pricing</a>
                                </li> -->
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="https://nss.iitp.ac.in">NSS IIT Patna</a>
                                </li>
                            </ul>
                        </div>
                        <a href="register.php" class="d-none d-sm-block btn_1 home_page_btn"><b>Register</b></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--::Header part end::-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Register for Youth Fest'20</h2>
                            <!-- <h5>home <span></span> contact</h5> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
              <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14399.37835508978!2d84.8434447170254!3d25.54355318850096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d567a193702ff%3A0xc9c527c7faec3056!2sIIT+Patna+Administration+Block!5e0!3m2!1sen!2sin!4v1539177184721"
        width="100%"
        height="400px"
        frameborder="0"
        style="border:0"
        allowfullscreen
      ></iframe>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Register</h2>
        </div>
        <div class="col-lg-8">
          <?php registerUser();?>
          <form class="form-contact contact_form"  method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <!-- <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div> -->
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Enter your name:</label>
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name' require>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                   <label>Enter your email address:</label>
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address' require>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <!-- <input class="form-control" name="college" id="college" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'College'" placeholder='College'> -->
                     <label for="cars">Choose your college:</label>
                       <input list="colleges" name="college" require>
                          <datalist id="colleges">
                            <option value="IIT Patna">
                            <option value="NSIT">
                            <option value="NIT Patna">
                            <option value="NIFT Patna">
                          </datalist>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                   <label>Enter your  phone number: </label>
                  <input class="form-control" name="phone" id="phone" type="phone" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Phone Number'" placeholder='Phone Number' require>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                   <label>What degree are your pursuing?</label>
                  <input class="form-control" name="degree" id="degree" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'What degree are your pursuing?'" placeholder='What degree are your pursuing?' require>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cars">Enter your date of Birth: </label>
                  <input class="form-control" name="dob" id="dob" type="date" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your date of birth'" placeholder='Enter your date of birth' require>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Enter your department name:</label>
                  <input class="form-control" name="department" id="department" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your department name'" placeholder='Enter your department name.' require>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                   <label>Enter your  Address:</label>
                  <textarea class="form-control w-100" name="address" id="address" cols="30" rows="4"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your  Address'"
                    placeholder='Enter your Address' require></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Register<i class="flaticon-right-arrow"></i> </button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>IIT Patna, Bihta, Bihar</h3>
              <p>Admin Building, R-306</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+91 9558434293</h3>
              <!-- <p>Mon to Fri 9am to 6pm</p> -->
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>nss@iitp.ac.in</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                        <a href="index.html" class="footer_logo_iner"> <img src="img/index/logo.jpeg" alt="#"> </a>
                        <p>For more Details contact <br>
                        </p>
                        <h5>Kishan Kumar Singh : - 9558434293</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">

                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://nss.iitp.ac.in">NSS IIT Patna</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="register.php">Register</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Our Account</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/nss.iitp/">Facebook</a></li>
                            <li><a href="https://twitter.com/nss.iitp/">Twitter</a></li>
                            <li><a href="https://instagram.com/nss.iitp/">Instagram</a></li>
                            <li><a href="https://www.youtube.com/channel/UCxuUcmz-ymAN_66Mb7HSVmg">Youtube</a></li>
                            <li><a href="https://nss.iitp.ac.in">Website</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Application Security</a></li>
                            <li><a href="">Software Policy</a></li>
                            <li><a href="">Supply Chain</a></li>
                            <li><a href="">Agencies Relation</a></li>
                            <li><a href="">Manage Reputation</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="single_footer_part">
                    <h4>Developer's Info</h4>
                    <ul class="list-unstyled">
                        <li><a href="team.html">Managed By Dev Team NSS IIT Patna</a></li>
                        <li><a href="https://atm1504.in">Amartya Mondal</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="ti-heart" aria-hidden="true"></i> by <a href="https://nss.iitp.ac.in" target="_blank">NSS IIT Patna</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/nss.iitp/" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/nss.iitp/" class="single_social_icon"><i class="fas fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCxuUcmz-ymAN_66Mb7HSVmg" class="single_social_icon"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://github.com/nss-iitpatna" class="single_social_icon"><i class="fab fa-github "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>