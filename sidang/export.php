<?php
require 'function.php';

//import koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data mahasiswa</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Data mahasiswa</h2>
				<div class="data-tables datatable-dark">
					
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                   
                    <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            <th>Absen</th>
                                            <th>Tugas</th>
                                            <th>Nilai Akhir</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        

                                        $ambilsemuadatamahasiswa = mysqli_query($conn, "select * from mahasiswa");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambilsemuadatamahasiswa)){
                                            $nim = $data['NIM'];
                                            $nama = $data['nama'];
                                            $uts = $data['uts'];
                                            $uas = $data['uas'];
                                            $absen = $data['absen'];
                                            $tugas = $data['tugas'];
                                          
                                            $idn = $data['idnim']
                                        ?>
                                        <?php

                                             $nilai_akhir = ($uts+$uas+$absen+$tugas)/4 ;
                                            
                                        ?>

                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$nim;?></td>
                                            <td><?=$nama;?></td>
                                            <td><?=$uts;?></td>
                                            <td><?=$uas;?></td>
                                            <td><?=$absen;?></td>
                                            <td><?=$tugas?></td>
                                            <td><?=$nilai_akhir?></td>
                                            
                                        </tr>

                                       
                                        <?php
                                        };

                                        ?>

                                    </tbody>
                                </table>
                    
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#datatablesSimple').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>


</body>

</html>