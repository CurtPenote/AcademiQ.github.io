<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../register_login/css/style.css">
    <title>Log in</title>
</head>


<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    include('../../query/dbconn.php');

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, email, password FROM teacher_tbl WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // error_log($stmt->error); 
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {

        // var_dump($password, $user["password"]);
        if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION['id'] = $user['id'];
            header("Location: home.php");
            exit();
        } else {
            echo "<script> alert('Password is incorrect')</script>";
            // echo "<div>Password is incorrect</div>";
        }
    } else {
        echo "<div>Email does not exist</div>";
    }

    $stmt->close();
    $conn->close();

}
?>





<body>
    <nav class="nav-signup">
        <img src="../../register_login/assets/img/logo.svg" alt="">
        <div class="right-nav">
            <a href="../../signupcover.php"><button class="close-button">X</button></a>
            <h1 class="current-page-title">Log in</h1>
        </div>
    </nav>

    <main class="login">
        <div class="left-login">
            <img src="../../register_login/assets/img/noto-v1_woman-teacher-medium-light-skin-tone.svg" alt="">
        </div>
        

        <div class="right-login">
            <p>Enter your Credentials.</p>
            <br>
            <form id="login-form" method="post">
                <div class="input-group input-group-full">
                    <input id="email" type="text" placeholder="Email" name="email">
                    <input id="password" type="password" placeholder="Password" name="password">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                <p class="text-centered prompt">Don't have an Account? <a href="teacher-signup.html">Register</a></p>
            </form>
        </div>
    </main>

</body>

</html>