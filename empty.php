<!-- This php code block is what connects the website to the database via the "connection.php" class -->
<?php

session_start();

include("connection.php");
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>دليل مكاتب ومرافق بانوراما جامعة الإمام محمد بن سعود الإسلامية - كلية علوم الحاسب ونظم المعلومات</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/imam.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Links the html to the CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.11.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
.dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>

<body>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span><img src="assets/img/ccis.png" alt="">كلية علوم الحاسب والمعلومات</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto" href="#contact">تسجيل دخول</a></li> -->

          
         
          <li><a class="nav-link scrollto" onclick="myFunction()" class="dropbtn">بحث</a>
         
        
        </li>
          <div class="dropdown">
  
          <div id="myDropdown" class="dropdown-content">
         <form action="Search.php" method="Post">
         <input type="text" placeholder="ابحث هنا" id="myInput" onkeyup="filterFunction()" name="searched_name">
         <button type="submit" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
                                              padding: 30px;
                                              background: #fff; 
                                              background: #76adc5;
                                              border: 0;
                                              padding: 10px 24px;
                                              color: #fff;
                                              transition: 0.4s;
                                              text-decoration: none;
                                              color: #fff;" value="searched_button"> <i class="bi bi-search"> </i></button>
            </form>
          </div>
</div>




                  
          <li><a class="nav-link scrollto" href="index.php">الرئيسية</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>كلية علوم الحاسب والمعلومات</h1>
      <h2>دليل مكاتب ومرافق بانوراما جامعة الإمام محمد بن سعود الإسلامية - كلية علوم الحاسب ونظم المعلومات</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  
 


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

    

        <div class="row team-container" data-aos="fade-up">
        <div class="team-wrap">
        <?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  

  // Read from database
  $query = "SELECT * FROM office WHERE Staff_Name IS NULL  ";
  $result_to_another_file = mysqli_query($con, $query);
  $result = mysqli_query($con, $query);
  $_SESSION['result_empty_offices'] = $result_to_another_file->fetch_all();

  
        if(mysqli_num_rows($result) == 0 ){

    ?>

    <p  class="img-fluid" style="text-align: right; font-size: 40px">لايوجد مكاتب شاغرة 
    
   <?php } ?> 


   <?php
            if( mysqli_num_rows($result) > 0) // check if applicable
            {?>
            <form action="update_empty.php" method="Post">
              <?php
              while($row = mysqli_fetch_assoc($result)){
              ?>
            
            
            <p  class="img-fluid" style="text-align: right; font-size: 40px";> <?php  echo"نوع المكتب :"; echo $row['Office_Type'];  ?>
            <br><?php echo $row['Office_Number'];  echo"  :رقم المكتب";?> 
            <br><?php echo $row['Maintenance_Number']; echo"  :رقم الصيانة";?>
            <br>
            <br>
            <input type="text" name="staff_updated[]" class="form-control" style="right; width: 60%; margin-left:20%;" id="name" placeholder="اسم عضو هيئة التدريس" >
            <br>
            <br>
            
            <?php  } }  ?></p>

      
            <?php } ?>  
            <button type="submit"value="Login" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
                                              padding: 30px;
                                              background: #fff; 
                                              background: #76adc5;
                                              border: 0;
                                              padding: 10px 24px;
                                              color: #fff;
                                              transition: 0.4s;
                                              text-decoration: none;
                                              color: #fff;"
        name="login_button" >تحديث</button>
            </form> 

          

      </div>
    </section><!-- End Team Section -->


      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="120">
          <h2>دليل الادوار</h2>
        </div>

        <div class="row">

<img src="assets/img/floor.jpg"  style="right; width: 60%; margin-left:20%;" id="img-floor">
       </div>


    </section><!-- End Team Section -->




    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

      


      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <!--
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>تسجيل دخول</h2>
          <p>تسجيل دخول الإدارية</p>
        </div>

    

        

          <div class="col-lg-6" style="margin-left: 25%">
          <form method="post">
              <div class="row">
                <div class="form-group mt-3" >
                  <input type="text" name="user_name" class="form-control" name="user_name" id="name" placeholder="اسم المستخدم" required>
                </div>
                
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" id="PASS1" name="password" placeholder="الرقم السري" required>
              </div>
             <br>
              <div class="text-center">
		<a href="login.html">
		<button type="submit"> تسجيل دخول </button >
		</a>
		</div> 
            </form>
          </div>



        </div>

      </div>
    </section>  End Contact Section  -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>المساعدة</h3>
              <p class="pb-3"><em>للتواصل مع شؤون الطالبات عبر الطرق التالية</em></p>
              <p>
                
                </strong> (3A-211) <strong> :رقم المكتب  <br>
               </strong> <a href="mailto:ccis.excuse@imamu.edu.sa?subject= link"> ccis.excuse@imamu.edu.sa  </a> <strong>  :البريد الالكتروني  <br>
              </p>

              <div class="social-links mt-3">
                <a href="https://twitter.com/ccis_imamu?s=11&t=Y3TskeJxbbctxfx3cP3Iew" class="map-pin"><i class="bx bxl-twitter"></i></a>
                <a href="https://t.me/CCIS_IMAMU" class="map-pin"><i class="bx bxl-telegram"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
      <img src="assets/img/imam.png" alt="" style="width: 25px">
      <br>
      <strong><span><a href="https://imamu.edu.sa/Pages/default.aspx"  target="_blank">جامعة الإمام محمد بن سعود الاسلامية</a></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        مشروع صمم بواسطة طالبات كلية علوم الحاسب ونظم المعلومات
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#img-floor" class="back-to-top d-flex align-items-center justify-content-center">دعم</a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>