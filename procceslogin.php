<?php
include('koneksi.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM pengguna WHERE email ='$email' and password= '$password';";
    $hasil = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
    $jum = mysqli_num_rows($hasil);

    if ($jum == 1) {
        echo header("Location:Homepage.php");
    } else {
        echo '<sript>
        window.location.href = "Homepage.php";
        alert("Login failed. Invalid email or password!!")
        </sript>';
    }


}
