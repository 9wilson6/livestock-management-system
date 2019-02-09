<?php 

$heading="BREEDING RECS";
require_once "csslinks.php";
 require_once "homeheader.php" ;
 require_once "dbconfig.php";
 $id=$_SESSION['id'];
 ?>
<body>


<section class="section-form">

    <div class="mycontainer">
<button class=" btn  btn-info float-right" onclick="printContent('form')">Print Records</button>
        <!-- <div class="myform"> -->
           <div id="form">
             <div class="heading--primary">Breeding records</div>

                      <table class="table table-light" >
    <thead class="thead-light">
      <tr>
        <th class="text-center">Tag No</th>
        <th class="text-center">Calving Date</th>
        <th class="text-center">Insemination Method</th>
        <th class="text-center">Calf Number</th>
        <th class="text-center">Sex</th>
        <th class="text-center">Calf Weight At Birth</th>
        <th class="text-center">Remarks</th>
      </tr>
    </thead>
    <tbody>
       <?php 
       
       
       $query="SELECT * FROM calving WHERE id='$id'";
       $results=mysqli_query($conn, $query);
// die($query);
       foreach ($results as $result) {?>
           <tr>
               <td class="text-center"><?php echo($result['Tag_no']) ?></td>
               <td class="text-center"><?php echo date('d/m/Y', $result['datetym']); ?></td>
               <td class="text-center"><?php echo $result['insemination']; ?></td>
                <td class="text-center"><?php echo($result['calf_number']) ?></td>
                <td class="text-center"><?php echo($result['Sex']) ?></td>
                 <td class="text-center"><?php echo($result['calf_weight']) ?></td>
                 <td class="text-center"><?php echo($result['Remarks']) ?></td>                 
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