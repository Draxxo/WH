<!DOCTYPE HTML>
<html>
	<head>
		
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>Accueil</title>
        
        <!--CSS-->
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/animate.css" >
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        
        <!--Javascript-->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>  
        <script src="js/wow.js"></script>
        
	</head>

	<body>

		<!-- Tout -->
		<div class="contents">
        
        	<header>
            
                <!-- barre de navigation -->
                <nav class="navbar navbar-inverse">
                	<div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="images/wh.png" alt="logo" /></a>
                        </div>
                        
                        <div id="navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Accueil</a></li>
                                <li><a href="#Homme">Homme</a></li>
                                <li><a href="#Femme">Femme</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <!-- <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </li>-->
                                <li> <form class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                        	<input type="text" class="form-control" placeholder="Search..." size="15" />
                                        </div>
                                     </form> 
                                </li>
                            </ul>
                        </div>
					</div>
                </nav>
            
            	<!--diaporama-->
            	<div class="slide">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators : si ajout d'image ajout ici aussi -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <!-- Images -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active"> <img src="images/Best.png" alt="logo"/> </div>
                            <div class="item"> <img src="images/Bienvenue.png" alt="logo"/> </div>
                            <div class="item"> <img src="images/test.png" alt="logo" /> </div>
                        </div>
                        
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                
			</header>
            
            
            <!-- Section -->
            <section> 
            
            	<script>
					new WOW().init();
				</script>
            	<div class="ensembleT">
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                    <img src="images/T-shirt.png" class="wow fadeInUp" data-wow-duration="2s" alt="test" />
                  
                    <div>
                    <h1>INFORMATION</h1>
                    </div>            
                </div>
            </section>
            
            
            <!-- Footer -->
            <footer> 
            	<a href="#" ><img src="images/fb.png" alt="facebook" /></a>
                <a href="#" ><img src="images/tw.png" alt="twitter" /></a>
                <a href="#" ><img src="images/g.png" alt="google" /></a>
                
                <div class="text">
                	<a href="#" >Accueil</a> / <a href="#" >Homme</a> / <a href="#" >Femme</a> / <a href="#" >Contact</a> <br>
                	Create by <a href="#">Alexis Prevost-Maynen</a> with <a href="#">bootstrap</a> and <a href="#">wow.js</a>
                </div>
            </footer>
        
        </div>
	
	</body>

</html>