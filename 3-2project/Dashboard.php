<?php
include("db.php");
session_start();
$_SESSION['no']=1;
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
        		font-size: 35px;
        		font-family: verdana;
        		font-weight: 900;
        		margin-left: 5%;
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
    			<div class="col-sm-2 box dropdown" style="border-radius: 25px;width: 13.5%;margin: 0.2% 1.5% 0% 1.5%;cursor: pointer;">
    				<div class="row dropbtn">
    					<img src="title.png" style="width:55px; border-radius: 50% ;height:55px;margin: 0;float: left;">
                        <p class="title3">TIRUMALESH</p>
                    </div>
                    <div class="dropdown-content">
                        <a href="profile.php">Profile</a>
                        <a href="Leaderboard.php">Leaderboard</a>
                        <a href="Administrator.php">Administrator</a>
                        <a href="login.php">Logout</a>
                    </div>    
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-9 bg-1">
                    <div class="container-fluid box" style="margin: 2% 1% 1% 1.5%;background-color: #fff">
                    	<?php
                    		$data=mysqli_query($my,"SELECT * FROM topics");	
                            while($row=mysqli_fetch_assoc($data))
                            {
                        ?>
                    	    <div class="row">
                    		    <h2 class="title1"><?php echo $row['topic_name'] ?></h2>
                    		    <hr>
                    	    </div>
                            <?php
                                $var=trim($row['link']);
                                $sub_data=mysqli_query($my,"SELECT * FROM $var");
                                $q=mysqli_num_rows($sub_data);
                                $q=floor($q/2);
                                $r=floor($q%2);
                            ?>
                            <?php
                                while($q--)
                                {
                            ?>
                    		<div class="row" style="margin: 4% 3% 4% 3%">
                    		<?php
                                $t=2;
                    			while($t--)
                    			{
                    				
                    				$sub_row=mysqli_fetch_assoc($sub_data);
                    		?>
	    						<div class="col-sm-6 box" style="margin: 0 3% 0 0;width: 47%;border: 8px solid #5f027c;cursor: pointer;">
	    							<div class="row">
	    								<div id="topic" onclick="location.href='editorials.php'" class="col-sm-3">
	    									<p>hello</p>
	    									<p style="color: #5f027c;background-color: #ffff00;font-size: 15px;font-weight: 700;text-align: center;border-radius: 10px">master</p>
	    								</div>
	    								<div id="topic" onclick="location.href='editorials.php'" class="col-sm-6" style="padding-top: 9%;color: #fff">
	    									..................................................
	    								</div>
	    								<div id="rank" onclick="location.href='leaderboard.php'" class="col-sm-3" style="text-align: center;">
	    									<p style="color: #5f50ff;line-height: 2;font-weight: 600;font-size: 20px;font-family: 'Abhaya Libre'">RANK</p>
	    									<p style="color: #5f027c;font-size: 18px;font-weight: 900;line-height: 0;text-decoration: underline;">14365</p>
	    								</div>
	    							</div>
	    							<div id="topic" onclick="location.href='editorials.php'" class="row">
	    								<div class="col-sm-12">
	    									<h1 class="topic"><?php echo $sub_row['topic_name'] ?></h1>
	    								</div>
	    							</div>
	    							<div id="topic" onclick="location.href='editorials.php'" class="row">
	    								<div class="col-sm-4">
	    									
	    								</div>
	    								<div class="col-sm-8">
	    									<div class="progress" style="width: 60%;margin: 7% 0 7% 10%;">
	    										<div class="progress-bar progress-bar-striped active" min="0" max="100" style="width: 60%;background-color: #5f027c;">
	    										</div>
	    									</div>
	    								</div>
	    							</div>
	    						</div>
	    						<?php
	    							}
	    						?>
    						</div>
    					<?php
    						}
    						if($r==1)
    						{
    					?>
    						<div class="row" style="margin: 4% 3% 4% 3%">
                    			<?php	
                    				$sub_row=mysqli_fetch_assoc($sub_data);
                    			?>
	    						<div class="col-sm-6 box" style="margin: 0 3% 0 0;width: 47%;border: 8px solid #5f027c;cursor: pointer;">
	    							<div class="row">
	    								<div id="topic" onclick="location.href='editorials.php'" class="col-sm-3">
	    									<p>hello</p>
	    									<p style="color: #5f027c;background-color: #ffff00;font-size: 15px;font-weight: 700;text-align: center;border-radius: 10px">master</p>
	    								</div>
	    								<div id="topic" onclick="location.href='editorials.php'" class="col-sm-6" style="padding-top: 9%;color: #fff">
	    									..................................................
	    								</div>
	    								<div id="rank" onclick="location.href='leaderboard.php'" class="col-sm-3" style="text-align: center;">
	    									<p style="color: #5f50ff;line-height: 2;font-weight: 600;font-size: 20px;font-family: 'Abhaya Libre'">RANK</p>
	    									<p style="color: #5f027c;font-size: 18px;font-weight: 900;line-height: 0;text-decoration: underline;">14365</p>
	    								</div>
	    							</div>
	    							<div id="topic" onclick="location.href='editorials.php'" class="row">
	    								<div class="col-sm-12">
	    									<h1 class="topic"><?php echo $sub_row['topic_name'] ?></h1>
	    								</div>
	    							</div>
	    							<div id="topic" onclick="location.href='editorials.php'" class="row">
	    								<div class="col-sm-4">
	    									
	    								</div>
	    								<div class="col-sm-8">
	    									<div class="progress" style="width: 60%;margin: 7% 0 7% 10%;">
	    										<div class="progress-bar progress-bar-striped active" min="0" max="100" style="width: 60%;background-color: #5f027c;">
	    										</div>
	    									</div>
	    								</div>
	    							</div>
	    						</div>
    						</div>
    					<?php
    						}
                        }
    					?>
                    </div>
                </div>
    			<div class="col-lg-3 bg-1">
                    <div class="container-fluid box" style="margin: 6.1% 4% 2% 1%;background-color: #fff">
                    	<div class="row">
                    		<h2 class="title2">SLIDE BAR</h2>
       						<hr>
                    	</div>
                       
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
    	<script type="text/javascript">
    		$("topic").click(function(){
   				window.location=$(this).find("a").attr("href"); return false;
			});

			$("rank").click(function(){
   				window.location=$(this).find("a").attr("href"); return false;
			});
    	</script>
    </body>
</html>