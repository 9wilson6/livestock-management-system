<?php 
$heading="REGISTER CATTLE";
require_once "csslinks.php";
 require_once "homeheader.php" ;
 ?>
<body>
<?php if (isset($_POST['submit'])) {
    $error="";
    $msg="";
    require_once('dbconfig.php');
if (empty($_POST['Tag_no']) || empty($_POST['cattle_desc']) || empty($_POST['shedNo']) || empty($_POST['date'])) {
   $error="All fields must be filed in";
}else{
 $Tag_no = mysqli_real_escape_string($conn, $_POST['Tag_no']);
 $cattle_desc=mysqli_real_escape_string($conn, $_POST['cattle_desc']);
  $shedNo= mysqli_real_escape_string($conn, $_POST['shedNo']);
 $weight=mysqli_real_escape_string($conn, $_POST['weight']);
 $datetym=strtotime( $_POST['date']);
 $breed=$_POST['breed'];

 // $milk_produce=mysqli_real_escape_string($conn, $_POST['milk_produce']);
 $query="SELECT * FROM cattle WHERE Tag_no='$Tag_no'";
 $results=mysqli_query($conn, $query);
 if (mysqli_num_rows($results)==0) {
     $id=$_SESSION['id'];
 $query="INSERT into cattle(Tag_no, cattle_desc, id, datetym, shedNo, weight, breed)VALUES('$Tag_no', '$cattle_desc', '$id','$datetym', '$shedNo', '$weight', '$breed')";
$results=mysqli_query($conn, $query);
if ($results==1) {
   $msg="Record for cattle ". $Tag_no ." created successfully";
}
 }else{
    $error="cattle record already exists";
 }

} 
}
?>
<section class="section-form">
    <div class="mycontainer">
        <div class="myform">
            <form action="newcattle.php"   method="post" autocomplete="off">
            <div class="heading--primary text-light">New Cattle Record</div>
            <?php if (!empty($error)) {?>
           <div class="form__input text-center bg-danger text-light pt-0 pb-1">
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
      <input type="text" class="form-control control-lg" name="Tag_no" placeholder="Tag Number" required>
      
    </div>

    <div class="col">
      <input type="text" class="form-control control-lg" name="shedNo" placeholder="Shed Number" required>
    </div>
  </div>
</div>
 <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
   
      <input type="date" class="form-control control-lg" name="date" required ?>
      <!-- <input type="date" name="date" required class="form-control control-lg" placeholder="Date Of Birth"> -->

    </div>

    <div class="col">
      <select type="text" class="custom-select mr-sm-2 control-lg" placeholder="Breed" required name="breed">
          <option value="Ayshire">Ayshire</option>
          <option value="Friesian">Friesian</option>
          <option value="Jersey">Jersey</option>
          <option value="Guernsey">Guernsey</option>
      </select>
    </div>
  </div>
 </div>
  <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
     <input type="number" class="form-control control-lg" placeholder="Weight" min="0" name="weight"required  id="weight">

    </div>

    <div class="col">
      <textarea class="form-control control-lg" rows="1" cols="4" id="cattle_desc" required name="cattle_desc" placeholder="New cattle description......"></textarea>
    </div>
  </div>
 </div>

 <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
<button class="btn btn-block myLargeButtons btn-info " name="submit" type="submit">Create Record</button>
    </div>

    <div class="col">
      <a class="btn btn-block myLargeButtons btn-info" role="button" id="viewrecords" href="viewCattleRecords_.php">View Cattle Records</a>
    </div>
  </div>
 </div>

    </form>
        </div>
    </div>
 </section>