<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_barang ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Barang</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        th{
            text-align: center;
            background-color: #FF7F50;
            color: white;
        }
    </style>
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Hitung
    </a>
  </div>
</nav></br>
<?php include'add.php'?> 
 <!-- output hitung-->
    </br><h5 style="margin-left: 150px;">Data Barang</h5>
    <table width='80%' border=1 style="margin: auto;">
    <tr>
        <th>Nama Barang</th> 
        <th>Harga</th> 
        <th>Jumlah</th>
        <th>Total</th> 
        <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_barang']."</td>";
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['jumlah']."</td>";    
        echo "<td>".$user_data['total']."</td>"; 
        echo "<td><center><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></center></td></tr>";                
    }
    ?>
    </table>

</body>
</html>