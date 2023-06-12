<?php
// include database connection file
$host = "localhost";
$username = "root";
$password = "";
$database = "MyGarda";

$mysqli = new mysqli($host, $username, $password, $database);

// Periksa apakah koneksi berhasil
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Nomor_Telepon = $_POST['Nomor_Telepon'];
    $Nomor_Identitas = $_POST['Nomor_Identitas'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE pengguna SET Nama='$Nama', Alamat='$Alamat', Nomor_Telepon='$Nomor_Telepon', Nomor_Identitas='$Nomor_Identitas' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: Homepage.php");
}
;

// Display selected user data based on id
// Getting id from url
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Fetch user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE id=$id");

// Check if query execution was successful
if ($result && mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_array($result);
    $Nama = $user_data['Nama'];
    $Alamat = $user_data['Alamat'];
    $Nomor_Telepon = $user_data['Nomor_Telepon'];
    $Nomor_Identitas = $user_data['Nomor_Identitas'];
} else {
    echo "User not found.";
    exit();
}
?>


<html>
<head>   
    <title>Edit User Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
 
<body>
    <a href="Homepage.php">Home</a>
    <br/><br/>
    
    <div class="container">
        <h1>Edit User Data</h1>
    
        <form name="update_user" method="post" action="">
            <label>Name</label>
            <input type="text" name="Nama" value="<?php echo $Nama; ?>">
            
            <label>Alamat</label>
            <input type="text" name="Alamat" value="<?php echo $Alamat; ?>">
            
            <label>Nomor Telepon</label>
            <input type="text" name="Nomor_Telepon" value="<?php echo $Nomor_Telepon; ?>">
            
            <label>Nomor Identitas</label>
            <input type="text" name="Nomor_Identitas" value="<?php echo $Nomor_Identitas; ?>">
            
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>
</html>
