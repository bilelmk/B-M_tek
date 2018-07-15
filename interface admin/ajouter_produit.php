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

    <title>add</title>
</head>

<body>

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


<!--form pour l'ajout des produit-->

<div class="container">
<div class="col-12">
    <h3>Ajouter Des Produits</h3>
    <hr>
</div>
<div class="row ">
        <div class="col-12 col-sm-4 ajout d-none d-sm-block mt-4 rounded-circle">
            <i class="unlock_logo fa fa-plus"></i>
         </div>

        <div class="col-12 col-sm-7 ml-sm-5">

<form method="POST" action="../traitement/ajouter produit.php" enctype="multipart/form-data">

  <div class="form-group row">
    <label class="col-12" for="Nom">Nom du produit</label>
    <div class="col-12">
    <input type="text" class="form-control" name="Nom" id="Nom" >
    </div>
  </div>

  <div class="form-group row">
    <label class="col-12" for="Image">Ajouter une image</label>
    <div class="col-12">
        <input type="FILE" name="myimage" id="myimage" class="form-control-file">

    </div>
    </div>

    <div class="form-group row">
    <label class="col-12 col-sm-3" for="prix">Prix</label>
    <div class="col-12 col-sm-9">
    <input type="text" class="form-control" name="prix" id="prix" >
    </div>
  </div>

 
  <div class="form-group row">
    <label class="col-12 col-sm-3" >Catégorie</label>
    <div class="col-12 col-sm-9">
    <select class="form-control " name="Categorie">
        <optgroup label="Téléphonie & Tablette">
            <option>Smartphone</option>
            <option>Tablette</option>
            <option>Accessoires téléphonie</option>
        </optgroup>    

        <optgroup label="Ordinateur & PC Potable">
            <option>Ordinateur portable</option>
            <option>Ordinateur de bureau</option>
            <option>Logiciels</option>
        </optgroup>  

        <optgroup label="Périphérique">
            <option>Souris et Tapis </option>
            <option>Écouteur et Micro-casque</option>
            <option>Clavier</option>
            <option>Haut parleur</option>
            <option>Manette de jeux</option>

        </optgroup>

        <optgroup label="Image & Son">
            <option>Téléviseur</option>
            <option>Appareil photo</option>
            <option>Récepteurs Numériques</option>
        </optgroup>
        
        <optgroup label="Stockage & Composants">
            <option>Stockage</option>
            <option>Carte Graphique</option>
            <option>Barrette Mémoire</option>
        </optgroup>

        <optgroup label="Gaming">
            <option>Pc Gamer</option>
            <option>Console de jeux</option>
            <option>Jeux videos</option>

        </optgroup>  
      </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-12" for="Description">Description de produit</label>
    <div class="col-12">   
        <textarea class="form-control " id="Description" name="Description" rows="3"></textarea>
    </div>
</div>  
    <button type="submit" class="btn btn-warning">Ajouter</button>
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





</body>
</html>