<! This page will display all user's data >
<?php
    session_start();
    
    if (!isset($_SESSION['userdata'])){
         header("location: ../");
     }

     $userdata = $_SESSION ['userdata'];
     
?>

<html>
    <head>
        <title> Profile </title>
        <link rel = "stylesheet" href = "../css/stylesheet.css">
    </head>

    <body>
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
            #headerP{
                background-color: #686de0;
                width: 90%;
                padding: 10px;
                background-size: 40%;
                font-size: 25px;
            }

        </style>

        <center>
            <div id = "headerSection">
                <img name = "imagebursa" src = "Bursa.png" height = "15%" width = "9%">
                <h2> Bursa Marketplace </h2>
            </div>

        
            <hr>
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
            
                <div id = "profile">
                <img name = imagelocal src = "Forest.jpg" height = "10%" width = "90%" >
                <br>
                <img src = "../uploads/<?php echo ($userdata['photo']) ?> " height = "100" width = "100" >
                <br>
                <?php echo $userdata['full_name']?>
            
                <br>
            </div> 
            
        

            <div id = "data">
                <style>
                    #myportfoliobtn{
                        padding: 5px;
                        font-size: 15px;
                        border-radius: 5px;
                        background-color: #d1d8e0;
                    }
                    #mywatchlistbtn{
                        padding: 5px;
                        font-size: 15px;
                        border-radius: 5px;
                        background-color: #d1d8e0;
                    }
                    #left{
                        float:left;
                        width: 47%;
                        background-color: #82EEFD;
                        background-size: 45%;
                        border: 1px solid black;
                    }
                    #right{
                        float:right;
                        width: 47%;
                        background-color: #82EEFD;
                        background-size: 45%;
                        border: 1px solid black;
                    }
                    #pfolioname{
                        font-size: 20px;
                        font-weight: bold;
                    }
                    #wlistname{
                        font-size: 20px;
                        font-weight: bold;
                    }
                    #pfoliocont{
                        font-size: 12px;
                    }
                    #wlistcont{
                        font-size: 12px;
                    }
                    #panel{
                        padding: 70px;
                    }
                </style>

                <center><h5 id = "headerP" >Portfolio Summaries</h5></center>

                <div id = panel>
                    <div id = "left">
                        <label id = "pfolioname" > Equity Portfolio </label> &nbsp &nbsp
                        <hr>
                        <label id = "pfoliocont" > You don't have Portfolio </label> &nbsp &nbsp
                        <br><br>
                        <form method = "POST" action = "../routes/portfolio.php">
                            <button id = "myportfoliobtn"> Go to My Portfolio </button>
                        </form>
                        <br><br>
                    </div>

                    <div id = "right">
                        <label id = "wlistname" > Watchlist </label> &nbsp &nbsp
                        <hr>
                        <label id = "wlistcont" > You don't have Watchlist </label> &nbsp &nbsp
                        <br><br>
                        <form method = "POST" action = "../routes/watchlist.php">
                            <button id = "mywatchlistbtn"> Go to My Watchlist </button>
                        </form>
                        <br><br>
                    </div>
                </div>
                <br><br><br><br><br><br><br>
            </div>
        </center>
        
    </body>
</html>