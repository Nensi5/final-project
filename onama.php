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
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="discription" content="Opis strane">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="kaywords" content="rec, fraca, druga rec ">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="author" content="Nevena Čelić">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/novistil.css">
    <link href='https://fonts.googleapis.com/css?family=Shrikhand' rel='stylesheet'>
    <title>O Nama</title>

   

<div class="container">
    <h2 class="display-4">O nama</h2>
    <hr>
    <div class="row">
        <div class="col-md-6">
          
            <p class="text-justify">
              Online shop Stay Beauty je usavršen projekat od pre dve godine, osnovan od strane Nevena Čelić 2020. godine. Kojem je glavni cilj je ponuditi pristupačne i kvalitetne proizvode (vegan/cruelty free). 
              Svi proizvodi za kolekcije animea naš tim je kreirao po meri. Nudeći jedinstvene i kreativne proizvode nastojimo da našim klijentima šminkanje učinimo zabavnijim..
            </p>
            <p class="lead">
                Ukoliko Vas se sviđa ono što ste pročitali kontaktirajte nas!
            </p> 
            <address>
                <strong>online shop STAY</strong><br>
                2020 STAY<br>
              
                11000, Beigrad<br>
               <abbr title="Phone"> P+</abbr> 011/-2471-099<br>
               <a href="mailto:office@STAY.rs">office@STAY.rs</a> <br>
            </address>
            <blockquote class="blockquote">
                <p class="mb-0"></p>
                    <blockquote class="blockquote">
                        <p class="mb-0">“Does losing prove that you are weak? Isn’t losing difficult for all of you? A challenge where, 
                          after ending up on your hands and knees, you must see if you can stand up again? If you stay on your hands and
                           knees, that proves that you are weak.”</p>
                        <footer class="blockquote-footer"> <cite title="Source Title">Ittetsu Takeda</cite></footer>
                      </blockquote>
</div>
<hr>
  </blockquote>
<div class="col-md-6">
    <img src="Images/slika.jpeg" class="img-thumbnail" alt="Digitalna agencija">
    </div>
   
</div>
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
              <strong>Prijavise za novitete</strong>
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
              <a href="#!" class="text-white">nač plaćanja</a>
            </li>
            <li>
              <a href="#!" class="text-white">kolcentar</a>
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
</body>
  </body>
</html>
<?php include('layouts/footer.php');?>