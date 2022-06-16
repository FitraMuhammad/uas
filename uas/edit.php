<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_bk'];
$judul = $_GET['judul_bk'];
$penerbit = $_GET['terbit_bk'];
$genre = $_GET['genre_bk'];
$harga = $_GET['harga_bk'];

//query update
$query = "UPDATE buku SET judul='$judul' , penerbit='$penerbit' , genre='$genre' , harga='$harga' WHERE id='$id' ";

if (mysqli_query($conn, $query)) {
 # credirect ke page index
 header("location:index.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>