<?php
include 'header.php';
include 'config.php';



?>
 
  <div class="container theme-showcase" role="main">
 <div class="jumbotron">
        <h1>Howdy <?php echo"" . $_SESSION['customer_uname'] .  "" ;?> !</h1>
        <p align="justify">Selamat datang di dashboard akun customer anda.selamat menikmati berbelanja di dompetshop.com marketplace #1 di indonesia yang menyediakan berbagai macam dompet untuk pria maupun wanita so happy shopping :D</p>
      </div>




<?php
/*
isset() is used to check wheather arctile id is received through url from "index.php" file and if it is set corresponding arctile is displayted using SELECT statement.
*/



if(!isset($_SESSION['customer_uname'])){
    //Then redirect them to the login page
    header( 'Location: login.php' );
}
echo "<table align='center' class='table table-bordered'>";
echo " <tr class='success'>";

echo "<td>Nama Lengkap </td>";
echo" <td>" . $_SESSION['customer_nm'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Username</td>";
echo" <td>" . $_SESSION['customer_uname'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Password</td>";
echo" <td></td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Alamat</td>";
echo" <td>" . $_SESSION['customer_almt'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Provinsi</td>";
echo" <td>" . $_SESSION['customer_prov'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Kode Pos</td>";
echo" <td>" . $_SESSION['customer_kdpos'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Telphon</td>";
echo" <td>" . $_SESSION['customer_telp'] .  "</td><br />" ;
echo " </tr>";

echo "</table>";
?>
</div>
<?php include "footer.php";?>