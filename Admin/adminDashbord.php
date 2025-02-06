
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
         require("adminSideBar.php");
         
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

            <div class="mt-4">
                <h4>Course Ordered</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Course ID</th>
                            <th>Student Email</th>
                            <th>Order Date</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ORDS98956453</td>
                            <td>10</td>
                            <td>ant@example.com</td>
                            <td>2019-09-12</td>
                            <td>800</td>
                            <td><button class="btn btn-danger">🗑️</button></td>
                        </tr>
                        <tr>
                            <td>ORDS57717951</td>
                            <td>14</td>
                            <td>jay@ischool.com</td>
                            <td>2019-09-13</td>
                            <td>400</td>
                            <td><button class="btn btn-danger">🗑️</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>
