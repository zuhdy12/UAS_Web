<?php
    session_start();
    if(!empty($_SESSION['USER']['level'] == 'admin')){ 

    }else{ 
        echo '<script>alert("Login Khusus Admin !");window.location="../index.php";</script>';
    }
 
    // select untuk panggil nama admin
    $id_login = $_SESSION['USER']['id_login'];
    
    $row = $koneksi->prepare("SELECT * FROM login WHERE id_login=?");
    $row->execute(array($id_login));
    $hasil_login = $row->fetch();
?>

<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title_web;?> | Rental Mobil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/font-awesome.css">
    <style>
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
        }
        .jumbotron h2 {
            font-size: 2.5rem;
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    <div class="jumbotron text-center">
        <h2>Rental Mobil SS</h2>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $url;?>admin/">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item <?php if($title_web == 'Dashboard'){ echo 'active';}?>">
                    <a class="nav-link" href="<?php echo $url;?>admin/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if($title_web == 'User'){ echo 'active';}?>">
                    <a class="nav-link" href="<?php echo $url;?>admin/user/index.php">User / Pelanggan</a>
                </li>
                <li class="nav-item <?php if($title_web == 'Daftar Mobil'){ echo 'active';}?>
                <?php if($title_web == 'Tambah Mobil'){ echo 'active';}?>
                <?php if($title_web == 'Edit Mobil'){ echo 'active';}?>">
                    <a class="nav-link" href="<?php echo $url;?>admin/mobil/mobil.php">Daftar Mobil</a>
                </li>
                <li class="nav-item <?php if($title_web == 'Daftar Booking'){ echo 'active';}?>
                <?php if($title_web == 'Konfirmasi'){ echo 'active';}?>">
                    <a class="nav-link" href="<?php echo $url;?>admin/booking/booking.php">Daftar Booking</a>
                </li>
                
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-user"> </i> Hallo, <?php echo $hasil_login['nama_pengguna'];?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="return confirm('Apakah anda ingin logout ?');" href="<?php echo $url;?>admin/logout.php">Logout</a>
                </li>
            </ul>
        </div>
           
    </nav>
    <div class="container mt-4">
        <!-- Content here -->