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

    <title>message</title>
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





<!--recuperer les messages-->


<div class="container" >
    <?php
        try
        {
            $connexion= new PDO("mysql:host=localhost;dbname=Keytek;charset=utf8","root","");
        }
        catch (Exception $e){
            die("Erreur " .$e->getMessage) ;            
        }

        $resultat=$connexion->query("SELECT * FROM Message") ;
        
        while ($donnees=$resultat->fetch()){
            
        ?>
        <div class="msg">
            <h7> <?php echo 'Le '.$donnees['Date_Heure']; ?> </h7>
            <br>
            <br>
            <h5 class="inline" style="color:black;font-weight:bold">L'émetteur :</h5>
            <h5 class="inline" style="color:black"><?php echo  $donnees['Nom'].' '.$donnees['Prenom']  ; ?> </h5>
            <br>
            <h5 class="inline" style="color:black;font-weight:bold">TEL :</h5>
            <h5 class="inline" style="color:black"><?php echo  $donnees['Tel']  ; ?> </h5>
            <br>
            <h5 class="inline " style="color:black;font-weight:bold">Email :</h5>

            <div class="limite">
            <h5 class="inline " style="color:black"><?php echo  $donnees['Email']  ; ?> </h5>
            </div>
            <br>
            <h5 class="inline" style="color:black;font-weight:bold">Message :</h5>
            <div class="limite">
                <p style="color:black"> <?php echo  $donnees['Msg']  ; ?> </p>
            </div>


            
        </div>
        <?php
        }
        $resultat->closeCursor();                        

        ?>
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