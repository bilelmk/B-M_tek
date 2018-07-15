<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags always come first -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../interface client/tools/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="../interface client/tools/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="admin.css">
     <link rel="stylesheet" href="../interface client/tools/bootstrap-social/bootstrap-social.css">

    <title>delete</title>
</head>

<body>
    


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-3 offset-sm-2 offset-1">
                    <i class="fa fa-exclamation-triangle supp_logo"></i>
                </div>
                <div class="col-7 mt-sm-3">
                    <h5 style="font-weight:bold;text-align:center">Vous voulez supprimer tous les produits <h5>
                </div>
            </div> 
      </div>
        <div class="modal-footer">
        <form method="POST" action="../traitement/supprimer tout.php">
             <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>


    

<!--header-->

<div class="navbar-inverse mb-3" >
    <div class="container">
        <div class="row">
            <div class="col col-sm-5">
            </div>   
            <div class="col col-sm-7">
                <a  style="text-decoration:none" href="./acceuil.php"><h2 class="title">Interface Admin</h2></a>
            </div> 
        </div> 
        
    </div>
 </div>



<!--form pour supprimer des produit-->

<?php 
    

    try
    {
        $connexion= new PDO("mysql:host=localhost;dbname=Keytek;charset=utf8","root","");
    }
    catch (Exception $e){
        die("Erreur " .$e->getMessage) ;            
    }

    $resultat=$connexion->query("SELECT * FROM Produit") ;
    
    
    ?>







<div class="container">
<div class="col-12">
    <h3>Supprimer Des Produits</h3>
    <hr>
</div>
<div class="row ">
        <div class="col-12 col-sm-4 ajout d-none d-sm-block mt-4 rounded-circle">
            <i class="unlock_logo fa fa-trash"></i>
         </div>

        <div class="col-12 col-sm-7 ml-sm-5">

<form method="POST" action="../traitement/supprimer produit.php">
  <div class="form-group row">
    <label class="col-12" for="Nom">Nom du produit</label>
    <div class="col-12">
    <select class="form-control " name="Nom">

        <?php     while ($donnees=$resultat->fetch()){ ?>

        <option><?php echo $donnees['Nom']; ?></option>

        <?php }    $resultat->closeCursor();     ?>    


    </select>
    </div>
  </div>

  
<button type="submit" class="btn btn-warning">Supprimer</button>
</form>
<br>
<br>
<br>
<br>

<button type="button" class="btn btn-warning btn-block btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
Supprimer Tout
</button>

</form>

</div>
</div>
</div>


 
<!--footer-->

    <footer class="footer mt-3">
        <div class="container">
            <div class="row ">             
                <div class="col align-self-center mb-4">
                    <div style="text-align:center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                                
                     </div>
        
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-aut">
                    <p>© Copyright 2018 B&M_teK</p>
                </div>
           </div>
        </div>
    </footer>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="../interface client/tools/jquery/dist/jquery.min.js"></script>
    <script src="../interface client/tools/tether/dist/js/tether.min.js"></script>
    <script src="../interface client/tools/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>