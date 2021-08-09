<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

<title>Confirmation</title>
</head>

<header>
<h1>
DigiJobs

</h1>
</header>




<nav>
<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="job.php">JOBS</a></li>
<li><a href="company11.html">COMPANIES</a></li>
<li><a href="contact.html">CONTACT US</a></li>
<li><a href="about.html">ABOUT US</a></li>


</ul>
</nav>



<body>
<?php

$fn = $_POST["f_name"];
$ln = $_POST["l_name"];
$eml =$_POST["e_mail"];
$mob = $_POST["mobile"];
$feed =$_POST["feedbac"];


?>

<?php

 $con=mysqli_connect("localhost","root","1234","digijobs");     
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$done=mysqli_query($con,"INSERT INTO feedback (f_name,l_name,e_mail,mobile,feedbac) VALUES ('$f_name','$l_name','$e_mail','$mobile','$feedbac')");

if($done){
?>
    <script>
            alert("feedback Added! : <?php echo $f_name; ?> ");
            location.href="feedback.html";
           	</script>
<?php	}

mysqli_close($con);

?>


<footer> &copy;  Copyright 2019 | All Rights Reserved | Digijobs.com
</footer>
</body>
</html>


