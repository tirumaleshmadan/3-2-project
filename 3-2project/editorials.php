<?php
	include("db.php");
    session_start();

    if($_SESSION['flag']==0)
    {
        $_SESSION['B']=$_GET['ids'];
        if(($_SESSION['B']=='basicprogramming') || ($_SESSION['B']=='datastructures') || ($_SESSION['B']=='algorithms'))
        {
            $_SESSION['A']='dashboard';
        }
        $_SESSION['flag']=1;
    }

    $var=$_SESSION['no'];
    $var1=trim($_SESSION['B']);
    $data=mysqli_query($my,"SELECT * FROM $var1 WHERE topic_id=$var");
    $row=mysqli_fetch_assoc($data);
    $_SESSION['C']=$row['link'];

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

        <!--script type="text/javascript">
            $(function() {
                    $("#Room").on("click", ".up", function() {
                    id = $(this).attr("id");
                    if (id == 1)
                    {
                        alert(id);
                    }
                });
            });
        </script-->

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
    			<div class="col-lg-3 bg-1">
                    <div class="container-fluid box" style="margin: 12.1% 2% 2% 15%;background-color: #fff">
                    	<div class="container-fluid">
                        <?php
                            $var=trim($_SESSION['A']);
                            $var1=trim($_SESSION['B']);
                            $data=mysqli_query($my,"SELECT * FROM $var WHERE link='$var1'");
                            $head=mysqli_fetch_assoc($data)
                        ?>
                    		<h1 class="topic"><?php echo $head['topic_name'] ?></h1>
                    	</div>
                    	<hr style="margin: 0" />
                        <div id="rank" onclick="location.href='leaderboard.php'" class="container-fluid box" style="margin: 4% 3% 4% 3%;background-color: #5f027c;cursor: pointer;">
                    		<p class="leade">LEADERBOARD</p>
                        	<a href="leaderboard.php"><p class="leade"><u>38193</u></p></a>
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
                    		<div id="editorials" onclick="location.href='editorials.php'" class="col-sm-2 head1 box">
                    			<p>Editorial</p>
                    		</div>
                    		<div id="tutorials" onclick="location.href='tutorials.php'" class="col-sm-2 head">
                    			<p>Tutorials</p>
                    		</div>
                    		<div id="problems" onclick="location.href='problems.php'" class="col-sm-2 head">
                    			<p>Problems</p>
                    		</div>
                    		<div class="col-sm-6">
                    			
                    		</div>
                    	</div>
                    	<hr style="margin: 0" />
                        <div class="container-fluid box" style="margin: 1% 0.5% 1% 0.5%;">
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

			$("rank").click(function(){
   				window.location=$(this).find("a").attr("href"); return false;
			});
    	</script>
    </body>
</html>
    	
