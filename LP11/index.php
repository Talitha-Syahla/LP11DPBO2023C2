<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/Pasien.class.php");
include_once("model/TabelPasien.class.php");
include_once("view/TampilPasien.php");


$tp = new TampilPasien();
if (!empty($_GET['id_delete'])) {
    $id = $_GET['id_delete'];
    $tp->deletePasien($id);
}
else {
    $data = $tp->tampil();
}