<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>index</title>
</head>
<body>

<?php
include('dbconnect.php');


$query = "SELECT * FROM buku";
$result = mysqli_query($conn, $query);
?>

<div class="container bg-info mt-5" style="padding-top: 20px; padding-bottom: 20px;">
  <h3>Toko Buku</h3>
  <hr>
  <div class="row">
   <div class="col-sm-4">
    <h3>Form Tambah Buku</h3>
    <form role="form" action="insert.php" method="post">
     <div class="form-group">
      <label>Judul Buku</label>
      <input type="text" name="judul_bk" class="form-control">
     </div>
     <div class="form-group">
      <label>Penerbit Buku</label>
      <input type="text" name="terbit_bk" class="form-control">
     </div>
     <div class="form-group">
      <label>Genre Buku</label>
      <input type="text" name="genre_bk" class="form-control">
     </div>
     <div class="form-group">
      <label>Harga Buku</label>
      <input type="text" name="harga_bk" class="form-control">
     </div>
     <button type="submit" class="btn btn-info btn-block btn btn-danger mt-2">Tambah Buku</button>     
    </form>
    
   </div>
   <div class="col-sm-8">
    <h3>Tabel Daftar Buku</h3>
    <table class="table table-striped table-hover dtabel">
     <thead>
      <tr>
       <th>No</th>
       <th>Judul Buku</th>
       <th>Penerbit Buku</th>
       <th>Genre Buku</th>
       <th>Harga Buku</th>
       <th>Aksi</th>
      </tr>
     </thead>
     <tbody> 
      
      <?php
       $no = 1;  
       while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $row['judul']; ?></td>
       <td><?php echo $row['penerbit']; ?></td>
       <td><?php echo $row['genre']; ?></td>
       <td><?php echo $row['harga']; ?></td>
       <td>
        <a href="editform.php?id=<?php echo $row['id'];?>" class="btn btn-success" role="button">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" role="button">Delete</a>
       </td>
      </tr>

      <?php
       }
       mysqli_close($conn); 
      ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</body>

 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>

</html>
</body>
</html>

