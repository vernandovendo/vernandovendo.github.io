<?php 
  include('header.php'); 
  include('koneksi.php');
  $query = mysqli_query($conn, "SELECT * FROM tbl_porto");
  $data = mysqli_fetch_array($query);
?>
<br><br>
<section id="utama">    
    <div class="container">      
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1 text-center">Tentang <span class="text-danger">NeedCoffee.</span></h2>
            <p class="lead text-center"><?php echo $data['desc1']?></p>
          </div>
          <div class="col-md-5">
            <img src="img/example-1.png" alt="" width="100%" height="100%">
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1 text-center">Layanan.</h2>
            <p class="lead text-center"><?php echo $data['desc2']?></p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="img/example-3.png" alt="" width="100%" height="100%">
        </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1 text-center">Motto <span class="text-danger">NeedCoffee.</span></h2>
            <p class="lead text-center"><?php echo $data['desc3']?></p>
          </div>
          <div class="col-md-5">
            <img src="img/example-20.png" alt="" width="100%" height="100%">
          </div>
        </div>
        <hr class="featurette-divider">
    </div>
</section>
<?php 
include('kontak.php'); 
include('footer.php'); 
?>