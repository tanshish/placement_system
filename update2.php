<?php
include("connect.php");
error_reporting(0);
$cid=$_GET['cid'];
$courseid=$_GET['courseid'];
$csnm=$_GET['csnm'];
$fte=$_GET['fte'];
$smi=$_GET['smi'];
$ppofte=$_GET['ppofte'];
$pposmi=$_GET['pposmi'];
$placed=$_GET['placed'];

?>

<html>
	<head>
		<title>Update Data</title>
		<link rel="stylesheet" href="insert1.css">
	</head>
<body>

<div class="container">
<div class="navbar">
			
			
		</div>



	<center>
		<h1> UPDATE THE EVENTS </h1>
        <form action="" method="GET">
		
		<p>
		<label for="Name"> Company_ID</label>
        <input type="number" value="<?php echo "$cid" ?>" name="cid" required>
		</p>
  
		<p>
		<label for="Name"> Course_ID:</label>
        <input type="text" value="<?php echo "$courseid" ?>" name="courseid" required>
		</p>
        
  
  
              
        <p>
		<label for="Name"> Course_Name: </label>
        <input type="text" value="<?php echo "$csnm" ?>" name="csnm" required>
        </p>
  
  
        <p>      
        <label for="Name"> FTE:</label>
        <input type="text" value="<?php echo "$fte" ?>" name="fte" required>
        </p>
		
		<p>
		<label for="Name"> SMI:</label>
        <input type="text" value="<?php echo "$smi" ?>" name="smi" required>
        </p>
		
		<p>
		<label for="Name"> PPO_FTE:</label>
        <input type="text" value="<?php echo "$ppofte" ?>" name="ppofte"  required>
		</p>
		
		<p>
		<label for="Name"> PPO_SMI</label>
        <input type="text" value="<?php echo "$pposmi" ?>" name="pposmi"  required>
		</p>
		  
		<p>
		<label for="Name"> PLaced Students</label>
        <input type="text" value="<?php echo "$placed"?>" name="placed" required>
		</p>
   
		<input type="submit" id="button" name = "submit" value="Update">
		</form>
	</center>
</body>
</html>

<?php
if($_GET['submit'])
{
    $cid=$_GET['cid'];
    $courseid=$_GET['courseid'];
    $csnm=$_GET['csnm'];
    $fte=$_GET['fte'];
    $smi=$_GET['smi'];
    $ppofte=$_GET['ppofte'];
    $pposmi=$_GET['pposmi'];
    $placed=$_GET['placed'];
    
		$query = "UPDATE selected_students SET course_id='$courseid' ,course_nm='$csnm', fte='$fte' ,smi='$smi' ,ppo_fte='$ppofte' ,ppo_smi='$pposmi',placed_st='$placed' where cid='$cid'";
		$data = mysqli_query($conn,$query);
		if($data)
		{
			echo "<script>alert('record updated')</script>";
		}
		else
		{
			echo "failed to update record";
		}
}
?>
	

