<?php
require_once('mahasiswa.class.php');
$mahasiswaObj = new mahasiswa();

//Deleting mahasiswas by their mahasiswa id
$flag = $_REQUEST['flag'];
$nama = $_REQUEST['nama'];
$nim = $_REQUEST['nim'];


if($flag == 'delete' && !empty($nim)) {
 $mahasiswaObj->deleteMahasiswa($nim);

 header("Location:../index.php?mod=mahasiswa&pg=mahasiswa_view");
 exit();
}

//Create mahasiswa
if($_POST['Submit']) {
 if($_POST['flag'] == 'edit') {
  //Update mahasiswa
 // echo " ini di update  eksekusi ";
 $mahasiswaObj->updateMahasiswa($nim);
 //exit();
 }
 else {
  //Create mahasiswa
 // echo " ini di ydate ";
 // exit();
  $mahasiswaObj->createMahasiswa();
 }
 header("Location:../index.php?mod=mahasiswa&pg=mahasiswa_view");
 exit();
}



?>
