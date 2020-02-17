<!DOCTYPE html>
<html>
<head>
    <title>Data Restoran</title>
<style>
body {
    background-image: url("Gambar-Chatime.jpg");
}
</style>
</head>
    <center>
    <h1>Chattime Cafe</h1>
    <h2>Daftar menu :</h2>
    <table border="1" width="80%"></center>
    <tr>
        <th bgcolor="pink">Code</th>
        <th bgcolor="aqua">Drink</th>
        <th bgcolor="yellow">Price</tr>
    </tr>
    <?php
    include "restoranisi.php";

    $query = "SELECT * FROM drink";
    $sql = mysqli_query($connect, $query);

    while($dataku = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$dataku['Code']."</td>";
        echo "<td>".$dataku['Drink']."</td>";
        echo "<td>".$dataku['Price']."</td>";
        echo "</tr>";
    }
    ?>
    <form action="" method="GET">
        <input type="text" nama="nama" placeholder="Masukkan nama anda :">
        <input type="text" Code="Code" placeholder="Code minuman :">
        <button type="Submit">submit</button>
    </form>
    <table>
        <tr>
        <td>Nama</td>
        <td>:<?php echo $_GET['nama']??''?></td>
        <td>Code</td>
        <td>:<?php echo $_GET['Code']??''?></td>
    </table>
</body>
</html>