<?php
    include("connect.php");

    if(isset($_POST["signup"])){
        $username = $_POST["username"];
        $password = $_POST["password"]; 
        $confirm_password = $_POST["confirm_password"];
        $email = $_POST["email"];

        // query for checking username duplicates
        $checkUsernameQuery = "SELECT * FROM accounts WHERE username = '$username'";
        $inputs = mysqli_query($connect, $checkUsernameQuery);
        
        if(!mysqli_num_rows($inputs) > 0){
            if($password == $confirm_password){
                // hash the password first
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
                
                // registration starts here
                $sql_query = "INSERT INTO accounts (username, email, passKey)
                VALUES ('$username', '$email', '$password');";

                mysqli_query($connect, $sql_query);

                header("Location:../login.php");
            } else {
                echo '
                    <div class="popup">
                        You must confirm the password!
                    </div>
                ';
            }

        } else {
            echo '
                <div class="popup">
                    Username already exists! Try Again.
                </div>
            ';
        }

        mysqli_close($connect);
    }
?>