<! This page is to verify the administrator that can view the database table >
<?php
session_start();
?>
<html>
    <style>
        #body{
            text-align: center;
        }
    </style>

    <center>
        <div id = "headerSection">
            <img name = "imagebursa" src = "Bursa.png" height = "15%" width = "9%">
            <h2> Admin Log in to Database </h2>
            <hr>
        </div>
    
        <! This is the html to verify the admin's password>
        <form method="post" action="" id="login_form">

        <input type="password" name="pass" placeholder="*******">
        <input type="submit" name="submit_pass" value="Admin Login">
        <p>"Password : 123"</p>

    </center>

    </form>
 </html>

<div id = Body>
 <?php
    //This is where the function of verify admin's password 
    if(isset($_POST['submit_pass']) && $_POST['pass'])
    {
        $pass=$_POST['pass'];
        if($pass=="123")
        {
            $_SESSION['password']=$pass;
            echo'
                <script>
                    window.location = "../api/admin.php";
                </script>';
        }
        else
        {
            $error="Incorrect Password";
        }
    }

?>
</div>



