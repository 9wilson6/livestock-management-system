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
<button class=" btn  btn-info float-right" onclick="printContent('form')">Print Records</button>
        <!-- <div class="myform"> -->
           <div id="form">
             <div class="heading--primary">Milk records</div>

                      <table class="table table-light" >
    <thead class="thead-light">
      <tr>
        <th>Tag No</th>
        <th>D.O.B</th>
        <th>Shed No</th>
        <th>Weight</th>
        <th>Breed</th>
        <th>Cattle Description</th>
      </tr>
    </thead>
    <tbody>
       <?php 
       
       
       $query="SELECT * FROM cattle WHERE id='$id'";
       $results=mysqli_query($conn, $query);
// die($query);
       foreach ($results as $result) {?>
           <tr>
               <td><?php echo($result['Tag_no']) ?></td>
               <td><?php echo date('d/m/Y', $result['datetym']); ?></td>
               <td><?php echo $result['shedNo']; ?></td>
                <td><?php echo($result['weight']) ?></td>
                <td><?php echo($result['breed']) ?></td>
                 <td><?php echo($result['cattle_desc']) ?></td>
                 
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
  
