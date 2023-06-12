<!DOCTYPE html>
<html>
<head>
  <title>STATUS | BARIS</title>
  <link rel="stylesheet" href="Asset/antrian/css/styleantrian.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      text-align: center;
      background-color: #ffffff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      margin-top: 0;
      margin-bottom: 20px;
      color: #007bff;
      font-size: 28px;
    }

    .antrian-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .antrian-box {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #007bff;
      color: #fff;
      font-size: 48px;
      font-weight: bold;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 20px;
    }

    .antrian-text {
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      margin-bottom: 20px;
      color: #555;
    }

    .back-link {
      color: #007bff;
      text-decoration: none;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>BARISAN</h1>

    <div class="antrian-container">
      <div class="antrian-box">
        <div class="antrian-text">Loket A</div>
        <div class="antrian-number">A001</div>
      </div>
      
      <div class="antrian-box">
        <div class="antrian-text">Loket B</div>
        <div class="antrian-number">B001</div>
      </div>
      
      <div class="antrian-box">
        <div class="antrian-text">Loket C</div>
        <div class="antrian-number">C001</div>
      </div>
    </div>

    <p>Silahkan menunggu panggilan untuk nomor antrian Anda.</p>

    <a class="back-link" href="Homepage.php">&larr; Kembali ke Halaman Utama</a>
  </div>
</body>
</html>
