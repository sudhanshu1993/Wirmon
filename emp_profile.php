<?php
include "dbconn.php";
 session_start();
 if (($_SESSION['email'] == '') || (!isset($_SESSION['email']))) {
      header("Location: login.php");
}
$email=$_SESSION['email'];
$qry = $conn->prepare("select * from employer where email = ?");
$qry->bindParam(1, $email);
$qry->execute();
if($qry->rowCount() > 0)
{
    $data = $qry->fetchAll();
    foreach($data as $row) {
      $name=$row['name'];
      $contact=$row['contact_no'];
      $location=$row['location'];
      $company_name=$row['company_name'];
      $comp_email=$row['company_email'];
      $category=$row['category'];
      $comp_desc=$row['comp_desc'];
      $url=$row['website_url'];
      $regis_aadhar=$row['regis/aadhar'];
      $pan_gst=$row['pan/gst'];
      $logo_photo=$row['logo/photo'];
    }
  }
  if(isset($_POST['submit'])) {

$discussionContent = $_POST['discussionContent'];
  $stmt1 = $conn->prepare("update employer set comp_desc='$discussionContent' where email=?");
  $stmt1->bindParam(1, $email);
    $stmt1->execute();
  echo '<script>alert("success")</script>';
}
if(isset($_POST['submit']))
  {
    $filename1 = $_FILES['aadhar']['name'];
      $tempname1 = $_FILES['aadhar']['tmp_name'];

      $target_dir1 = "Emp_documents/".$filename1;

      $filename2 = $_FILES['PAN']['name'];
      $tempname2 = $_FILES['PAN']['tmp_name'];

      $target_dir2 = "Emp_documents/".$filename2;

      $filename3 = $_FILES['logo']['name'];
      $tempname3 = $_FILES['logo']['tmp_name'];

      $target_dir3 = "Emp_documents/".$filename3;

      if(move_uploaded_file($tempname1,$target_dir1)&&move_uploaded_file($tempname2,$target_dir2)&&move_uploaded_file($tempname3,$target_dir3))
      {
        echo "alert('Your documents successfully received and you waiting for updation')";
        header('Location:emp.php');
      }
      else{
        header('Location: index.php');
      }

  }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Wirmon &mdash; Profile</title>
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/dash.css">
<style>
.bs-placeholder{margin-left:unset !important;border:unset !important;}</style>
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
              <li class="d-lg-none"><?php echo $_SESSION['email']; ?></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.php" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
              <span class="mr-2 icon-lock_outline" style="color:#fff;"><?php echo $_SESSION['email']; ?></span>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu" id = "navicon" style="height:130px;width:130px;"></span></a>
          </div>

        </div>
      </div>
    </header>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_11.jpg');padding-bottom:unset;" id="home-section">
    </section>

    <section class="site-section">
      <div class="content-container">
<div class="row">
  <div class="col-md-3 LeftNavSideBar" valign="top">
  <div class="col-md-12 " valign="top">
    <!-- Sidebar -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-employerLeftNav-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand navbar-right text-ncspBlue paddingLeft0"><i class="icon-arrow-left" style="padding-right:3%;"></i>Employer Menu</a>
        </div>
        <div id="sidebar-wrapper" class="collapse navbar-collapse navbar-employerLeftNav-collapse paddingLeftRight0" style="padding-left:unset;">
            <nav id="spy">
                <ul class="sidebar-nav nav" style="display:block !important;">
                      <li class="hidden-md hidden-lg">
                        <a  href="index.php">Home</a>
                    </li>
                    <li >
                        <a href="emp_dashboard.php">Employer Home</a></li>
                    <li class="active">
                        <a href="">View/Update Profile</a>
                    </li>
                    <li class="enabled">
                        <a href="emp_postjob.php">Post New Job</a>
                    </li>
                    <li class="enabled">
                        <a href="">Search User</a>
                    </li>
                    <li class="enabled">
                        <a href="">Jobs and Responses</a>
                    </li>
                              </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-md-9">
      <div class="row align-items-center mb-5" style="margin-left:unset;margin-right:unset;">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <div>
              <h2>Employer Profile</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4" style="margin-left:unset;margin-right:unset;">
        <div class="col-lg-12">
          <form class="p-4 p-md-5 border rounded" method="post" role="form" action="#">
            <h3 class="text-black mb-5 border-bottom pb-2">User Details</h3>

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" value="<?php echo $name;?>" class="form-control" id="email" placeholder="you@yourdomain.com">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" value="<?php echo $_SESSION['email'];?>" class="form-control" id="email" placeholder="you@yourdomain.com">
            </div>
            <div class="form-group">
              <label for="job-title">Contact No</label>
              <input type="text" name="contact" value="<?php echo $contact;?>" pattern="[0-9]{10}" class="form-control" id="job-title" placeholder="Product Designer">
            </div>


          <h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>
            <div class="form-group">
              <label for="company-name">Company Name</label>
              <input name="company_name" type="text" value="<?php echo $company_name;?>" class="form-control" id="company-name" placeholder="e.g. New York">
            </div>
            <div class="form-group">
              <label for="email">Company Email</label>
              <input type="text" name="company_email" value="<?php echo $comp_email;?>" class="form-control" id="email" placeholder="you@yourdomain.com">
            </div>
              <div class="form-group">
            <label for="company-name">Organization Category</label>
            <select class="selectpicker border rounded" name="category" value="<?php echo $category;?>" id="job-region" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Category" >
                  <option>Compony</option>
                  <option>NGO</option>
                  <option>Partnership</option>
                  <option>Others</option>
                    </select>
          </div>
          <div class="form-group">
            <label for="job-location">Location</label>
            <input type="text" name="location" value="<?php echo $location;?>" class="form-control" id="job-location" placeholder="e.g. New York">
          </div>
            <div class="form-group">
              <label for="job-description">Company Description</label>
               <input name="discussionContent" type="hidden" value="<?php echo $comp_desc;?>">
              <div id="editor-2" style="height: 375px;">
<?php echo $comp_desc;?>
              </div>
            </div>

            <div class="form-group">
              <label for="company-website">Website URL</label>
              <input type="text" value="<?php echo $url;?>" class="form-control" id="company-website" placeholder="https://">
            </div>
            <div class="form-group">
                <label class="btn btn-primary btn-md btn-file" style="width: -webkit-fill-available;height: 40px;">
              Upload  Company registration/ Individual aadhar
              <input type="file" name="aadhar" value="<?php echo $regis_aadhar;?>" hidden>
              </label>
            </div>
            <div class="form-group">
            <label class="btn btn-primary btn-md btn-file" style="width: -webkit-fill-available;height: 40px;">
              Upload PAN/ GST<input type="file" name="PAN" value="<?php echo $pan_gst;?>" hidden>
              </label>
            </div>
            <div class="form-group">
              <label class="btn btn-primary btn-md btn-file" style="width: -webkit-fill-available;height: 40px;">
              Upload Logo/ Individual photo<input type="file" name="logo"  value="<?php echo $logo_photo;?>" hidden>
              </label>
            </div><hr>
              <div class="form-group">
<center><input type="submit" name="submit" class="btn btn-primary btn-md text-white" value="Update" style="border: 1px solid #157efb;background-color:#157efb;font-size: 20px;">
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
 <script src="discussionsEditor.js"></script>
    <script>

    var quill = new Quill('#editor-2', {
                   modules: {
                   toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                   ['bold', 'italic', 'underline', 'strike'],
                   ['link', 'blockquote', 'code-block', 'image'],
                    [{ 'script': 'sub'}, { 'script': 'super' }],
                   [{ list: 'ordered' }, { list: 'bullet' }],
                    ['clean']
                   ]
                   },
                   placeholder: 'Compose an epic...',
                   theme: 'snow'
                   });
                   var form = document.querySelector('form');
                   form.onsubmit = function() {
                     // Populate hidden form on submit
                       var discussionContent = document.querySelector('input[name=discussionContent]');
                       discussionContent.value = JSON.stringify(quill.getContents());

                       var url ="#";
                       var data = stringify(quill.getContents());
                       alert( "the data is " + data);
                           $.ajax({
                           type: "POST",
                           url : url,
                           data : discussionContent,

                           success: function ()
                           {
                               alert("Successfully sent to database");
                           },
                           error: function()
                           {
                           alert("Could not send to database");
                           }
                       });
                       return false;
                   };
               </script>
  </body>
</html>
