<!DOCTYPE html>
<html>
<head>
  <title>Admin | CRUD View</title>
  <link rel="stylesheet" href="Asset/status/css/stylestatus.css">
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
      color: #333;
      text-align: center;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
      font-weight: bold;
      color: #333;
      text-transform: uppercase;
    }
    
    tr:last-child td {
      border-bottom: none;
    }
    
    a {
      color: #007bff;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    a:hover {
      color: #0056b3;
    }
    
    .delete-link {
      color: #dc3545;
    }
    
    .action-links {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .action-links a {
      margin: 0 4px;
    }
    
    .back-link {
      display: block;
      margin-top: 20px;
      text-align: center;
      color: #007bff;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .back-link:hover {
      color: #0056b3;
    }
    
    .add-new-link {
      display: block;
      margin-top: 20px;
      text-align: center;
      color: #007bff;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .add-new-link:hover {
      color: #0056b3;
    }
  </style>
</head>
<body>
<?php
  // Include database connection file
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "MyGarda";

  $mysqli = new mysqli($host, $username, $password, $database);

  // Check if the connection was successful
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
      exit();
  }

  // Fetch data from the database
  $result = mysqli_query($mysqli, "SELECT * FROM pengguna");

  // Check if query execution was successful
  if ($result && mysqli_num_rows($result) > 0) {
    // Display the table headers
    echo '<div class="container">';
    echo '<h1>List Order</h1>';
    echo '<table class="viewtable">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>No</th>';
    echo '<th>ID</th>';
    echo '<th>Nama</th>';
    echo '<th>Alamat</th>';
    echo '<th>Nomor_Telepon</th>';
    echo '<th>Nomor_Antrian</th>';
    echo '<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Display the table rows
    $counter = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $name = $row['name'];
      $alamat = $row['alamat'];
      $nomor_telepon = $row['nomor_telepon'];
      $nomor_antrian = $row['nomor_antrian'];

      echo '<tr>';
      echo '<td>' . $counter . '</td>';
      echo '<td>' . $id . '</td>';
      echo '<td>' . $nama . '</td>';
      echo '<td>' . $alamat . '</td>';
      echo '<td>' . $nomor_telepon . '</td>';
      echo '<td>' . $nomor_antrian . '</td>';
      echo '<td class="action-links">';
      echo '<a href="update-sys.php?id=' . $id . '">Update</a>';
      echo '<a href="#" class="delete-link" onclick="confirmDelete(' . $id . ')">Delete</a>';
      echo '</td>';
      echo '</tr>';

      $counter++;
    }

    // Close the table
    echo '</tbody>';
    echo '</table>';

    // Display the links
    echo '<a class="back-link" href="Homepage.php">Beranda</a>';
    echo '<a class="add-new-link" href="CRUD Create.php">Tambah Baru</a>';
    echo '</div>';
  } else {
    echo "No orders found.";
  }
?>

<script>
  function confirmDelete(id) {
    var confirmation = confirm("Are you sure you want to delete this order with ID: " + id + "?");
    if (confirmation) {
      // Redirect to the delete page or handle the deletion logic
      // Example: window.location.href = "delete.php?id=" + id;
    }
  }
</script>
</body>
</html>
