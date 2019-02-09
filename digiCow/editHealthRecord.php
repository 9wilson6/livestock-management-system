<?php
$msg="";
$error="";
 require_once("dbconfig.php");
if (isset($_REQUEST['rec_no'])) {
	$rec_no=$_REQUEST['rec_no'];
	$query="SELECT * FROM health WHERE rec_no='$rec_no'";
	$results=mysqli_query($conn, $query);
	foreach ($results as $result) {
$Tag_no=$result['Tag_no'];
$symptoms=$result['symptoms'];
$Diagnosis=$result['diagnosis'];
$treatment=$result['treatment'];
$vet_Name=$result['vet_Name'];
$cost=$result['Cost'];

$result=$result['result'];

	}
}
$heading="MILK RECORD";
require_once "csslinks.php";
 require_once "homeheader.php" ;

 $id=$_SESSION['id'];
 $query="SELECT * FROM cattle WHERE id ='$id'";
 $results=mysqli_query($conn,$query);

?>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php 
if (isset($_POST['submit'])) {
	$Tag_no=mysqli_real_escape_string($conn, $_POST['Tag_no']);
$rec_no=$_POST['rec_no'];
  $symptoms=mysqli_real_escape_string($conn, $_POST['symptoms']);
  $Diagnosis=mysqli_real_escape_string($conn, $_POST['Diagnosis']);
  $treatment=mysqli_real_escape_string($conn, $_POST['treatment']);
  $result=mysqli_real_escape_string($conn, $_POST['result']);
  $vet_Name=mysqli_real_escape_string($conn, $_POST['vet_Name']);
  $Cost=mysqli_real_escape_string($conn, $_POST['Cost']);

  $query="UPDATE health SET Tag_no='$Tag_no', symptoms='$symptoms',Diagnosis='$Diagnosis',treatment='$treatment',Cost='$Cost',vet_Name='$vet_Name',result='$result' WHERE rec_no='$rec_no'";
  $results=mysqli_query($conn, $query);
	if ($results==1) {
		$msg="Record for ". $Tag_no. " Udated successfully";
		header("Refresh:1; url=viewHealthRecords_.php");
	}else{
		$error="Record Update was unssuccessful";
	}
}

 ?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <section class="section-form">
    <div class="mycontainer">
        <div class="myform">
        	
        	<!-- /////// -->
            <form action="editHealthRecord.php"   method="post" autocomplete="off">
            <div class="heading--primary text-light">New Health Record</div>
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
<input type="text" name="Tag_no" disabled class="form-control control-lg" value="<?php echo $Tag_no?>">
</div>
  </div>
  </div>
  <!-- /////////////////////////////////////////////////////////////////////////// -->
    <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
     <!-- <input type="number" class="form-control control-lg" placeholder="First Milking (ltrs)" min="0" name="first_milking" required  id="weight"> -->
     <textarea name="symptoms"  cols="30" required class="form-control control-lg" rows="5" ><?php echo $symptoms; ?></textarea>

    </div>

    <div class="col">
       <textarea name="Diagnosis"  cols="30" required class="form-control control-lg" rows="5" > <?php echo $Diagnosis; ?></textarea>
    </div>

  </div>
 </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group mb-5">
      <div class="form-row">
       <div class="col">
       <textarea name="treatment"  cols="30" required class="form-control control-lg" rows="5" > <?php echo $treatment; ?></textarea>
    </div>
    <div class="col">
       <textarea name="result"  cols="30" required class="form-control control-lg" rows="5" > <?php echo $result; ?></textarea>
    </div>

  </div>
  </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group mb-5">
      <div class="form-row">
       <div class="col">
       <input type="text" name="vet_Name"  class="form-control control-lg"  required value="<?php echo $vet_Name; ?> ">
    </div>
    <div class="col">
       <input type="text" name="Cost"  min="0" class="form-control control-lg" required  value="<?php echo $cost; ?>">
    </div>

  </div>
  </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<input type="hidden" name="rec_no" value="<?php echo $rec_no ?> ">
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
<button class="btn btn-block myLargeButtons btn-info " name="submit" type="submit">Udate Record</button>
    </div>

    <div class="col">
      <a class="btn btn-block myLargeButtons btn-info" role="button" id="viewrecords" href="viewHealthRecords_.php">Cancel</a>
    </div>
  </div>
 </div>


    </form>
        </div>
    </div>
 </section>