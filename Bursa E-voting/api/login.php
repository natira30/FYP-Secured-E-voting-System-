<! This page is where, when the user input the email address and password. Then it will proceed to open the user's profile  >
<?php
    session_start();
    include("connect.php");

    //User enter email and password
    if (isset($_POST['action'])){
        $email_address = ($_POST ['email_address']);
        $password = ($_POST [ 'password' ]);

        $sql = $connect->query ("SELECT * FROM user WHERE email_address = '$email_address' ");

        //system check the user's input with the one in the database
        if ($sql->num_rows > 0){
            $userdata = $sql->fetch_array(); 
            $_SESSION['userdata'] = $userdata;
            
            //the hashed user's password verified to login
            //if user's are found
            if (password_verify($password, $userdata['password'])){
                echo'
                    <script>
                        window.location = "../routes/profile.php"; 
                    </script>';
            }
            //if user's insert an invalid credentials
            else{
                echo'
                    <script>
                        alert("Invalid Credentials or User not found!");
                        window.location = "../";
                    </script>';
            }
        }
        //if user does not register yet
        else{
            echo'
                    <script>
                        alert("No user found!");
                        window.location = "../";
                    </script>';
        }
    }

?>