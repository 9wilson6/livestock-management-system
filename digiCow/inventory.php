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
    $datetym=strtotime(mysqli_real_escape_string($conn, $_POST['datetym']));
    $received_fodder=mysqli_real_escape_string($conn, $_POST['received_fodder']);
    $issued_fodder=mysqli_real_escape_string($conn, $_POST['issued_fodder']);
    $bal_fodder=($received_fodder- $issued_fodder);
    $received_concentrate=mysqli_real_escape_string($conn,  $_POST['received_concentrate']);
    $issued_concentrate=mysqli_real_escape_string($conn,  $_POST['issued_concentrate']);
    $bal_concentrate=($received_concentrate-$issued_concentrate);
    $query="INSERT INTO feed (Tag_no, id, datetym, received_fodder, issued_fodder, bal_fodder, received_concentrate, issued_concentrate, bal_concentrate) VALUES('$Tag_no', '$id', '$datetym', '$received_fodder', '$issued_fodder', '$bal_fodder', '$received_concentrate', '$issued_concentrate', '$bal_concentrate')";

    $results=mysqli_query ($conn, $query);

    if ($results==1) {
        $msg="Record for ". $Tag_no. " added successfully";
        header("Refresh:1; url=inventory.php");
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
            <form action="inventory.php"   method="post" autocomplete="off">
            <div class="heading--primary text-light"></div>
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
                 
                  ?>
      <input type="date" class="form-control control-lg" name="datetym" required min='<?php echo ($date); ?>'>
      <!-- <input type="date" class="form-control control-lg" name="datetym" placeholder="date" required> -->
    </div>

  </div>
  </div>
  <!-- /////////////////////////////////////////////////////////////////////////// -->
        <div class="heading--primary text-warning">Silage/Green fodder(KG)</div>
    <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
     <input type="number" class="form-control control-lg" placeholder="Received stock" min="0" name="received_fodder" required  id="weight">

    </div>

    <div class="col">
      <input type="number" name="issued_fodder"  class="form-control control-lg" min="0"  required placeholder="Issued">
    </div>
    <!-- <div class="col">
      <input type="number" class="form-control control-lg" name="bal_fodder" placeholder="Remaining stock" required>
    </div> -->
  </div>
 </div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->

  <div class="heading--primary text-danger"> Concetrate (KG) </div>
    <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
     <input type="number" class="form-control control-lg" placeholder="Received stock" min="0" name="received_concentrate" required  id="weight">

    </div>

    <div class="col">
      <input type="number" name="issued_concentrate"  class="form-control control-lg" min="0"  required placeholder="Issued">
    </div>
    
  </div>
 </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<input type="hidden" name="id" value=" <?php echo $id ?> ">
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
<button class="btn btn-block myLargeButtons btn-info " name="submit" type="submit">Manage Feed</button>
    </div>

    <div class="col">
      <a class="btn btn-block myLargeButtons btn-info" role="button" id="viewrecords" href="viewinventory.php">View stock</a>
    </div>
  </div>
 </div>


    </form>
        </div>
    </div>
    <?php require_once "scripts.php" ?>
 </section>
