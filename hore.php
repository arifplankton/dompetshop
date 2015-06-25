<?php

include "userheader.php";
// Let's also make sure the user is logged in at all
// If the PHP $_SESSION[] array is not (!) set
if(!isset($_SESSION['kd_costumer'])){
    //Then redirect them to the login page
    header( 'Location: index.php' );
}

echo "<td><h2> " . $_SESSION['nm_costumer'] .  "</h2></td><br />" ;

echo "<table align='center' border='1'>";
echo " <tr>";
echo "<td>Username</td>";
echo" <td>" . $_SESSION['username'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Password</td>";
echo" <td>" . $_SESSION['password'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Alamat</td>";
echo" <td>" . $_SESSION['alamat'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Provinsi</td>";
echo" <td>" . $_SESSION['provinsi'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>Kodep Pos</td>";
echo" <td>" . $_SESSION['kd_pos'] .  "</td><br />" ;
echo " </tr>";

echo " <tr>";
echo "<td>No Telpon</td>";
echo" <td>" . $_SESSION['no_tlp'] .  "</td><br />" ;
echo " </tr>";

?>
 