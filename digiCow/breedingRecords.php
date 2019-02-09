<?php 
 require_once("dbconfig.php");
$msg="";
$error="";
 ?>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php 
if (isset($_POST['submit'])) {
  $Tag_no=$_POST['Tag_no'];
  $id=$_POST['id'];
  $datetym=strtotime(mysqli_real_escape_string($conn, $_POST['datetym']));
  $insemination=mysqli_real_escape_string($conn,  $_POST['insemination']);
  $calf_number=mysqli_real_escape_string($conn, $_POST['calf_number']);
  $Sex=mysqli_real_escape_string($conn, $_POST['Sex']);
  $calf_weight=mysqli_real_escape_string($conn, $_POST['calf_weight']);
  $Remarks=mysqli_real_escape_string($conn, $_POST['Remarks']);
  $query="INSERT INTO calving (Tag_no, id, datetym, insemination, calf_number, Sex, calf_weight, Remarks) VALUES('$Tag_no', '$id', '$datetym', '$insemination', '$calf_number', '$Sex', '$calf_weight', '$Remarks')";

  $results=mysqli_query($conn, $query) or die(mysqli_error($conn));

  if ($results==1) {
    $msg="Record for ". $Tag_no. " added successfully";
    header("Refresh:1; url=breedingRecords.php");
  }else{
    $error="Record creation was unssuccessful";
  }
}

 ?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<?php

$heading="MILK RECORD";
require_once "csslinks.php";
 require_once "homeheader.php" ;

 $id=$_SESSION['id'];
 $query="SELECT * FROM cattle WHERE id ='$id'";
 $results=mysqli_query($conn,$query);

?>

 <section class="section-form">
    <div class="mycontainer">
        <div class="myform">
        	
        	<!-- /////// -->
            <form action="breedingRecords.php"   method="post" autocomplete="off">
            <div class="heading--primary text-light">New Breeding Record</div>
            <?php if (!empty($error)) {?>
           <div class=" form__input text-center bg-danger text-light pt-0 pb-1">
                    <?php echo($error) ?>
            </div>
            <br>
            <?php } ?>
            <?php if (!empty($msg)) {?>
            <div class=" form__input text-center bg-success pt-0 pb-1 text-light">

                    <?php echo($msg) ?>
            </div>
            <br>
            <?php } ?>



<div class="form-group mb-5">
      <div class="form-row">
      	<div class="col">
    <select type="text" class="custom-select mr-sm-2 control-lg" placeholder="Breed" required name="Tag_no">
    	<option selected value="">Tag No:</option>
         <?php foreach ($results as $result) {?>
         	<option value="<?php echo $result['Tag_no']; ?>"><?php echo $result['Tag_no']; ?></option>
       <?php  } ?>
      </select>
</div>
    <div class="col">
    <?php $date=date("Y-m-d");
                 $time=date("H:i");
                  ?>
      <input type="date" class="form-control control-lg" name="datetym" required min='<?php echo ($date); ?>'>
      <!-- <input type="date" class="form-control control-lg" name="datetym"  required> -->
    </div>

  </div>
  </div>
  <!-- /////////////////////////////////////////////////////////////////////////// -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group mb-5">
      <div class="form-row">
      	<div class="col">
         <select  class="custom-select mr-sm-2 control-lg"  required name="insemination">
      <option selected value="">Select Insemination Method...</option>
        <option value="Natural">Natural</option>
        <option value="Artificial">Artificial</option>
      </select>
    <!-- <input type="text"  placeholder="Co-operative" class="form-control control-lg"> -->
</div>
    <div class="col">
    <input type="text" placeholder="Calf Number" name="calf_number" required class="form-control control-lg">
    </div>
    <div class="col">
       <select  class="custom-select mr-sm-2 control-lg"  required name="Sex">
      <option selected value="">Select Calf Sex...</option>
        <option value="Male">Male</option>
        <option value="Felame">Felame</option>
      </select>
    </div>
  </div>
  </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group mb-5">
      <div class="form-row">

     <div class="col">
    <input type="number" placeholder="Calf Weight (kgs)" name="calf_weight" min="0" required class="form-control control-lg">
    </div>
  <div class="col">
     <textarea name="Remarks" class="form-control control-lg"  cols="30" rows="10" placeholder="Remarks...."></textarea>
  </div>
  </div>
  </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<input type="hidden" name="id" value=" <?php echo $id ?> ">
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
<button class="btn btn-block myLargeButtons btn-info " name="submit" type="submit">Create Record</button>
    </div>

    <div class="col">
      <a class="btn btn-block myLargeButtons btn-info" role="button" id="viewrecords" href="viewBreedingRecords.php">View Breeding Records</a>
    </div>
  </div>
 </div>


    </form>
        </div>
    </div>
 </section>
