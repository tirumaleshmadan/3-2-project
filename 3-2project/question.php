<?php
    include("db.php");
    session_start();

    if($_SESSION['flag1']==0)
    {
        $_SESSION['D']=$_GET['nos'];
        $_SESSION['flag1']=1;
        $_SESSION['d']=$_SESSION['c'].$_SESSION['D'];
    }

    $link="problems/".trim($_SESSION['A'])."/".trim($_SESSION['B'])."/".trim($_SESSION['C'])."/".trim($_SESSION['D'])."/";
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
                $("#chk").click(function () {
                    if ($(this).is(":checked")) 
                    {
                        $("#dv").show();
                    }
                    else
                    {
                        $("#dv").hide();
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
                    <div class="container-fluid box" style="margin: 3% 0% 1% 5%;background-color: #fff;padding-bottom: 2%">
                        <?php
                            $var=trim($_SESSION['C']);
                            $var1=$_SESSION['D'];
                            $data=mysqli_query($my,"SELECT * FROM $var WHERE ques_id=$var1");
                            $row=mysqli_fetch_assoc($data);
                            $score=$row['points'];
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
                            if (file_exists($link."ques.txt"))
                            {
                                $myfile = fopen($link."ques.txt", "r");
                        ?>
                                <h4>Problem Statement:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize($link."ques.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists($link."input_format.txt"))
                            {
                                $myfile = fopen($link."input_format.txt", "r");
                        ?>
                                <h4>Input Format:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize($link."input_format.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists($link."output_format.txt"))
                            {
                                $myfile = fopen($link."output_format.txt", "r");
                        ?>
                                <h4>Output Format:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize($link."output_format.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists($link."constraints.txt"))
                            {
                                $myfile = fopen($link."constraints.txt", "r");
                        ?>
                                <h4>Constraints:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize($link."constraints.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists($link."sample_input.txt"))
                            {
                                $myfile = fopen($link."sample_input.txt", "r");
                        ?>
                                <h4>Sample Input:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize($link."sample_input.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists($link."sample_output.txt"))
                            {
                                $myfile = fopen($link."sample_output.txt", "r");
                        ?>
                                <h4>Sample Output:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize($link."sample_output.txt")) ?></code>
                                </div>
                        <?php
                                fclose($myfile);
                            }
                        ?>
                        <?php
                            if (file_exists($link."explanation.txt"))
                            {
                                $myfile = fopen($link."explanation.txt", "r");
                        ?>
                                <h4>Explanation:</h4>
                                <div class="space">
                                    <code><?php echo fread($myfile,filesize($link."explanation.txt")) ?></code>
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
                                    <input type="checkbox" id="chk" name="chk" value="1" style="float: left;margin-left: 12%" />
                                    <p style="color: #5f027c;font-weight: 700;letter-spacing: 0.3px;text-align: center;">CUSTOM INPUT</p>
                                </div>
                                <div class="col-sm-3">
                                    <textarea class="form-control" name="input" rows="6" cols="20" id="dv" style="display: none"></textarea>
                                </div>
                                <div class="col-sm-2">

                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" name="compile" class="btn" value="COMPILE" style="color: white;background-color: #5f027c;font-weight: 600;margin-left: 50%">
                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" name="submit" class="btn" value="SUBMIT" style="color: white;background-color: #5f027c;font-weight: 600;margin-left: 10%">
                                </div>
                            </div>
                        </form>
                        <hr style="margin-top: 2%" />
                        <?php
                            if (isset($_POST['compile']))
                            {
                                $lan=$_POST["language"];
                                if (isset($_POST['chk']))
                                {
                                    $_SESSION['input']=$_POST['input'];
                                    $_SESSION['code']=$_POST['code'];
                                    $_SESSION['err']=0;
                                    if ($lan=="c")
                                    {
                                        include("compilers/c.php");  
                                    }
                                    elseif ($lan=="cpp") 
                                    {
                                        include("compilers/cpp.php");    
                                    }

                                    if ($_SESSION['check']==1) 
                                    {
                                ?>
                                        <div class="container-fluid box" style="margin: 0% 5% 2% 5%">
                                            <h4 style="color: #00ff00;font-weight: 700;margin-top: 1%;margin-bottom: 1%;">Compilation succesful:)</h4>
                                            <hr style="margin: 0" />
                                            <p style="margin: 2% 0% 0% 5%">Input(stdin)</p>
                                            <p style="margin: 1% 0% 0% 5%;background-color: #eee;font-weight: 800;padding: 0.3% 0% 0.3% 1%;"><?php echo $_SESSION['input'] ?></p>
                                            <p style="margin: 2% 0% 0% 5%">Your Output(stdout)</p>
                                            <p style="margin: 1% 0% 4% 5%;background-color: #eee;font-weight: 800;padding: 0.3% 0% 0.3% 1%;"><?php echo $_SESSION['output'] ?></p>
                                        </div>
                                <?php    
                                    }
                                    else 
                                    {
                                ?>
                                        <div class="container-fluid box" style="margin: 0% 5% 2% 5%">
                                            <h4 style="color: #ee0000;font-weight: 700;margin-top: 1%">Compilation Unsuccesful:(</h4>
                                        </div>
                                <?php
                                    }    
                                }
                                else 
                                {
                                    $myfile = fopen($link."sample_input.txt", "r");
                                    $_SESSION['input']=fread($myfile,filesize($link."sample_input.txt"));
                                    fclose($myfile);
                                    $myfile = fopen($link."sample_output.txt", "r");
                                    $_SESSION['expected']=fread($myfile,filesize($link."sample_output.txt"));
                                    fclose($myfile);
                                    $_SESSION['code']=$_POST['code'];
                                    $_SESSION['err']=0;
                                    if ($lan=="c")
                                    {
                                        include("compilers/c.php");  
                                    }
                                    elseif ($lan=="cpp") 
                                    {
                                        include("compilers/cpp.php");    
                                    }

                                    if ($_SESSION['check']==1) 
                                    {
                                        if (trim($_SESSION['output'])==trim($_SESSION['expected'])) 
                                        {
                                    ?>
                                            <div class="container-fluid box" style="margin: 0% 5% 2% 5%">
                                                <h4 style="color: #00ff00;font-weight: 700;margin-top: 1%;margin-bottom: 1%;">Sample Test Case Passed:)</h4>
                                                <hr style="margin: 0" />
                                                <p style="margin: 2% 0% 0% 5%">Input(stdin)</p>
                                                <p style="margin: 1% 0% 0% 5%;background-color: #eee;font-weight: 800;padding: 0.3% 0% 0.3% 1%;"><?php echo $_SESSION['input'] ?></p>
                                                <p style="margin: 2% 0% 0% 5%">Your Output(stdout)</p>
                                                <p style="margin: 1% 0% 0% 5%;background-color: #eee;font-weight: 800;padding: 0.3% 0% 0.3% 1%;"><?php echo $_SESSION['output'] ?></p>
                                                <p style="margin: 2% 0% 0% 5%">Expected Output(stdout)</p>
                                                <p style="margin: 1% 0% 4% 5%;background-color: #eee;font-weight: 800;padding: 0.3% 0% 0.3% 1%;"><?php echo $_SESSION['expected'] ?></p>
                                            </div>
                                    <?php   
                                        }
                                        else 
                                        {
                                    ?>
                                            <div class="container-fluid box" style="margin: 0% 5% 2% 5%">
                                                <h4 style="color: #ff0000;font-weight: 700;margin-top: 1%;margin-bottom: 1%;">Sample Test Case Failed:)</h4>
                                                <hr style="margin: 0" />
                                                <p style="margin: 2% 0% 0% 5%">Input(stdin)</p>
                                                <p style="margin: 1% 0% 0% 5%;background-color: #eee;font-weight: 800;padding: 0.3% 0% 0.3% 1%;"><?php echo $_SESSION['input'] ?></p>
                                                <p style="margin: 2% 0% 0% 5%">Your Output(stdout)</p>
                                                <p style="margin: 1% 0% 0% 5%;background-color: #eee;font-weight: 800;padding: 0.3% 0% 0.3% 1%;"><?php echo $_SESSION['output'] ?></p>
                                                <p style="margin: 2% 0% 0% 5%">Expected Output(stdout)</p>
                                                <p style="margin: 1% 0% 4% 5%;background-color: #eee;font-weight: 800;padding: 0.3% 0% 0.3% 1%;"><?php echo $_SESSION['expected'] ?></p>
                                            </div>
                                    <?php   
                                        }    
                                    }
                                    else 
                                    {
                                ?>
                                        <div class="container-fluid box" style="margin: 0% 5% 2% 5%">
                                            <h4 style="color: #ee0000;font-weight: 700;margin-top: 1%">Compilation Unsuccesful:(</h4>
                                        </div>
                                <?php
                                    }
                                }
                            }
                            if (isset($_POST['submit']))
                            {
                                $lan=$_POST["language"];
                                $_SESSION['code']=$_POST['code'];
                                $var=trim($_SESSION['C']);
                                $var1=$_SESSION['D'];
                                $data=mysqli_query($my,"SELECT * FROM $var WHERE ques_id=$var1");
                                $table_name=$_SESSION['d'];
                                $user_id=$_SESSION['user_id'];
                                $sub_data=mysqli_query($my,"SELECT * FROM $table_name WHERE user_id=$user_id");
                                $check=mysqli_num_rows($sub_data);
                                $check=$check+1;
                                $into=mysqli_query($my,"INSERT INTO $table_name(user_id,user_sub_id) VALUES($user_id,$check)");
                                $row=mysqli_fetch_assoc($data);
                                $q=$row['test_count'];
                                $_SESSION['err']=1;
                                $r=floor($q%4);
                                $q=floor($q/4);
                                $count=1;
                                $c=0;
                                $w=0;
                            ?>
                                <div class="container-fluid box" style="margin: 2% 5% 2% 5%;">
                                <hr>
                                <?php
                                    while ($q--) 
                                    {
                                        $t=4;
                                ?>
                                    <div class="row" style="margin: 3% 5% 3% 5%;">
                                    <?php
                                        while ($t--) 
                                        {
                                            $myfile = fopen($link."input/"."$count".".txt", "r");
                                            $_SESSION['input']=fread($myfile,filesize($link."input/"."$count".".txt"));
                                            fclose($myfile);
                                            $myfile = fopen($link."output/"."$count".".txt", "r");
                                            $_SESSION['expected']=fread($myfile,filesize($link."output/"."$count".".txt"));
                                            fclose($myfile);
                                            $cou="t".(string)$count;
                                            if ($lan=="c")
                                            {
                                                include("compilers/c.php");  
                                            }
                                            elseif ($lan=="cpp") 
                                            {
                                                include("compilers/cpp.php");    
                                            }

                                            if (trim($_SESSION['output'])==trim($_SESSION['expected'])) 
                                            {
                                                $c=$c+1;
                                                $update=mysqli_query($my,"UPDATE $table_name SET $cou=1 WHERE user_id=$user_id AND user_sub_id=$check");
                                    ?>
                                                <div class="col-sm-3">
                                                    <span class="label label-success box" style="padding: 4%;font-size: 15px;font-weight: 600;margin-left: 20%">Test Case<span class="badge"><?php echo $count ?></span></span>
                                                </div>
                                    <?php
                                            }
                                            else 
                                            {
                                                $w=$w+1;
                                                $update=mysqli_query($my,"UPDATE $table_name SET $cou=0 WHERE user_id=$user_id AND user_sub_id=$check");
                                    ?>
                                                 <div class="col-sm-3">
                                                     <span class="label label-danger box" style="padding: 4%;font-size: 15px;font-weight: 600;margin-left: 20%">Test Case<span class="badge"><?php echo $count ?></span></span>
                                                 </div>
                                    <?php
                                            }
                                            $count=$count+1;
                                        }
                                    ?>
                                     </div>
                                <?php
                                    }
                                    if ($r!=0) 
                                    {
                                ?> 
                                    <div class="row" style="margin: 3% 5% 3% 5%;">
                                    <?php
                                        while ($r--) 
                                        {
                                            $myfile = fopen($link."input/"."$count".".txt", "r");
                                            $_SESSION['input']=fread($myfile,filesize($link."input/"."$count".".txt"));
                                            fclose($myfile);
                                            $myfile = fopen($link."output/"."$count".".txt", "r");
                                            $_SESSION['expected']=fread($myfile,filesize($link."output/"."$count".".txt"));
                                            fclose($myfile);
                                            $cou="t".(string)$count;
                                            if ($lan=="c")
                                            {
                                                include("compilers/c.php");  
                                            }
                                            elseif ($lan=="cpp") 
                                            {
                                                include("compilers/cpp.php");    
                                            }

                                            if (trim($_SESSION['output'])==trim($_SESSION['expected'])) 
                                            {
                                                $c=$c+1;
                                                $update=mysqli_query($my,"UPDATE $table_name SET $cou=1 WHERE user_id=$user_id AND user_sub_id=$check");
                                    ?>
                                                <div class="col-sm-3">
                                                    <span class="label label-success box" style="padding: 4%;font-size: 15px;font-weight: 600;margin-left: 20%">Test Case<span class="badge"><?php echo $count ?></span></span>
                                                </div>
                                    <?php
                                            }
                                            else 
                                            {
                                                $w=$w+1;
                                                $update=mysqli_query($my,"UPDATE $table_name SET $cou=0 WHERE user_id=$user_id AND user_sub_id=$check");
                                    ?>
                                                 <div class="col-sm-3">
                                                     <span class="label label-danger box" style="padding: 4%;font-size: 15px;font-weight: 600;margin-left: 20%">Test Case<span class="badge"><?php echo $count ?></span></span>
                                                 </div>
                                    <?php
                                            }
                                            $count=$count+1;
                                        }
                                    ?>
                                     </div>
                                     <hr>
                                <?php
                                    }
                                    $table=$_SESSION['c'];
                                    $pos="q".(string)$_SESSION['D']."check";
                                    if ($w==0) 
                                    {
                                        $update=mysqli_query($my,"UPDATE $table_name SET status=1 WHERE user_id=$user_id AND user_sub_id=$check");
                                        $update=mysqli_query($my,"UPDATE $table_name SET points=$score WHERE user_id=$user_id AND user_sub_id=$check");
                                        $update=mysqli_query($my,"UPDATE $table SET $pos=1 WHERE user_id=$user_id");
                                ?>
                                        <div class="row">
                                            <div class="col-sm-9">
                                                
                                            </div>
                                            <div class="col-sm-2 box" style="background-color: #00aa00;color: #fff;font-weight: 800;font-size: 20px;text-align: center;padding-top: 1%;margin-bottom: 2%">
                                                <p>Accepted</p>
                                            </div>
                                        </div>
                                <?php   
                                    }
                                    elseif ($c==0) 
                                    {
                                        $update=mysqli_query($my,"UPDATE $table_name SET status=-1 WHERE user_id=$user_id AND user_sub_id=$check");
                                        $update=mysqli_query($my,"UPDATE $table_name SET points=0 WHERE user_id=$user_id AND user_sub_id=$check");
                                ?>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                
                                            </div>
                                            <div class="col-sm-3 box" style="background-color: #ff0000;color: #fff;font-weight: 800;font-size: 20px;text-align: center;padding-top: 1%;margin-bottom: 2%">
                                                <p>Wrong Answer</p>
                                            </div>
                                        </div>
                                <?php  
                                    }
                                    else 
                                    {
                                        $ans=(int)(($c)/($w+$c))*$score;
                                        $update=mysqli_query($my,"UPDATE $table_name SET status=0 WHERE user_id=$user_id AND user_sub_id=$check");
                                        $update=mysqli_query($my,"UPDATE $table_name SET points=$ans WHERE user_id=$user_id AND user_sub_id=$check");
                                ?>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                
                                            </div>
                                            <div class="col-sm-3 box" style="background-color: #99aa00;color: #fff;font-weight: 800;font-size: 17px;text-align: center;padding-top: 1%;margin-bottom: 2%">
                                                <p>Partially Accepted</p>
                                            </div>
                                        </div>
                                <?php 
                                    }
                                    $code=$_SESSION["code"];
                                    if ($check==1) 
                                    {
                                        mkdir("users/".$user_id."/".$table_name);
                                    }            
                                    $file_code=fopen("users/".$user_id."/".$table_name."/"."$check".".txt","w+");
                                    fwrite($file_code,$code);
                                    fclose($file_code);


                                    $data=mysqli_query($my,"SELECT max(points)  AS num FROM $table_name WHERE user_id=$user_id");
                                    $row=mysqli_fetch_assoc($data);
                                    $num=$row['num'];
                                    $pos="q".(string)$_SESSION['D'];
                                    $data=mysqli_query($my,"UPDATE $table SET $pos=$num WHERE user_id=$user_id");

                                    $data=mysqli_query($my,"SELECT * FROM $table WHERE user_id=$user_id");
                                    $row=mysqli_fetch_assoc($data);
                                    $i=1;
                                    $points=0;
                                    $solved=0;
                                    $count=$row['count'];
                                    while($i<=$count)
                                    {
                                        $qid="q".(string)$i;
                                        $checkid="q".(string)$i."check";
                                        $points+=$row[$qid];
                                        $solved+=$row[$checkid];
                                        $i++;
                                    }
                                    $qid=substr($_SESSION['d'],2,1);
                                    $qid="a".$qid;
                                    $table=$_SESSION['b'];
                                    $data=mysqli_query($my,"UPDATE $table SET $qid=$points WHERE user_id=$user_id");

                                    $data=mysqli_query($my,"SELECT * FROM $table WHERE user_id=$user_id");
                                    $row=mysqli_fetch_assoc($data);
                                    $i=1;
                                    $points=0;
                                    $count=$row['count'];
                                    while($i<=$count)
                                    {
                                        $qid="a".(string)$i;
                                        $points+=$row[$qid];
                                        $i++;
                                    }
                                    $table=$_SESSION['a'];
                                    $qid=substr($_SESSION['d'],1,1);
                                    $qid="s".$qid;
                                    $checkid=$qid."solved";
                                    $data=mysqli_query($my,"UPDATE $table SET $qid=$points,$checkid=$solved WHERE user_id=$user_id");

                                    $table=$_SESSION['d'];
                                    $attempt=mysqli_query($my,"SELECT count(DISTINCT user_id) AS count FROM $table");
                                    $fetch=mysqli_fetch_assoc($attempt);
                                    $attempted=$fetch['count'];
                                    $attempt=mysqli_query($my,"SELECT count(DISTINCT user_id) AS count FROM $table WHERE status=1");
                                    $fetch=mysqli_fetch_assoc($attempt);
                                    $accuracy=$fetch['count'];
                                    $accuracy=(int)($accuracy/$attempted)*100;

                                    $table=$_SESSION['C'];
                                    $qid=$_SESSION['D'];
                                    $data=mysqli_query($my,"UPDATE $table SET attempted=$attempted,accuracy=$accuracy WHERE ques_id=$qid");
                                ?>
                            </div>               
                        <?php
                            }
                        ?>
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