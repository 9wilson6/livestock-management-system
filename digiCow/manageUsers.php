<?php 
$tittle="USERS RECORD";
require_once("adminheaderlinks.php");
 require_once("registerScript.php");
 require_once("dbconfig.php");
 $query="SELECT * FROM farmer";
 $results=mysqli_query($conn, $query)or die(mysqli_error($conn));

 ?>

<body>
<div class="pagecontainer">
	<div class="container">
	<div class="container__buttons bg-transparent mt-5">
		<a href="adminHome.php" class="btn btn-info container__navbuttons ">Add Farmer</a>
		<a href="manageUsers.php" class="btn btn-info container__navbuttons ">Manage Farmers</a>
     <a href="logout.php?user=admin" class="btn btn-lg btn-danger btn-sm float-right"> Logout</a>
<!-- 		<button class="btn btn-light container__navbuttons ">.....</button>
		<button class="btn btn-light container__navbuttons ">.....</button> -->
	</div>
		<div class="row">
			<div class="col-md-1 col-lg-2"></div>
			<div class="col-md-10 col-lg-8 form__container" id="table">
				<div class="form__group" >
				<div class="heading--primary">Manage farmer records</div>
				</div>
				 <table class="table table-light">
    <thead class="thead-light">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
        
        
      </tr>
    </thead>
    <tbody>
       <?php 
       $table="users";
       foreach ($results as $result) {?>
           <tr>
 
               <td><?php echo($result['id']) ?></td>
               <td><?php echo  $result['username']; ?></td>
               <td><?php echo($result['email']) ?></td>

               <td><a href="editFarmer.php?count=<?php echo $result['id']?>" class="btn btn-sm btn-info">Edit</a>
               <a href="delete.php?table=<?php echo $table ?>&count= <?php echo $result['id']?>" class="btn btn-sm btn-danger">Delete</a></td>
           </tr>
      <?php }
        ?>
        
        </table>
        <div class="my-5"></div>
			</div>
			<div class="col-md-1 col-lg-2"> <button class=" btn  btn-info printbutton" onclick="printContent('table')">Print Records</button></div>
		</div>
</div>
</div>
</body>
<?php require_once("scripts.php") ?>
</html>