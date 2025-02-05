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
    <?php
    require("components/header.php");
    ?>
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
<?php
require("components/courses.php");
?>
<!-- end courses section -->

<!-- start contact us section -->
<?php
require("components/contactUs.php");

?>
<!-- end contact us section -->

<!-- slider of user feedback -->

<?php
require("components/feedback.php");
?>
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




<!-- registration forms model end here -->


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/ajaxRequest.js"></script>

</body>
</html>