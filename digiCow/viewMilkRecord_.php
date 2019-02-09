
<?php 

$heading="Milk Record";
require_once "csslinks.php";
 require_once "homeheader.php" ;
 require_once "dbconfig.php";
 $id=$_SESSION['id'];
 ?>
<body>


<section class="section-form">

    <div class="mycontainer">
<!-- <button class=" btn  btn-info float-right" onclick="printContent('form')">Print Records</button> -->
<span class=" float-right mr-2"> &nbsp;</span>
      <a href="milkRecord.php" class=" btn  btn-info float-right text-light">Create Record</a>
        <!-- <div class="myform"> -->
           <div id="form">
             <div class="heading--primary">Monthly Milk records</div>

                      <table class="table table-light" >
    <thead class="thead-light">
      <tr>
        <th>Tag No</th>
        <th>Date</th>
        <th>Total MIlk Production</th>
       
        <th>Cost</th>
         <th>Total Income</th>
        <th>Co_operative</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
       <?php 
       
       
       $query="SELECT * FROM milk_record WHERE id='$id'";
       $results=mysqli_query($conn, $query);
// die($query);
       foreach ($results as $result) {?>
           <tr>
               <td><?php echo($result['Tag_no']) ?></td>
               <td><?php echo date('d/m/Y ', $result['datetym']); ?></td>
               <?php $total_milk =($result['first_milking'] + $result['second_milking'] +$result['third_milking'])  ?>
               
                  <td><?php echo $total_milk ?></td>
                <td><?php echo($result['cost']) ?></td>
                <td><?php echo ($total_milk * $result['cost'] ); ?></td>
                <td><?php echo($result['co_operative']) ?></td>
                <td>
                	<a href="milkRecordDelete.php?recno=<?php echo $result['rec_no'] ?>" class="btn btn-danger">DELETE</a>
					<a href="milkRecordEdit.php?recno=<?php echo $result['rec_no'] ?>" class="btn btn-info">EDIT</a>
                </td>
           </tr>
      <?php }
        ?>
        </table>

  </div>
        </div>
        
    </section>
  </div>
    <?php require_once "scripts.php" ?>
        <!-- </div> -->
  
 </section>