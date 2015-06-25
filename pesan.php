<?php

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

                            $tampung;

                            $no = 1;
                            $sql = mysql_query("SELECT * FROM pesan, produk WHERE pesan.produk_id=produk.produk_id");
                            $hitung = mysql_num_rows($sql);
                            if ($hitung < 1){
                                echo"<script>window.alert('Cart is Empty....');
                                        window.location=('index.php')</script>";
                                }
                            else {
                                while($tian=mysql_fetch_array($sql)){

                                    $tampung = $tian['hrg_jual'] * $tian['qty'];
                                    $totalbayar[] = $tian['hrg_jual'] * $tian['qty'];
                                    echo"<tr><td>$no</td>
                                        <td><img width='50' src='admin/$tian[gambar]' /></td>
                                        <td>$tian[nm_produk]</td>
                                        <td>$tian[qty]</td>
                                        <td>$tampung</td>
                                        <td><a href=input.php?input=delete&id=$tian[id_cart]>Hapus</a></td></tr>";                                        
                            $no++;
                                }         
                                
                            }
                        ?>
                        <td colspan="6" align="right"><? echo array_sum($totalbayar); ?></td>
                        </table>
                        <form method="POST" action="create_Send.php">
                        <input type="hidden" name="subtotal" value="<? echo array_sum($totalbayar); ?>"/>
                        <input type="hidden" name="nm_costumer" value="<? echo ($nm_costumer); ?>"/>
                        <input type="submit" value="Selesai"/>

                        </form>
                        <a class="tombol" href="index.php">Belanja Lagi..</a>
                        <a class="tombol" href="create_Send.php">Selesai</a>
                        
                    </div>

                </div>

<?php include "footer.php"; ?>