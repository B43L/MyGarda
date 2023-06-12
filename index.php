<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | MyGarda</title>
  <link rel="stylesheet" href="Asset/index/css/styleindex.css">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Philosopher', sans-serif;
    }
   </style>
</head>
<body>
  <header>
  </header>
  <div class="container">
    <div class="form-box">
      <h2>MyGarda</h2>
      <form method="POST" action="/login">
    </form>
      <form action="#" onsubmit="redirectToHomepage()">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="text" required>
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" required>
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label>
            <input type="checkbox"> Ingat saya
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="login-register">
          <p>Belum punya akun? <a href="daftar.php">Daftar Sekarang</a></p>
        </div>
         <div class="back-home">
            <a href="Homepage.php"><ion-icon name="close-outline"></ion-icon></a>
          </div>
      </form>
    </div>
  </div>
  <script type="module">
    function redirectToHomepage() {
      window.location.href = "Homepage.php";
    }
  </script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
