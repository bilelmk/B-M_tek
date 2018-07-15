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

    <title>login</title>
</head>

<body>

<!--header-->

<div class="navbar-inverse mb-5" >
    <div class="container">
        <div class="row">
            <div class="col col-sm-5">
            </div>   
            <div class="col col-sm-7">
                <a  style="text-decoration:none" href="#"><h2 class="title">Interface Admin</h2></a>
            </div> 
        </div> 
        
    </div>
 </div>


<!--connection-->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-4 unlock d-none d-sm-block">
            <i class="unlock_logo fa fa-unlock-alt"></i>
         </div>

        <div class="col-12 col-sm-8 login">
        <form method="POST" action="../traitement/admin.php">
            <div class="form-group">
                <label class="col offset-sm-1 mt-4" for="Pseudo">Pseudo</label>
                <input class="col-10 offset-sm-1" type="text" class="form-control" id="psedo" name="pseudo" placeholder="pseudo">
            </div>
            
            <div class="form-group">
                <label class="col offset-sm-1 mt-4" for="mot_de_passe ">Mot de passe</label>
                <input class="col-10 offset-sm-1" type="password" class="form-control" id="mp" name="pass" placeholder="mot de passe">
            </div>
  
                <button type="submit" class="btn btn-warning offset-sm-1 mt-4 ">Se Connecter</button>
            </form>            
        </div>
    </div>
</div>



 
<!--footer-->

    <footer class="footer mt-5">
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