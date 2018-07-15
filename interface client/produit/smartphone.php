<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../tools/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../tools/font-awesome/css/font-awesome.min.css">
    <link href="../style.css" rel="stylesheet">
    <link rel="stylesheet" href="../tools/bootstrap-social/bootstrap-social.css">


    <title>KeyteK</title>

</head>

<body>
    <?php include("header.php") ;
    

    try
    {
        $connexion= new PDO("mysql:host=localhost;dbname=Keytek;charset=utf8","root","");
    }
    catch (Exception $e){
        die("Erreur " .$e->getMessage) ;            
    }

    $resultat=$connexion->query("SELECT * FROM Produit WHERE Categorie='Smartphone' ") ;
    
    
    ?>

    <div class="container">
    
        <div class="row">
            <div class="col-12">
               <h3>Smartphone</h3>
               <hr>
            </div>
        </div>
             

        <div class="row offset-sm-1">
        <?php     while ($donnees=$resultat->fetch()){ ?>
        
            <div class="col-12 col-sm-4  produit">
                <div class="header_produit">
                    <p class="title_produit"><?php echo($donnees['Nom']); ?><p>   
                </div>
                
                <center><img style="height:300px" class="img-fluid" src="<?php echo '../produit img/'.$donnees['Categorie'].'/'.$donnees['Image_name']?>" ><center>
                
                <p class="para_produit"><?php echo($donnees['Description']); ?><p>
                <h4><span class="badge badge-pill badge-danger"><?php echo($donnees['Prix']); ?> DT</span><h4>
            
                <div class="footer_produit">
                    <div style="display:inline-block;background-color:white">
                    <button type="button" class="btn btn-secondary btn-outline-warning btn-sm" style="padding:8px" >
                        <i class="fa fa-shopping-cart commande_logo"></i><span class="commande_txt">Passer une commande<span> 
                    </button> 
                    </div>
                </div>

                
            </div>
        

        


        <?php }    $resultat->closeCursor();     ?>    

            

        </div>
    
    
    
    </div>






    <?php include("footer.php") ;?>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="../tools/jquery/dist/jquery.min.js"></script>
    <script src="../tools/tether/dist/js/tether.min.js"></script>
    <script src="../tools/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
