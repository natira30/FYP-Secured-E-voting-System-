<! Admin.php is a code that show database to admin >
<?php
include('connect.php');
session_start();
?>
<div class="container-fluid">

    <div class="card shadow mb-4">

    <head>
        <title> Admin Page </title>
        <link rel = "stylesheet" href = "../css/stylesheet.css">
    </head>

    <body>
        <style>
            #logoutbtn{
                float: right;
            }
        </style>
        <center>
            <div id = "headerSection">
                <! This is logout button >
                <form method = "POST" action = "../routes/logout.php">
                    <button id = "logoutbtn"> Logout </button>
                </form>
                <! This is Bursa's Image >
                <img name = "imagebursa" src = "Bursa.png" height = "15%" width = "9%">
                <h2> Bursa Marketplace User Database </h2>
                <hr>
            </div>
        </center>


        <! This function is to display all database information to administrator >
            <?php
                $query = "SELECT * FROM user";
                $query_run = mysqli_query($connect, $query);
            ?>

                <! This is logout button >
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Full Name </th>
                            <th> Email Address </th>
                            <th> Password </th>
                            <th> Feedback </th>
                            <th> Other Feedback </th>
                            <th> Portfolio Name </th>
                            <th> Portfolio Stocks </th>
                            <th> Portfolio Cash Available </th>
                            <th> Watchlist Name </th>
                            <th> Watchlist Stocks </th>
                            <th> Watchlist %CHG </th>
                            
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <! This is to display data that stored to the database >
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['full_name']; ?></td>
                                <td><?php  echo $row['email_address']; ?></td>
                                <td><?php  echo $row['password']; ?></td>
                                <td><?php  echo $row['Feedback']; ?></td>
                                <td><?php  echo $row['other_feedback']; ?></td>
                                <td><?php  echo $row['portfolio_name']; ?></td>
                                <td><?php  echo $row['portfolio_stocks']; ?></td>
                                <td><?php  echo $row['portfolio_cash']; ?></td>
                                <td><?php  echo $row['watchlist_name']; ?></td>
                                <td><?php  echo $row['watchlist_stocks']; ?></td>
                                <td><?php  echo $row['watchlist_chg']; ?></td>
                                
                            </tr>
                        <?php

                            } 
                        }

                        else {
                            echo "No Record Found";
                        }

                        ?>

                    </tbody>
                </table>

                

            </div>
        </div>
    </div>

</div>