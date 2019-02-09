<?php 

$heading="Invetory Records";
require_once "csslinks.php";
 require_once "homeheader.php"; ?>
<body>

    <section class="section-form">

            <div class="form" id="form">
               
                
                <div class="heading--primary">inventory sammary</div>
                <div class="form__records">
                <div class="container mx-auto">
                      <table class="table table-light">
    <thead class="thead-light">
      <tr>
        <th>Tag No</th>
        <th>Date Created</th>
        <th>Description</th>
        <th>Total Milk Cost</th>
        <th>Total Feed Cost</th>
        <th>Profit</th>
        
        
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php 
       require_once "dbconfig.php";
       $query="SELECT * FROM invetory";
       $results=mysqli_query($conn, $query);
       $profit=0;
       $total_feedCost=0;
       $total_milkCost=0;
       $table="invetory";
       foreach ($results as $result) {?>
           <tr>
           	<?php $count=$result['rec_no'] ?>
               <td><?php echo($result['Tag_no']) ?></td>
               <td><?php echo date('d/m/Y  H:i:s a', $result['datetym']); ?></td>
               <td><?php echo($result['invetory__desc']) ?></td>
                <td><?php echo($result['total_milk_cost']); $total_milkCost +=$result['total_milk_cost'] ?></td>
                 <td><?php echo($result['total_feed_cost']); $total_feedCost +=$result['total_feed_cost']?></td>
                  <td><?php echo($result['total_profit']); $profit +=$result['total_profit'] ?></td>
                
                	
                 <td><a href="delete.php?table=<?php echo $table ?>&count= <?php echo$result['rec_no']?>" class="btn btn-sm btn-danger">delete</a></td>
           </tr>
      <?php }
        ?>
        <tr>
        	<td colspan=3 class="text-center text-uppercase text-info form__sammary">Totals:</td>
        	<td class="text-danger form__sammary"><?php echo $total_milkCost?></td>
        	<td class="text-danger form__sammary"><?php echo $total_feedCost?></td>
        	
        	<td class="text-danger form__sammary"><?php echo $profit ?></td>
        	<td></td>
        </tr>
        </table>

        </div>
        </div>

        </div>
        <button class=" btn  btn-info printbutton" onclick="printContent('form')">Print Records</button>
    </section>
    <?php require_once "scripts.php" ?>