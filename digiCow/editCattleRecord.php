<?php 
$heading="EDIT  CATTLE RECORD";
require_once('dbconfig.php');
if (isset($_REQUEST['tag_no'])) {
  $tag_no=$_REQUEST['tag_no'];
  $query="SELECT * FROM cattle WHERE Tag_no='$tag_no'";
  $results=mysqli_query($conn, $query);
  foreach ($results as $result) {
    $shedNo=$result['shedNo'];
    $weight=$result['weight'];
    $breed=$result['breed'];
  }
}
require_once "csslinks.php";
 require_once "homeheader.php" ;
 ?>
<body>
<?php if (isset($_POST['submit'])) {
    $error="";
    $msg="";
    
if (empty($_POST['tag_no']) || empty($_POST['weight']) || empty($_POST['shedNo'])) {
   $error="All fields must be filed in";
}else{
 $Tag_no = mysqli_real_escape_string($conn, $_POST['Tag_no']);
  $shedNo= mysqli_real_escape_string($conn, $_POST['shedNo']);
 $weight=mysqli_real_escape_string($conn, $_POST['weight']);

 $query="UPDATE  cattle SET  shedNo='$shedNo', weight='$weight', breed='$breed' WHERE Tag_no='$tag_no' ";
$results=mysqli_query($conn, $query);
if ($results==1) {
   $msg="Record for cattle ". $Tag_no ." Update successfully";
   header("Refresh:1; url=viewCattleRecords_.php");
}
 

} 
}

?>
<section class="section-form">
    <div class="mycontainer">
        <div class="myform">
            <form action="editCattleRecord.php"   method="post" autocomplete="off">
            <div class="heading--primary text-light">Edit Cattle Record</div>
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
      <input type="text" class="form-control control-lg" name="Tag_no" placeholder="Tag Number" disabled value="<?php echo $tag_no ?>" required>
      
    </div>

    <div class="col">
      <input type="text" class="form-control control-lg" name="shedNo" placeholder="Shed Number" value="<?php echo $shedNo ?>" required>
    </div>
  </div>
</div>
 <div class="form-group mb-5">
      <div class="form-row">
    

    <div class="col">
      <select type="text" class="custom-select mr-sm-2 control-lg" placeholder="Breed" required name="breed">
        <option value="<?php echo $breed ?>"><?php echo $breed ?></option>
          <option value="Ayshire">Ayshire</option>
          <option value="Friesian">Friesian</option>
          <option value="Jersey">Jersey</option>
          <option value="Guernsey">Guernsey</option>
      </select>
    </div>
    <div class="col">
     <input type="number" class="form-control control-lg" placeholder="Weight" min="0" name="weight"required value="<?php echo $weight ?>" id="weight">
     <input type="hidden" name="tag_no" value="<?php echo $tag_no ?>">
    </div>
  </div>
 </div>
  

 <div class="form-group mb-5">
      <div class="form-row">
    
    <div class="col">
<button class="btn btn-block myLargeButtons btn-info " name="submit" type="submit">Update Record</button>
    </div>
    <div class="col">
<a href="viewCattleRecords_.php" class="btn btn-block myLargeButtons btn-info " name="submit" type="submit">cancel</a href="viewCattleRecords_.php">
    </div>
  </div>
 </div>

    </form>
        </div>
    </div>
 </section>