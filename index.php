<?php 
    session_start();
    require_once('./inc/config.php');    
    require_once('./inc/helpers.php');  

    $sql = "SELECT p.*,pdi.img from products p
                    INNER JOIN product_images pdi ON pdi.product_id = p.id
                    WHERE pdi.is_featured = 1";
    $handle = $db->prepare($sql);
    $handle->execute();
    $getAllProducts = $handle->fetchAll(PDO::FETCH_ASSOC);

    $pageTitle = 'Stay Beauty';
	$metaDesc = 'Demo sajt';
    include('layouts/header.php');
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/love.png" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/ariii.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/Ariana-Grande.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/ari6.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
    
    <div class="row">
        <?php
        foreach($getAllProducts as $product)
        {
            $imgUrl = PRODUCT_IMG_URL.str_replace(' ','-',strtolower($product['product_name']))."/".$product['img'];
        ?>
       
            <div class="col-md-3  mt-2">
                <div class="card">
                     <a href="single-product.php?product=<?php echo $product['id']?>">
                        <img class="card-img-top" src="<?php echo $imgUrl ?>" alt="<?php echo $product['product_name'] ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title-dark">
                            <a href="single-product.php?product=<?php echo $product['id'] ?>" class="text-secondary">
                                <?php echo $product['product_name']; ?>
                            </a>
                        </h5>
                        <strong>€<?php echo $product['price']?></strong>

                        <p class="card-t">
                            <?php echo substr($product['short_description'],0,50) ?>'...
                        </p>
                        <p class="card-text">
                            <a href="single-product.php?product=<?php echo $product['id']?>" class="btn btn-dark">
                                Pogledaj
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
        <?php 
        }
        ?>
    </div>
    <div class="pop-mobiles-1">
                        <figure>
                            <img
                                src="Images/Proiyvodi.jpg"
                            />
                        </figure>
                        <div>
                            <h2>Savršen paket</h2>
                            <p>
                                Iznenadite svoje voljene.
                                Saki paket sadrži maskaru, par veštačkih trepavica,
                                karmin, ajlajneri i tečnu senku za oči.
                            </p>
                            <h4>€100</h4>
                            <a href="detail_page.html" class="btn"
                                >Kupi sad<i class="fas fa-angle-right"></i
                            ></a>
                        </div>
                    </div>
          
    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
      
      
     
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Prijavi se za novitete</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email adresa</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Prijavi se
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
      Inspirisan transformativnom snagom šminke i podstaknut njenom strašću za neverovatnim proizvodom, 
      arijev san je linija visokoučinkovitih, inovativnih proizvoda za oči, 
      lice i usne koja je dostupna svima. od senki za oči, ajlajnera i trepavica do hajlajtera, 
      karmina i sjajnih sjajila za usne, ovaj veganski brend bez okrutnosti pruža vam alate koji su vam 
      potrebni da budete sopstveni kreativni direktor.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">izbor</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">lice</a>
            </li>
            <li>
              <a href="#!" class="text-white">usne</a>
            </li>
            <li>
              <a href="#!" class="text-white">oči</a>
            </li>
            <li>
              <a href="#!" class="text-white">sve</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">podrška</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">faqs</a>
            </li>
            <li>
              <a href="#!" class="text-white">način plaćanja</a>
            </li>
            <li>
              <a href="#!" class="text-white">call centar</a>
            </li>
            
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">saznaj vise</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="onama.php" class="text-white">o nama</a>
            </li>
            <li>
              <a href="kontakt.php" class="text-white">kontakt</a>
            </li>
            
            
          </ul>
        </div>
        <!--Grid column-->

      
        <!--Grid column-->

        <!--Grid column-->
        
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Stay B
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        
<?php include('layouts/footer.php');?>