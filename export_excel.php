<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Stok.xls");
	?>
 
<h1>Export Data Ke Excel</h1><h1>JAYA ELEKTRONIK</h1>
		

	
 <table border="0"><tr><td></td></tr></table>
<table><tr> <td></td><td></td><td></td>
   <th align=right>Tanggal diekspor</th></tr><tr><td></td><td></td><td></td><th align=right><?php $t=time(); echo(date("d-m-Y",$t))?></th></tr></table>
<table border="0"><tr><td></td></tr></table>
<table border="1">
 <?php
include 'config.php';
?>
<tr>
  <th>No</th>
   <th>Nama Barang</th>
  
   <th>Stock</th>
   <th>Deskripsi</th>

  </tr>

  
 <tr>  <?php
  $sql2=mysqli_query($conn,"select *from stok");
  $nomor = 1;
  while ($d = mysqli_fetch_array($sql2)){
      ?>
 <td ><?php echo $nomor++; ?></td>
    <td><?php echo $d['namabarang'] ?></td>
	
    <td><?php echo $d['stok'] ?></td>
	<td><?php echo $d['deskripsi'] ?></td>	

</tr>
<?php
  }
?>
	

 </table>
 <table border="0"><tr><td></td></tr></table>
 <table border="0"><tr><td></td></tr></table>
 <table border="0"><tr><td></td><td></td><td></td><td align=center>Tanda Tangan</td></tr></table>
 <table border="0"><tr><td></td></tr></table>
 <table border="0"><tr><td></td></tr></table>
 <table border="0"><tr><td></td><td></td><td></td><td align=center>______</td></tr></table>
 <table border="0"><tr><td></td><td></td><td></td><td align=center>Pemilik</td></tr></table>
</body>
</html>