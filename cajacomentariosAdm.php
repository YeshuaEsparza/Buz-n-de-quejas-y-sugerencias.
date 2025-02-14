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
  <link href="css/style2.css" rel="stylesheet" />
  <!-- responsive style -->
  <link rel="stylesheet" href="css/cajaStyle.css">
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <?PHP session_start();

  if (isset($_SESSION["k_username"]) and $_SESSION["k_tipo"] == 0) {
  } else {
    header("Location:index.php");
  }

  ?>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="indexUR.php">
            <span>
              Facultad de Ciencias de la Computación
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
                <li class="nav-item">
                  <a class="nav-link" href="indexAdm.php"> Inicio </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="cajacomentariosAdm.php"> Portal de comentarios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="howProAdm.php"> Acerca de </a>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="">
              <?PHP

              include "conexionbd.php";
              $k_username = $_SESSION["k_username"];
              $link = Conectarse();
              $result = mysqli_query($link, "SELECT* FROM comentarios");
              $result3 = mysqli_query($link, "SELECT * FROM usuario WHERE nombre = '$k_username'");
              $fila = mysqli_fetch_row($result3);
              $id_usuario = $fila[0]; 
              //echo $id_usuario;
              


              $autorNuevo = $_SESSION["k_user"];
              
              echo "
                          <div class='contenedor-principal'>
                          <h1>Sistema de quejas y sugerencias</h1>
                          <br>
                          <ul id='lista-comentarios' class='lista-comentarios'>
                          ";

                          while ($row = mysqli_fetch_array($result)) {
                            $comentario = $row['comentario'];
                            $id_autor = $row['id_autor'];
                        
                            $r = mysqli_query($link, "CALL autor_comentario($id_autor)");
                            $r2 = mysqli_fetch_array($r);
                            $name = $r2['user_name'];
                            $result2 = mysqli_query($link, "SELECT * FROM usuario WHERE user_name = '$name'");
                            
                        
                            while (mysqli_more_results($link) && mysqli_next_result($link)) {
                                $extraResult = mysqli_use_result($link);
                                if ($extraResult) {
                                    mysqli_free_result($extraResult);
                                }
                            }
                        
                            $comentario = $row['comentario'];
                            $media = $row['media'];
                            $fileType = strtolower(pathinfo($media, PATHINFO_EXTENSION));
                            $fecha = $row['fecha_publi'];
                            $respuesta = $row['respuesta'];
                            $fecha_respuesta = $row['fecha_respuesta'];
                        
                            if ($respuesta == null) {
                              $respuesta = "
                              <form action='responder_comentario.php' method='POST'>
                                <textarea name='respuesta' cols='85' rows='3' placeholder='Responder a este comentario'></textarea>
                                <input type='hidden' name='comentario' value='$comentario'>
                                <input type='submit' value='Responder'>
                              </form>
                              <br>
                              ";
                            }
                        
                            echo "
                                <li>
                                    <div class='comentario-superior'>
                                        <div class='avatar-comentario'>
                                            <img src='images/avatar.jpg' alt=''>
                                        </div>
                                        <div class='contener-comentario'>
                                            <div class='encabezado-comentario'>
                                                <h6 class='autor-comentario por-usuario'>$name</h6>
                                                <span>$fecha</span>
                                                <i class='fa fa-reply'></i>
                                            </div>
                                            <div class='contenido-comentario'>
                                                $comentario <br>";
                            
                            if ($fileType == "jpg" || $fileType == "jpeg" || $fileType == "png" || $fileType == "gif") {
                                echo "<img src='media_comentarios/$media' alt='' width='180'>";
                            } else if ($fileType == "mp4" || $fileType == "avi" || $fileType == "mov" || $fileType == "wmv") {
                                echo "<video width='320' height='240' controls>
                                        <source src='media_comentarios/$media' type='video/mp4'>
                                      </video>";
                            }
                        
                           //if ($id_usuario == $id_autor) {
                                echo "<form action='delete_commentAdm.php' method='POST'>
                                        <input type='hidden' name='comentario' value='$comentario'>
                                        <input type='submit' value='Eliminar'>
                                      </form>";
                            //}
                        
                            echo "          </div>
                                        </div>
                                    </div>
                                    <ul class='lista-comentarios reply-list'>
                                        <li>
                                            <div class='avatar-comentario'>
                                                <img src='images/admin.jpg' alt=''>
                                            </div>
                                            <div class='contener-comentario'>
                                                <div class='encabezado-comentario'>
                                                    <h6 class='autor-comentario'>Administrador</h6>
                                                    <span>$fecha_respuesta</span>
                                                    <i class='fa fa-reply'></i>
                                                </div>
                                                <div class='contenido-comentario'>
                                                    $respuesta
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <br>
                                </li>";
                        }
                        ?>
              
            </div>



          </div>
        </div>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript"
          src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
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