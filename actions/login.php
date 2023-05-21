<?php if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if($email == 'admin@example.com' && $pass == 'me123'){
        session_start();
        $_SESSION['login'] = true;
        header('Location: ../admin/discription.php');
    }

    else{
        ob_start(); // Turn on output buffering
        echo 'Invalid Credentials'; // Output captured by output buffering
        ob_end_flush();
    }
}