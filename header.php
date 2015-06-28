<html lang="en">

<head>
<?php
session_start();
    include 'config.php';
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dompet</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
</html>

   <body>

    <!-- Navigation -->
   <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a  href="index.php" class="navbar-brand">DOMPETSHOP</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="contact.php">Kontak</a></li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cara Order
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="alur_order.php">Alur Order</a></li>
                        <li><a href="create_user.php">Daftar Customer</a></li>
                    </ul>
                    <li><a href="blog.php">Blog</a></li>
                 </li>              
             </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?php  
                                if (isset($_SESSION['customer_uname'])) $status = $_SESSION['customer_uname']; 
                                else $status = "Login First"; 
                                echo $status;  
                                ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                           
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php  
                                if (isset($_SESSION['customer_uname'])) $status = $_SESSION['customer_nm']; 
                                else $status = "Helo guys :D silahkan login untuk shoping"; 
                                echo $status;  
                                ?></strong></p>
                                        <p class="text-left small">dompetoriginal@email.com</p>
                                        <p class="text-left">
                                        <?php  
                                if (isset($_SESSION['customer_uname'])) $status = "<a href='user.php' class='btn btn-primary btn-block btn-sm'>Dashboard</a>"; 
                                else $status = "<a href='login.php' class='btn btn-primary btn-block btn-sm'>Login</a>"; ; 
                                echo $status;  
                                ?>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <?php  
                                if (isset($_SESSION['customer_uname'])) $status = "<a href='logout.php' class='btn btn-primary btn-block btn-sm'>Logout</a>"; 
                                else $status = "" ; 
                                echo $status;  
                                ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>