<?php
    include("db.php");
    session_start();

    if($_SESSION['flag1']==0)
    {
        $_SESSION['D']=$_GET['nos'];
        $_SESSION['flag1']=1;
    }
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
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <script type="text/javascript">
            $(function () {
                $("#chkPassport").click(function () {
                    if ($(this).is(":checked")) 
                    {
                        $("#dvPassport").show();
                    }
                    else
                    {
                        $("#dvPassport").hide();
                    }
                });
            });
        </script>

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
            h4{
                font-weight: 600;
                margin-left: 3%;
                margin-top: 2%;
            }
            code{
                color: black;
                font-size: 13px;
            }
            .space{
                margin-left: 8%;
                margin-right: 8%;
                line-height: 2;
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
                <div class="col-sm-3 bg-warning">
                    <p>hello</p>
                </div>
                <div class="col-sm-1 bg-info">
                    <p>hello</p>
                </div>
                <div class="col-sm-2 bg-primary">
                    <p>hello</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 bg-1">
                    <div class="container-fluid box" style="margin: 3% 0% 1% 5%;background-color: #fff;padding-bottom: 2%">
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
                            <div id="question" onclick="location.href='question.php'" class="col-sm-2 head1 box">
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
                            <div id="editorial" onclick="location.href='editorial.php'" class="col-sm-2 head">
                                <p>EDITORIAL</p>
                            </div>
                            <div id="analytics" onclick="location.href='analytics.php'" class="col-sm-2 head">
                                <p>ANALYTICS</p>
                            </div>
                        </div>
                        <hr style="margin: 0" />
                        <?php
                            if (file_exists("problems/dashboard/basicprogramming/inputoutput/1/ques.txt"))
                            {
                                $myfile = fopen("problems/dashboard/basicprogramming/inputoutput/1/ques.txt", "r");
                        ?>
                                <h4>Problem Statement:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize("problems/dashboard/basicprogramming/inputoutput/1/ques.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists("problems/dashboard/basicprogramming/inputoutput/1/input_format.txt"))
                            {
                                $myfile = fopen("problems/dashboard/basicprogramming/inputoutput/1/input_format.txt", "r");
                        ?>
                                <h4>Input Format:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize("problems/dashboard/basicprogramming/inputoutput/1/input_format.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists("problems/dashboard/basicprogramming/inputoutput/1/output_format.txt"))
                            {
                                $myfile = fopen("problems/dashboard/basicprogramming/inputoutput/1/output_format.txt", "r");
                        ?>
                                <h4>Output Format:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize("problems/dashboard/basicprogramming/inputoutput/1/output_format.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists("problems/dashboard/basicprogramming/inputoutput/1/constraints.txt"))
                            {
                                $myfile = fopen("problems/dashboard/basicprogramming/inputoutput/1/constraints.txt", "r");
                        ?>
                                <h4>Constraints:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize("problems/dashboard/basicprogramming/inputoutput/1/constraints.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists("problems/dashboard/basicprogramming/inputoutput/1/sample_input.txt"))
                            {
                                $myfile = fopen("problems/dashboard/basicprogramming/inputoutput/1/sample_input.txt", "r");
                        ?>
                                <h4>Sample Input:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize("problems/dashboard/basicprogramming/inputoutput/1/sample_input.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists("problems/dashboard/basicprogramming/inputoutput/1/sample_output.txt"))
                            {
                                $myfile = fopen("problems/dashboard/basicprogramming/inputoutput/1/sample_output.txt", "r");
                        ?>
                                <h4>Sample Output:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize("problems/dashboard/basicprogramming/inputoutput/1/sample_output.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists("problems/dashboard/basicprogramming/inputoutput/1/explanation.txt"))
                            {
                                $myfile = fopen("problems/dashboard/basicprogramming/inputoutput/1/explanation.txt", "r");
                        ?>
                                <h4>Explanation:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize("problems/dashboard/basicprogramming/inputoutput/1/explanation.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <hr style="margin: 0" />
                    </div>
                    <div class="container-fluid box" style="margin: 4% 0% 1% 5%;background-color: #fff">
                        <form method="post">
                            <div class="container-fluid box" style="margin: 4% 2% 2.5% 2%;background-color: #fff">
                                <div class="row" style="background-color: #eee">
                                    <div class="col-sm-8">
                                        
                                    </div>
                                    <div class="col-sm-3" style="margin: 0.9% 0% 0.9% 0%">
                                        <select class="form-control" name="language">
                                            <option value="c">C(gcc 5.4.0)</option>
                                            <option value="cpp">C++(g++ 5.4.0)</option>       
                                        </select>
                                    </div>
                                    <div class="col-sm-1">
                                        
                                    </div>
                                </div>
                                <div class="row" style="background-color: #333">
                                    <div class="container-fluid box" style="margin: 0% 0% 0% 5%;background-color: #000">
                                        <textarea class="form-control" name="code" rows="20" cols="52" style="color: white;background-color: black;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin: 0% 0% 2% 0%">
                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" id="chkPassport" style="float: left;margin-left: 12%" />
                                    <p style="color: #5f027c;font-weight: 700;letter-spacing: 0.3px;text-align: center;">CUSTOM INPUT</p>
                                </div>
                                <div class="col-sm-3">
                                    <textarea class="form-control" name="input" rows="6" cols="20" id="dvPassport" style="display: none"></textarea>
                                </div>
                                <div class="col-sm-2">

                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" id="st" class="btn" value="COMPILE" style="color: white;background-color: #5f027c;font-weight: 600;margin-left: 50%">
                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" id="st" class="btn" value="SUBMIT" style="color: white;background-color: #5f027c;font-weight: 600;margin-left: 10%">
                                </div>
                            </div>
                        </form>
                        <hr style="margin-top: 2%" />
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