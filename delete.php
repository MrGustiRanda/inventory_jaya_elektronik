<?php

include_once('config.php');
$idb = $_GET['idbarang'];
$query = "DELETE from masuk m,  stok s where  s.idbarang = m.idbarang");
mysqli_query($conn, $query);
header('location:index.php');

?>
