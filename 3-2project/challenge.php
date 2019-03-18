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
                margin-left: 5%;
                margin-bottom: 0.5%;
                margin-top: 2%;
            }
            .title2{
                color: #5f027c;
                font-size: 25px;
                font-family: verdana;
                font-weight: 900;
                text-align: center;
            }
            .title3{
                color: white;
                font-size: 15px;
                font-family: verdana;
                font-weight: 700;
                text-align: center;
                margin-top: 8%;
                overflow: hidden;
            }
            .topic{
                color: #5f027c;
                font-family: verdana;
                font-weight: 900;
                text-align: center;
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
            .head{
                color: #5f027c;
                font-size: 13px;
                font-family: verdana;
                font-weight: 700;
                padding-top: 0.7%;
                padding-left: 5%;
                padding-bottom: 0%;
                border-right: 1px solid #5f027c;
            }
            .head1{
                color: #fff;
                font-size: 13px;
                font-family: verdana;
                font-weight:800;
                text-align: center;
                background-color: #5f027c;
                padding-top: 1%;
                padding-bottom: 0.5%;
                cursor: pointer;
            }
            .font{
                color: #5f027c;
                font-size: 15px;
                font-family: verdana;
                font-weight: 700;
                text-align: center;
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
                <div class="col-lg-2 bg-1">
                    
                </div>
                <div class="col-lg-8 bg-1">
                    <div class="container-fluid box" style="margin: 2% 1% 1% 1.5%;background-color: #fff">
                        <div class="row">
                            <h6 class="title1">Add Your Challenge Here:)</h6>
                        </div>
                        <hr>
                        <div class="container-fluid box" style="margin: 2% 1% 1% 1.5%;background-color: #fff;padding: 4%;">
                            <form method="post">
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">Challenge Name:</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="c_name" rows="1" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">Problem Statement:</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="p_s" rows="8" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">Input Format:</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="i_f" rows="4" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">Output Format:</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="o_f" rows="4" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">Constraints:</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="con" rows="3" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">Sample Input:</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="s_i" rows="3" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">Sample Output:</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="s_o" rows="3" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">Explanation:</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="exp" rows="4" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-6">
                                        <p class="font">No Of Test Cases</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea class="form-control" name="exp" rows="1" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5%">
                                    <div class="col-sm-9">
                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <input class="btn" type="submit" name="save" value="Save & Continue" style="color: white;background-color: #5f027c">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 bg-1">
                    
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $("challenge").click(function(){
                window.location=$(this).find("a").attr("href"); return false;
            });
        </script>
    </body>
</html>