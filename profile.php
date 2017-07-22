<!DOCTYPE html>
<?php
session_start();
//echo "Username:" . $_SESSION["username"] . "<br>";
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

  <link  href= "css/mystyle.css" rel = "stylesheet" >

   
	


</head>
	<body> 
		<header>
			<div class = "header-inner" >

				<nav>
					<a href = "#" id = "logo"></a>
					<ul>
						<li><a href = "#"> Home</a></li>
						<li><a href = "#">More</a></li>
                        <li><a href = "#">End</a></li>
					</ul>	
				</nav>	

			</div>
		</header>

       <!--begin intro -->
	       <div class= "intro">
                    <div class="round">
                       <img  src="IMG_5785_1.jpg" alt="">
                    </div>
                    <div class="intro-text">
                        <h1> Welcome <?php echo  $_SESSION["username"];?></h1>
                    </div>
            </div> 
       <!-- -End of Intro -->   
       


       <section>
            <div class= "details">
                
            </div>
       <section>  

              
</body>

</html> 
	 
	
	


	  
	  


