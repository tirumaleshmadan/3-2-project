<?php
    include("db.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CodeTechie</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <style type="text/css">
            .title{
                color: #fff;
                font-size: 35px;
                font-family: verdana;
                font-weight: 900;
            }
            .title1{
                color: #5f027c;
                font-size: 25px;
                font-family: verdana;
                font-weight: 900;
                margin:1% 0% 0% 7%;
            }
            .bg-1{
                background-color: #fff;
            }
            .box{
                box-shadow: 2px 2px 4px rgb(0,0,0,0.2),-2px -2px 4px rgb(0,0,0,0.2);
            }
            .hyper{
                color: #fff;
                font-size: 18px;
                font-family: verdana;
                font-weight: 600;
                margin-left: 20px;
                text-decoration: none;
            }
            .hyper:hover{
                color: #eee;
                font-size: 18px;
                font-family: verdana;
                font-weight: 600;
                text-decoration: none;
            }
            .head{
                color: #5f027c;
                font-size: 12px;
                font-family: verdana;
                font-weight: 700;
                text-align: center;
                padding-top: 0.7%;
                padding-bottom: 0%;
                border-right: 1px solid #5f027c;
                cursor: pointer;
            }
            .head1{
                color: #fff;
                font-size: 12px;
                font-family: verdana;
                font-weight: 700;
                text-align: center;
                background-color: #5f027c;
                padding-top: 0.7%;
                padding-bottom: 0%;
                cursor: pointer;
            }
            .head:hover{
                background-color: #5f027c;
                color: #fff;
            }
            .dropbtn {
                border: none;
            }
            .dropdown {
                position: relative;
                display: inline-block;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #fff;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                margin-left: 15%;
            }
            .dropdown-content a {
                color: #5f027c;
                font-weight: 700;
                padding: 8px 16px;
                text-decoration: none;
                display: block;
            }
            .dropdown-content a:hover
            {
                background-color: #5f027c;
                color: #fff;
            }
            .dropdown:hover .dropdown-content
            {
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="padding: 1% 0 1% 0;background-color: #5f027c">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-2">
                    <p class="title">CodeTechie</p>
                </div>
                <div class="col-sm-3" style="margin: 1.5% -1.2% 0 1.2%">
                    <a href="Dashboard.php" class="hyper">practice</a>
                    <a href="Contests.php" class="hyper">compete</a>
                </div>
                <div class="col-sm-3">
                    
                </div>
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-2 box dropdown" style="border-radius: 25px;width: 13.5%;margin: 0.2% 1.5% 0% 1.5%;cursor: pointer;">
                    <div class="row dropbtn">
                        <img src="title.png" style="width:55px; border-radius: 50% ;height:55px;margin: 0;float: left;">
                        <p class="title3"><?php echo $_SESSION['user_name'] ?></p>
                    </div>
                    <div class="dropdown-content">
                        <a href="profile.php">Profile</a>
                        <a href="login.php">Logout</a>
                    </div>    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 bg-1">
                    <div class="container-fluid box" style="margin: 3% 0% 1% 5%;background-color: #fff">
                        <?php
                            $var=trim($_SESSION['C']);
                            $var1=$_SESSION['D'];
                            $data=mysqli_query($my,"SELECT * FROM $var WHERE ques_id=$var1");
                            $row=mysqli_fetch_assoc($data);
                        ?>
                        <div class="row">
                            <p class="title1"><?php echo $row['ques_name'] ?></p>
                        </div>
                        <div class="row" style="padding: 1% 0% 0.5% 7%;font-size: 10px;">
                            <div class="col-sm-2">
                                <p>ATTEMPTED BY: <b><?php echo $row['attempted'] ?></b></p>
                            </div>
                            <div class="col-sm-2">
                                <p>ACCURACY: <b><?php echo $row['accuracy'] ?>%</b></p>
                            </div>
                            <div class="col-sm-2">
                                <p>LEVEL: <b><?php echo $row['level'] ?></b></p>
                            </div>
                            <div class="col-sm-2">
                                <p>POINTS: <b><?php echo $row['points'] ?></b></p>
                            </div>
                        </div>
                        <hr style="margin: 0" />
                        <div class="row">
                            <div id="question" onclick="location.href='question.php'" class="col-sm-2 head">
                                <p>PROBLEM</p>
                            </div>
                            <div id="submission" onclick="location.href='submission.php'" class="col-sm-2 head">
                                <p>SUBMISSIONS</p>
                            </div>
                            <div id="discussion" onclick="location.href='discussion.php'" class="col-sm-2 head">
                                <p>DISCUSSION</p>
                            </div>
                            <div id="rank" onclick="location.href='rank.php'" class="col-sm-2 head">
                                <p>LEADERBOARD</p>
                            </div>
                            <div id="editorial" onclick="location.href='editorial.php'" class="col-sm-2 head1 box">
                                <p>EDITORIAL</p>
                            </div>
                            <div id="analytics" onclick="location.href='analytics.php'" class="col-sm-2 head">
                                <p>ANALYTICS</p>
                            </div>
                        </div>
                        <hr style="margin: 0" />
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                    </div>
                </div>
                <div class="col-lg-3 bg-1">
                    
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $("question").click(function(){
                window.location=$(this).find("a").attr("href"); return false;
            });

            $("submission").click(function(){
                window.location=$(this).find("a").attr("href"); return false;
            });

            $("discussion").click(function(){
                window.location=$(this).find("a").attr("href"); return false;
            });

            $("rank").click(function(){
                window.location=$(this).find("a").attr("href"); return false;
            });

            $("editorial").click(function(){
                window.location=$(this).find("a").attr("href"); return false;
            });

            $("analytics").click(function(){
                window.location=$(this).find("a").attr("href"); return false;
            });
        </script>
    </body>
</html>