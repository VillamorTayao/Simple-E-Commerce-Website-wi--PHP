<?php
    include('connect.php');
    session_start();

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $check_username = "SELECT * FROM accounts WHERE USERNAME = '$username'";
        $check_username_result = mysqli_query($connect, $check_username);

        // check if there is a username found
        if(mysqli_num_rows($check_username_result) > 0){
            if(!empty($username) || !empty($password)){

                // Check all of data associated with that username
                $check_password = mysqli_fetch_assoc($check_username_result);
                
                // in this case we want to find the passKey column in that query
                if(password_verify($password, $check_password['passKey'])){

                    // this will allow for the username to be used as a "welcome" login
                    $_SESSION['username'] = mysqli_fetch_assoc($check_username_result);
                    header("Location: ./private/mainStore.php");
                } else {
                    echo "Incorrect Password";
                }
                
            } else {
                echo "Please enter username and password!";
            }
        } else {
            echo "Username or Password is incorrect";
        }
    }

?>