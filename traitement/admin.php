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
     
    <title>admin</title>
</head>

<body>

<!--header-->

<div class="navbar-inverse mb-3" >
    <div class="container">
        <div class="row">
            <div class="col col-sm-5">
            </div>   
            <div class="col col-sm-7">
                <a style="text-decoration:none" href="#"><h2 class="title">Interface Admin</h2></a>
            </div> 
        </div> 
        
    </div>
 </div>

<!--acces menu mot de passe correct-->
<?php
try
{
    $connexion= new PDO("mysql:host=localhost;dbname=Keytek;charset=utf8","root","");
}
catch (Exception $e){
    die("Erreur " .$e->getMessage) ;            
}


$requet=$connexion->query("SELECT * FROM admin") ;
 


function verification($a,$b,$tab)
{
    $verif=0 ;
    while(($resultat=$tab->fetch()) && ($verif==0))
    {
        if ( ($resultat[0]==$a) && ($resultat[1]==$b) )
        {
                $verif=1;
            
        }
    }
    return ($verif) ;

}

if(isset($_POST['pass']) && isset($_POST['pseudo']))
{
    if (verification($_POST['pseudo'],$_POST['pass'],$requet)==1)
    {
        session_start();
        $_SESSION['pseudo']=$_POST['pseudo'] ;
        $_SESSION['pass']=$_POST['pass'] ;
        header('location: ../interface admin/acceuil.php') ;
        
    }

        

else
{


?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 alert alert-danger faux_ad " role="alert" >
            Mot de passe or Pseudo INCORRECT !!
        </div>
        <div class="col-8 faux_bt" >
        <a href="../interface admin/index.php" style="text-decoration:none">
 
            <button type="button"  class="btn btn-lg btn-block btn-warning">Reconnecter</button>
        </a>    
        </div>
    </div>
</div>

<?php } } ?>

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