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
      <a href="healthRecord.php" class=" btn  btn-info float-right text-light">Create Record</a>
   
        <!-- <div class="myform"> -->
           <div id="form">
             <div class="heading--primary">Health records</div>

                      <table class="table table-light" >
    <thead class="thead-light">
      <tr>
        <th>Tag No</th>
        <th>Date</th>
        <th>Symptoms</th>
        <th>Diagnosis</th>
        <th>reatment</th>
        <th>Cost</th>
        <th>Vetrinary</th>
        <th>Result</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php 
       
       
       $query="SELECT * FROM health WHERE id='$id'";
       $results=mysqli_query($conn, $query);
// die($query);
       foreach ($results as $result) {?>
           <tr>
               <td><?php echo($result['Tag_no']) ?></td>
               <td><?php echo date('d/m/Y ', $result['datetym']); ?></td>
                <td><?php echo($result['symptoms']) ?></td>
                <td><?php echo($result['diagnosis']) ?></td>
                 <td><?php echo($result['treatment']) ?></td>
                  <td><?php echo($result['Cost']) ?></td>
                
                <td><?php echo($result['vet_Name']) ?></td>
                <td><?php echo($result['result']) ?></td>
                <td>
                  <a href="deleteHealthRecord.php?rec_no=<?php echo $result['rec_no']?>" class="btn btn-danger">Delete</a>
                  <a href="editHealthRecord.php?rec_no=<?php echo $result['rec_no']?>" class="btn btn-info">Edit</a></td>
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