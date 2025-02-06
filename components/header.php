<nav class="navbar navbar-expand-lg nav-light border-bottom border-light  " >
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
                <a class="nav-link active" aria-current="page" href="index.php" style="font-weight: bold; font-size: 18px; font-family: 'Arial', sans-serif;">Home</a>
            </li>
            <li class="nav-item pe-4">
                <a class="nav-link" href="courses.php" style="font-weight: bold; font-size: 18px; font-family: 'Arial', sans-serif;">Courses</a>
            </li>
            <li class="nav-item pe-4">
                <a class="nav-link" href="paymentStatus.php" style="font-weight: bold; font-size: 18px; font-family: 'Arial', sans-serif;">PaymentStatus</a>
            </li>

            <li class="nav-item pe-4">
                <a class="nav-link" href="#" style="font-weight: bold; font-size: 18px; font-family: 'Arial', sans-serif;">FeedBack</a>
            </li>
            <?php
            session_start();
            if (!isset($_SESSION['is_login'])) {
                echo '
                <li class="nav-item pe-4">
                <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#LogInModal" href="#" style="font-weight: bold; font-size: 18px; font-family: \'Arial\', sans-serif;">LogIn</a>
            </li>
            <li class="nav-item pe-4">
                <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#RegistrationModal" href="#" style="font-weight: bold; font-size: 18px; font-family: \'Arial\', sans-serif;">SignUp</a>
            </li>';
            } else {
                echo '<li class="nav-item pe-4">
                <a class="nav-link" href="#" style="font-weight: bold; font-size: 18px; font-family: \'Arial\', sans-serif;">MyProfile</a>
            </li>
               
            <li class="nav-item pe-4">
                <a class="nav-link" href="logOut.php" style="font-weight: bold; font-size: 18px; font-family: \'Arial\', sans-serif;">LogOut</a>
            </li>';

            }


            ?>
            </ul>
        </div>
        </div>
    </nav>
