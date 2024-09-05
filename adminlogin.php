<?php 
ob_start();
// error_reporting(0);
include 'include/header.php';
if (isset($_POST['signin'])){
   
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    $query ="SELECT * FROM `admin` WHERE `admin_name` = '$adminname' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['adminname'] =$adminname;
        header("location: touradmin/index.php");
        
    }else{
        echo "<script>alert('invalid Login')</script>";
    }
    ob_end_flush();
}
?>


<style>
.hero {
    --default-color: #ffffff;
    --background-color: #000000;
    --heading-color: #ffffff;
    width: 100%;
    min-height: 13vh !important;
    position: relative;
    padding: 0 !important;
    display: flex;
    align-items: center;
    justify-content: center;
}

.tv_login {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
</style>

<!-- Hero Section -->
<section id="hero" class="hero section ">
</section><!-- /Hero Section -->

<div class="tv_login">
    <div class="col-lg-4">
        <div class="login_input shadow-lg py-2 px-4 rounded">
            <h2 class='fs-5 fw-semibold text-center'>Admin Login!</h2>
            <form method="POST" action="">


                <div class="col-lg-12 mb-3">
                    <label class="form-label fs-6 fw-normal">Admin Name</label>
                    <input type="text" name="adminname" class="form-control shadow-sm" required>
                </div>

                <div class="col-lg-12 mb-3">
                    <label class="form-label">Admin Password</label>
                    <input type="password" class="form-control shadow-sm" name="password" required>
                </div>

                <div class="col-lg-12 mb-2">
                    <button type="submit" class='rounded text-white sentbtn w-100 fs-6 fs-semibold'
                        name='signin'>Login</button>
                </div>


            </form>
        </div>
    </div>
</div>

<?php include 'include/footer.php' ?>