<?php
$heading="FORUM";
require_once "csslinks.php";
 require_once "homeheader.php" ;
 require_once("dbconfig.php");
 $id=$_SESSION['id'];
 $query="SELECT * FROM messages Order by rec_no desc";
 $results=mysqli_query($conn, $query);
?>
<body>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <section class="section-form" >
    <div class="mycontainer2 bg-light paddinga">
        <div class="height_control mb-5">
        <?php foreach ($results as $result) {?>
    <?php if ($result['sender_id']==$id) { ?>
           <p class="message messages_sender float-left mb-4">
            <span class="sms_id float-left"><?php echo "You" ?></span>
            <?php echo($result['message']) ?>
           <span class="float-right time pt-5"><?php echo date('d/m/Y H:i:s a', $result['datetym']); ?>
           </span>
          </p>
           
         <?php } else{ ?>

           <p class="message messages_receiver float-right mb-4">
            <span class="sms_id float-left"><?php echo "farmer id: ". $result['sender_id']; ?></span>
            <?php echo($result['message']) ?> <span class="float-right time pt-5 pb-0"><?php echo date('d/m/Y H:i:s a', $result['datetym']); ?></span>
          </p>
          
        <?php } ?>
        
       <?php }
        ?>

         
          
        </div> 
        <div class="textbox text-center">
          
          <form action="createPost.php" method="POST">
             <div class="form-group mb-5">
      <div class="form-row">
    <div class="col">
      <textarea class="form-control" name="post" rows="4" required placeholder="create message..."></textarea>
      <input type="hidden" name="sender_id" value="<?php echo $id ?>">
    </div>
  </div>

      <div class="form-row">
    <div class="col">
      <button type="submit" name="submit" class="btn btn-success message_button float-right">send</button>
    </div>
  </div>
</div>
          </form>
        </div>
    </div>
 
 </section>

</body>