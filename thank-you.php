<?php 
    session_start();

     if(!isset($_SESSION['confirm_order']) || empty($_SESSION['confirm_order']))
     {
         header('location:index.php');
         exit();
     }

    require_once('./inc/config.php');    
    require_once('./inc/helpers.php');  

    
	$pageTitle = 'Hvala';
	$metaDesc = ' Zahvalnica';
	
    include('layouts/header.php');
?>
<div class="row">
    <div class="col-md-12">
        <h1>HVALA VAM!</h1>
        <p>
            Porudžba je uspešno izvršena.
            <?php unset($_SESSION['confirm_order']);?>
        </p>
    </div>
</div>
<?php include('layouts/footer.php'); ?>    