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
    if(isset($_GET['bln'])) $bln=trim(mysql_escape_string($_GET['bln'])); else $bln=date('m');
    if(isset($_GET['thn'])) $thn=trim(mysql_escape_string($_GET['thn'])); else $thn=date('Y');
    #====================================== filter report ========================================
    echo"<form name='report' method='get' action=''>";
    #opsi bln
    echo"BLN <select name='bln'>";
    for($a=1;$a<=12;$a++)
    {
        if(strlen($a)==1) $a_new="0$a"; else $a_new=$a;
        $selected=($bln==$a_new)?"selected":"";
        echo"<option $selected>$a_new</option>";
    }
    echo"</select> ";
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
    $jml_hari=  cal_days_in_month(CAL_GREGORIAN, $bln, $thn);
    #array utk menyimpan total harian semua sales
    $arrJml=array();
    #tabel report
    echo"<table cellpadding='4' cellspacing='0' border='1'><tr><td>SALES/TGL</td>";
    for($c=1;$c<=$jml_hari;$c++)
    {
        #loop utk menampilkan tgl harian        
        if(strlen($c)==1) $c_new="0$c"; else $c_new=$c;
        echo"<td>$c_new</td>";
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
        for($c=1;$c<=$jml_hari;$c++)
        {
            #loop utk menampilkan tgl harian
            if(strlen($c)==1) $c_new="0$c"; else $c_new=$c;
            $index=$c-1;
            $query="select sum(jml) as jml from faktur_penjualan where year(tgl_penjualan)=$thn and 
            month(tgl_penjualan)='$bln' and day(tgl_penjualan)='$c_new' and id_produk=".$hslQuerySales['id_produk']."";
            //echo $query."<br>";
            $queryJml=  mysql_query($query);
            $hslQueryJml=  mysql_fetch_array($queryJml);
            if($hslQueryJml['jml']!='')  $jml=$hslQueryJml['jml']; else $jml=0;
            echo"<td>$jml</td>";
            $total_per_sales+=$jml;
            #tambahkan jml harian ke arrJml
            $arrJml[$index]+=$jml;
        }
        echo"<td>$total_per_sales</td></tr>";
    }
    #total penjulan harian
    echo"<tr><td>TOTAL</td>";
    for($d=1;$d<=$jml_hari;$d++)
    {
        $index=$d-1;
        echo"<td>$arrJml[$index]</td>";
    }
    $total_semua=array_sum($arrJml);
    echo"<td>$total_semua</td></tr>";
    echo"</table>";

?>
