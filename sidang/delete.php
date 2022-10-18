<?php

include_once('config.php');
$idn = $_GET['idnim'];
$query = "DELETE from karyawan s where  s.idnim = $idn";
mysqli_query($conn, $query);
header('location:index.php');

?>
