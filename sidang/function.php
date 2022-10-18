<?php


//Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","sidang");


//Menambah pegawai baru
if(isset($_POST['addnewmahasiswa'])){
    $nim = $_POST['NIM'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $absen = $_POST['absen'];
    $tugas = $_POST['tugas'];

    $addtotable = mysqli_query($conn,"insert into mahasiswa (NIM, nama, uts, uas, absen, tugas) values('$nim', '$nama', '$uts', '$uas', '$absen', '$tugas')");
    if($addtotable){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//Update info mahasiswa
if(isset($_POST['updatemahasiswa'])){
    $idn = $_POST['idn'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas']; 
    $absen = $_POST['absen'];
    $tugas = $_POST['tugas'];

    $update = mysqli_query($conn,"update mahasiswa set NIM='$nim', nama='$nama', uts='$uts', uas='$uas', absen='$absen', tugas='$tugas' where idnim ='$idn'");
    if($update){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}


//Menghapus barang dari stok
if(isset($_POST['hapus'])){
    $idn = $_POST['idn'];

    $delete = mysqli_query($conn,"DELETE FROM mahasiswa where idnim ='$idn'");
    if($delete){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

?>