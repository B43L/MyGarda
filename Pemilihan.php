<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
  <link rel="stylesheet" href="Asset/pemilihan/css/stylepemilihan.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      background-color: #f8f8f8;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      animation: fade-in 1.5s ease-in-out;
    }

    @keyframes fade-in {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1 {
      font-size: 32px;
      font-weight: bold;
      color: #333;
      margin-top: 0;
      margin-bottom: 20px;
    }

    p {
      font-size: 16px;
      color: #666;
      margin-bottom: 20px;
    }

    .input-container {
      position: relative;
      margin-bottom: 20px;
      animation: slide-up 1s ease-in-out forwards;
    }

    @keyframes slide-up {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .input-container input {
      border: none;
      border-bottom: 2px solid #333;
      font-size: 16px;
      padding: 10px;
      width: 100%;
    }

    .input-container label {
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 16px;
      color: #777;
      pointer-events: none;
      transition: 0.3s;
    }

    .input-container input:focus + label,
    .input-container input:valid + label {
      top: -20px;
      left: 5px;
      font-size: 12px;
      color: #333;
    }

    #layanan-select {
      border: none;
      border-bottom: 2px solid #333;
      font-size: 16px;
      padding: 10px;
      width: 100%;
      margin-bottom: 20px;
    }

    .icon {
      position: absolute;
      top: 13px;
      right: 10px;
      color: #777;
    }

    .warning {
      color: red;
      font-size: 12px;
      text-align: left;
      margin-top: 5px;
    }

    button {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #555;
    }

    .back-button {
      background-color: transparent;
      color: #333;
      border: 2px solid #333;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
      margin-right: 10px;
    }

    .back-button:hover {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>MyGarda</h1>
    <p>Silahkan pilih layanan:</p>
    <select id="layanan-select" required>
      <option value="">Pilih Layanan</option>
      <option value="keuangan">Keuangan</option>
      <option value="instansi">Instansi</option>
      <option value="kesehatan">Kesehatan</option>
    </select>
    <i class="fas fa-caret-down icon"></i>
  </div>
  <div class="container">
    <p>Silahkan lengkapi data Anda untuk mendapatkan nomor antrian.</p>
    <button class="back-button" onclick="goBack()">Kembali</button>
    <div class="input-container">
      <input type="text" id="nama-input" required>
      <label for="nama-input">Nama</label>
      <i class="fas fa-user icon"></i>
    </div>
    <div class="input-container">
      <input type="email" id="email-input" required>
      <label for="email-input">Email</label>
      <i class="fas fa-envelope icon"></i>
      <span class="warning" id="email-warning"></span>
    </div>
    <div class="input-container">
      <input type="text" id="telepon-input" required>
      <label for="telepon-input">Nomor Telepon</label>
      <i class="fas fa-phone icon"></i>
    </div>
    <div id="column" style="display: none;">
    </div>
    <button onclick="daftar()">Daftar</button>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script>
    function daftar() {
      var nama = document.getElementById("nama-input").value;
      var email = document.getElementById("email-input").value;
      var telepon = document.getElementById("telepon-input").value;
      var layanan = document.getElementById("layanan-select").value;

      if (nama === "" || email === "" || telepon === "") {
        alert("Silahkan isi semua field dengan lengkap.");
        return;
      }

      if (layanan === "") {
        alert("Tolong pilih layanan yang Anda inginkan.");
        return;
      }

      if (layanan === "keuangan") {
        if (!email.endsWith("@gmail.com")) {
          document.getElementById("email-warning").innerText = "Tolong dikoreksi.";
          return;
        }
      }

      // Lanjutkan dengan proses daftar
      // ...

      alert("Pendaftaran berhasil!");

      // Arahkan pengguna ke halaman CRUD Admin.html setelah pendaftaran berhasil
      window.location.href = "CRUD Admin.php";
    }

    function goBack() {
      window.location.href = "Homepage.php";
    }

    document.getElementById('layanan-select').addEventListener('change', function() {
      var selectedOption = this.value;
      var column = document.getElementById('column');

      if (selectedOption === "keuangan") {
      } else {
        column.style.display = "none";
        document.getElementById("email-warning").innerText = "";
      }
    });
  </script>
</body>
</html>
