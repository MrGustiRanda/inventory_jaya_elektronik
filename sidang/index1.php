<?php
require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kompre</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php"></a>
            
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Data Karyawan </h1>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                            <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Tambah 
  </button>
  <button onclick="location.href='export.php'" type="button" class="btn btn-primary" data-toggle="modal" >Export
  </button>
  <BR></BR>
</body>
</html>
                           

                            
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Golongan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan Keluarga</th>
                                            <th>Pinjaman</th>
                                            <th>Gaji Bersih</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        

                                        $ambilsemuadatakaryawan = mysqli_query($conn, "select * from karyawan");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambilsemuadatakaryawan)){
                                            $nik = $data['NIK'];
                                            $nama = $data['nama'];
                                            $golongan = $data['golongan'];
                                            $gaji_pokok = $data['gaji_pokok'];
                                            $pinjaman = $data['pinjaman'];
                                            $idn = $data['idnik']
                                        ?>
                                       

                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$nik;?></td>
                                            <td><?=$nama;?></td>
                                            <td><?=$golongan;?></td>
                                            <td><?=$gaji_pokok;?></td>
                                            <td><?=$tunjangan_keluarga;?></td>
                                            <td><?=$pinjaman?></td>
                                            <td><?=$gaji_bersih?></td>
                                            <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idn;?>">
                                                Edit
                                            </button>
                                            <input type="hidden" name="idbarangygmaudihapus" value="<?=$idn;?>">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idn;?>">
                                                Delete
                                            </button>
                                            </td>
                                        </tr>

                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="edit<?=$idn;?>">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Edit Barang</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <form method="post">
                                                <div class="modal-body">
                                                <input type="text" name="nik" value="<?=$nik;?>" class="form-control" require>
                                                <br>
                                                <input type="text" name="nama" value="<?=$nama;?>" class="form-control" require>
                                                <br>
                                                <input type="text" name="golongan" value="<?=$golongan;?>" class="form-control" require>
                                                <br>
                                                <input type="text" name="gaji_pokok" value="<?=$gaji_pokok;?>" class="form-control" require>
                                                <br>
                                                <input type="text" name="pinjaman" value="<?=$pinjaman?>" class="form-control" require>
                                                <br>
                                                <input type="hidden" name="idn" value="<?=$idn;?>">
                                                <button type="submit" class="btn btn-primary" name="update">Submit</button>
                                                </div>
                                                </form>
                                                
                                            </div>
                                            </div>
                                        </div>
            
                                        
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="delete<?=$idn;?>">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Hapus barang</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <form method="post">    
                                                <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus <?=$nama;?>
                                                <input type="hidden" name="idn" value="<?=$idn;?>">
                                                <br>
                                                <br>
                                              <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                                           
                                                </div>
                                                </form>
                                                
                                            </div>
                                            </div>
                                        </div>
                                        <?php
                                        };

                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
                                            <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Tambah </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <form name="myForm" action="index.php" onsubmit="return validateForm()"  method="post" required>
                                                <div class="modal-body">
                                                <input type="number" name="NIK" class="form-control" placeholder="NIK" require>
                                                <br>
                                                <input type="text" name="nama"  class="form-control"  placeholder="Masukan Nama" require>
                                                <br>
                                                <input type="text" name="golongan"  class="form-control" Placeholder="Masukan Golongan"require>
                                                <br>
                                                <input type="number" name="gaji_pokok" class="form-control" placeholder="Gaji Pokok" require> 
                                                <br>
                                                <input type="number" name="pinjaman" class="form-control" placeholder="Pinjaman" require>
                                                <br>
                                                
                                                <button type="submit" class="btn btn-primary" name="addnew">Submit</button>
                                                </div>
                                                </form>
                                                

<script>
function validateForm() {
    var x = document.forms["myForm"]["nama"].value;
if (x == "" || x == null) {alert("Isilah dengan lengkap"); 
return false;}}</script>

                                            </div>
                                            </div>
                                        </div>
</html>
