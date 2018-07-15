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
     <link rel="stylesheet" href="../interface client/style.css">
     <link rel="stylesheet" href="../interface client/tools/bootstrap-social/bootstrap-social.css">

    <title>BMteK</title>
</head>

<body>


<!--Header-->

<nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="#"><i style="font-size:120%" class="fa fa-spinner fa-pulse"></i></a>
            
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a class="nav-link" href="../interface client/index.php"><span class="fa fa-home fa-lg logo"></span > <span style="font-weight:bold;color:floralwhite"> Accueil</span > </a></li>
                    <li class="nav-item "><a class="nav-link" href="../interface client/a propos.php"><span class="fa fa-info fa-lg logo"></span><span style="font-weight:bold;color:floralwhite"> À propos </span ></a></li>
                    <li class="nav-item "><a class="nav-link" href="../interface client/contact.php"><span class="fa fa-address-card fa-lg logo"></span><span style="font-weight:bold;color:floralwhite"> Contactez Nous </span ></a></li>
                    <li class="nav-item "><a class="nav-link" href="../interface client/paiement.php"><span class="fa fa-credit-card fa-lg logo"></span><span style="font-weight:bold;color:floralwhite"> Paiement </span ></a></li>
                    <li class="nav-item "><a class="nav-link" href="../interface client/livraison.php"><span class="fa fa-bus fa-lg logo"></span><span style="font-weight:bold;color:floralwhite"> Livraisons </span ></a></li>

                </ul>

                 <span class="navbar-text">
                    <a href="../interface admin/index.php"><span class="fa fa-lock logo">  Admin</span></a>
                </span>
             </div>
            
        </div>
    </nav>
    

    
        


    <header class="jumbotron mb-4 mb-sm-5">
        
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-5">
                    
                </div>
                <div class="col-12 col-sm-7">
                    <div class="row align-items-center">
                        <div class="col-1 col-sm-1 ">
                            <i class="fa fa-phone logo_v"></i>
                        </div> 

                        <div class="col-2 col-sm-3 text_v" >
                            <h7 style="font-weight:bold"> Service Client</h7>
                            <p>26871743</p> 
                        </div> 

                        <div class="col-1 col-sm-1">
                            <i class="fa fa-truck logo_v"></i>
                        </div>
                        <div class="col-2 col-sm-3 text_v" >
                            <h7 style="font-weight:bold"> Ventes en Ligne</h7>
                            <p>26871743</p> 
                        </div> 


                        <div class="col-1 col-sm-1">
                             <i class="fa fa-cart-plus logo_v"></i>
                        </div>
                        <div class="col-2 col-sm-3 text_v" >
                            <h7 style="font-weight:bold"> Service Entreprises</h7>
                            <p>26871743</p> 
                        </div> 

                    </div>
                    
                </div>
               
            </div>
        </div>
    </header>

    
<!-- Envoie mesaage-->

<?php


$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Tel=$_POST['telnum'];
$Email=$_POST['emailid'];
$Message=$_POST['Message'];
$date=Date('y-m-d H:i:s');

try{
        $connexion = new PDO('mysql:host=localhost;dbname=Keytek;charset=utf8','root','');

}
catch(Exception $e){
        die('Erreur'.$e->getMessage()) ;
}

$requet = $connexion->prepare('INSERT INTO Message(Nom,Prenom,Tel,Email,Msg,Date_Heure)
VALUES(:Nom, :Prenom, :Tel, :Email, :Msg , :Date_Heure)') ;
$requet->execute(array(
        'Nom' => $Nom ,
        'Prenom'=> $Prenom ,
        'Tel'=> $Tel ,
        'Email'=> $Email ,
        'Msg'=> $Message ,
        'Date_Heure'=> $date 


));
echo ('<div class="alert alert-success" role="alert" 
style="font-weight:bold;height:90px;padding-top:30px">
Votre message a été envoyé avec succés
</div>');




        


?>



<!--Footer-->

<footer class="footer mt-4 mt-sm-5">
        <div class="container">
            <div class="row">             
                <div class="col-3 col-sm-2">
                    <h5>Liens</h5>
                    <ul class="list-unstyled">
                        <li><a class="footer_lien" href="../interface client/index.php">Accueil</a></li>
                        <li><a class="footer_lien" href="../interface client/a propos.php">A propos</a></li>
                        <li><a class="footer_lien" href="../interface client/contact.php">Contactez Nous</a></li>
                        <li><a class="footer_lien" href="../interface client/paiement.php">Paiement</a></li>
                        <li><a class="footer_lien" href="../interface client/livraison.php">Livraison</a></li>

                    </ul>
                </div>
                <div class="col-7 offset-1 offset-sm-0 col-sm-5" >
                    <h5>Nos Coordonnées</h5>
                    <address>
                    Faculté de science<br>
		            El Manar 1<br>
		            Tunis,Tunisie<br>
                      <i class="fa fa-phone fa-lg"></i>: +216 26.871.743<br>
		              <i class="fa fa-fax fa-lg"></i>:  +216 75.617.695<br>
		              <i class="fa fa-envelope-o fa-lg"></i>: <a class="footer_lien" href="mailto:KeyteK@gmail.com">KeyteK@gmail.com</a>
		           </address>
                </div>
                <div class="col col-sm-4 align-self-center">
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