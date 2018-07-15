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
     
    <title>acceuil</title>
</head>

<body>

<!--header-->

<div class="navbar-inverse mb-3" >
    <div class="container">
        <div class="row">
            <div class="col col-sm-5">
            </div>   
            <div class="col col-sm-7">
                <a style="text-decoration:none" href="./acceuil.php"><h2 class="title">Interface Admin</h2></a>
            </div> 
        </div> 
        
    </div>
 </div>




<div class="container">
    <div class="row justify-content-center">

        <div class="col-12 col-sm-4 carre" style="background-color: #4573d6">
            <a href="./ajouter_produit.php"  style="text-decoration:none">
            <i class="fa fa-plus-circle logo padding"></i>
            <h3 class="text_menu">Ajouter Des Articles</h3>
            </a>

        </div>

        <div class="col-12 col-sm-4 carre" style="background-color: #d67777" >
            <a href="./supprimer_produit.php"  style="text-decoration:none">
            <i class="fa fa-trash logo padding"></i>
            <h3 class="text_menu">Supprimer Des Articles</h3>
            </a>
        </div>
        
        <div class="col-12 col-sm-4 bg-warning carre">
            <a href="./modifier_produit.php"  style="text-decoration:none">
            <i class="fa fa-wrench logo padding"></i>
            <h3 class="text_menu">Modifier Des Articles</h3>
            </a>
        </div>

    </div>
    
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 bg-warning carre" >
            <a href="./message.php" style="text-decoration:none">
            <i class="fa fa-comments logo padding_2"></i>
            <h3 class="text_menu">Voir Les Messages</h3>
            </a>
        </div>

        <div class="col-12 col-sm-6 carre " style="background-color: #70408b">
            <a href="../interface client/index.php"  style="text-decoration:none">
            <i class="fa fa-user-circle logo padding_2"></i>
            <h3 class="text_menu">Voir L'interface Utilisateur</h3>
            </a>
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