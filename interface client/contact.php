<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tools/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="tools/font-awesome/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="tools/bootstrap-social/bootstrap-social.css">


    <title>KeyteK</title>

</head>

<body>
    <?php include("header.php") ;?>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Accueil</a></li>
                <li class="breadcrumb-item active">Contactez Nous</li>
            </ol>
            <div class="col-12">
               <h3>Contactez Nous</h3>
               <hr>
            </div>
        </div>
        <form method="POST" action="../traitement/envoie_feedback.php">
            <div class="form-group row">
                <label for="Nom" class="col-md-2 col-form-label">Nom</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="Prenom" class="col-md-2 col-form-label">Prenom</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Prenom">
                </div>
            </div>
            <div class="form-group row">
                <label for="telnum" class="col-12 col-md-2 col-form-label">Numéro du telephone</label>
                <div class="col-12 col-md-10">
                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Numéro du telephone">
                </div>
            </div>
            <div class="form-group row">
                <label for="emailid" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                </div>
            </div>
           
             <div class="form-group row">
                <label for="Message" class="col-md-2 col-form-label">Message</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="Message" name="Message" rows="12"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-md-2 col-md-10">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </form>



        <div class="row mt-5">
        
            <div class="col-12 col-sm-4 offset-sm-2">
                   <h5 style="font-weight:bold">Nos Coordonnées</h5>
                    <address class="mt-sm-5">
		              Faculté de science<br>
		              El Manar 1<br>
		              Tunis,Tunisie<br>
		              <i class="fa fa-phone"></i>: +216 26.871.743<br>
		              <i class="fa fa-fax"></i>: +216 75.617.695<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:KeyteK@gmail.com">KeyteK@gmail.com</a>
		             </address>
                    
                       <div class="btn-group mb-5 mt-sm-4 " role="group">
                        <a role="button" class="btn btn-primary" href="tel:+216871743"><i class="fa fa-phone"></i> Call</a>
                        <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                        <a role="button" class="btn btn-success" href="mailto:KeyteK@gmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                    
                        </div>
            </div>
            
            <div class="col-12 col-sm-6  ">
                <h5 style="font-weight:bold;text-align:center">Localisation</h5>
                <img  class="img-fluid"src="./img/map.png">
            </div>
           

       
        </div>


</div>

    <?php include("footer.php") ;?>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="tools/jquery/dist/jquery.min.js"></script>
    <script src="tools/tether/dist/js/tether.min.js"></script>
    <script src="tools/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
