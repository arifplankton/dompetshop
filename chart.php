<?php



include "header.php"; 
 
    ?>
            <div class="container theme-showcase" role="main">
                    <h1 class="Judul">Shopping Cart</h1>
                    <?php include "cart2.php";?>
                        <table class="table table-striped">
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
                            $sql = mysql_query("SELECT * FROM pesan, produk WHERE id_session = '$sid' AND pesan.produk_id=produk.produk_id");
                            $hitung = mysql_num_rows($sql);
                            if ($hitung < 1){
                                echo"<script>window.alert('Cart is Empty....');
                                       window.location=('index.php')</script>";
                                }
                            else {
                                while($tian=mysql_fetch_array($sql)){

                                    $tampung = $tian['hrg_jual'] * $tian['pesan_jml'];
                                    $totalbayar[] = $tian['hrg_jual'] * $tian['pesan_jml'];
                                    echo"<tr><td>$no</td> 
                                        <td><img width='50' src='admin/$tian[gambar]' /></td>
                                        <td>$tian[produk_nm]</td>
                                        <td>$tian[pesan_jml]</td>
                                        <td>$tampung</td>
                                        <td><a href=input.php?input=delete&id=$tian[pesan_id]>Hapus</a></td></tr>";                                        
                            $no++;
                                }         
                                
                            }
                        ?>
                        <td colspan="6" align="right"><?php echo array_sum($totalbayar); ?></td>
                        </table>
                        <form method="POST" action="create_Send.php">
                        <input type="hidden" name="subtotal" value="<?php echo array_sum($totalbayar); ?>"/>
                        <input type="submit" value="Selesai"/>

                        </form>
                        <a class="tombol" href="index.php">Belanja Lagi..</a>
                        <a class="tombol" href="create_Send.php">Selesai</a>
                        
                    </div>

                </div>

<?php include "footer.php"; ?>