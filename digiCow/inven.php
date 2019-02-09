<?php 

$heading="REPORT";
require_once "csslinks.php";
 require_once "homeheader.php"; ?>
<body>

    <section class="section-form">

            <div class="form" id="form">
               
                
                <div class="heading--primary">Report</div>
                <div class="form__records">
                <div class="container mx-auto">
                      <table class="table table-light">
    <thead class="thead-light">
      <tr>
        <th>Tag No</th>
        <th>Date Created</th>
        <th>Description</th>
        <th>Milk (ltrs)</th>
        <th>feed (kgs)</th>
        <th>Total Milk Cost (Ksh)</th>
        <th>Total Feed Cost (Ksh)</th>
        <th>Profit (Ksh)</th>
        
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
       $total_milk=0;
       $total_feed=0;
       foreach ($results as $result) {?>
           <tr>
            <?php $count=$result['rec_no'] ?>
               <td><?php echo($result['Tag_no']) ?></td>
               <td><?php echo date('d/m/Y  H:i:s a', $result['datetym']); ?></td>
               <td><?php echo($result['invetory__desc']) ?></td>
               <td><?php echo($result['milk']); $total_milk +=$result['milk'] ?></td>
               <td><?php echo ($result['feed_quantity']); $total_feed +=$result['feed_quantity'] ?></td>
                <td><?php echo($result['total_milk_cost']); $total_milkCost +=$result['total_milk_cost'] ?></td>
                 <td><?php echo($result['total_feed_cost']); $total_feedCost +=$result['total_feed_cost']?></td>
                  <td><?php echo($result['total_profit']); $profit +=$result['total_profit'] ?></td>
           </tr>
      <?php }
        ?>
        <tr>
          <td colspan=3 class="text-center text-uppercase text-info form__sammary">Totals:</td>
          <td class="text-danger form__sammary"><?php echo $total_milk?></td>
          <td class="text-danger form__sammary"><?php echo $total_feed ?></td>
          <td class="text-danger form__sammary"><?php echo $total_milkCost?></td>
          <td class="text-danger form__sammary"><?php echo $total_feedCost?></td>
          
          <td class="text-danger form__sammary"><?php echo $profit ?></td>
          
        </tr>
        </table>

        </div>
        </div>

        </div>
        <button class=" btn  btn-info printbutton" onclick="printContent('form')">Print Records</button>
    </section>
    <?php require_once "scripts.php" ?>