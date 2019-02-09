<nav class="navbar sticky-top navbar-expand-lg  navbar-light" id="Navbar">

<div class="container-fluid">

    <!--Brand-->
    <span class="navbar-brand">
        <img src="assets/cow (1).png">
    </span>

    <!-- Toggler/collapsibe Button -->

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        <!-- 
        <span class="sr-only">Toggle button</span> -->
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="menu">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="link" href="dashboard.php">HOME</a></li>
            <li class="nav-item"><a class="link" href="records.php">RECORDS</a></li>
            <!-- <li class="nav-item"><a class="link" href="#">INVENTORY</a></li>
            <li class="nav-item"><a class="link" href="#">FORUMS</a></li>
            <li class="nav-item"><a class="link" href="#">REPORTS</a></li> -->
         
               
           <li class="nav-item">
                <span class=" text-light bg-primary p-2 usernamecontainer">
                   <?php

            session_start();
            if (isset($_SESSION['username'])) {
                $name=explode(" ", $_SESSION['username']);
               echo "WELCOME: ". strtoupper($name[0]);?>
                    
           <?php }else{
                header("LOCATION:register.php");
            }
              ?>
            
           </span>

           </li >
           <li class="nav-item ml-3"><a href="logout.php" class="btn btn-sm btn-danger">Log Out</a></li>
        </ul>

    </div>

</div>

</nav>
