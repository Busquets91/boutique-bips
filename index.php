﻿<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Boutique en ligne du Bureau des Ingénieur de Paris-Sud">
    <meta name="author" content="Maxime Dufour - Alexis Pointurier">
    <meta name="keywords" content="pps">

    <title>
        Polytech Paris-Sud: Boutique
    </title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- main stylesheet -->
    <link href="css/style.blue.css" rel="stylesheet" id="theme-stylesheet">

    <!-- custome stylesheet -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">

</head>

<body>
	<!--NAVBAR-->
	<div class="navbar navbar-default yamm" role="navigation" id="navbar">
		<!---MODAL LOGIN POP-UP--->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="Login">Connexion</h4>
					</div>
					<div class="modal-body">
						<form action="customer-orders.html" method="post">
							<div class="form-group">
								<input type="text" class="form-control" id="email-modal" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password-modal" placeholder="Mot de passe">
							</div>
							<p class="text-center">
								<button class="btn btn-primary"><i class="fa fa-sign-in"></i> Connexion</button>
							</p>
						</form>
						<p class="text-center text-muted">Pas encore inscrit?</p>
						<p class="text-center text-muted"><a href="register.html"><strong>S'inscrire</strong></a>! C'est facile et cela vous donnes accés à toutes les fonctionnalités de la Boutique !</p>
					</div>
				</div>
			</div>
		</div>
		<!---END LOGIN POP-UP--->
		<div class="container">
			<!---NAVBAR HEADER-->
			<div class="navbar-header">
				<a class="navbar-brand home" href="index.html">
					<img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
					<img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">La Boutique - Accueil</span>
				</a>
				<div class="navbar-buttons">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-align-justify"></i>
					</button>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle search</span>
						<i class="fa fa-search"></i>
					</button>
					<a class="btn btn-default navbar-toggle" href="basket.html">
						<i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">2 articles</span>
					</a>
				</div>
			</div>
			<!---END NAVBAR HEADER-->
			<!---MAIN NAVBAR-->
			<div class="navbar-collapse collapse" id="navigation">
				<ul class="nav navbar-nav navbar-left">
					<li class="active">
						<a href="index.html">Accueil</a>
					</li>
					<li>
						<a href="category.html">Catalogue</a>
					</li>
					<li>
						<a href="#">Informations</a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#login-modal">Connexion</a>
					</li>
					<li>
						<a href="register.html">Inscription</a>
					</li>
				</ul>
			</div>
			<!---END MAIN NAVBAR-->
			<!---NAVBAR SEARCH AND CART-->
			<div class="navbar-buttons">
				<div class="navbar-collapse collapse right" id="basket-overview">
					<a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">2 articles</span></a>
				</div>
				<div class="navbar-collapse collapse right" id="search-not-mobile">
					<button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle search</span>
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
			<!---END NAVBAR SEARCH AND CART-->
			<!---SEARCH COMPONENT-->
			<div class="collapse clearfix" id="search">
				<form class="navbar-form" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Rechercher">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
			</div>
			<!---END SEARCH COMPONENT-->
		</div>
	</div>
	<!--NAVBAR END-->

    <script src="js/jquery-1.11.0.min.js"></script>
   
	<div id="all">
		<!--CONTENU-->
        <div id="content">
            <!--CONTAINER CARROUSEL-->
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="img/main-slider1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTAINER CARROUSEL-->

            <!--STYLE AGUICHANT-->

            <div id="advantages">
                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">Fier de notre école</a></h3>
                                <p>Portez fiérement les couleurs marron/or de votre école.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Livraison à la MDI</a></h3>
                                <p>Faites vous livrez votre sweat aux couleurs de votre école directement à la MDI !</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% sécurisé</a></h3>
                                <p>Via notre platforme, vous pouvez commander et payer en toute sécurité.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--STYLE AGUIHCANT END-->

            <!-- PRODUCT OF THE WEEK -->
            <div id="hot">
                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Nouveautés</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="product-slider">
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="img/product1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="#">Super déguisement toilettes</a></h3>
                                    <p class="price">17€</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="#">Joli déguisement un peu vulgaire</a></h3>
                                    <p class="price"><del>18€</del>12€</p>
                                </div>
                                <div class="ribbon sale">
                                    <div class="theribbon">SOLDE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="#">Joli Cafard marron</a></h3>
                                    <p class="price">17€</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="#">Costume de Karl #Polytech</a></h3>
                                    <p class="price">91€</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="#">Déguisement toujours aussi vulgaire</a></h3>
                                    <p class="price">25€</p>
                                </div>
                                <div class="ribbon sale">
                                    <div class="theribbon">SOLDE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="img/product1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="#">Déguisement de type WC</a></h3>
                                    <p class="price">17€</p>
                                </div>

                                <div class="ribbon gift">
                                    <div class="theribbon">HOT</div>
                                    <div class="ribbon-background"></div>
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="#">Joli déguisement un peu vulgaire</a></h3>
                                    <p class="price"><del>18€</del>12€</p>
                                </div>
                                <div class="ribbon sale">
                                    <div class="theribbon">SOLDE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="#">Joli Cafard marron</a></h3>
                                    <p class="price">17€</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->

            </div>
            <!-- END PRODUCT OF THE WEEK -->

            <!--STYLE BLOG-->
            <!--
            <div class="container">

                <div class="col-md-12" data-animate="fadeInUp">

                    <div id="blog-homepage" class="row">
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Fashion now</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Who is who - example blog post</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    -->
            <!--STYLE BLOG END-->

            <!-- *** BLOG HOMEPAGE END *** -->

        </div>
        <!--END CONTENU-->
		
        <!-- *** COPYRIGHT *** -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2017 APP de l'ambiance</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Site réalisé par Alexis Pointurier et Maxime Dufour
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->
    </div>
	<!-- *** SCRIPTS TO INCLUDE *** -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
</body>
</html>