<?php
    require_once("config.php");
    if (!isset($_SESSION)) {
        session_start();
    }
     
    if (isset($_GET['act']) && isset($_GET['ref'])) {
        $act = $_GET['act'];
        $ref = $_GET['ref'];
             
        if ($act == "add") {
            if (isset($_GET['kd_barang'])) {
                $kd_barang = $_GET['kd_barang'];
                if (isset($_SESSION['items'][$kd_barang])) {
                    $_SESSION['items'][$kd_barang] += 1;
                } else {
                    $_SESSION['items'][$kd_barang] = 1; 
                }
            }
        } elseif ($act == "plus") {
            if (isset($_GET['kd_barang'])) {
                $kd_barang = $_GET['kd_barang'];
                if (isset($_SESSION['items'][$kd_barang])) {
                    $_SESSION['items'][$kd_barang] += 1;
                }
            }
        } elseif ($act == "min") {
            if (isset($_GET['kd_barang'])) {
                $kd_barang = $_GET['kd_barang'];
                if (isset($_SESSION['items'][$kd_barang])) {
                    $_SESSION['items'][$kd_barang] -= 1;
                }
            }
        } elseif ($act == "del") {
            if (isset($_GET['kd_barang'])) {
                $kd_barang = $_GET['kd_barang'];
                if (isset($_SESSION['items'][$kd_barang])) {
                    unset($_SESSION['items'][$kd_barang]);
                }
            }
        } elseif ($act == "clear") {
            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
        } 
         
        header ("location:" . $ref);
    }   
     
?>