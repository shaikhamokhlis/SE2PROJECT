<!-- This php code block is what connects the website to the database via the "connection.php" class -->
<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
    if(empty($maintenance_number))
    {
		$office_number = $_POST['office_number'];
		$staff_name = $_POST['staff_name'];

		$query = "SELECT * FROM office WHERE Office_Number = '$office_number' limit 1";
    $result=mysqli_query($con, $query);
    
    if($result && mysqli_num_rows($result) > 0) // check if applicable
				{

          $update_query="UPDATE office set Staff_Name='$staff_name' where Office_Number='$office_number'";
          mysqli_query($con, $update_query);
          echo "<script> alert('تم التحديث بنجاح'); window.location.href='update.php'; </script>";
        }
      }if(empty($office_number))
      {
          
          $maintenance_number = $_POST['maintenance_number'];
		      $staff_name = $_POST['staff_name'];

		$query = "SELECT * FROM office WHERE Maintenance_Number = '$maintenance_number' limit 1";
    $result=mysqli_query($con, $query);
    
    if($result && mysqli_num_rows($result) > 0) // check if applicable
				{

          $update_query="UPDATE office set Staff_Name='$staff_name' where Maintenance_Number='$maintenance_number'";
          mysqli_query($con, $update_query);
          echo "<script> alert('تم التحديث بنجاح'); window.location.href='update.php'; </script>";


        }
  }

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>نظام مكاتب كلية علوم الحاسب والمعلومات</title>
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

  <!-- Template Main CSS File -->
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


function validateAndSend() {
            if (office_form.office_number.value == '' && office_form.maintenance_number.value == '') {
                alert('الرجاء ادخال رقم المكتب او رقم الصيانة');
                return false;
            }
            else {
                office_form.submit();
            }
        }
</script>

  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span><img src="assets/img/ccis.png" alt="">كلية علوم الحاسب والمعلومات</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">تسجيل خروج</a></li>
          <li><a class="nav-link scrollto" href="#about">عن البرنامج</a></li>
          <li><a class="nav-link scrollto" href="#update">تحديث</a></li>
	      <li><a class="nav-link scrollto" href="#testimonials">خرائط الأدوار</a></li>

          <li class="dropdown"><a href="#team"><span>الوصول السريع  </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#team">وكيلات الأقسام</a></li>
              <li><a href="#team">شؤون الطالبات</a></li>
		          <li><a href="#team">لجنة الأعذار</a></li>
		          <li><a href="#team">وحدة التدريب</a></li>
              <li><a href="#team">وحدة النشاط</a></li>
              <li><a href="#team">وحدة الإرشاد الإجتماعي والنفسي</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#portfolio"><span>الكل</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#CS">قسم علوم الحاسب</a></li>
              <li><a href="#IS">قسم نظم المعلومات</a></li>
              <li><a href="#IT">قسم تقنية المعلومات</a></li>
              <li><a href="#IM">قسم إدارة المعلومات</a></li>
              <li><a href="#MNG">الشؤون الإدارية</a></li>
            </ul>
          </li>
           <li><a class="nav-link scrollto" onclick="myFunction()" class="dropbtn">بحث</a></li>
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
   
          <li><a class="nav-link scrollto" href="#hero">الرئيسية</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>نظام مكاتب كلية علوم الحاسب والمعلومات</h1>
      <h2>لتحديث بيانات المكاتب وإدارتها</h2>
      <a href="#update" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- This section promotes the admin to enter the Office Number/ Maintanance Number to change a staff's name and 
  validates that fields are not empty -->
    <!--===== update offices section ===== -->
    <section id="update" class="update section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>تحديث المكاتب</h2>
            <p>يرجى إدخال رقم المكتب أو رقم الصيانة</p>
          </div>
            <div class="col-lg-6" style="right; width: 60%; margin-left:20%;">
              <form method="Post" name="office_form" >
                <div class="row">
                  <div class="form-group mt-3" >
                    <label for="office number" >  رقم المكتب </label>
                    <input type="text" name="office_number" class="form-control" id="office number" placeholder="رقم المكتب "  >
                  </div>

                  <div class="form-group mt-3" >
                    <label for="office number" >  رقم الصيانة </label>
                    <input type="text" name="maintenance_number" class="form-control" id="office number" placeholder=" رقم الصيانة" >
                  </div>
                  
                </div>
                <div class="form-group mt-3">
                <label for="teacher name" >  اسم عضو هيئة التدريس </label> 
                <input type="text" name="staff_name" class="form-control" id="teacher name" placeholder="اسم عضو هيئة التدريس "required >
                </div>
               <br>
              <div class="text-center">
          <button type="submit"style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
                                              padding: 30px;
                                              background: #fff; 
                                              background: #76adc5;
                                              border: 0;
                                              padding: 10px 24px;
                                              color: #fff;
                                              transition: 0.4s;
                                              text-decoration: none;
                                              color: #fff;"
           onclick="validateAndSend()">تحديث</button>
          </a>
          </div> 
          </form>
          <style>
            .update .php-email-form button[type=submit] {
            background: #67b0d1;
            border: 0;
            padding: 10px 24px;
            color: #fff;
            transition: 0.4s;
            }
          </style>
      </section>

      <!-- This section filters offices that are currently empty.
    THIS FEATURE WAS NOT REQUESTED BY THE CLIENTS BUT WE THOUGHT THAT IT MIGHT BE HELPFUL-->
      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>للإطلاع على المكاتب الشاغره</h2>
        <p> </p>
        </div>

        <form action="empty.php" method="Post">
              <div class="text-center">
		
		<button type="submit" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
                                              padding: 30px;
                                              background: #fff; 
                                              background: #76adc5;
                                              border: 0;
                                              padding: 10px 24px;
                                              color: #fff;
                                              transition: 0.4s;
                                              text-decoration: none;
                                              color: #fff;"
    > <i class="bi bi-download"></i></button>
		
		</div> 
          </form>
    </section>
    <!-- End Contact Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>الكل</h2>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-STU" id="MNG">الشؤون الإدارية</li>
              <li data-filter=".filter-IM" id="IM">قسم إدارة المعلومات</li>
              <li data-filter=".filter-IT" id="IT">قسم تقنية المعلومات</li>
              <li data-filter=".filter-IS" id="IS">قسم نظم المعلومات</li>
              <li data-filter=".filter-CS" id="CS">قسم علوم الحاسب </li>
              <li data-filter="*" class="filter-active" id="ALL">الكل</li>
            </ul>
          </div>
        </div>

        
        <div class="row portfolio-container" data-aos="fade-up">
        <!-- In the following php code blocks ->
        Upon pressing on "قسم علوم الحاسب" only faculty member from CS will appear using mySQL command to filter them-->
        <?php
        			$query_cs = "SELECT * FROM office WHERE Department ='CS'";
              $result_cs = mysqli_query($con, $query_cs);
              ?>
            <?php
                    while($row = mysqli_fetch_assoc($result_cs)) {
                      ?>
                      <div class="col-lg-4 col-md-6 portfolio-item filter-CS">
                      <div class="portfolio-wrap">
                      <p  class="img-fluid" style="text-align: right;"><?php echo $row['Office_Type']; ?>
                      <br> <?php echo $row['Staff_Name']; ?> 
                      <br> <?php echo $row['Office_Number'];?> </p> </div> </div>
                   <?php }?>

        <!-- In the following php code blocks ->
        Upon pressing on "قسم ادارة المعلومات" only faculty member from CS will appear using mySQL command to filter them-->
              <?php
        			$query_IM = "SELECT * FROM office WHERE Department ='IM'";
              $result_IM = mysqli_query($con, $query_IM);
              ?>
            <?php
                    while($row = mysqli_fetch_assoc($result_IM)) {
                      ?>
                      <div class="col-lg-4 col-md-6 portfolio-item filter-IM">
                      <div class="portfolio-wrap">
                      <p  class="img-fluid" style="text-align: right;"><?php echo $row['Office_Type']; ?>
                      <br> <?php echo $row['Staff_Name']; ?> 
                      <br> <?php echo $row['Office_Number'];?> </p> </div> </div>
                   <?php }?>




        <!-- In the following php code blocks ->
        Upon pressing on "قسم نظم المعلومات" only faculty member from CS will appear using mySQL command to filter them-->
         <?php
        			$query_IS = "SELECT * FROM office WHERE Department ='IS'";
              $result_IS = mysqli_query($con, $query_IS);
              ?>
            <?php
                    while($row = mysqli_fetch_assoc($result_IS)) {
                      ?>
                      <div class="col-lg-4 col-md-6 portfolio-item filter-IS">
                      <div class="portfolio-wrap">
                      <p  class="img-fluid" style="text-align: right;"><?php echo $row['Office_Type']; ?>
                      <br> <?php echo $row['Staff_Name']; ?>
                      <br> <?php echo $row['Office_Number'];?> </p> </div> </div>
                      <?php }?>
          
          
        
        <!-- In the following php code blocks ->
        Upon pressing on "قسم شؤون الادارية" only faculty member from CS will appear using mySQL command to filter them-->
           <?php
        			$query_STU = "SELECT * FROM office WHERE Department ='STU'";
              $result_STU = mysqli_query($con, $query_STU);
              ?>
            <?php
                    while($row = mysqli_fetch_assoc($result_STU)) {
                      ?>
                      <div class="col-lg-4 col-md-6 portfolio-item filter-STU">
                      <div class="portfolio-wrap">
                      <p  class="img-fluid" style="text-align: right;"><?php echo $row['Office_Type']; ?>
                      <br> <?php echo $row['Staff_Name']; ?>
                      <br> <?php echo $row['Office_Number'];?> </p> </div> </div>
                      <?php }?>
          
          

        <!-- In the following php code blocks ->
        Upon pressing on "قسم تقنية المعلومات" only faculty member from CS will appear using mySQL command to filter them-->      
        <?php
        			$query_IT = "SELECT * FROM office WHERE Department ='IT'";
              $result_IT = mysqli_query($con, $query_IT);
              ?>
            <?php
                    while($row = mysqli_fetch_assoc($result_IT)) {
                      ?>
                      <div class="col-lg-4 col-md-6 portfolio-item filter-IT">
                      <div class="portfolio-wrap">
                      <p  class="img-fluid" style="text-align: right;"><?php echo $row['Office_Type']; ?>
                      <br> <?php echo $row['Staff_Name']; ?>
                      <br> <?php echo $row['Office_Number'];?> </p> </div>  </div>
                      <?php }?>
      </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- This section will display images of each floor -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>خرائط الأدوار</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets/img/floor1-1.jpg" style="width: 100%; padding-right: 10px;" id="sec1">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الأول</h3>
                <h4 style="text-align: center;">الدوار الأول</h4>
              </div>
            </div>
            <!-- End testimonial item -->

             <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets\img\FLOOR2-1 (1).jpg" style="width: 100%; padding-right: 10px" id="sec2">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الثاني</h3>
                <h4 style="text-align: center;">الدوار الأول</h4>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets/img/floor2-2.jpg" style="width: 100%; padding-right: 10px" id="sec3">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الثاني</h3>
                <h4 style="text-align: center;">الدوار الثاني</h4>
              </div>
            </div>
            <!-- End testimonial item -->

             <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets/img/floor3-1.jpg" style="width: 100%; padding-right: 10px" id="sec4">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الثالث</h3>
                <h4 style="text-align: center;">الدوار الأول</h4>
              </div>
            </div>
            <!-- End testimonial item -->

              <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets\img\floor3-2.jpg" style="width: 100%; padding-right: 10px" id="sec5">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الثالث</h3>
                <h4 style="text-align: center;">الدوار الثاني</h4>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets/img/p3.jpg" style="width: 100%; padding-right: 10px" id="sec6">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الثالث</h3>
                <h4 style="text-align: center;">البانوراما</h4>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets/img/floor4-1.jpg" style="width: 100%; padding-right: 10px" id="sec7">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الرابع</h3>
                <h4 style="text-align: center;">الدوار الأول</h4>
              </div>
            </div>
            <!-- End testimonial item -->

             <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets/img/floor4-2.jpg" style="width: 100%; padding-right: 10px" id="sec8">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الرابع</h3>
                <h4 style="text-align: center;">الدوار الثاني</h4>
              </div>
            </div>
            <!-- End testimonial item -->

             <div class="swiper-slide">
              <div>
                <p>
                  <div>
                  <img src="assets/img/p4.jpg" style="width: 100%; padding-right: 10px" id="sec9">
                  </div>
                </p>
                <h3 style="text-align: center;">الدور الرابع</h3>
                <h4 style="text-align: center;">البانوراما</h4>
              </div>
            </div>
            <!-- End testimonial item -->
        
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    
     <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>للإطلاع على جميع المكاتب</h2>
        <p> </p>
        </div>

        <form action="print.php" method="Post">
              <div class="text-center">
		
		<button type="submit" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
                                              padding: 30px;
                                              background: #fff; 
                                              background: #76adc5;
                                              border: 0;
                                              padding: 10px 24px;
                                              color: #fff;
                                              transition: 0.4s;
                                              text-decoration: none;
                                              color: #fff;"> <i class="bi bi-download"></i></button>
		
		</div> 
            </form>
	
       
    </section>
    <!-- End Contact Section -->



    <!-- ======= Team Section ======= -->
    <!-- ======= Upadate offices Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>الوصول السريع</h2>
        </div>
        
        <body style = " height: 100vh; justify-content: center; align-items: center;" >
          <div class = "container">
          <select  style="font-size: 1rem; padding: 10px; background-color: #79a7bb; 
          color: white; outline: none; border: none; text-align: right; width: 45%; margin-left:45%;">
           <option value = "CCIS agent" selected>وكيلة الكلية</option>
            <option value = "CS agent"> وكيلة علوم الحاسب</option>
            <option value = "IS agent" > وكيلة نظم المعلومات</option>
            <option value = "IT agent">وكيلة تقنية المعلومات</option>
             <option value = "Students Affairs">شؤون الطالبات</option>
             <option value = "Psychologist">الاخصائية النفسية/الاجتماعية</option>
            <option value = "Training Unit">وحدة التدريب</option>
            <option value = "Excuses Committee">لجنة الأعذار</option>
            <option value = "Activity Unit">وحدة النشاط</option>
          </select>
          <br>
          <br>
          <br>
          <p class = "FA" ><img style="width: 100%; padding-right: 20% " 
                  src="assets/img/EachOffice/3A-336.png" alt="Maps"></p>
         </div>

          <script>
           const selectCar = document. querySelector('select')
           const img = document. querySelector('.FA img')
           const cars = ["assets/img/EachOffice/3A-336.png", "assets/img/EachOffice/3A-241.png", "assets/img/EachOffice/4A-241.png",
           "assets/img/EachOffice/2A-148.png", "assets/img/EachOffice/3A-345.png", "assets/img/EachOffice/3A_350&3A_348.png", "assets/img/EachOffice/3A-344.png",
           "assets/img/EachOffice/4A-351.png", "assets/img/EachOffice/4A-350.png", ]
          selectCar.addEventListener('change', ( ) =>{ img.setAttribute('src', cars [selectCar.selectedIndex])})
          </script>
         </body>

        
    </section>
    <!-- End team Section -->
    <!-- End Update Offices Section -->

    <!-- This section includes an image that acts as a guide for the office number-->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="120">
          <h2>دليل الأدوار</h2>
        </div>

        <div class="row">

<img src="assets/img/floor.jpg"  style="right; width: 60%; margin-left:20%;" id="img-floor">
       </div>


    </section>
    <!-- End Team Section -->


 <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>عن البرنامج</h3>
              <p>
                يهدف البرنامج إلى تسهيل الوصول لمنسوبي جامعة الإمام محمد بن سعود الإسلامية مكونة من  أعضاء هيئة التدريس  والإداريات والطالبات
              </p>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4 style="text-align: right;">الشؤون الإدارية</h4>
                  <p style="text-align: right;">تتكون الشؤون الإدارية من الإرشاد الطلابي وشؤون الطالبات</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt" ></i>
                  <h4 style="text-align: right;">أقسام الكلية</h4>
                  <p style="text-align: right;">
                    تحتوي كلية علوم الحاسب والمعلومات على أربعةأقسام
                    <br>
                    :وللتواصل مع الإرشاد الأكاديمي لكل قسم
                    <br>
                    <a href=mailto:cs.acadv@imamu.edu.sa = "link"> علوم الحاسب   </a>  -
                    <br>
                    <a href=mailto:IS.Academic-advisor@imamu.edu.sa?subject = "link"> نظم المعلومات  </a>  -
                    <br>
                    <a href=mailto:it.advising@imamu.edu.sa?subject = "link"> تقنية المعلومات  </a>  - 
                    <br>
                    <a href=mailto:it.advising@imamu.edu.sa?subject = "link"> ادارة المعلومات  </a>  - 
                    <br>
                    <a href="07_2[1] 1.pdf"  target="_blank" >[   لللإطلاع على الخطط الدراسية   ]</a>
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4 style="text-align: right;">لجنة الأعذار</h4>
                  <p style="text-align: right;">لجنة لتقييم وختم أعذار الطالبات، يمكنك تسليم العذر عن طريق  <a href=mailto:ccis.excuse@imamu.edu.sa?subject = "link"> ccis.excuse@imamu.edu.sa  </a> </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4 style="text-align: right;"> وحدة الإرشاد الإجتماعي والنفسي</h4>
                  <p style="text-align: right;">أخصائيات لمساعدة الطالبات من النواحي النفسية أو الاجتماعية بكل خصوصية
                  <br>
                        :وللتواصل مع وحدة الإرشاد الإجتماعي والنفسي
                  <br>
                    <a href="https://docs.google.com/forms/d/14IytdhSobajuv4ebCp4ykllRX278N958W2K-viHDdy4/viewform?edit_requested=true">  يرجى تعبئة النموذج  </a>  -
                  <br>  
                  <a href="tel:0112595329">011 259 5329</a>  -
                   
                  <br>  
                  <a href=mailto:ccis.spg.z.n@imamu.edu.sa?subject = "link"> ccis.spg.z.n@imamu.edu.sa </a>  -
                  </p> </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- This section is regatding the log out button -> redirects the admin to the main page for users-->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title"></div>
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="text-center">
                <button type="submit"><a href="index.php">تسجيل خروج</a></button>
              </div> 
          </form>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->
  
  <!-- Footers contains basic information about the college-->
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

  <a href="#img-floor" class="back-to-top d-flex align-items-center justify-content-center">دعم</i></a>

 
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