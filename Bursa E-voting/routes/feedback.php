<! This page is where user input the feedback and stored into the database >
<?php
    session_start();
    if (!isset($_SESSION['userdata'])){
        header("location: ../");
    }
    $userdata = $_SESSION ['userdata'];

    include("../api/connect.php");
    //this is the function when the user submit the feedback
    if (isset($_POST['submit'])){

        $user_id = $_SESSION["userdata"]["id"]; //this will check the user's id

        //This will store the feedbacks insert by user to the database
        $Feedbacks = $_POST ['Feedback'];
        $other_feedback = $_POST ['other_feedback'];
        $allData = implode (",", $Feedbacks); 

        $sql = "UPDATE user SET Feedback = '$allData' , other_feedback = '$other_feedback' WHERE id = $user_id";
        $result = mysqli_query($connect, $sql);

        if ($result){
            //if the feedback inserted, the feedback will be submitted
            echo '<script>
            alert("Feedbacks Updated!");
            </script>';
        }
        else{
            echo '<script>
            alert("Feedbacks Not Updated!");
            </script>';
        }
    }
    
?>

<html>
    <head>
        <title> Feedback </title>
        <link rel = "stylesheet" href = "../css/stylesheet.css">
    </head>

    <body>
        <center>
            <div id = "headerSection">
                <img name = "imagebursa" src = "Bursa.png" height = "15%" width = "9%">
                <h2> Bursa Marketplace </h2>
            </div>

            <hr>

            <style>
                #bodySection{
                    padding: 15px;
                }
                #portfoliobtn{
                    padding: 5px;
                    font-size: 15px;
                    border-radius: 5px;
                    background-color: #d1d8e0;
                    float: left;
                }
                #watchlistbtn{
                    padding: 5px;
                    font-size: 15px;
                    border-radius: 5px;
                    background-color: #d1d8e0;
                    float: left;
                }
                #feedbackbtn{
                    padding: 5px;
                    font-size: 15px;
                    border-radius: 5px;
                    background-color: #d1d8e0;
                    float: left;
                    margin: 16px;
                }
                #logoutbtn{
                    padding: 5px;
                    font-size: 15px;
                    border-radius: 5px;
                    background-color: #d1d8e0;
                    float: right;
                }
                #imagebursa{
                    float: left;
                }
                #headerF{
                    background-color: #686de0;
                    width: 90%;
                    padding: 10px;
                    background-size: 35%;
                    font-size: 25px;
                }
                #right{
                    float:right;
                    width: 47%;
                    background-color: #82EEFD;
                    background-size: 30%;
                    border: 1px solid black;
                }
                #left{
                    float:left;
                    width: 47%;
                    background-color: #82EEFD;
                    background-size: 30%;
                    border: 1px solid black;
                }
                #bottom{
                    width: 90%;
                    background-color: #82EEFD;
                    background-size: 30%;
                    border: 1px solid black;
                }
                #panel{
                    padding: 70px;
                }
                #meetlbl{
                    font-weight: bold;
                }
                #systemlbl{
                    font-weight: bold;
                } 
            </style>

            <! This is all the button to direct to spesific page >
            <div id = "bodySection" >
                <form method = "POST" action = "../routes/feedback.php">
                    <button id = "feedbackbtn" > Feedback </button>
                </form>
                <form method = "POST" action = "../routes/portfolio.php">
                    <button id = "portfoliobtn" > My Portfolio </button>
                </form>
                <form method = "POST" action = "../routes/watchlist.php">
                    <button id = "watchlistbtn" > My Watchlist </button>
                </form>
                <form method = "POST" action = "../routes/logout.php">
                    <button id = "logoutbtn"> Logout </button>
                </form>
                <br><br>
                </div>
                <br>

                <! This is where the user's data displayed >
                <div id = "profile">
                <img name = imagelocal src = "Forest.jpg" height = "10%" width = "90%" >
                <br>
                <img src = "../uploads/<?php echo $userdata['photo'] ?> " height = "100" width = "100" > 
                <br>
                <?php echo $userdata['full_name']?>
            </div> 

            <center><h5 id = "headerF" >Feedback</h5></center>

            <! This is where the user's insert all the feedback>
            <form action = "" method = "POST" enctype = "multipart/form-data" >
                <div id = panel>

                    <div id = "left">
                        <br>
                        <label id = "systemlbl"> System Feedback </label> <hr> <br>
                        <input type = "checkbox" name = "Feedback[]" value = "The system is user friendly" >The system is user friendly <br /><br>
                        <input type = "checkbox" name = "Feedback[]" value = "The system are functioning well" >The system are functioning well <br /><br>
                        <input type = "checkbox" name = "Feedback[]" value = "It is hard to use the system" >It is hard to use the system <br /><br>
                        <input type = "checkbox" name = "Feedback[]" value = "There are some problem in the system" >There are some problem in the system <br /><br>
                    </div>

                    <div id = "right">
                        <br>
                        <label id = "meetlbl"> Meetings Feedback </label> <hr> <br>
                        <input type = "checkbox" name = "Feedback[]" value = "Meetings held are a success" >Meetings held are a success <br /><br>
                        <input type = "checkbox" name = "Feedback[]" value = "Meetings objective achieved" >Meetings objective achieved <br /><br>
                        <input type = "checkbox" name = "Feedback[]" value = "The meetings does not achieve it's goal" >The meetings does not achieve it's goal <br /><br>
                        <input type = "checkbox" name = "Feedback[]" value = "The meetings ended with no solution" >The meetings ended with no solution <br /><br>
                    </div>

                </div>

                <br><br><br><br><br><br><br><br><br><br>

                <div id = "bottom">
                    <style>
                        #feedback9{
                            size: 70%;
                        }
                    </style>

                    <br>
                    <label> Other (Please specify): </label> &nbsp &nbsp
                    <input type = "text" name = "other_feedback" placeholder = "Enter your feedback" size = 110 autocomplete="off"> <br> <br>
                </div>

                <br>

                <button style = "padding: 5px;
                        font-size: 15px;
                        border-radius: 5px;
                        background-color: #d1d8e0;"
                        type = "submit" name = "submit">
                        Submit</button>

            </form>

            <br>
            <br>

        </center>
    </body>

</html>