<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnCode</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/customCss.css">
</head>
<body>
    <!-- navbar start from here -->
    <nav class="navbar navbar-expand-lg nav-light border-bottom border-light fixed-top " style="background-color:rgb(224, 225, 225); ">
    <div class="container-fluid">
        <a class="navbar-brand px-5" href="#">
            <span class="learn-text">LEARN</span><span class="code-text">CODE</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-bs-theme="white">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-6 pe-4">
                <li class="nav-item pe-3.5">
                    <a class="nav-link active" aria-current="page" href="index.php" style="font-weight: bold; ">Home</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="courses.php" style="font-weight: bold; ">Courses</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="paymentStatus.php" style="font-weight: bold;">PaymentStatus</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#" style="font-weight: bold;">MyProfile</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#" style="font-weight: bold; ">FeedBack</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#LogInModal" href="#" style="font-weight: bold; ">LogIn</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#RegistrationModal" href="#" style="font-weight: bold; ">SignUp</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#" style="font-weight: bold; ">LogOut</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- end navbar -->

     <!-- end navbar here -->
<!-- start nav top contant -->
<div class="container-fluid remove-vid-m  mb-0" >
        <div class="video-parrent">
                <video playsinline autoplay muted loop>
                        <source src="video/Vid.mp4">
                </video>
                <div class="video-overlay"></div>
        </div>
        <div class="vid-contant">
                <h1 class="my-contant fs-1">Welcome to <span class="learn-text">LEARN</span><span class="code-text">CODE</span></h1>
                <h6 class="my-contant">Learn and Implement</h6>
                <!-- <a href="http://" class="btn btn-danger mt-2">Get-Started</a> -->
                <button type="button" class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#RegistrationModal">
                Get-Started
</button>
        </div>
</div><!-- end nav top contant -->    
 
<!-- start text banner -->
 <div class="container-fluid bg-danger txt-banner mt-0 mb-0 banner">
        <div class="row bottom-banner">
                <div class="col-sm">
                        <h5> <i class="fas fa-book-open mr-3"></i>  100+ Online Courses</h5>
                </div>
                <div class="col-sm">
                        <h5> <i class="fas fa-users mr-3"></i> Expert Instructors</h5>
                </div>
                <div class="col-sm">
                        <h5> <i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
                </div>
                <div class="col-sm">
                        <h5> <i class="fa-solid fa-indian-rupee-sign"></i> Money Back Guarantee*</h5>
                </div>
        </div>
 </div>

<!-- end text banner -->

<!-- start courses section -->
<div class="container mt-3">
    <h1 class="text-center mb-4">Our Courses</h1>
    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="images/Full stack_web_dev.jpg" class="card-img-top img-fluid p-0" alt="Course 1" style="height: 250px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Full Stack Web Development</h5>
                    <p class="card-text">Learn front-end technologies like React and back-end frameworks like Node.js and MongoDB to build full-scale web applications, including APIs and deployment.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text mb-0"><strong>Price: <i class="fa-solid fa-indian-rupee-sign"></i>8000</strong></p>
                        <a href="#" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="images/frontant dev.jpg" class="card-img-top img-fluid p-0" alt="Course 2" style="height: 250px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Frontend Development</h5>
                    <p class="card-text">Master HTML, CSS, JavaScript, and frameworks like React and Vue.js to create responsive, interactive, and visually appealing websites with a strong focus on UI/UX design.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text mb-0"><strong>Price: <i class="fa-solid fa-indian-rupee-sign"></i>4000</strong></p>
                        <a href="#" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="images/backend dev.jpg" class="card-img-top img-fluid p-0" alt="Course 3" style="height: 250px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Backend Development</h5>
                    <p class="card-text">Learn server-side programming with Node.js, Python, and Java, focusing on building scalable APIs, working with databases, and ensuring application security.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text mb-0"><strong>Price: <i class="fa-solid fa-indian-rupee-sign"></i>5000</strong></p>
                        <a href="#" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="images/data science.jpg" class="card-img-top img-fluid p-0" alt="Course 4" style="height: 250px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Data Science</h5>
                    <p class="card-text">Learn data analysis, visualization, and machine learning using Python, R, and tools like TensorFlow and PyTorch to become a proficient data scientist.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text mb-0"><strong>Price: <i class="fa-solid fa-indian-rupee-sign"></i>6000</strong></p>
                        <a href="#" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="images/mobile app.webp" class="card-img-top img-fluid p-0" alt="Course 5" style="height: 250px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Mobile App Development</h5>
                    <p class="card-text">Learn to build mobile applications for Android and iOS using frameworks like React Native, Flutter, and Swift, focusing on performance and user experience.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text mb-0"><strong>Price: <i class="fa-solid fa-indian-rupee-sign"></i>7000</strong></p>
                        <a href="#" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="images/cloud computing.webp" class="card-img-top img-fluid p-0" alt="Course 6" style="height: 250px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Cloud Computing</h5>
                    <p class="card-text">Learn cloud services like AWS, Azure, and Google Cloud, focusing on cloud architecture, deployment, and management to become a cloud expert.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text mb-0"><strong>Price: <i class="fa-solid fa-indian-rupee-sign"></i>9000</strong></p>
                        <a href="#" class="btn btn-primary">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end courses section -->

<!-- start contact us section -->
<div class="container mt-1">
    <h1 class="text-center mb-1">Contact Us</h1>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="contact.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <div class="col-md-4 custom text-white text-center">
            <h4>LEARNCODE</h4>
            <p>Near IIIT,chowk Prayagraj, Uttar Pradesh-211005 <br>
                Phone 8429870248 <br>
                www.learnCode.com
            </p>
        </div>
    </div>
</div>
<!-- end contact us section -->

<!-- slider of user feedback -->

<h1 class="text-center mb-1">Students Feedback</h1>
<div id="feedbackCarousel" class="carousel slide mt-2" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <div class="card shadow-sm border-0" style="width: 18rem; background: linear-gradient(to bottom right, #ff7e5f, #feb47b);">
                    <img src="images/mi_img.jpg" class="card-img-top img-fluid rounded-circle mx-auto mt-3" alt="User 1" style="width: 100px; height: 100px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text"><strong>Course:</strong> Full Stack Web Development</p>
                        <p class="card-text">"This course was amazing! I learned so much and the instructors were very knowledgeable."</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <div class="card shadow-sm border-0" style="width: 18rem; background: linear-gradient(to bottom right, #ff7e5f, #feb47b);">
                    <img src="images/mi_img.jpg" class="card-img-top img-fluid rounded-circle mx-auto mt-3" alt="User 2" style="width: 100px; height: 100px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text"><strong>Course:</strong> Data Science</p>
                        <p class="card-text">"The Data Science course was very comprehensive and covered all the important topics. Highly recommend!"</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <div class="card shadow-sm border-0" style="width: 18rem; background: linear-gradient(to bottom right, #ff7e5f, #feb47b);">
                    <img src="images/mi_img.jpg" class="card-img-top img-fluid rounded-circle mx-auto mt-3" alt="User 3" style="width: 100px; height: 100px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Michael Brown</h5>
                        <p class="card-text"><strong>Course:</strong> Mobile App Development</p>
                        <p class="card-text">"I loved the Mobile App Development course. It was very practical and hands-on."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end slider of user feedback -->

<!-- start footer -->
<?php
require("components/footer.php");
?>
<!-- end footer -->

<!-- registration forms model started here -->
<!-- Button trigger modal -->


<!-- Modal -->
<?php
require("components/forms/registrationForm.php");
?>


<?php
require("components/forms/logInForm.php");
?>



<?php
require("components/forms/adminLogInForm.php");
?>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- registration forms model end here -->


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/ajaxRequest.js"></script>

</body>
</html>