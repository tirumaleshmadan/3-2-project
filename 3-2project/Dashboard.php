<?php
include("db.php");
session_start();
$_SESSION['no']=1;
$_SESSION['flag']=0;
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
            .hyper2{
                color: #5f027c;
                font-size: 18px;
                font-family: verdana;
                font-weight: 600;
                margin-left: 20px;
                text-decoration: none;
            }
            .hyper2:hover{
                color: #999;
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
                    	<?php
                    		$data=mysqli_query($my,"SELECT * FROM topics");	
                            while($row=mysqli_fetch_assoc($data))
                            {
                                $ide=trim($row['id']);
                        ?>
                    	    <div class="row" id=<?php echo $row['link'] ?>>
                    		    <h2 class="title1"><?php echo $row['topic_name'] ?></h2>
                    		    <hr>
                    	    </div>
                            <?php
                                $var=trim($row['link']);
                                $sub_data=mysqli_query($my,"SELECT * FROM $var");
                                $q=mysqli_num_rows($sub_data);
                                $r=floor($q%2);
                                $q=floor($q/2);
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
                                    $val=$_SESSION['user_id'];
                                    $idel="s".(string)$sub_row['topic_id'];
                                    $rank=mysqli_query($my,"SELECT count(*) AS count FROM $ide WHERE $idel>(SELECT $idel FROM $ide WHERE user_id=$val)");
                                    $ans=mysqli_fetch_assoc($rank);
                                    $hello=mysqli_query($my,"SELECT * FROM $ide WHERE user_id=$val");
                                    $how=mysqli_fetch_assoc($hello);
                                    $i=$how[$idel."solved"];
                                    $j=$how[$idel."total"];
                                    if ($j==0) 
                                    {
                                        $k=100;    
                                    }
                                    else 
                                    {
                                        $k=(int)($i/$j)*100;    
                                    }
                                    if ($k<=30) 
                                    {
                                        $skill="Beginner";
                                    }
                                    elseif ($k>30 && $k<=50) 
                                    {
                                        $skill="Candidate";
                                    }
                                    elseif ($k>50 && $k<=70) 
                                    {
                                        $skill="Intermediate";
                                    }
                                    elseif ($k>70 && $k<=85) 
                                    {
                                        $skill="Expert";
                                    }
                                    elseif ($k>85 && $k<=95) 
                                    {
                                        $skill="Master";
                                    }
                                    elseif ($k>95 && $k<=100) 
                                    {
                                        $skill="Grand Master";
                                    }
                    		?>
	    						<div class="col-sm-6 box" id=<?php echo $sub_row['link'] ?> style="margin: 0 3% 0 0;width: 47%;border: 8px solid #5f027c;cursor: pointer;">
	    							<div class="row">
	    								<div id="topic" onclick="location.href='editorials.php?ids=<?php echo $ide.(string)$sub_row['topic_id'].$sub_row['link'] ?>'" class="col-sm-3">
	    									<p style="color: #5f027c;background-color: #ffff00;font-size: 15px;font-weight: 700;text-align: center;border-radius: 10px"><?php echo $skill ?></p>
	    								</div>
	    								<div id="topic" onclick="location.href='editorials.php?ids=<?php echo $ide.(string)$sub_row['topic_id'].$sub_row['link'] ?>'" class="col-sm-6" style="padding-top: 9%;color: #fff">
	    									..................................................
	    								</div>
	    								<div id="rank" onclick="location.href='leaderboard.php?ids=<?php echo $ide.$idel.$sub_row['topic_name'] ?>'" class="col-sm-3" style="text-align: center;">
	    									<p style="color: #5f50ff;line-height: 2;font-weight: 600;font-size: 20px;font-family: 'Abhaya Libre'">RANK</p>
	    									<p style="color: #5f027c;font-size: 18px;font-weight: 900;line-height: 0;text-decoration: underline;"><?php echo $ans['count']+1 ?></p>
	    								</div>
	    							</div>
	    							<div id="topic" onclick="location.href='editorials.php?ids=<?php echo $ide.(string)$sub_row['topic_id'].$sub_row['link'] ?>'" class="row">
	    								<div class="col-sm-12">
	    									<h1 class="topic"><?php echo $sub_row['topic_name'] ?></h1>
	    								</div>
	    							</div>
	    							<div id="topic" onclick="location.href='editorials.php?ids=<?php echo $ide.(string)$sub_row['topic_id'].$sub_row['link'] ?>'" class="row">
	    								<div class="col-sm-4">
	    									
	    								</div>
	    								<div class="col-sm-8">
	    									<div class="progress" style="width: 60%;margin: 7% 0 7% 10%;">
	    										<div class="progress-bar progress-bar-striped active" min="0" max="100" style="width: <?php echo $k ?>%;background-color: #5f027c;">
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
                                    $val=$_SESSION['user_id'];
                                    $idel="s".(string)$sub_row['topic_id'];
                                    $rank=mysqli_query($my,"SELECT count(*) AS count FROM $ide WHERE $idel>(SELECT $idel FROM $ide WHERE user_id=$val)");
                                    $ans=mysqli_fetch_assoc($rank);
                                    $hello=mysqli_query($my,"SELECT * FROM $ide WHERE user_id=$val");
                                    $how=mysqli_fetch_assoc($hello);
                                    $i=$how[$idel."solved"];
                                    $j=$how[$idel."total"];
                                    if ($j==0) 
                                    {
                                        $k=100;    
                                    }
                                    else 
                                    {
                                        $k=(int)($i/$j)*100;    
                                    }
                                    if ($k<=30) 
                                    {
                                        $skill="Beginner";
                                    }
                                    elseif ($k>30 && $k<=50) 
                                    {
                                        $skill="Candidate";
                                    }
                                    elseif ($k>50 && $k<=70) 
                                    {
                                        $skill="Intermediate";
                                    }
                                    elseif ($k>70 && $k<=85) 
                                    {
                                        $skill="Expert";
                                    }
                                    elseif ($k>85 && $k<=95) 
                                    {
                                        $skill="Master";
                                    }
                                    elseif ($k>95 && $k<=100) 
                                    {
                                        $skill="Grand Master";
                                    }
                    			?>
	    						<div class="col-sm-6 box" id=<?php echo $sub_row['link'] ?> style="margin: 0 3% 0 0;width: 47%;border: 8px solid #5f027c;cursor: pointer;">
	    							<div class="row">
	    								<div id="topic" onclick="location.href='editorials.php?ids=<?php echo $ide.(string)$sub_row['topic_id'].$sub_row['link'] ?>'" class="col-sm-3">
	    									<p style="color: #5f027c;background-color: #ffff00;font-size: 15px;font-weight: 700;text-align: center;border-radius: 10px"><?php echo $skill ?></p>
	    								</div>
	    								<div id="topic" onclick="location.href='editorials.php?ids=<?php echo $ide.(string)$sub_row['topic_id'].$sub_row['link'] ?>'" class="col-sm-6" style="padding-top: 9%;color: #fff">
	    									..................................................
	    								</div>
	    								<div id="rank" onclick="location.href='leaderboard.php?ids=<?php echo $ide.$idel.$sub_row['topic_name'] ?>'" class="col-sm-3" style="text-align: center;">
	    									<p style="color: #5f50ff;line-height: 2;font-weight: 600;font-size: 20px;font-family: 'Abhaya Libre'">RANK</p>
	    									<p style="color: #5f027c;font-size: 18px;font-weight: 900;line-height: 0;text-decoration: underline;"><?php echo $ans['count']+1 ?></p>
	    								</div>
	    							</div>
	    							<div id="topic" onclick="location.href='editorials.php?ids=<?php echo $ide.(string)$sub_row['topic_id'].$sub_row['link'] ?>'" class="row">
	    								<div class="col-sm-12">
	    									<h1 class="topic"><?php echo $sub_row['topic_name'] ?></h1>
	    								</div>
	    							</div>
	    							<div id="topic" onclick="location.href='editorials.php?ids=<?php echo $ide.(string)$sub_row['topic_id'].$sub_row['link'] ?>'" class="row">
	    								<div class="col-sm-4">
	    									
	    								</div>
	    								<div class="col-sm-8">
	    									<div class="progress" style="width: 60%;margin: 7% 0 7% 10%;">
	    										<div class="progress-bar progress-bar-striped active" min="0" max="100" style="width: <?php echo $k ?>%;background-color: #5f027c;">
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
                        <div class="container-fluid" style="margin: 5% 0% 0% 0%">
                        <?php
                            $data=mysqli_query($my,"SELECT * FROM topics"); 
                            while($row=mysqli_fetch_assoc($data))
                            {
                        ?>
                            <div class="row" style="margin: 0%">
                                <a href=<?php echo "#".$row['link'] ?> class="hyper2"><?php echo $row['topic_name'] ?></a>
                            <?php
                                $var=trim($row['link']);
                                $sub_data=mysqli_query($my,"SELECT * FROM $var");
                                while ($sub_row=mysqli_fetch_assoc($sub_data)) 
                                {
                            ?>        
                                    <div class="row" style="margin: 2% 0% 0% 10%">
                                        <a href=<?php echo "#".$sub_row['link'] ?> class="hyper2"><?php echo $sub_row['topic_name'] ?></a>
                                    </div>
                            <?php
                                }
                            ?>
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
    		$("topic").click(function(){
   				window.location=$(this).find("a").attr("href"); return false;
			});

			$("rank").click(function(){
   				window.location=$(this).find("a").attr("href"); return false;
			});
    	</script>
    </body>
</html>