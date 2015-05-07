<?php
session_start();
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='admin')
{
header("Location:login.php?id=You are not authorised to access this page unless you are customer of this website");
}
}
else
{
header("Location:login.php?id=You are not authorised to access this page unless you are customer of this website");
}

include "header.php"; 
include "cart2.php"; 
    ?>
            
                <div class="RightContent">
                    <h1 class="Judul">Shopping Cart</h1>
                    <div class="KetProd">
                        <table class="TableCart" width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 1px dotted #0; border-bottom: 1px dotted #0;">
                            <tr><th>No</th>
                                <th>Foto Produk</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Delete</th>
                            </th>
                        <?php
                            $sid = session_id();
                            $no = 1;
                            $sql = mysql_query("SELECT * FROM cart, barang WHERE id_session='$sid' AND cart.kd_produk=barang.kd_produk");
                            $hitung = mysql_num_rows($sql);
                            if ($hitung < 1){
                                echo"<script>window.alert('Cart is Empty....');
                                        window.location=('index.php')</script>";
                                }
                            else {
                                while($tian=mysql_fetch_array($sql)){
                                    echo"<tr><td>$no</td>
                                        <td><img width=50 src=../../produk/$[file_gambar]></td>
                                        <td>$tian[nm_produk]</td>
                                        <td>$tian[qty]</td>
                                        <td>$tian[hrg_jual]</td>
                                        <td><a href=input.php?input=delete&id=$tian[id_cart]>Hapus</a></td></tr>";
                            $no++;
                                }
                            }
                        ?>
                        </table>

                        <a class="tombol" href="index.php">Belanja Lagi..</a>
                        <a class="tombol" href="order.php">Selesai</a>
                        
                    </div>

                </div>

<?php include "footer.php"; ?>