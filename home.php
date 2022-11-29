<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/fontawesome.min.css">
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/breaking.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="#" class="logo"> <i class="fas fa-book-reader"></i> Meritorious Academic Care </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="courses.php">courses</a>
      <a href="contact.php">contact</a>
   </nav>

   <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</header>

<!-- account form section starts  -->

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <a href="admin/login.php"><span class="btn active login-btn">login</span></a>
      <a href="admin/registration-home.php"><span class="btn register-btn">register</span></a>
   </div>
   <div id="user" class="fas fa-user"></div>
</div>

<!-- account form section ends -->

<!-- header section ends -->

<!-- home section starts  -->

<div class="slider">
   <div id="carouselExampleIndicators" class="carousel slide orange-bg" data-bs-ride="carousel">
       <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
       </div>
       <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <img src="images/bk-4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
          </div>
         <div class="carousel-item">
           <div class="row align-items-center">
               <div class="col-md-12 ">
                   <img src="images/cv1.jpg" class="d-block w-100" alt="...">
               </div>
           </div>
         </div>
         <div class="carousel-item">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <img src="images/cv2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
          </div>
       </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </button>
     </div>
</div>

<!-- home section ends -->

<!-- breaking section start -->

<div class="breaking">
      <div class="ticker">
        <div class="title"><h5>Breaking News</h5></div>
        <div class="news">
          <marquee>
            <p>
            নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন https://bit.ly/coronatracerbd।
            নিজে সুরক্ষিত থাকুন অন্যকেও নিরাপদ রাখুন। করোনার লক্ষণ দেখা দিলে গোপন না করে ডাক্তারের পরামর্শের জন্য ফ্রি কল করুন ৩৩৩ও ১৬২৬৩ নম্বরে। করোনাভাইরাস প্রতিরোধে নিয়ম মেনে মাস্ক ব্যবহার করুন।
            আতঙ্কিত না হয়ে বরং সচেতন থাকুন। ভিজিট করুন corona.gov.bd 
          </p>
          </marquee>
        </div>
      </div>
</div>





<!-- breaking section ends -->

<!-- subjects section starts  -->

<section class="subjects">

   <h1 class="heading">our popular subjects</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/bangla.png" alt="Bangla">
         <h3>Bangla</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/math.png" alt="MATH">
         <h3>mathemetics</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/english.png" alt="English">
         <h3>English</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/hmath.png" alt="Higher Math">
         <h3>Higher Math</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/science.png" alt="General Science">
         <h3>General Science</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/physics.png" alt="Physics">
         <h3>Physics</h3>
         <p>12 modules</p>
      </div>
      <div class="box">
         <img src="images/chemistry.png" alt="Chemistry">
         <h3>Chemistry</h3>
         <p>12 modules</p>
      </div>
      <div class="box">
         <img src="images/biology.png" alt="Biology">
         <h3>Biology</h3>
         <p>12 modules</p>
      </div>
      <div class="box">
         <img src="images/ict.png" alt="ICT">
         <h3>ICT</h3>
         <p>12 modules</p>
      </div>
   </div>

</section>

<!-- subjects section ends -->

<!-- home courses slider section starts  -->

<section class="home-courses">

   <h1 class="heading"> our popular courses </h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/engineering1.jpg" alt="Engineering">
               <h3>Engineering</h3>
            </div>
            <div class="content">
               <h3>Engineering</h3>
               <p>For more information please click Read More button</p>
               <a href="http://admissioncoachingbd.blogspot.com/p/best-engineering-admission-coaching.html" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/doctor.png" alt="Medical">
               <h3>Medical</h3>
            </div>
            <div class="content">
               <h3>Medical</h3>
               <p>For more information please click Read More button</p>
               <a href="http://admissioncoachingbd.blogspot.com/p/m.html" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/uv.png" alt="">
               <h3>University</h3>
            </div>
            <div class="content">
               <h3>University</h3>
               <p>For more information please click Read More button</p>
               <a href="https://bdyellowpages.net/listing/Educational-Organisation/University-Admission-Coaching-" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/ielts1.png" alt="IELTS">
               <h3>IELTS</h3>
            </div>
            <div class="content">
               <h3>IELTS</h3>
               <p>For more information please click Read More button</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/gre.png" alt="GRE">
               <h3>GRE</h3>
            </div>
            <div class="content">
               <h3>GRE</h3>
               <p>For more information please click Read More button</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/gk.jpg" alt="">
               <h3>General Knowledge</h3>
            </div>
            <div class="content">
               <h3>General Knowledge</h3>
               <p>For more information please click Read More button</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

      </div>

   </div>

</section>

<!-- home courses slider section ends -->









<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3> <i class="fas fa-book-reader"></i> Meritorious <br> Academic Care</h3>
         <p>“Learn to think continentally“</p>
         <div class="share">
            <a href="https://www.facebook.com/Meritorious-Academic-Care-103485544358653" class="fab fa-facebook-f"></a>
            <a href="https://www.facebook.com/Meritorious-Academic-Care-103485544358653" class="fab fa-twitter"></a>
            <a href="https://www.facebook.com/Meritorious-Academic-Care-103485544358653" class="fab fa-instagram"></a>
            <a href="https://www.facebook.com/Meritorious-Academic-Care-103485544358653" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php" class="link">home</a>
         <a href="about.php" class="link">about</a>
         <a href="courses.php" class="link">courses</a>
         <a href="contact.php" class="link">contact</a>
      </div>

      <div class="box">
         <h3>useful links</h3>
         <a href="https://pmo.gov.bd/" class="link">Prime Minister's Office</a>
         <a href="https://moedu.gov.bd/" class="link">Ministry of Education</a>
         <a href="https://cabinet.gov.bd/" class="link">Cabinet Division</a>
         <a href="https://mopme.gov.bd/" class="link">Ministry of Primary and Mass Education</a>
         <a href="http://www.dshe.gov.bd/" class="link">Department of Secondary and Higher Education</a>
      </div>

   </div>

   <div class="credit"> created by <span>Gulam Murshed Robin & Shobnom Mushtary</span> | all rights reserved!© </div>

</section>

<!-- footer section ends -->







<!-- swiper js link  -->
<script src="js/fontawesome.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>