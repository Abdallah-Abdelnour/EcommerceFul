<!-- this code is header navigation bar in website -->
<!-- <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">-->
        <!--To add menu option when screen width is reduced-->
        <!-- <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right"> -->
                <!--If user is logged in, then header will contain these-->
                <!-- <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Order History</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div> --> 


<section id="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <!-- <li><a class="active" href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li> -->

                <!--If user is logged in, then header will contain these-->
                <?php
                if (isset($_SESSION['email'])) {
                    if($_SESSION['user_role']==="user"){
                    ?>
                    <!--  -->
                    <?php if(($_GET['url']==="index.php")||($_GET['url']==="products.php")){ ?>
                        <li><a class="active" href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Order History</a></li>
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php }elseif ($_GET['url']==="cart.php") {?>
                        <li><a href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a class="active" href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Order History</a></li>
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php }elseif ($_GET['url']==="settings.php") {?>
                        <li><a href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a class="active" href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Order History</a></li>
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php }elseif ($_GET['url']==="orderhistory.php") {?>
                        <li><a href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a class="active" href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Order History</a></li>
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php }elseif ($_GET['url']==="logout_script.php") {?>
                        <li><a href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Order History</a></li>
                        <li><a class="active" href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php }?>

                    <!--  -->

                    
                    
                    <?php
                    }elseif ($_SESSION['user_role']==="admin") {
                    ?>
                    <!--  -->                        
                    <?php if ($_GET['url']==="settings.php") {?>
                        <li><a href="productsAdmin.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Products </a></li>
                        <li><a class="active" href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>    
                    <?php }elseif ($_GET['url']==="logout_script.php") {?>
                        <li><a href="productsAdmin.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Products </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a class="active" href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>    
                    <?php }else{?>
                        <li><a class="active" href="productsAdmin.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Products </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php }?>
                    <!--  -->
                    
                    
                    
                    
                    <?php
                    }
                    ?>

                    <?php
                } else {
                    // echo $_GET['url'];
                    ?>
                    <?php if(($_GET['url']==="index.php")||($_GET['url']==="products.php")){ ?>
                        <li><a class="active" href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                    <?php }elseif ($_GET['url']==="signup.php") {?>
                        <li><a href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a class="active" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                    <?php }elseif ($_GET['url']==="login.php") {?>
                        <li><a href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a class="active" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                    <?php }elseif ($_GET['url']==="aboutus.php") {?>
                        <li><a href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a class="active" href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                    <?php }elseif ($_GET['url']==="contact.php") {?>
                        <li><a href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                        <li><a class="active" href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                    <?php }?>

                    
                    


                    <!-- <li><a class="active" href="index.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Home</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li> -->
                        <?php
                    }
                    ?>

                <li id="lg-bag"><a href="#"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i> 
        </div>
    </section>
