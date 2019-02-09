<?php
$msg="";
$error="";
$heading="MILK RECORD";
require_once "csslinks.php";
 require_once "homeheader.php" ;
 require_once("dbconfig.php");
 if (isset($_REQUEST['recno'])) {
  $rec_no=$_REQUEST['recno'];
  $query="SELECT * FROM milk_record WHERE rec_no='$rec_no'";
  $results=mysqli_query($conn, $query);
 foreach ($results as $result) {
  $Tag_no=$result['Tag_no'];
  $first_milking=$result['first_milking'];
  $second_milking=$result['second_milking'];
  $third_milking=$result['third_milking'];
  $cost=$result['cost'];
 }
 }
?>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php 
if (isset($_POST['submit'])) {

	$first_milking=mysqli_real_escape_string($conn,	$_POST['first_milking']);
	$second_milking=mysqli_real_escape_string($conn,	$_POST['second_milking']);
	$third_milking=mysqli_real_escape_string($conn,	$_POST['third_milking']);
$rec_no=$_POST['rec_no'];
	$cost=mysqli_real_escape_string($conn,	$_POST['cost']);
	$total=($first_milking + $second_milking + $third_milking);
	$query="UPDATE milk_record SET first_milking='$first_milking', second_milking='$second_milking', third_milking='$third_milking', cost='$cost', total='$total' WHERE rec_no='$rec_no'";


	$results=mysqli_query($conn, $query);

	if ($results==1) {
		$msg="Record for ". $Tag_no. " Update successfully";
		header("Refresh:1; url=viewMilkRecord_.php");
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
            <form action="milkRecordEdit.php"   method="post" autocomplete="off">
            <div class="heading--primary text-light">Edit Milk Record</div>
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
      <input type="text" name="Tag_no" disabled class="form-control control-lg" value="<?php if(isset($Tag_no)){echo $Tag_no; } ?>" required>
      <input type="hidden" name="rec_no" value="<?php echo $rec_no?>">
</div>

  </div>
  </div>
  <!-- /////////////////////////////////////////////////////////////////////////// -->
    <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
     <input type="number" class="form-control control-lg"  min="0" name="first_milking" required  id="weight" value="<?php echo $first_milking ?>">

    </div>

    <div class="col">
      <input type="number" name="second_milking"  class="form-control control-lg" min="0"  required  value="<?php echo $second_milking ?>">
    </div>
    <div class="col">
      <input type="number" class="form-control control-lg" name="third_milking"  required value="<?php echo $third_milking ?>">
    </div>
  </div>
 </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
      <input type="number" class="form-control control-lg" name="cost" placeholder="Cost (Ksh)" required value="<?php echo $cost ?>">
    </div>

  </div>
  </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<input type="hidden" name="id" value=" <?php echo $id ?> ">
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
<button class="btn btn-block myLargeButtons btn-info " name="submit" type="submit">Update Record</button>
    </div>

    <div class="col">
      <a class="btn btn-block myLargeButtons btn-info" role="button" id="viewrecords" href="viewMilkRecord_.php">Cancel</a>
    </div>
  </div>
 </div>


    </form>
        </div>
    </div>
 </section>
