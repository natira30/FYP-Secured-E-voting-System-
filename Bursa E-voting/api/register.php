<! This page is where the registration function are >
<?php
    include ("connect.php");

    if (isset($_POST['action'])){
        //initialization to user's information
        $id = ($_POST['id']); 
        $full_name = ($_POST ['full_name']);
        $_SESSION ['full_name'] = $full_name;
        $email_address = ($_POST ['email_address']);
        $password = ($_POST [ 'password' ]);
        $image = ($_FILES ['photo'] ['name']);
        $tmp_name =($_FILES ['photo'] ['tmp_name']);
        $IAmNotARobot = ($_POST ['IAmNotARobot']);

        if ($IAmNotARobot == true)
            {
                move_uploaded_file($tmp_name, "../uploads/$image"); //to upload user's image
                $hash = password_hash ($password, PASSWORD_BCRYPT); //to hash user's password
                $connect->query ("INSERT INTO user (id, full_name, email_address, password, photo, Feedback ) VALUES(NULL,'$full_name', '$email_address', '$hash', '$image', '' ) ");
                //if the registration is success
                echo'
                    <script>
                        alert("Registration Successfull!");
                        window.location = "../";
                    </script>';
            }
        else{
            //if user does not checked the I am not a robot button
            echo'
                <script>
                    alert("Please verify first!");
                    window.location = "../routes/register.html";
                </script>';
        }


        
    }

?>