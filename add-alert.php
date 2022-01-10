
<?php
    echo "<script> 
    alert('Berhasil menambah data barang!');
    document.location.href = 'index.php';
    </script>
";
    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $total    =$harga*$jumlah;
        
        include_once("config.php");      
        $result = mysqli_query($mysqli, "INSERT INTO tbl_barang(nama_barang,harga,jumlah,total) VALUES('$nama_barang','$harga','$jumlah','$total')");
        echo "Berhasil menambah data";
    }
    ?>