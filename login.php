
<!doctype html>
<html lang="en">
  <head>
    <title>Wirmon &mdash; Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.php">Wirmon</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="has-children">
                <a href="job-listings.php">Jobs</a>
                <ul class="dropdown">
                  <li><a href="job-single.php">Job Single</a></li>
                  <li><a href="post-job.php">Post a Job</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="services.php">Services</a>
                <ul class="dropdown">
                  <li><a href="services.php">Services</a></li>
                  <li><a href="service-single.php">Service Single</a></li>
                  <li><a href="blog-single.php">Blog Single</a></li>
                  <li><a href="portfolio.php">Portfolio</a></li>
                  <li><a href="portfolio-single.php">Portfolio Single</a></li>
                  <li><a href="testimonials.php">Testimonials</a></li>
                  <li><a href="faq.php">Frequently Ask Questions</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                </ul>
              </li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="d-lg-none"><a href="post-job.php"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.php">Log In</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.php" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
              <a href="login.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu" id = "navicon" style="height:130px;width:130px;"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_11.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Sign Up/Login</h1>
            <div class="custom-breadcrumbs">
            <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">

        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-12 ftcon-animate wow fadeInUp mb-6 pb-6" data-scrollax=" properties: { translateY: '70%' }" style="animation-duration: 1.5s;margin-top:-10%;">
          	<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="850000">0</span> great job offers you deserve!</p>
            <h1 class="mb-5" style="opacity: 0.827778;font-weight: 800;transform: translateZ(0px) translateY(-3.22917%);">Your Dream <br><span>Job is Waiting</span></h1>

						<div class="ftcon-search">
							<div class="row" style="margin-right:0;margin-left:0; ">

		            <div class="col-md-12 nav-link-wrap">
                <h2 class="mb-4">Sign Up</h2>
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Jobseeker</a>

			              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Employer</a>

			            </div>
			          </div>
			          <div class="col-lg-6 tab-wrap">

			            <div class="tab-content" id="v-pills-tabContent">

			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                <form action="#" class="p-4 border rounded">

                                <div class="row form-group">
                                  <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">Email</label>
                                    <input type="text" id="fname" class="form-control" placeholder="Email address">
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">Password</label>
                                    <input type="password" id="fname" class="form-control" placeholder="Password">
                                  </div>
                                </div>
                                <div class="row form-group mb-4">
                                  <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">Re-Type Password</label>
                                    <input type="password" id="fname" class="form-control" placeholder="Re-type Password">
                                  </div>
                                </div>

                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                                  </div>
                                </div>

                                </form>
			              </div>

			              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                              <form action="#" class="p-4 border rounded">

                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email</label>
                                <input type="text" id="fname" class="form-control" placeholder="Email address">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Password</label>
                                <input type="password" id="fname" class="form-control" placeholder="Password">
                              </div>
                            </div>
                            <div class="row form-group mb-4">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Re-Type Password</label>
                                <input type="password" id="fname" class="form-control" placeholder="Re-type Password">
                              </div>
                            </div>

                            <div class="row form-group">
                              <div class="col-md-12">
                                <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                              </div>
                            </div>

                            </form>
			              </div>
			            </div>
			          </div>
                <div class="col-lg-6">
                  <h2 class="mb-4">Log In To JobBoard</h2>
                  <form action="#" class="p-4 border rounded">

                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Email</label>
                        <input type="text" id="fname" class="form-control" placeholder="Email address">
                      </div>
                    </div>
                    <div class="row form-group mb-4">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Password</label>
                        <input type="password" id="fname" class="form-control" placeholder="Password">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                      </div>
                    </div>

                  </form>
                </div>
			        </div>
		        </div>
          </div>





        </div>
      </div>
    </section>
  <?php include_once 'footer.php'; ?>

  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>


    <script src="js/bootstrap-select.min.js"></script>

    <script src="js/custom.js"></script>



  </body>
</html>
