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
     <link rel="stylesheet" href="../interface admin/admin.css">
     <link rel="stylesheet" href="../interface client/tools/bootstrap-social/bootstrap-social.css">

    <title>update</title>

    

</head>

<body>


<!--header-->

<div class="navbar-inverse mb-3" >
    <div class="container">
        <div class="row">
            <div class="col col-sm-5">
            </div>   
            <div class="col col-sm-7">
                <a style="text-decoration:none" href="../interface admin/acceuil.php"><h2 class="title">Interface Admin</h2></a>
            </div> 
        </div> 
        
    </div>
 </div>

  
   
<!-- ajout des donnees-->

<?php




$Nom=$_POST['Nom'];
$Nouveau_nom=$_POST['Nouveau_nom'] ;
$Prix=$_POST['prix'];
$Categorie=$_POST['Categorie'];
$Description=$_POST['Description'];
$imagename=$_FILES['myimage']['name'];    


try{
        $connexion = new PDO('mysql:host=localhost;dbname=Keytek;charset=utf8','root','');

}
catch(Exception $e){
        die('Erreur'.$e->getMessage()) ;
}

$requet = $connexion->prepare(' UPDATE Produit SET Nom= :Nouveau_nom , Prix= :Prix , Categorie= :Categorie
, Description= :Description , Image_name= :imagename  WHERE Nom= :Nom ') ;

$requet->execute(array(
	'Nouveau_nom' => $Nouveau_nom,
	'Prix' => $Prix,
    'Categorie' => $Categorie,
    'Description' => $Description,
	'imagename' => $imagename,
	'Nom' => $Nom 
	));

 

echo ('

    <div class="alert alert-success ajout_produit" role="alert" >
         Produit modifié avec succés
    </div>
    
    <div class="col-10 col-sm-6 offset-1 offset-sm-3 " style="margin-bottom:100px">
        <a href="../interface admin/modifier_produit.php " style="text-decoration:none"><button type="button" class="btn btn-warning btn-block btn-lg" >
        Modifier d\'autres produits
        </button>
        </a>
    </div>    

');

?>




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