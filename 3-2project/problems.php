<?php
    include("db.php");
    session_start();

    $_SESSION['flag1']=0;

    if (isset($_POST['1']))
    {
        $_SESSION['no']=1; 
        header("Location:editorials.php");   
    }
    if (isset($_POST['2']))
    {
        $_SESSION['no']=2;
        header("Location:editorials.php");    
    }
    if (isset($_POST['3']))
    {
        $_SESSION['no']=3; 
        header("Location:editorials.php");   
    }
    if (isset($_POST['4']))
    {
        $_SESSION['no']=4;
        header("Location:editorials.php");    
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

        <style type="text/css">
        	.title{
        		color: #fff;
        		font-size: 35px;
        		font-family: verdana;
        		font-weight: 900;
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
        	.bg-1{
        		background-color: #fff;
        	}
        	.box{
        		box-shadow: 2px 2px 4px rgb(0,0,0,0.2),-2px -2px 4px rgb(0,0,0,0.2);
        	}
        	.head{
        		color: #5f027c;
        		font-size: 20px;
        		font-family: verdana;
        		font-weight: 900;
        		text-align: center;
        		padding-top: 0.9%;
        		padding-bottom: 0.5%;
        		border-right: 1px solid #5f027c;
        		cursor: pointer;
        	}
        	.head1{
        		color: #fff;
        		font-size: 20px;
        		font-family: verdana;
        		font-weight: 900;
        		text-align: center;
        		background-color: #5f027c;
        		padding-top: 0.9%;
        		padding-bottom: 0.5%;
        		cursor: pointer;
        	}
            .head:hover{
                background-color: #5f027c;
                color: #fff;
            }
            .topic{
                color: #5f027c;
                font-size: 25px;
                padding: 0 2%;
                text-align: center;
                font-family: verdana;
                font-weight: 900;
                text-align: center;
            }
            .leade{
                text-align: center;
                color: white;
                font-weight: 500;
                font-size: 15px;
                margin-top: 3%;
            }
            .solve{
                font-weight: 700;
                font-size: 20px;
                padding: 14% 20% 0% 0%;
                color: #5f027c;
                text-align: right;
                margin-right: 3%;
            }
            .solved{
                font-weight: 700;
                font-size: 20px;
                padding: 14% 20% 0% 0%;
                color: #999;
                text-align: right;
            }
            .name{
                font-weight: 600;
                font-size: 16px;
                padding: 2% 0% 0% 10%;
                color: #000;
            }
            .name:hover{
                color: #5f027c;
            }
            .up{
                color: #fff;
                font-size: 15px;
                font-family: verdana;
                /*padding: 2% 0 2% 0;*/
                margin-bottom: 1.5%;
                font-weight: 600;
                text-align: left;
            }
            .clickup{
                color: #fff;
                background-color: #5f027c;
                border-radius: 20px;
                padding: 2% 8%;
            }
            .click{
                color: #5f027c;
                border-radius: 20px;
                padding: 2% 8%;
            }
            .clickup:hover{
                text-decoration: none;
                color: #fff;
                background-color: #5f027c;
            }
            .click:hover{
                text-decoration: none;
                color: #fff;
                background-color: #5f027c;
            }
            button{
                border: none;
                width: 80%;
                background-color: #fff;
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
    			<div class="col-lg-3 bg-1">
                    <div class="container-fluid box" style="margin: 12.1% 2% 2% 15%;background-color: #fff">
                        <div class="container-fluid">
                        <?php
                            $var=trim($_SESSION['A']);
                            $var1=trim($_SESSION['B']);
                            $data=mysqli_query($my,"SELECT * FROM $var WHERE link='$var1'");
                            $head=mysqli_fetch_assoc($data);
                            $val=$_SESSION['user_id'];
                            $idel="a".(string)$_SESSION['no'];
                            $ide=$_SESSION['b'];
                            $rank=mysqli_query($my,"SELECT count(*) AS count FROM $ide WHERE $idel>(SELECT $idel FROM $ide WHERE user_id=$val)");
                            $ans=mysqli_fetch_assoc($rank);
                        ?>
                            <h1 class="topic"><?php echo $head['topic_name'] ?></h1>
                        </div>
                        <hr style="margin: 0" />
                        <div id="rank" onclick="location.href='leaderboard.php?ids=<?php echo $_SESSION['b'].$idel ?>'" class="container-fluid box" style="margin: 4% 3% 4% 3%;background-color: #5f027c;cursor: pointer;">
                            <p class="leade">LEADERBOARD</p>
                            <a href="leaderboard.php?ids=<?php echo $_SESSION['b'].$idel ?>"><p class="leade"><u><?php echo $ans['count']+1 ?></u></p></a>
                        </div>
                        <hr style="margin: 0" />
                        <?php
                            $var=$_SESSION['B'];
                            $data=mysqli_query($my,"SELECT * FROM $var");
                        ?>
                        <ul id="Room" style="margin: 8% 0% 0% 0%;text-decoration: none;list-style: none;">
                            <?php
                                while ($row=mysqli_fetch_assoc($data))
                                {
                                    if ($row['topic_id']==$_SESSION['no'])
                                    {            
                            ?>
                                        <form method="post">
                                            <button type="submit" name="<?php echo $row['topic_id'] ?>">
                                                <li class="up">
                                                    <p class="clickup"><?php echo $row['topic_name'] ?></p>
                                                </li>
                                            </button>
                                        </form>
                                    <?php
                                    }
                                    else
                                    {    
                                    ?>
                                        <form method="post">
                                            <button type="submit" name="<?php echo $row['topic_id'] ?>">
                                                <li class="up">
                                                    <p class="click"><?php echo $row['topic_name'] ?></p>
                                                </li>
                                            </button>
                                        </form>
                                <?php
                                    }
                                }
                                ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 bg-1">
                    <div class="container-fluid box" style="margin: 4% 1% 1% 0%;background-color: #fff">
                    	<div class="row">
                    		<div id="editorials" onclick="location.href='editorials.php'" class="col-sm-2 head">
                    			<p>Editorial</p>
                    		</div>
                    		<div id="tutorials" onclick="location.href='tutorials.php'" class="col-sm-2 head">
                    			<p>Tutorials</p>
                    		</div>
                    		<div id="problems" onclick="location.href='problems.php'" class="col-sm-2 head1 box">
                    			<p>Problems</p>
                    		</div>
                    		<div class="col-sm-6">
                    			
                    		</div>
                    	</div>
                    	<hr style="margin: 0" />
                        <div class="container-fluid box" style="margin: 1% 0.5% 1% 0.5%;">
                            <div class="row" style="border-bottom: 1.5px solid black;text-align: center;">
                                <div class="col-sm-2">
                                    <p style="font-weight: 800;font-size: 15px;padding-top: 4%">solve problems</p>
                                </div>
                            </div>
                            <?php
                                $var=trim($_SESSION['C']);
                                $sub_data=mysqli_query($my,"SELECT * FROM $var");
                                while ($sub_row=mysqli_fetch_assoc($sub_data)) 
                                {
                                    $user_id=$_SESSION['user_id'];
                                    $table=$_SESSION['c'];
                                    $attr="q".$sub_row['ques_id']."check";
                                    $ans=mysqli_query($my,"SELECT * FROM $table WHERE user_id=$user_id");
                                    $getans=mysqli_fetch_assoc($ans);
                            ?>
                                    <div class="row" style="border-bottom: 1px dashed black;">
                                        <div class="col-sm-6">
                                            <a href="question.php?nos=<?php echo $sub_row['ques_id'] ?>" style="text-decoration: none;"><p class="name"><?php echo $sub_row['ques_name'] ?></p></a>
                                            <div class="row" style="padding: 0% 0% 0% 10%;font-size: 10px;">
                                                <div class="col-sm-3">
                                                    <p>ATTEMPTED BY: <b><?php echo $sub_row['attempted'] ?></b></p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p>ACCURACY: <b><?php echo $sub_row['accuracy'] ?>%</b></p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p>LEVEL: <b><?php echo $sub_row['level'] ?></b></p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p>POINTS: <b><?php echo $sub_row['points'] ?></b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                        <div class="col-sm-2">
                                            <?php
                                                if ($getans[$attr]==0) 
                                                {
                                            ?>
                                                    <a href="question.php?nos=<?php echo $sub_row['ques_id'] ?>" style="text-decoration: none;"><p class="solve">solve</p></a>
                                            <?php
                                                }
                                                else 
                                                {
                                            ?>
                                                    <p class="solved">solved</p>
                                            <?php  
                                                }
                                            ?>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    	<script type="text/javascript">
    		$("editorials").click(function(){
   				window.location=$(this).find("a").attr("href"); return false;
			});

			$("tutorials").click(function(){
   				window.location=$(this).find("a").attr("href"); return false;
			});

			$("problems").click(function(){
   				window.location=$(this).find("a").attr("href"); return false;
			});
    	</script>
    </body>
</html>