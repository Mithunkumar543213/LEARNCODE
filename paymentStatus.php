<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/customCss.css">
</head>
<body>



<?php
    require("components/header.php");
?>

<div class="container-fluid bg-dark p-0">
    <div class="row m-0">
        <img src="images/courses.jpg" alt="courses" class="img-fluid p-0" style="height: 600px; object-fit: cover; box-shadow: 10px;"/>
        <div style="position: absolute; top: 75px; left: 0; height: 600px; width: 100%; background-color: rgb(213, 213, 225); opacity: 0.5; z-index: 1;"></div>
    </div>
    <div class="vid-contant text-center">
        <h1 class="my-contant fs-1">Welcome to <span class="learn-text">LEARN</span><span class="code-text">CODE</span></h1>
        <h6 class="my-contant">Learn and Implement</h6>
        
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center">Check Payment Status</h2>
    <form action="checkPaymentStatus.php" method="post" class="mt-4">
        <div class="form-group row justify-content-center">
            <div class="col-sm-6">
                <label for="inputPassword6" class="col-form-label">Payment ID:</label>
                <input type="password" id="inputPassword6" name="password" class="form-control" aria-describedby="passwordHelpInline">
            </div>
        </div>
        <div class="form-group row justify-content-center mt-3">
            <div class="col-sm-6 text-center">
                <button type="submit" class="btn btn-primary">Check Status</button>
            </div>
        </div>
    </form>
</div>

<?php
require("components/contactUs.php");

?>

<?php
require("components/footer.php");
?>

<!-- registration forms model start here -->
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





















