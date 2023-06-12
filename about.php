<!DOCTYPE html>
<html>
<head>
<title>Tentang kami</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Asset/about/css/styleabout.css">
<style>
/* CSS styles */
.popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 999;
}

.popup-content {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
}

.popup-close {
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
}

/* Additional styles */

.back-button a {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border-radius: 4px;
  text-decoration: none;
}

.back-button a:hover {
  background-color: #0056b3;
}

</style>
</head>
<body>
<header>
    <body>
          </main>
<h1>MyGarda</h1>
<p>Penyedia solusi manajemen antrian online terkemuka</p>
</header>
<main>
<section id="about">
<h2>Tentang Kami</h2>
<p>MyGarda adalah penyedia solusi manajemen antrian online terkemuka. Kami membantu bisnis dari semua ukuran untuk meningkatkan pengalaman pelanggan mereka dengan menyediakan cara yang nyaman dan efisien bagi pelanggan untuk mengelola waktu tunggu mereka.</p>
<p>Sistem kami mudah digunakan dan dapat disesuaikan untuk memenuhi kebutuhan spesifik bisnis Anda. Pelanggan dapat mengambil nomor secara online, menerima informasi terkini mengenai waktu tunggu mereka, dan bahkan membayar layanan di muka. Hal ini membantu mengurangi frustrasi pelanggan dan meningkatkan kepuasan pelanggan.</p>
<p>Selain sistem manajemen antrean online kami, kami juga menawarkan berbagai layanan lain, termasuk:</p>
<ul>
<li>Penjadwalan janji temu</li>
<li>Manajemen umpan balik pelanggan</li>
</ul>
<p>Kami berkomitmen untuk menyediakan layanan terbaik bagi pelanggan kami. Tim ahli kami siap membantu Anda dengan semua kebutuhan manajemen antrean Anda.</p>
</section>
<section id="benefits">
<h2>Manfaat Menggunakan MyGarda</h2>
<ul>
<li>Pengalaman pelanggan yang lebih baik</li>
<li>Peningkatan efisiensi</li>
<li>Mengurangi biaya</li>
</ul>
<p>Ada banyak manfaat menggunakan Layanan Antrian Online, antara lain:</p>
<ul>
<li>Pengalaman pelanggan yang lebih baik: Pelanggan menghargai kenyamanan untuk dapat mengambil nomor secara online dan menerima pembaruan waktu nyata tentang waktu tunggu mereka. Hal ini membantu mengurangi rasa frustrasi pelanggan dan meningkatkan kepuasan pelanggan.</li>
<li>Peningkatan efisiensi: Layanan Antrian Online membantu bisnis untuk meningkatkan efisiensi mereka dengan mengurangi waktu yang dihabiskan pelanggan untuk mengantri. Hal ini membebaskan staf untuk fokus pada tugas-tugas lain, seperti menyediakan layanan pelanggan.</li>
<li>Mengurangi biaya: Layanan Antrian Online dapat membantu bisnis untuk mengurangi biaya dengan mengurangi jumlah ruang yang dibutuhkan untuk ruang tunggu. Hal ini dapat menghasilkan penghematan biaya sewa dan utilitas.</li>
</ul>
</section>
<section id="how-it-works">
<h2>Bagaimana cara kerjanya</h2>
<p>MyGarda adalah sistem yang sederhana dan mudah digunakan. Pelanggan dapat mengambil nomor antrian secara online dengan mengunjungi situs web kami atau dengan menggunakan aplikasi seluler kami. Setelah mengambil nomor, mereka akan menerima informasi terkini mengenai waktu tunggu mereka. Mereka juga dapat menggunakan sistem ini untuk membayar layanan di muka.</p>
<p>Ketika tiba gilirannya, pelanggan akan diberitahu melalui pesan teks atau email. Mereka kemudian dapat melanjutkan ke konter layanan untuk menerima layanan mereka.</p>
</section>
<section id="testimonials">
<h2>Testimoni</h2>
<p>Berikut ringkasan dari pelanggan kami yang telah menggunakan:</p>
<blockquote>
<p>"Layanan Antrian Online telah menjadi tambahan yang bagus untuk bisnis kami. Layanan ini telah membantu kami meningkatkan pengalaman pelanggan dan mengurangi waktu tunggu. Kami pasti akan merekomendasikannya kepada bisnis lain."</p>
<footer>- Chintia, Guru, SMK TELKOM SIDOARJO</footer>
</blockquote>
<blockquote>
<p>"Layanan Antrian Online telah membuat perbedaan besar dalam bisnis kami. Layanan ini telah membantu kami meningkatkan efisiensi dan mengurangi biaya. Kami sangat senang dengan layanan ini."</p>
<footer>- Abror, Kepala Sekolah, SMK TELKOM SIDOARJO</footer>
</blockquote>
</section>
</main>
<footer>
    <div class="back-button">
        <a class="back-link" href="Homepage.php">Halaman Utama</a>
      </div>
      <p>&copy; 2023 MyGarda</p>
</footer>

<!-- JavaScript -->
<script>
// Delayed popup function
function showPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

document.addEventListener("DOMContentLoaded", function() {
  // Set timeout for popup
  setTimeout(showPopup, 5000); 
  
  // Handle back link click
  var backLink = document.getElementById("back-link");
  backLink.addEventListener("click", function(event) {
    event.preventDefault();
    alert("Terimakasih sudah membaca!");
  });
});
</script>
</body>
</html>
