<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | ForYou</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header">      
        
                
                    

                    <a  href="index.php">
                       <br><center><h1><img src="loogoo.png" alt="logo" width="456" high="99"></h1></center>
                    </a>
                    
                </div>

    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                 <center><h2 > Infor<span>mation </span></h2><BR>
                    <div class="slide-text">
                       
                   	
						
						<div class="border"></div>
					</div>
					<!-- /section title -->
					<?php
// inculde con.php page that contain the connection to database
include('con.php');

ob_start();
?>

<style>
table, th, td {
    border: 1px solid white;
    border-collapse: collapse;
    
}
th, td {
    padding: 5px;
    text-align: center;
}
</style>

<body>

<table style="width:50%" align="center" >

  <tr>
    <th style="blue">QR</th>
    <th style="blue">First Name</th>
    
    <th style="blue">Last Name</th>
    <th style="blue">BT</th>
    <th style="blue">Diseases</th>
    <th style="blue">Finprint</th>
    <th style="blue">Emcn</th>
  </tr>
  <tr>
<?php 
//it will select  all payment table  information that are already payed


$sql="SELECT * FROM InformationOfhaj ";

$result=mysqli_query($mysqli,$sql);

if(mysqli_num_rows($result))

{

   while ($row=mysqli_fetch_assoc($result)) {

     echo "  <tr>";

  echo    "<td>".$row["barCode"]."</td>";

  echo    "<td> ".$row["fname"]."</td>";

  echo    "<td> ".$row["lname"]."</td>";
  echo    "<td>".$row["BT"]."</td>";
  echo    "<td>".$row["diseases"]."</td>";
  echo    "<td>".'<img src="data:image/jpeg;base64,'.base64_encode($row['finprint']).'"width="50" height="50">';
  echo    "<td>".$row["emcn"]."</td>";


       echo "  </tr>";

  

   }


}

 ?>


  
</table>




<br>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>

    

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>