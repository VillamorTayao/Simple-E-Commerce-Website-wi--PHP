<?php
    include ("connect.php");

    if(isset($_POST['submit'])){
        $validate_email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $email = trim($validate_email);
        $message = $_POST['message'];

        if(!empty($email) && !empty($message)){
            $sql_query = "INSERT INTO messages (EMAIL, feedbackMessage) VALUES ('$email', '$message');";
            $result = mysqli_query($connect, $sql_query);

            if($result){
                echo "
                    <script>
                        alert('Message Sent Successfully!);
                    </script>
                ";
            } 
        } else {
            echo "
                <script>
                    alert('You must complete the form to submit!);
                </script>
            ";
        }
    }

    mysqli_close($connect);
?>