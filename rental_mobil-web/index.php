<?php
require 'koneksi/koneksi.php';

// Memulai session jika belum dimulai
if (empty($_SESSION['USER'])) {
    session_start();
}

include 'header.php';
?>

<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Selamat Datang, <?php echo htmlspecialchars($_SESSION['USER']['nama_pengguna']); ?></h5>
        <p class="card-text">Selamat datang di Rental Mobil. Kami menyediakan berbagai macam mobil untuk kebutuhan Anda.</p>
        <?php if ($_SESSION['USER']['level'] == 'admin') { ?>
            <a href="admin/index.php" class="btn btn-primary">Dashboard</a>
        <?php } else { ?>
            <a href="blog.php" class="btn btn-primary">Booking Sekarang!</a>
        <?php } ?>
    </div>
</div>

<!-- Section: Services -->
<section class="card mt-5">
    <div class="container">
        <h2 class="text-center">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card-body">
                    <h3>Sewa Harian</h3>
                    <p>Kami menyediakan layanan sewa mobil harian dengan harga terjangkau.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h3>Sewa Mingguan</h3>
                    <p>Butuh mobil untuk jangka waktu lebih lama? Kami juga menyediakan sewa mingguan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h3>Sewa Bulanan</h3>
                    <p>Untuk kebutuhan jangka panjang, kami menawarkan layanan sewa bulanan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: About Us -->
<section class="card mt-5">
    <div class="container">
        <h2 class="text-center">Tentang Kami</h2>
        <center>
        <p>Kami adalah perusahaan rental mobil yang berdedikasi untuk menyediakan layanan terbaik bagi pelanggan kami. Dengan berbagai pilihan mobil dan harga yang kompetitif, kami siap memenuhi kebutuhan transportasi Anda.</p>
        </center>   
    </div>
</section>

<!-- Section: Contact Us -->
<section class="card mt-5">
    <div class="container">
        <h2 class="text-center">Hubungi Kami</h2>
        <p class="text-center">Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami.</p>
        <div class="row center">
            <div class="card col-md-6">
                <h3>Alamat</h3>
                <p>Makassar</p>
            </div>
            <div class="card col-md-6">
                <h3>Email</h3>
                <p>rental@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>