<! This page is where the user view their data stored in the system by administration >
<?php
    session_start();
    if (!isset($_SESSION['userdata'])){
        header("location: ../");
    }

    $userdata = $_SESSION ['userdata'];
    include '../api/connect.php';

    //this is where the user's data retrieved
    $user_id = $_SESSION["userdata"]["id"];

    $sql = "SELECT id, watchlist_name, watchlist_stocks, watchlist_chg FROM user WHERE id = $user_id";
    $result = $connect -> query($sql);

?>

<html>
    <head>
        <title> Watchlist </title>
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
                #headerW{
                    background-color: #686de0;
                    width: 90%;
                    padding: 10px;
                    background-size: 35%;
                    font-size: 25px;
                }              
                #titleForm{
                    width: 90%;
                    background-color: #82EEFD;
                    background-size: 30%;
                    border: 1px solid black;
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

            <center><h5 id = "headerW" >Watchlist</h5></center>

            <div id = "titleForm">
                <style>
                * {
                    box-sizing: border-box;
                    }

                    /* Create three equal columns that floats next to each other */
                    .column {
                    float: left;
                    width: 33.33%;
                    padding: 10px;
                    /*height: 300px;  Should be removed. Only for demonstration */
                    }

                    /* Clear floats after the columns */
                    .row:after {
                    content: "";
                    display: table;
                    clear: both;
                    }
                </style>

                <?php if ($result -> num_rows > 0){
                    while ($row = $result -> fetch_assoc()){
                ?>

                <! This is where the user's watchlist data displayed >
                <div class="row">
                    <div class="column" >
                        <h2>Name</h2>
                        <hr>
                        <?php echo "".$row['watchlist_name']."<br>"; ?>
                    </div>
                    <div class="column" >
                        <h2>Stocks</h2>
                        <hr>
                        <?php echo "".$row['watchlist_stocks']."<br>"; ?>
                    </div>
                    <div class="column" >
                        <h2>%CHG</h2>
                        <hr>
                        <?php echo "".$row['watchlist_chg']."<br>"; ?>
                    </div>
                </div>
                
                <?php
                    }
                }
                ?>
            
            <br>

            </div>
            <br>
            <br>
        </center>
    </body>

</html>