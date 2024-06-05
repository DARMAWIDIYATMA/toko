<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOKO MURAH | <?= $judul; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?> logo-pb.png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/css/bootstrap.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> 
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
</head>

<head>
    <!-- Your existing meta tags and stylesheets -->
    <style>
        /* Custom styles to make it more visually appealing */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #333;
        }
        .navbar-nav .nav-item .nav-link {
            color: #333;
        }
        .navbar-nav .nav-item .nav-link:hover {
            color: #007bff;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .btn-outline-primary {
            color: #007bff;
            border-color: #007bff;
        }
        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }
        .btn-outline-success {
            color: #28a745;
            border-color: #28a745;
        }
        .btn-outline-success:hover {
            background-color: #28a745;
            color: #fff;
        }
        /* Add your own custom styles here */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
            
                <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logo5.png'); ?>" alt="Logo" width="50" height="50"></b>TOKO MURAH</a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
                <div class="navbar-nav">
             
                <?php
                 if (!empty($this->session->userdata('email'))) { ?> 
                    <a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Keranjang <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> <img src="<?= base_url('assets/img/keranjang.png'); ?>" alt="Logo" width="50" height="50"></a>
                     <a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
                     <a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a> 
                   <?php } else { ?>
                      <a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fw fa-login"></i> Daftar</a> 
                      <a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Login</a>
                      <?php } ?> 
                      <style>
    /* Your existing styles */
    /* ... */
    .nav-right {
        overflow: hidden;
    }
    .welcome-text {
    display: inline-block;
    font-size: 20px;
    font-weight: bold;
    color: #007bff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    animation: colorBlink 2s infinite;
    }
    
    @keyframes colorBlink {
    0% {
        color: #ffeb3b; /* Warna pertama */
    }
    50% {
        color: #2196f3; /* Warna kedua */
    }
    100% {
        color: #ffeb3b; /* Kembali ke warna pertama */
    }
}


</style>

                      
<span class="nav-item nav-link nav-right" style="display:block; margin-left:30px;">
    Selamat Datang, <b class="welcome-text"><?= $user; ?></b>
</span>
 
                  </div>
                   </div>
                    </div>
                     </nav>
                      <div class="container mt-5">

