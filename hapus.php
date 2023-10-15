<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM tb_parkir WHERE id_parkir = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>