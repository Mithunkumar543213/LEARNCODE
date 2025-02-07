
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnCode</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/customCss.css">
</head>

<body>

    <div class="d-flex">
        <!-- Sidebar start-->
         <?php
         require("adminComponents/adminSideBar.php");
         
         ?>
         <!-- Sidebar start-->
        
        <!-- Main Content -->
        <div class="container-fluid p-4">
            <h2>Admin Dashboard</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-danger text-white text-center p-3">
                        <h3>Courses</h3>
                        <h4>8</h4>
                        <a href="courses.php" class="btn btn-light mt-2">View</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white text-center p-3">
                        <h3>Students</h3>
                        <h4>9</h4>
                        <a href="students.php" class="btn btn-light mt-2">View</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-primary text-white text-center p-3">
                        <h3>Sold</h3>
                        <h4>5</h4>
                        <a href="sell_report.php" class="btn btn-light mt-2">View</a>
                    </div>
                </div>
            </div>

            <!-- courses start from here -->
             <?php
             require("adminComponents/coursesList.php");
             ?>



        </div>
    </div>



<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/ajaxRequest.js"></script>
<script src="js/adminAjaxRequest.js"></script>

    
</body>
</html>
