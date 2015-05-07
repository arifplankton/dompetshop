<?php

include'header.php';
session_start();
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='admin')
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
}
else
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}

    #======================================== value inputan ======================================
    
    if(isset($_GET['thn'])) $thn=trim(mysql_escape_string($_GET['thn'])); else $thn=date('Y');
    #====================================== filter report ========================================
    echo"<form name='report' method='get' action=''>";
    #thn
    echo"THN <select name='thn'>";
    for($b=2012;$b<=date('Y');$b++) #temen2 bs menentukan sendiri thn mulai nya
    {
        $selected=($thn==$b)?"selected":"";
        echo"<option $selected>$b</option>";
    }
    echo"</select> ";
    #tombol submit
    echo"<input type='submit' name='tampil' value='Tampilkan'>";
    echo"</form><br>";
    #===================================== tampilan report ========================================
    #walaupun blm menekan tombol submit, kita sdh punya value default, jd bs langsung query report
    #tampilan report akan menampilkan laporan jml penjualan sales dalam harian utk semua produk
    #karena ini report harian, maka kita harus tau dulu jumlah tanggal dalam 1 bulan dan tahun yg terpilih
    
    #array utk menyimpan total harian semua sales
    $arrJml=array();
    #tabel report
    echo"<table cellpadding='4' cellspacing='0' border='1'><tr><td>PRODUK/BULAN</td>";
    for($c=1;$c<=12;$c++)
    {
        #loop utk menampilkan tgl harian        
        if(strlen($c)==1) $a_new="0$c"; else $a_new=$c;
        echo"<td>$a_new</td>";
        #isi arrayJml denga nilai awal 0
        array_push($arrJml,0);
    }
    echo"<td>TOTAL</td></tr>";
    #query sales 
    $querySales=mysql_query("select * from produk order by produk");
    while($hslQuerySales=  mysql_fetch_array($querySales))
    {
        echo"<tr><td>".strtoupper($hslQuerySales['produk'])."</td>";
        #query harian perolehan per sales
        $total_per_sales=0;
        for($c=1;$c<=12;$c++)
        {
            #loop utk menampilkan tgl harian
            if(strlen($c)==1) $a_new="0$c"; else $a_new=$c;
            $index=$c-1;
            $query="select sum(total_pendapatan) as total_pendapatan from laporan_pendapatan where year(tgl)=$thn and 
            month(tgl)='$a_new' and id_produk=".$hslQuerySales['id_produk']."";
            //echo $query."<br>";
            $queryJml=  mysql_query($query);
            $hslQueryJml=  mysql_fetch_array($queryJml);
            if($hslQueryJml['total_pendapatan']!='')  $jml=$hslQueryJml['total_pendapatan']; else $jml=0;
            echo"<td>$jml</td>";
            $total_per_sales+=$jml;
            #tambahkan jml harian ke arrJml
            $arrJml[$index]+=$jml;
        }
        echo"<td>$total_per_sales</td></tr>";
    }
    #total penjulan harian
    echo"<tr><td>TOTAL</td>";
    for($d=1;$d<=12;$d++)
    {
        $index=$d-1;
        echo"<td>$arrJml[$index]</td>";
    }
    $total_semua=array_sum($arrJml);
    echo"<td>$total_semua</td></tr>";
    echo"</table>";

?>
