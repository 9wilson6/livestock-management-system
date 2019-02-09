<?php
$msg="";
$error="";
$heading="MILK RECORD";
require_once "csslinks.php";
 require_once "homeheader.php" ;
 require_once("dbconfig.php");
 $id=$_SESSION['id'];
 $query="SELECT * FROM cattle WHERE id ='$id'";
 $results=mysqli_query($conn,$query);

?>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php 
if (isset($_POST['submit'])) {
	$Tag_no=mysqli_real_escape_string($conn, $_POST['Tag_no']);
  $datetym=strtotime($_POST['datetym']);
  $symptoms=mysqli_real_escape_string($conn, $_POST['symptoms']);
  $Diagnosis=mysqli_real_escape_string($conn, $_POST['Diagnosis']);
  $treatment=mysqli_real_escape_string($conn, $_POST['treatment']);
  $result=mysqli_real_escape_string($conn, $_POST['result']);
  $vet_Name=mysqli_real_escape_string($conn, $_POST['vet_Name']);
  $Cost=mysqli_real_escape_string($conn, $_POST['Cost']);
  $id=mysqli_real_escape_string($conn, $_POST['id']);
  $query="INSERT INTO health (Tag_no,datetym,symptoms,Diagnosis,treatment,Cost,vet_Name,result,id) VALUES('$Tag_no','$datetym','$symptoms','$Diagnosis','$treatment','$Cost','$vet_Name','$result','$id')";
  $results=mysqli_query($conn, $query);
	if ($results==1) {
		$msg="Record for ". $Tag_no. " added successfully";
		header("Refresh:1; url=healthRecord.php");
	}else{
		$error="Record creation was unssuccessful";
	}
}

 ?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <section class="section-form">
    <div class="mycontainer">
        <div class="myform">
        	
        	<!-- /////// -->
            <form action="healthRecord.php"   method="post" autocomplete="off">
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
    <select type="text" class="custom-select mr-sm-2 control-lg"  required name="Tag_no">
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
    </div>

  </div>
  </div>
  <!-- /////////////////////////////////////////////////////////////////////////// -->
    <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
     <!-- <input type="number" class="form-control control-lg" placeholder="First Milking (ltrs)" min="0" name="first_milking" required  id="weight"> -->
     <textarea name="symptoms"  cols="30" required class="form-control control-lg" rows="5" placeholder="Symptoms"></textarea>

    </div>

    <div class="col">
       <textarea name="Diagnosis"  cols="30" required class="form-control control-lg" rows="5" placeholder="Diagnosis"></textarea>
    </div>

  </div>
 </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group mb-5">
      <div class="form-row">
       <div class="col">
       <textarea name="treatment"  cols="30" required class="form-control control-lg" rows="5" placeholder="Treatment"></textarea>
    </div>
    <div class="col">
       <textarea name="result"  cols="30" required class="form-control control-lg" rows="5" placeholder="Result"></textarea>
    </div>

  </div>
  </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group mb-5">
      <div class="form-row">
       <div class="col">
       <input type="text" name="vet_Name"  class="form-control control-lg"  required placeholder="Vet NAme">
    </div>
    <div class="col">
       <input type="number" name="Cost"  min="0" class="form-control control-lg" required  placeholder="Cost">
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
      <a class="btn btn-block myLargeButtons btn-info" role="button" id="viewrecords" href="viewHealthRecords_.php">View Health Records</a>
    </div>
  </div>
 </div>


    </form>
        </div>
    </div>
 </section>