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
                    <div class="container-fluid box" style="margin: 2% 1% 1% 1.5%;background-color: #fff">
                        <div class="container-fluid" style="">
                            <div class="row">
                                <h2 class="title1">LIVE</h2>
                                <hr>
                            </div>
                            <div class="row" style="margin: 3% 6% 5% 12%">
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                            <div class="row" style="margin: 3% 6% 5% 12%">
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                        </div>
                        <div class="container-fluid" style="">
                            <div class="row">
                                <h2 class="title1">UPCOMING EVENTS</h2>
                                <hr>
                            </div>
                            <div class="row" style="margin: 3% 6% 5% 12%">
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                        </div>
                        <div class="container-fluid" style="">
                            <div class="row">
                                <h2 class="title1">EVENTS COMPLETED</h2>
                                <hr>
                            </div>
                            <div class="row" style="margin: 3% 6% 5% 12%">
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3 box" style="background-color: #fff;border: 5px solid #5f027c;">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 bg-1">
                    <div class="container-fluid box" style="margin: 6.1% 4% 2% 1%;background-color: #fff">
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
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                        <p>hello</p>
                    </div>
                </div>
            </div>
        </div>
    </body>