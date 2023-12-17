<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeedCoffee</title>
    <link href="img/icon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="toast.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <?php 
      include('function.php');
      session_start();
     ?>
     <style>
      .hover{
        border-radius:5px;
      }
      .hover:hover{
        background-color:#dc3545;
        border-radius:5px;
      }
      @media only screen and (max-width: 900px) {
      .desc{
          display: none;
      }
}
     </style>
</head>
<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
<header>
    <nav class="navbar fixed-top navbar-dark bg-dark" id="navmenu">
        <div class="container-fluid">
          <a class="navbar-brand" href="#utama">NeedCoffee <img src="img/icon.png" width="40px" alt=""></a>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link hover text-light" href="index.php"><i class="bi bi-house-fill"></i> <span class="desc">Beranda</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-2 me-2 hover text-light" href="#kontak"><i class="bi bi-headset"></i> <span class="desc">Kontak</span></a>
            </li>
            <li class="nav-item">
            <?php 
              if(isset($_SESSION['username'])){ ?>
              <div class="dropdown me-3">
                <button class="btn btn-outline-danger text-light me-3 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person"></i><span class="desc"><?php echo $_SESSION['username'] ?></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
                  <li><a class="dropdown-item" href="profil.php">Akun</a></li>
                  <li><a class="dropdown-item" href="pesan.php">Pesan App</a></li>
                  <li><a class="dropdown-item" href="pesanan.php?page=antri">Pesanan Saya</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><button class="dropdown-item" onclick="logout()">Logout</button></li>
                </ul>
              </div>
            <?php }else{ ?>
                <a class="nav-link btn btn-danger btn-sm text-light me-3" href="login.php"><i class="bi bi-person"></i><span class="desc"> Sign In</span></a>
            <?php } ?>
            </li>
          </ul>
        </div>
      </nav>