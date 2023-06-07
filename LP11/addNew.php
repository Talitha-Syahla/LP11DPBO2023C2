<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/Pasien.class.php");
include_once("model/TabelPasien.class.php");
include_once("view/TampilPasien.php");
include_once("view/AddPasien.php");


$tp = new AddPasien();

if (isset($_POST['add'])) { // Add New
    $tp->AddPasien($_POST);
} 
else if (isset($_GET['id_update'])) { // Menampilkan form yang sudah di update
    $id = $_GET['id_update'];
    $tp->Updateform($id);
} 
else if (isset($_POST['update'])) { // Update
    $tp->update($_POST);
} 
else {
    $data = $tp->tampil();
}