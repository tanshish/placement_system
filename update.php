<?php
include("connect.php");
error_reporting(0);
$compid=$_GET['compid'];
$bcs=$_GET['bcs'];
$b_it=$_GET['b_it'];
$bec=$_GET['bec'];
$bee=$_GET['bee'];
$bei=$_GET['bei'];
$bmt=$_GET['bmt'];
$bbt=$_GET['bbt'];
$bce=$_GET['bce'];
$mca=$_GET['mca'];
$msccs=$_GET['msccs'];
$mcs=$_GET['mcs'];
$mit=$_GET['mit'];
$mvlsi=$_GET['mvlsi'];
$mrs=$_GET['mrs'];
$totEleStu=$_GET['totEleStu'];
$test=$_GET['test'];
$inetrS=$_GET['interS'];
$interE=$_GET['interE'];
$resdt=$_GET['resdt'];
$gd=$_GET['gd'];
$written=$_GET['written'];
$inetrShortList=$_GET['interShortList'];



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
		<label for="Name"> BSC:</label>
        <input type="text" value="<?php echo "$bsc" ?>" name="bsc" required>
		</p>
        
  
  
              
        <p>
		<label for="Name"> B_IT:</label>
        <input type="text" value="<?php echo "$b_it" ?>" name="b_it" required>
        </p>
  
  
        <p>      
        <label for="Name"> BEC:</label>
        <input type="text" value="<?php echo "$bec" ?>" name="bec" required>
        </p>
		
		<p>
		<label for="Name"> BEE:</label>
        <input type="text" value="<?php echo "$bee" ?>" name="bee" required>
        </p>
		
		<p>
		<label for="Name"> BEI:</label>
        <input type="text" value="<?php echo "$bei" ?>" name="bei"  required>
		</p>
		
		<p>
		<label for="Name"> BMT:</label>
        <input type="text" value="<?php echo "$bmt" ?>" name="bmt"  required>
		</p>
		  
		<p>
		<label for="Name"> BBT:</label>
        <input type="text" value="<?php echo "$bbt" ?>" name="bbt" required>
		</p>
   
		<p>
		<label for="Name"> BCE:</label>
        <input type="text" value="<?php echo "$bce" ?>" name="bce" required>
		</p>
   
		<p>
		<label for="Name"> MCA:</label>
        <input type="text" value="<?php echo "$mca" ?>" name="mca" required>
		</p>
   
		<p>
		<label for="Name"> MSCCS:</label>
        <input type="text" value="<?php echo "$msccs" ?>" name="msccs" required>
		</p>
   
		<p>
		<label for="Name"> MCS:</label>
        <input type="text" value="<?php echo "$mcs" ?>" name="mcs" required>
		</p>
   
		<p>
		<label for="Name"> MIT:</label>
        <input type="text" value="<?php echo "$mit" ?>" name="mit" required>
		</p>
   
		<p>
		<label for="Name"> MVLSI:</label>
        <input type="text" value="<?php echo "$mvlsi" ?>" name="mvlsi" required>
		</p>
   
		<p>
		<label for="Name"> MRS:</label>
        <input type="text" value="<?php echo "$mrs" ?>" name="mrs" required>
		</p>
   
		<p>
		<label for="Name"> Total Students:</label>
        <input type="text" value="<?php echo "$totEleStu" ?>" name="totELeStu" required>
		</p>
   
		<p>
		<label for="Name"> InternS:</label>
        <input type="Date" value="<?php echo "$iinetrS" ?>" name="interS" required>
		</p>
   
		<p>
		<label for="Name"> InternE:</label>
        <input type="date" value="<?php echo "$inetrE" ?>" name="interE" required>
		</p>
   
		<p>
		<label for="Name"> Result Date:</label>
        <input type="date" value="<?php echo "$resdt" ?>" name="resdt" required>
		</p>
   
		<p>
		<label for="Name"> Written:</label>
        <input type="number" value="<?php echo "$written" ?>" name="written" required>
		</p>
   
		<p>
		<label for="Name"> GD:</label>
        <input type="number" value="<?php echo "$gd" ?>" name="gd" required>
		</p>
   
		<p>
		<label for="Name"> InternShortList:</label>
        <input type="number" value="<?php echo "$interShortList" ?>" name="interShortList" required>
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
$bcs=$_GET['bcs'];
$bit=$_GET['bit'];
$bec=$_GET['bec'];
$bee=$_GET['bee'];
$bei=$_GET['bei'];
$bmt=$_GET['bmt'];
$bbt=$_GET['bbt'];
$bce=$_GET['bce'];
$mca=$_GET['mca'];
$mccs=$_GET['mccs'];
$mcs=$_GET['mcs'];
$mit=$_GET['mit'];
$mvlsi=$_GET['mvlsi'];
$mrs=$_GET['mrs'];
$ts=$_GET['ts'];
$tst=$_GET['tst'];
$is=$_GET['is'];
$ie=$_GET['ie'];
$rdt=$_GET['rdt'];
$gd=$_GET['gd'];
$wrt=$_GET['wrt'];
$isl=$_GET['isl'];
		$query = "UPDATE eligible_courses SET bcs='$bcs ' ,b_it='$bit',bec='$bec ' ,bee='$bee ' ,bei='$bei' ,bmt='$bmt',bbt='$bbt',bce='$bce',mca='$mca',msccs='$mccs',mcs='$mcs',mit='$mit',mvlsi='$mvlsi',mrs='$mrs',totEleStu='$ts',test='$tst',interS='$is',interE='$ie',resdt='$rdt',written='$wrt',interShortList='$isl' WHERE compid = '$cid' ";
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
	

