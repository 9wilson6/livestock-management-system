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
	$Tag_no=$_POST['Tag_no'];
	$id=$_POST['id'];
	$datetym=strtotime(mysqli_real_escape_string($conn,	$_POST['datetym']));
	$first_milking=mysqli_real_escape_string($conn,	$_POST['first_milking']);
	$second_milking=mysqli_real_escape_string($conn,	$_POST['second_milking']);
	$third_mliking=mysqli_real_escape_string($conn,	$_POST['third_mliking']);
	$co_operative=mysqli_real_escape_string($conn,	$_POST['co_operative']);
	$cost=mysqli_real_escape_string($conn,	$_POST['cost']);
	$total=($first_milking + $second_milking + $third_mliking);
	$query="INSERT INTO milk_record(Tag_no, id, datetym, first_milking, second_milking, third_milking, co_operative, cost, total) VALUES('$Tag_no', '$id', '$datetym', '$first_milking', '$second_milking', '$third_mliking', '$co_operative', '$cost', '$total')";

	$results=mysqli_query($conn, $query);

	if ($results==1) {
		$msg="Record for ". $Tag_no. " added successfully";
		header("Refresh:1; url=milkRecord.php");
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
            <form action="milkRecord.php"   method="post" autocomplete="off">
            <div class="heading--primary text-light">New Milk Record</div>
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
      <input type="date" class="form-control control-lg" name="datetym" placeholder="date" required>
    </div>

  </div>
  </div>
  <!-- /////////////////////////////////////////////////////////////////////////// -->
    <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
     <input type="number" class="form-control control-lg" placeholder="First Milking (ltrs)" min="0" name="first_milking" required  id="weight">

    </div>

    <div class="col">
      <input type="number" name="second_milking"  class="form-control control-lg" min="0"  required placeholder="Second Milking (ltrs)">
    </div>
    <div class="col">
      <input type="number" class="form-control control-lg" name="third_mliking" placeholder="Third Milking (ltrs)" required>
    </div>
  </div>
 </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="form-group mb-5">
      <div class="form-row">
      	<div class="col">
         <select type="text" class="custom-select mr-sm-2 control-lg"  required name="co_operative">
      <option selected value="">Select Sacco...</option>
        <option value="Githunguri Dairy Farmers">Githunguri Dairy Farmers</option>
        <option value="Kiambaa Dairy Farmers">Kiambaa Dairy Farmers</option>
        <option value="New Kenya Co-operative Cremeries">New Kenya Co-operative Cremeries</option>
      </select>
    <!-- <input type="text"  placeholder="Co-operative" class="form-control control-lg"> -->
</div>
    <div class="col">
      <input type="number" class="form-control control-lg" name="cost" placeholder="Cost (Ksh)" required>
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
      <a class="btn btn-block myLargeButtons btn-info" role="button" id="viewrecords" href="viewMilkRecord_.php">View Milk Records</a>
    </div>
  </div>
 </div>


    </form>
        </div>
    </div>
 </section>
