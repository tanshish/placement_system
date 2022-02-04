<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display All Data</title>

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- 1 -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<!-- 2 -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>


</head>
<body>
    
<!-- table1 starts -->
    <div class="container my-5">
        <h2>Company Details</h2> <br>
    <table class="table my-5" id="myTable">
  <thead>
    <tr>
      <th scope="col">Company ID</th>
      <th scope="col">Company Name</th>
      <th scope="col">Company Short Name</th>
      <th scope="col">Company Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Pincode</th>
      <th scope="col">UG CTC (Lakhs)</th>
      <th scope="col">PG CTC (Lakhs)</th>
      <th scope="col">Stipend</th>
      <th scope="col">TMI</th>
      <th scope="col">SMI</th>
      <th scope="col">FTE</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT * FROM `placementcompanies`";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $compid=$row['comp_id'];
                $compnm=$row['comp_nm'];
                $csnm=$row['c_short_nm'];
                $address=$row['adrss'];
                $city=$row['city'];
                $state=$row['stat'];
                $pin=$row['pin'];
                $ugctc=$row['ug_ctc'];
                $pgctc=$row['pg_ctc'];
                $stipend=$row['stipend'];
                $tmi=$row['tmi'];
                $smi=$row['smi'];
                $fte=$row['fte'];

                echo '<tr>
                <th scope="row">'.$compid.'</th>
                <td>'.$compnm.'</td>
                <th scope="row">'.$csnm.'</th>
                <td>'.$address.'</td>
                <th scope="row">'.$city.'</th>
                <td>'.$state.'</td>
                <th scope="row">'.$pin.'</th>
                <td>'.$ugctc.'</td>
                <th scope="row">'.$pgctc.'</th>
                <td>'.$stipend.'</td>
                <th scope="row">'.$tmi.'</th>
                <td>'.$smi.'</td>
                <th scope="row">'.$fte.'</th>
                <td>
                    <button class="btn btn-primary" style="width: 100px; height: 50px;"><a href="update1.php" style="color: white">update</a></button> <button class="btn btn-danger" style="width: 100px; height: 50px;"><a href=""></a> Delete</button>
                </td>
              </tr>';
            }
        }
    ?>

    
  </tbody>
</table>
    </div>

<!-- table1 ends -->


<hr style="height: 5px; color: black;">

<!-- table2 starts -->
    <div class="container my-5">
        <h2>Selected Students</h2> <br>
    <table class="table my-5" id="myTable1">
  <thead>
    <tr>
      <th scope="col">Company ID</th>
      <th scope="col">Course ID</th>
      <th scope="col">Course Name</th>
      <th scope="col">FTE</th>
      <th scope="col">SMI</th>
      <th scope="col">PPO FTE</th>
      <th scope="col">PPO SMI</th>
      <th scope="col">Placed Students</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT * FROM `selected_students`";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $cid=$row['cid'];
                $courseid=$row['course_id'];
                $csnm=$row['course_nm'];
                $fte=$row['fte'];
                $smi=$row['smi'];
                $ppofte=$row['ppo_fte'];
                $pposmi=$row['ppo_smi'];
                $placed=$row['placed_st'];

                echo '<tr>
                <th scope="row">'.$cid.'</th>
                <td>'.$courseid.'</td>
                <th scope="row">'.$csnm.'</th>
                <td>'.$fte.'</td>
                <th scope="row">'.$smi.'</th>
                <td>'.$ppofte.'</td>
                <th scope="row">'.$pposmi.'</th>
                <td>'.$placed.'</td>
                <td>
                    <button class="btn btn-primary" style="width: 100px; height: 50px;"><a href="update2.php" style="color: white">Update</a></button> <button class="btn btn-danger" style="width: 100px; height: 50px;"><a href=""></a> Delete</button>
                </td>
              </tr>';
            }
        }
    ?>
  </tbody>
</table>
    </div>


<!-- table2 ends -->

<hr style="height: 5px; color: black;">

<!-- table3 starts -->
    <div class="container my-5">
        <h2>Eligible Courses</h2> <br>
    <table class="table my-5" id="myTable2">
  <thead>
    <tr>
      <th scope="col">Company ID</th>
      <th scope="col">BTECH CS</th>
      <th scope="col">BTECH IT</th>
      <th scope="col">BTECH EC</th>
      <th scope="col">BTECH EE</th>
      <th scope="col">BTECH EI</th>
      <th scope="col">BTECH MT</th>
      <th scope="col">BTECH BT</th>
      <th scope="col">BTECH CE</th>
      <th scope="col">MCA</th>
      <th scope="col">MSC CS</th>
      <th scope="col">MTECH CS</th>
      <th scope="col">MTECH IT</th>
      <th scope="col">MTECH VLSI</th>
      <th scope="col">MTECH RS</th>
      <th scope="col">Total Eligible</th>
      <th scope="col">Test Date</th>
      <th scope="col">Interview Start</th>
      <th scope="col">Interview End</th>
      <th scope="col">Result Date</th>
      <th scope="col">Appeared In Written Test</th>
      <th scope="col">GD</th>
      <th scope="col">Shortlisted For Interview</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT * FROM `eligible_courses`";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $compid=$row['compid'];
                $bcs=$row['bcs'];
                $b_it=$row['b_it'];
                $bec=$row['bec'];
                $bee=$row['bee'];
                $bei=$row['bei'];
                $bmt=$row['bmt'];
                $bbt=$row['bbt'];
                $bce=$row['bce'];
                $mca=$row['mca'];
                $msccs=$row['msccs'];
                $mcs=$row['mcs'];
                $mit=$row['mit'];
                $mvlsi=$row['mvlsi'];
                $mrs=$row['mrs'];
                $totEleStu=$row['totEleStu'];
                $test=$row['test'];
                $interS=$row['interS'];
                $interE=$row['interE'];
                $resdt=$row['resdt'];
                $written=$row['written'];
                $gd=$row['gd'];
                $interShortList=$row['interShortList'];

                echo '<tr>
                <th scope="row">'.$compid.'</th>
                <td>'.$bcs.'</td>
                <th scope="row">'.$b_it.'</th>
                <td>'.$bec.'</td>
                <th scope="row">'.$bee.'</th>
                <td>'.$bei.'</td>
                <th scope="row">'.$bmt.'</th>
                <td>'.$bbt.'</td>
                <th scope="row">'.$bce.'</th>
                <td>'.$mca.'</td>
                <th scope="row">'.$msccs.'</th>
                <td>'.$mcs.'</td>
                <th scope="row">'.$mit.'</th>

                <th scope="row">'.$mvlsi.'</th>
                <td>'.$mrs.'</td>
                <th scope="row">'.$totEleStu.'</th>
                <td>'.$test.'</td>
                <th scope="row">'.$interS.'</th>
                <td>'.$interE.'</td>
                <th scope="row">'.$resdt.'</th>
                <td>'.$written.'</td>
                <th scope="row">'.$gd.'</th>
                <td>'.$interShortList.'</td>
                <td>
                    <button class="btn btn-primary" style="width: 100px; height: 50px;"><a href="update.php" style="color: white;">update</a></button> <button class="btn btn-danger" style="width: 100px; height: 50px;"><a href=""></a> Delete</button>
                </td>
              </tr>';
            }
        }
    ?>

    
  </tbody>
</table>
    </div>


<!-- table3 ends -->

<!-- 3 -->
<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<!-- 4 -->
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>

<script>
        $(document).ready( function () {
    $('#myTable1').DataTable();
} );
    </script>

<script>
        $(document).ready( function () {
    $('#myTable2').DataTable();
} );
    </script>

<hr style="height: 5px; color: rebeccapurple;">
<center><button class="btn btn-primary my-5" style="width: 250px; height: 50px;"><a href="insert.php" class="text-light"> Enter Records </a></button></center>
</body>
</html>