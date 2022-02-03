<?php
    include 'connect.php';

    $insert=false;

    if(isset($_POST['submit']))
    {
        $cid=$_POST['cid'];
        $cnm=$_POST['cnm'];
        $csnm=$_POST['csnm'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pin=$_POST['pin'];
        $ugctc=$_POST['ugctc'];
        $pgctc=$_POST['pgctc'];
        $stipend=$_POST['stipend'];
        $tmi=$_POST['tmi'];
        $smi=$_POST['smi'];
        $fte=$_POST['fte'];

        $sql = "INSERT INTO `placementcompanies` (comp_id , comp_nm, c_short_nm, adrss, city, stat, pin, ug_ctc, pg_ctc, stipend, tmi, smi, fte) VALUES ('$cid', '$cnm', '$csnm', '$address', '$city', '$state', '$pin', '$ugctc', '$pgctc', '$stipend', '$tmi', '$smi', '$fte')";
        $result=mysqli_query($conn,$sql);

        if(!$result)
        {
            die(mysqli_error($conn));
        }
        else
        {
            $insert=true;
        }
    }

    if(isset($_POST['submit1']))
    {
        $compid=$_POST['compid'];
        $courseid=$_POST['courseid'];
        $coursenm=$_POST['coursenm'];
        $fte=$_POST['fte'];
        $smi=$_POST['smi'];
        $ppofte=$_POST['ppofte'];
        $pposmi=$_POST['pposmi'];
        $placedst=$_POST['placedst'];

        $sql = "INSERT INTO `selected_students` (cid, course_id, course_nm, fte, smi, ppo_fte, ppo_smi, placed_st) VALUES ('$compid', '$courseid', '$coursenm', '$fte', '$smi', '$ppofte', '$pposmi', '$placedst')";
        $result=mysqli_query($conn,$sql);

        if(!$result)
        {
            die(mysqli_error($conn));
        }
        else
        {
            $insert=true;
        }
    }

    if(isset($_POST['submit2']))
    {
        $compid=$_POST['compid'];
        $bcs=$_POST['bcs'];
        $bit=$_POST['bit'];
        $bec=$_POST['bec'];
        $bee=$_POST['bee'];
        $bei=$_POST['bei'];
        $bmt=$_POST['bmt'];
        $bbt=$_POST['bbt'];
        $bce=$_POST['bce'];
        $mca=(isset($_POST['mca']));
        $msccs=$_POST['msccs'];
        $mcs=$_POST['mcs'];
        $mit=$_POST['mit'];
        $mvlsi=$_POST['mvlsi'];
        $mrs=$_POST['mrs'];
        $totEleStu=$_POST['totEleStu'];
        $test=$_POST['test'];
        $interS=$_POST['interS'];
        $interE=$_POST['interE'];
        $resdt=$_POST['resdt'];
        $written=$_POST['written'];
        $gd=$_POST['gd'];
        $interShortList=$_POST['interShortList'];

        $sql = "INSERT INTO `eligible_courses` (compid, bcs, b_it, bec, bee, bei, bmt, bbt, bce, mca, msccs, mcs, mit, mvlsi, mrs, totEleStu, test, interS, interE, resdt, written, gd, interShortList) VALUES ('$compid', '$bcs', '$bit', '$bec', '$bee', '$bei', '$bmt', '$bbt', '$bce', '$mca', '$msccs', '$mcs', '$mit', '$mvlsi', '$mrs', '$totEleStu', '$test', '$interS', '$interE', '$resdt', '$written', '$gd', '$interShortList')";
        $result=mysqli_query($conn,$sql);

        if(!$result)
        {
            die(mysqli_error($conn));
        }
        else
        {
            $insert=true;
        }
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Company Details Insert</title>
  </head>
  <body>

  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong><h4>Success..!</h4></strong> The Record Has Been Inserted Successfully  </div>";
  }
  ?>    


                                                            <!-- 1 - placement companies-->
<div class="container my-5">
<!--FORM1 START-->
        <form method="POST">
<div>
        <label for="compID" class="form-label"><span>Company ID </span>
            <input type="text" class="form-control" id="cid" name="cid" placeholder="enter company's ID" style="width: 400px;"/>
        </label>
        
        <label for="compNm" class="form-label"><span>Company Name</span>
            <input type="text" class="form-control" id="cnm" name="cnm" placeholder="enter company's name " style="width: 400px;"/>
        </label>
        
        <label for="compShortNm" class="form-label"><span>Company Short Name</span>
            <input type="text" class="form-control" id="csnm" name="csnm" placeholder="enter company's short name " style="width: 400px;"/>
        </label>
</div>
<br>
<div>
        <label for="address" class="form-label"><span>Address</span>
            <input type="text" class="form-control" id="address" name="address" placeholder="company's address " style="width: 400px;"/>
        </label>

        <label for="city" class="form-label"><span>City</span>
            <input type="text" class="form-control" id="city" name="city" placeholder="city " style="width: 300px;"/>
        </label>

        <label for="state" class="form-label"><span>State</span>
            <input type="text" class="form-control" id="state" name="state" placeholder="state" style="width: 300px;"/>
        </label>

        <label for="pin" class="form-label"><span>Pincode</span>
            <input type="number" class="form-control" id="pin" name="pin" placeholder="pin" style="width: 200px;"/>
        </label>
</div>
<br>
<div>
        <label for="ugctc" class="form-label"><span>UG CTC</span>
            <input type="text" class="form-control" id="ugctc" name="ugctc" placeholder="ug ctc" style="width: 400px;"/>
        </label>

        <label for="pgctc" class="form-label"><span>PG CTC</span>
            <input type="text" class="form-control" id="pgctc" name="pgctc" placeholder="pg ctc " style="width: 400px;"/>
        </label>

        <label for="stipend" class="form-label"><span>Stipend</span>
            <input type="text" class="form-control" id="stipend" name="stipend" placeholder="stipend" style="width: 400px;"/>
        </label>
</div>
<br>
<div>
        <label for="tmi" class="form-label"><span>TMI</span>
            <input type="number" class="form-control" id="tmi" name="tmi" placeholder="tmi" style="width: 400px;"/>
        </label>

        <label for="smi" class="form-label"><span>SMI</span>
            <input type="number" class="form-control" id="smi" name="smi" placeholder="smi " style="width: 400px;"/>
        </label>

        <label for="fte" class="form-label"><span>FTE</span>
            <input type="number" class="form-control" id="fte" name="fte" placeholder="fte" style="width: 400px;"/>
        </label>
</div>
        <br> 
        <button type="submit" class="btn btn-primary" name="submit" style="width: 250px; height: 50px;">Enter Company's Record</button>
        </form>
<!--FORM1 END-->
<br>
<hr style="height: 5px; color: black;">
    </div>

                                                      <!-- 2 - selected students-->

<div class="container my-5">
<!--FORM2 START-->
<form method="POST">
<div>
        <label for="compid" class="form-label"><span>Company's ID </span>
            <input type="text" class="form-control" id="compid" name="compid" placeholder="enter company's ID" style="width: 300px;"/>
        </label>

        <label for="courseid" class="form-label"><span>Course ID </span>
            <input type="text" class="form-control" id="courseid" name="courseid" placeholder="enter course's ID" style="width: 300px;"/>
        </label>
        
        <label for="coursenm" class="form-label"><span>Course Name</span>
            <input type="text" class="form-control" id="coursenm" name="coursenm" placeholder="enter course's name " style="width: 300px;"/>
        </label>
        
        <label for="fte" class="form-label"><span>FTE</span>
            <input type="number" class="form-control" id="fte" name="fte" placeholder="enter fte" style="width: 300px;"/>
        </label>
</div>
<br>
<div>
        <label for="smi" class="form-label"><span>SMI</span>
            <input type="number" class="form-control" id="smi" name="smi" placeholder="smi " style="width: 300px;"/>
        </label>

        <label for="ppofte" class="form-label"><span>PPO FTE</span>
            <input type="number" class="form-control" id="ppofte" name="ppofte" placeholder="ppo fte " style="width: 300px;"/>
        </label>

        <label for="pposmi" class="form-label"><span>PPO SMI</span>
            <input type="number" class="form-control" id="pposmi" name="pposmi" placeholder="ppo smi" style="width: 300px;"/>
        </label>

        <label for="placedst" class="form-label"><span>Placed Students</span>
            <input type="number" class="form-control" id="placedst" name="placedst" placeholder="placed students" style="width: 300px;"/>
        </label>
</div>
        <br> 
        <button type="submit" class="btn btn-primary" name="submit1" style="width: 250px; height: 50px;">Student's Record</button>
        </form>
<!--FORM2 END-->
<br>
<hr style="height: 5px; color: black;">
</div>


                                                      <!-- 3 - elegible courses-->


<div class="container my-5">
    <!--FORM3 START-->
    <form method="POST">
        <div>
            <label for="compid" class="form-label"><span>Company's ID </span>
                <input type="text" class="form-control" id="compid" name="compid" placeholder="enter company's ID" style="width: 300px;"/>
            </label>
    
            <label for="bcs" class="form-label"><span>BTECH CS </span>
                <input type="text" class="form-control" id="bcs" name="bcs" placeholder="CS" style="width: 300px;"/>
            </label>
            
            <label for="bit" class="form-label"><span>BTECH IT</span>
                <input type="text" class="form-control" id="bit" name="bit" placeholder="IT" style="width: 300px;"/>
            </label>
            
            <label for="bec" class="form-label"><span>BTECH EC</span>
                <input type="text" class="form-control" id="bec" name="bec" placeholder="EC" style="width: 300px;"/>
            </label>
    </div>
<br>
    <div>
            <label for="bee" class="form-label"><span>BTECH EE</span>
                <input type="text" class="form-control" id="bee" name="bee" placeholder="EE" style="width: 300px;"/>
            </label>

            <label for="bei" class="form-label"><span>BTECH EI</span>
                <input type="text" class="form-control" id="bei" name="bei" placeholder="EI " style="width: 300px;"/>
            </label>
    
            <label for="bmt" class="form-label"><span>BTECH MT</span>
                <input type="text" class="form-control" id="bmt" name="bmt" placeholder="MT" style="width: 300px;"/>
            </label>
    
            <label for="bbt" class="form-label"><span>BTECH BT</span>
                <input type="text" class="form-control" id="bbt" name="bbt" placeholder="BT" style="width: 300px;"/>
            </label>
    </div>
<br>
    <div>
            <label for="bce" class="form-label"><span>BTECH CE</span>
                <input type="text" class="form-control" id="bce" name="bce" placeholder="CE" style="width: 300px;"/>
            </label>

            <label for="mca" class="form-label"><span>MCA</span>
                <input type="text" class="form-control" id="fte" name="fte" placeholder="MCA" style="width: 300px;"/>
            </label>

            <label for="msccs" class="form-label"><span>MSC CS</span>
                <input type="text" class="form-control" id="msccs" name="msccs" placeholder="CS " style="width: 300px;"/>
            </label>
    
            <label for="mcs" class="form-label"><span>MTECH CS</span>
                <input type="text" class="form-control" id="mcs" name="mcs" placeholder="CS" style="width: 300px;"/>
            </label>
    </div>
<br>
    <div>
            <label for="mit" class="form-label"><span>MTECH IT</span>
                <input type="text" class="form-control" id="mit" name="mit" placeholder="IT" style="width: 300px;"/>
            </label>
    
            <label for="mvlsi" class="form-label"><span>MTECH VLSI</span>
                <input type="text" class="form-control" id="mvlsi" name="mvlsi" placeholder="VLSI" style="width: 300px;"/>
            </label>

            <label for="mrs" class="form-label"><span>MTECH RS</span>
                <input type="text" class="form-control" id="mrs" name="mrs" placeholder="RS" style="width: 300px;"/>
            </label>

            <label for="totEleStu" class="form-label"><span>Total Eligible Students</span>
                <input type="number" class="form-control" id="totEleStu" name="totEleStu" placeholder="Number of Elegible students" style="width: 300px;"/>
            </label>
    </div>
<br>
    <div>
            <label for="test" class="form-label"><span>Test Date</span>
                <input type="date" class="form-control" id="test" name="test" style="width: 300px;"/>
            </label>
    
            <label for="interS" class="form-label"><span>Interview Start Date</span>
                <input type="date" class="form-control" id="interS" name="interS" style="width: 300px;"/>
            </label>
    
            <label for="interE" class="form-label"><span>Interview End Date</span>
                <input type="date" class="form-control" id="interE" name="interE" style="width: 300px;"/>
            </label>

            <label for="resdt" class="form-label"><span>Result Date</span>
                <input type="date" class="form-control" id="resdt" name="resdt" style="width: 300px;"/>
            </label>
    </div>
<br>
    <div>
            <label for="written" class="form-label"><span>Students Appeared For Written Test</span>
                <input type="number" class="form-control" id="written" name="written" placeholder="Appeared Students" style="width: 400px;"/>
            </label>
    
            <label for="gd" class="form-label"><span>Group Discussion</span>
                <input type="number" class="form-control" id="gd" name="gd" placeholder="GD" style="width: 400px;"/>
            </label>
    
            <label for="interShortList" class="form-label"><span>Shortlisted Students for Interview</span>
                <input type="number" class="form-control" id="interShortList" name="interShortList" placeholder="Shortlisted For Interview" style="width: 400px;"/>
            </label>
    </div>
<br> 
            <button type="submit" class="btn btn-primary" name="submit2" style="width: 250px; height: 50px;">Eligible Course's Record</button>
    </form>
    <!--FORM3 END-->
    <br>
    <hr style="height: 5px; color: black;">
    </div>


<hr style="height: 5px; color: rebeccapurple;">
<center><button class="btn btn-primary my-5" style="width: 250px; height: 50px;"><a href="selectAll.php" class="text-light"> Show All Data </a></button></center>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>