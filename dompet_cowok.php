<?php 
include 'config.php';
include 'header.php';
?>

    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Dompet</p>
                <div class="list-group">
                    <a href="dompet_cowok.php" class="list-group-item">Dompet cowok</a>
                    <a href="dompet_cewek.php" class="list-group-item">Dompet Cewek</a>
                    </div>
            </div>


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="image/Bg11.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/Bg3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/Bg3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <?php
                     require_once('config.php');    
                            $query="SELECT * from produk WHERE kategori_id='dompet cowok' order by tgl_input desc";
                            $result=mysql_query($query) or die(mysql_error());
                            $no=1;
                            //proses menampilkan data
                            while($rows=mysql_fetch_array($result)){
                                
                            ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="admin/<?php echo $rows['gambar'];?>" width="20px" height="250px" />
                            <div class="caption">
                                <h4 class="pull-right">Rp.<?php echo $rows['hrg_jual'];?>,-</h4>
                                <h4><a href="detail_produk.php?id=<?php echo $rows['produk_id'];?>"><?php echo $rows['produk_nm'];?></a></h4>
                                Detail Produk:<?php echo $rows['produk_deskripsi'];?>                            
                                </div>
                            <div class="ratings">
                                

                                    <a href="input.php?input=add&id=<?php echo $rows['kd_produk']; ?>" style="text-decoration:none; 
                                    color:white;" ><input type="button" class = "btn btn-mini btn-block btn-primary" value="Pesan"/></a>
 

                                                           
                        </div>
                        </div>
                    </div>

                     <?php
                    $no++;
                    }?>
    
                        </div>
                    </div>

                   

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    
        </body>
<?php 
include 'footer.php';
?>