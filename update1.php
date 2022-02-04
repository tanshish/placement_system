<?php
include("connect.php");
error_reporting(0);
$compid=$_GET['compid'];
$compnm=$_GET['compnm'];
$csnm=$_GET['csnm'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$pin=$_GET['pin'];
$ug_ctc=$_GET['ug_ctc'];
$pg_ctc=$_GET['pg_ctc'];
$stipend=$_GET['stipend'];
$tmi=$_GET['tmi'];
$smi=$_GET['smi'];
$fte=$_GET['fte'];
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
        <input type="number" value="<?php echo "$compid" ?>" name="compid" required>
		</p>
  
		<p>
		<label for="Name"> Company_Name:</label>
        <input type="text" value="<?php echo "$bsc" ?>" name="compnm" required>
		</p>
        
  
  
              
        <p>
		<label for="Name"> C_shortNmae:</label>
        <input type="text" value="<?php echo "$b_it" ?>" name="csnm" required>
        </p>
  
  
        <p>      
        <label for="Name"> Address:</label>
        <input type="text" value="<?php echo "$address" ?>" name="address" required>
        </p>
		
		<p>
		<label for="Name"> City:</label>
        <input type="text" value="<?php echo "$city" ?>" name="city" required>
        </p>
		
		<p>
		<label for="Name"> state:</label>
        <input type="text" value="<?php echo "$state" ?>" name="state"  required>
		</p>
		
		<p>
		<label for="Name"> PIN:</label>
        <input type="text" value="<?php echo "$pin" ?>" name="pin"  required>
		</p>
		  
		<p>
		<label for="Name"> UG_CTC:</label>
        <input type="text" value="<?php echo "$ug_ctc "?>" name="ug_ctc" required>
		</p>
   
		<p>
		<label for="Name"> PG_CTC:</label>
        <input type="text" value="<?php echo "$pg_ctc" ?>" name="pg_ctc" required>
		</p>
   
		<p>
		<label for="Name"> stipend:</label>
        <input type="text" value="<?php echo "$stipend" ?>" name="stipend" required>
		</p>
   
		<p>
		<label for="Name"> tmi:</label>
        <input type="text" value="<?php echo "$tmi" ?>" name="tmi" required>
		</p>
   
		<p>
		<label for="Name"> smi:</label>
        <input type="text" value="<?php echo "$smi" ?>" name="smi" required>
		</p>
   
		<p>
		<label for="Name"> fte:</label>
        <input type="text" value="<?php echo "$fte" ?>" name="fte" required>
		</p>
   
		
        
		
		<input type="submit" id="button" name = "submit" value="Update">
		</form>
	</center>
</body>
</html>

<?php
if($_GET['submit'])
{
    $compid=$_GET['compid'];
$compnm=$_GET['compnm'];
$csnm=$_GET['csnm'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$pin=$_GET['pin'];
$ug_ctc=$_GET['ug_ctc'];
$pg_ctc=$_GET['pg_ctc'];
$stipend=$_GET['stipend'];
$tmi=$_GET['tmi'];
$smi=$_GET['smi'];
$fte=$_GET['fte'];

		$query = "UPDATE placementcompanies SET comp_nm='$compnm ' ,c_short_nm='$csnm', adrss='$address ' ,city='$city ' ,stat='$state' ,pin='$pin',ug_ctc='$ug_ctc',pg_ctc='$pg_ctc',stipend='$stipend',tmi='$tmi',smi='$smi',fte='$fte' where comp_id='$compid'";
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
	

