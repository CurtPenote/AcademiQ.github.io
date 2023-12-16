<?php
session_start();
include('../../query/dbconn.php');

if (isset($_POST['submit'])) {
    if ($_POST['password'] == $_POST['confirm_password']) {

        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

        $emailExist = "SELECT COUNT(*) AS emailCount FROM teacher_tbl WHERE email = ?";
        $stmtEmailExist = $conn->prepare($emailExist);
        $stmtEmailExist->bind_param('s', $email); // 's' indicates a string type
        $stmtEmailExist->execute();
        $stmtEmailExist->bind_result($emailCount);
        $stmtEmailExist->fetch();
        $stmtEmailExist->close();

        if ($emailCount > 0) {
            echo "<script language='javascript'>
                    alert('Email already exists!');
                    window.location.href ='teacher-signup.html';
                  </script>";
            exit;
        }

        // Prepare and bind the values to prevent SQL injection
        $stmt = $conn->prepare("INSERT IGNORE INTO teacher_tbl (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $firstName, $lastName, $email, $password);
        
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                // Registration was successful
                $sql = "SELECT * FROM teacher_tbl WHERE email = ?";
                $stmtSelect = $conn->prepare($sql);
                $stmtSelect->bind_param('s', $email);
                $stmtSelect->execute();
                $result = $stmtSelect->get_result();
                $row = $result->fetch_assoc();
        
                $_SESSION['id'] = $row['id'];
        
                echo "<script language='javascript'>
                     alert('Registered Successfully!');
                     window.location.href ='home.php';
                   </script>";
                exit;
            } else {
                // Email already exists
                echo "<script language='javascript'>
                     alert('Email already exists!');
                     window.location.href ='teacher-signup.html';
                   </script>";
                exit;
            }
        } else {
            // Handle registration failure
            echo 'Error: ' . $stmt->error;
        }
        
        $stmt->close();
        

    } else {
        echo "<script>
                alert('Password is Incorrect!');
                window.location.href ='teacher-signup.html';            
            </script>";
        exit;
    }
}


?>
