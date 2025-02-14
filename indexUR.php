<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="images/fcc_logo.jpg" />
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>FCC BUAP</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

<!-- <?php session_start(); 

	// if(isset($_SESSION["k_username"]) and $_SESSION["k_tipo"] == 1){
	// }else{
	// 	header("Location:index.php");
	// }

?> -->

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="indexUR.php">
            <span>
              Facultad de Ciencias de la Computaci&oacute;n
              <h1>Bienvenido: <?php echo $_SESSION["k_username"]; ?> </h1>
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="indexUR.php"> Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="cajacomentarios.php"> Portal de comentarios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="howProUR.php"> Acerca de </a>
                </li>
				        <li class="nav-item">
                  <a class="nav-link" href="salir.php"> Cerrar sesi&oacute;n </a>
                </li>
				
              </ul>
              <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Sistema de quejas y sugerencias
                        </h1>
                        <h2>
                          FCC BUAP
                        </h2>
                        <div class="">
                          <a href="cajacomentarios.php">
                            Portal de comentarios
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/fcc_logo.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          ¡Bienvenido  <?php echo $_SESSION["k_username"]; ?> ! 
                        </h1>
                        <h3>
                         Te damos la bienvenida a nuestro sitio web donde podrás hacer sugerencias y expresar tus inconformidades en la Facultad de Ciencias de la Computación (FCC) de la Benemérita Universidad Autónoma de Puebla (BUAP).

                        </h3>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/fcc_logo.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-12">
                    <div class="detail-box">
                      <div>
					  	<h1>
							¡Queremos informarte!
						</h1>
                        <h3>
                          Que toda queja o sugerencia será tomada en cuenta para de esta forma nosotros poder saber que cambios debemos hacer para que tú como estudiante o como persona interesada en formar parte de nuestra facultad puedas sentirte conforme y puedas desarrollarte de la mejor manera como persona y como profesional.
                        </h3><br><br><br><br>
						<div class="col-md-12">
                    <div class="img-box">
                      <img src="images/logo_FCC.jpg" alt="" />
                    </div>
						
                      </div>
                    </div>
                  </div>
				  
                                  </div>
              </div>
            </div>
          </div>
          
          
    </section>
    <!-- end slider section -->
  </div>

 

  <!-- about section -->

  <!-- end about section -->

  <!-- app section -->
  <!-- end app section -->


  <!-- auto section -->

  <!-- end auto section -->

  <!-- client section -->


  <!-- end client section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="" />
              </div>
              <p>Facultad de Ciencias de la Computación BUAP </p>
            </div>
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
</body>

</html>