<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="CRUD Update.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr> 
                <td>Nomor_Telepon</td>
                <td><input type="text" name="Nomor_Telepon"></td>
            </tr>
            <td>Nomor_Identitas</td>
                <td><input type="text" name="Nomor_Identitas"></td>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $Nomor_Telepon = $_POST['Nomor_Telepon'];
        $Nomor_Identitas = $_POST['Nomor_Identitas'];
    
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pengguna(Nama,Alamat,Nomor_Telepon,Nomor_Identitas) VALUES('$Nama','$Alamat','$Nomor_Telepon'$Nomor_Identitas')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>