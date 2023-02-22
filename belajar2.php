<?php
//Membuat variable
$nama_depan = "Wesley";
$namaDepan = "Wesley";
$namaBelakang = "Maximilliano";
$umur = 17;
$ipk = 3.91; //float/double
$hadir = false;//boolean
$sallary = null;

//echo "Nama Lengkap  : ",$nama_depan," ",$namaBelakang;
//echo "Nama Lengkap : $namaDepan $namaBelakang";
echo "Nama Lengkap : ${namaDepan} ${namaBelakang}";
echo "<br>";
echo "Umur : $umur Tahun";
$umur = 21;
echo "<br/>";
echo "Umur Sekarang : $umur Tahun";
unset($umur); //menghapus variable dinamis

//static variable
define("TEMPATLAHIR","Palembang");
echo "<br/>";
echo "Tempat Lahir : ".TEMPATLAHIR;

//Variable Global
/*
1.Session => $_SESSION['nama']
2.Cookie => $_COOKIE['namacookie']
3.Post => $_POST['npm']
4.Get => $_GET['npm']
5.Server => $_SERVER[]
*/

?>