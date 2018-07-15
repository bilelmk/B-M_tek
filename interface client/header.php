



    <nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="#"><i style="font-size:120%" class="fa fa-spinner fa-pulse"></i></a>
            
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg logo"></span > <span style="font-weight:bold;color:floralwhite"> Accueil</span > </a></li>
                    <li class="nav-item "><a class="nav-link" href="./a propos.php"><span class="fa fa-info fa-lg logo"></span><span style="font-weight:bold;color:floralwhite"> À propos </span ></a></li>
                    <li class="nav-item "><a class="nav-link" href="./contact.php"><span class="fa fa-address-card fa-lg logo"></span><span style="font-weight:bold;color:floralwhite"> Contactez Nous </span ></a></li>
                    <li class="nav-item "><a class="nav-link" href="./paiement.php"><span class="fa fa-credit-card fa-lg logo"></span><span style="font-weight:bold;color:floralwhite"> Paiement </span ></a></li>
                    <li class="nav-item "><a class="nav-link" href="./livraison.php"><span class="fa fa-bus fa-lg logo"></span><span style="font-weight:bold;color:floralwhite"> Livraisons </span ></a></li>

                </ul>

                <span class="navbar-text mr-3">
                    <a data-toggle="modal" data-target="#sign_in" style="text-decoration:none" ><i style="font-size:140%" class="fa fa-sign-in logo"></i>
                        <span style="color:floralwhite"> Se Connecter</span>
                    </a>
                </span>

                <span class="navbar-text">
                    <a data-toggle="modal" data-target="#sign_up" style="text-decoration:none" ><i style="font-size:120%" class="fa fa-user-plus logo"></i>
                        <span style="color:floralwhite"> Créer un compte</span>
                    </a>
                </span>
             </div>
            
        </div>
    </nav>


    
<!--sign in modal -->
  
    <div id="sign_in" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header sign">
                    <h4 class="modal-title">Se Connecter</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body ">
                <form method="POST" action="../traitement/connecter.php">
                    <div class="container">
                    <div class="row ">
                            <div class="form-group col-sm-6">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control form-control-sm mr-1" id="Email" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pass">Mot de passe</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="pass" placeholder="Mot de passe ">
                            </div>
                        </div>
                    <div class="form-row " style="margin-left:495px">
                            <button type="submit" class="btn btn-warning ">Se Connecter</button>      
                            <button type="button" class="btn btn-secondary  " data-dismiss="modal">Annuler</button>


                    </div>
                </div>

                </form>
               
                </div>
            </div>
        </div>
    </div>
    
    



<!--sign up modal -->
  
<div id="sign_up" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header sign" >
                    <h4 class="modal-title ">Créer un compte</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body ">
                <form method="POST" action="../traitement/creer_compte.php">
                    <div class="container">
                            
                            <div class="form-group  form-row">
                                    <label class="col col-sm-4" for="Nom">Nom</label>
                                    <input class="col col-sm-7" type="text" class="form-control form-control-sm mr-1" id="Nom" placeholder="Nom">
                            </div>
                            
                            <div class="form-group  form-row">
                                    <label class="col col-sm-4" for="Prenom">Prenom</label>
                                    <input class="col col-sm-7" type="text" class="form-control form-control-sm mr-1" id="Prenom" placeholder="Prenom">
                            </div>
                            
                            <div class="form-group  form-row">
                                    <label class="col col-sm-4" for="Email">Email</label>
                                    <input class="col col-sm-7" type="email" class="form-control form-control-sm mr-1" id="Email" placeholder="Email">
                            </div>
                            <div class="form-group form-row">
                                <label class="col col-sm-4" for="pass">Mot de passe</label>
                                <input class="col col-sm-7" type="password" class="form-control form-control-sm mr-1" id="pass" placeholder="Mot de passe ">
                            </div>

                            <div class="form-group form-row">
                                <label class="col col-sm-4" for="conf_pass">Confirmer le mot de passe</label>
                                <input class="col col-sm-7" type="password" class="form-control form-control-sm mr-1" id="conf_pass" placeholder="Confirmer le mot de passe ">
                            </div>
                        
                        </div>


                    <div class="form-row " style="margin-left:517px">
                            <button type="submit" class="btn btn-warning   ">Créer</button>      
                            <button type="button" class="btn btn-secondary  " data-dismiss="modal">Annuler</button>


                    </div>
                

                </form>
               
                </div>
            </div>
        </div>
    </div>
    






    <header class="jumbotron ">
        
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

    <div class="container">

            <nav class="navbar navbar-light navbar-toggleable-sm ">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                            <span class="navbar-toggler-icon"></span>
                        </button>            
                        <div class="row collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav">
                                <li class="nav-item active margin"><a data-toggle="tab" href="#t1"><button class="btn btn-warning col-12 " type="button">Téléphonie & Tablette</button></a></li>
                                <li class="nav-item  margin"><a data-toggle="tab" href="#t2"><button class="btn btn-warning col-12 " type="button">Ordinateur & PC Potable</button></a></li>
                                <li class="nav-item  margin"><a data-toggle="tab" href="#t3"><button class="btn btn-warning col-12" type="button">Périphérique </button></a></li>
                                <li class="nav-item  margin"><a data-toggle="tab" href="#t4"><button class="btn btn-warning col-12" type="button">Image & Son </button></a></li>
                                <li class="nav-item  margin"><a data-toggle="tab" href="#t5"><button class="btn btn-warning col-12" type="button">Stockage & Composants</button></a></li>
                                <li class="nav-item  margin"><a data-toggle="tab" href="#t6"><button class="btn btn-warning col-12" type="button">Gaming </button></a></li>
                                                        
                            </ul>
                        </div>
                        
                        
                    </div>
                    
            </nav>
   
                <div class="tab-content">
                       
                        <div id="t1" class="tab-pane fade ">
                            <ul>
                                <li><a class="menu_l" href="produit/smartphone.php">Smartphone</a></li>
                                <li><a class="menu_l" href="produit/tablette.php">Tablette</a></li>
                                <li><a class="menu_l" href="produit/accessoires tel.php">Accessoires téléphonie</a></li>
                            </ul>
                        </div>


                        <div id="t2" class="tab-pane fade">
                            <ul>
                                <li><a class="menu_l" href="produit/pc portable.php">Ordinateur portable </a> </li>
                                <li><a class="menu_l" href="produit/pc fixe.php"> Ordinateur de bureau</a> </li>
                                <li><a class="menu_l" href="produit/logiciels.php">Logiciels </a> </li>
                            </ul> 
                       </div>




                        <div id="t3" class="tab-pane fade">
                            <ul>
                                <li> <a class="menu_l" href="produit/souris.php"> Souris et Tapis </a> </li>
                                <li> <a class="menu_l" href="produit/casque.php">Écouteur et Micro-casque</a> </li>
                                <li> <a class="menu_l" href="produit/clavier.php">Clavier</a> </li>
                                <li> <a class="menu_l" href="produit/haut parleur.php">Haut parleur</a> </li>
                                <li> <a class="menu_l" href="produit/manette.php"> Manette de jeux</a></li>
                                
                            </ul>
                        </div>


                        <div id="t4" class="tab-pane fade">
                            
                            <ul>
                                <li> <a class="menu_l" href="produit/tele.php">Téléviseur</a> </li>
                                <li> <a class="menu_l" href="produit/app photo.php">Appareil photo </a> </li>
                                <li> <a class="menu_l" href="produit/recepteur.php">Récepteurs Numériques</a> </li>
                                        
                            </ul>
                        </div>


                        <div id="t5" class="tab-pane fade">
                            <ul>
                                <li><a class="menu_l" href="produit/stockage.php">Stockage</a> </li>
                                <li><a class="menu_l" href="produit/carte graphique.php">Carte Graphique</a> </li>
                                <li><a class="menu_l" href="produit/ram.php">Barrette Mémoire</a> </li>

                            </ul>

                       </div>




                        <div id="t6" class="tab-pane fade">
                                <ul>
                                    <li><a class="menu_l" href="produit/pc gamer.php">Pc Gamer</a> </li>
                                    <li><a class="menu_l" href="produit/console.php">Console de jeux</a> </li>
                                    <li><a class="menu_l" href="produit/jeux.php">Jeux videos</a> </li>


                                </ul>
                            
                        </div>
                </div>
                
            </div>

        
 
  
     