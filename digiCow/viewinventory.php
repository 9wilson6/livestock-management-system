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
<span class=" float-right mr-2"> &nbsp;</span>
      <a href="inventory.php" class=" btn  btn-info float-right text-light">Create Record</a>
        <!-- <div class="myform"> -->
           <div id="form">
             <div class="heading--primary">Feed Stock</div>

                      <table class="table table-light" >
    <thead class="thead-light">
      <tr>
        <th>Tag No</th>
        <th>Date</th>
        
        <th> Received fodder</th>
        <th> Issued fodder</th>
        <th> Balance fodder</th>

        <th> Received concentrate</th>
        <th> Issued concentrate </th>
        <th> Balance concentrate</th>
      </tr>
    </thead>
    <tbody>
       <?php 
       
       
       $query="SELECT * FROM feed WHERE id='$id'";
       $results=mysqli_query($conn, $query);
// die($query);
       foreach ($results as $result) {?>
           <tr>
               <td><?php echo($result['Tag_no']) ?></td>
               <td><?php echo date('d/m/Y ', $result['datetym']); ?></td>
                <td><?php echo($result['received_fodder']) ?></td>
                <td><?php echo($result['issued_fodder']) ?></td>
                 <td><?php echo($result['bal_fodder']) ?></td>
                  <td><?php echo($result['received_concentrate']) ?></td>
                  <td><?php echo($result['issued_concentrate']) ?></td>
                  <td><?php echo($result['bal_concentrate']) ?></td>
                
                
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