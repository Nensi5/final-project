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
   
    

<div class="container">
    <h2 class="display-4">Kontakt</h2>
    <hr>
    <div class="row">
        <div class="col-6">
            <div class="col-6"></div>
          <form action="izlaznastranica.html" method="post">
            <div class="form-group">
                <label for="exampleInputName1"><i class="far fa-user"></i> Ime i prezime</label>
                <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Unesite vaše ime i prezime">
              </div>
    <div class="form-group">
      <label for="exampleInputEmail1"><i class="far fa-envelope"></i> Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unesite vašu e-mail adresu">
    </div>
      <div class="form-group">
        <label for="exampleInputPhone1"><i class="fas fa-phone"></i> Telefon</label>
        <input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp" placeholder="Unesite vaš broj telefon">
      </div>
      <div class="form-group">
        <label for="exampleInputSubject1"><i class="fas fa-heading"></i> Naslov poruke</label>
        <input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp" placeholder="Unesite vaš broj telefon">
      </div>
      <div class="form-group">
        <label for="exampleInputMessage1"><i class="far fa-edit"></i> Telefon</label>
        <textarea class="form-control" id="exampleInputMessage1" placeholder="Unesite tekst Vaše poruke" rows="3"></textarea>
      </div>
    <button type="submit" class="btn-outline-dark btn-lg btn-block"><i class="far fa-paper-plane"></i>Posalji</button>
    
  </form>  
</div>
<div class="col-6">
    <ul class="list-unstyled">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d181140.11997727313!2d20.2825138372842!3d44.81515972893016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa3d7b53fbd%3A0x1db8645cf2177ee4!2z0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1610630479011!5m2!1ssr!2srs" 
width="550" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 

        <li><i class="fas fa-map-marker-alt"></i>Adresa:<span class="float-right"> Beograd</span></li>
        
            <li><i class="fas fa-phone"></i>  Telefon:<span class="float-right"><a href="telefon:011/-5631-178"> 011/-5631-178</a></span></li>
            
                <li><i class="far fa-envelope"></i>  E-mail:<span class="float-right"><a href="mailto:office@STAY.edu.rs">office@STAY.com </a></span></li>
            </ul>
            
    </div>
</div>
        </div>
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




      </div>
      </section>
  </body>
</html>
<?php include('layouts/footer.php');?>