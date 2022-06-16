<!DOCTYPE html>
<html lang="en">
<head>
 <title>Toko Buku</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 
//koneksi database
include('dbconnect.php');
//query
$query = "SELECT * FROM buku WHERE id='$id'";
$result = mysqli_query($conn, $query);
?>

<div class="container bg-info mt-5" style="padding-top: 20px; padding-bottom: 20px;">
 <h3>Update Data Buku</h3>
 <form role="form" action="edit.php" method="get">
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
 ?>

 <input type="hidden" name="id_bk" value="<?php echo $row['id']; ?>">

 <div class="form-group">
  <label>Judul Buku</label>
  <input type="text" name="judul_bk" class="form-control" value="<?php echo $row['judul']; ?>">   
 </div>

 <div class="form-group">
  <label>Penerbit Buku</label>
  <input type="text" name="terbit_bk" class="form-control" value="<?php echo $row['penerbit']; ?>">   
 </div>

 <div class="form-group">
  <label>Genre Buku</label>
  <input type="text" name="genre_bk" class="form-control" value="<?php echo $row['genre']; ?>">   
 </div>

 <div class="form-group">
  <label>Harga Buku</label>
  <input type="text" name="harga_bk" class="form-control" value="<?php echo $row['harga']; ?>">   
 </div>
 <button type="submit" class="btn btn-success btn-block mt-2">Update Buku</button>

 <?php 
 }
 mysqli_close($conn);
 ?>    
 </form>
</div>
</body>
</html>