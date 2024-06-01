<?php
include 'config.php';

$id = intval($_GET['IDempresa']);

$sql = "SELECT * FROM empresa WHERE IDempresa = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $item = $result->fetch_assoc();
} else {
    echo "Elemento no encontrado.";
    exit();
}
?>

<!-- icon list-->
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
  <head>
    <!-- Site Title-->
    <title>Buscador</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.jpeg" type="image/x-icon">
    <!-- Stylesheets-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <!-- Page-->
      
      <!-- Page Header-->
      <header class="page-header" style="padding-bottom: 24px">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default-with-top-panel" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="90px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-top-panel rd-navbar-collapse">
              <div class="rd-navbar-top-panel-inner">
                <div class="left-side">
                  <div>
                    <a href="index.php"><img src="images/icon.jpeg"></a>
                  </div>
                </div>
                <div class="center-side">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand fullwidth-brand"><a class="brand-name" href="index.php"><h3>GERENCIA BANCARIA Y FINANCIERA</h3></a></div>
                </div>
                <div class="right-side">
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">                
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand mobile-brand"><a class="brand-name" href="index.php"><h3>GERENCIA BANCARIA Y FINANCIERA</h3</a></div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-scroll-holder">
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="index.php">Inicio</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <main>
        <section class="section section-md bg-white text-center">
          <div class="shell">
            <div class="range range-50 range-md-center">
              <div class="cell-sm-8">
                <div class="contact-box">
                  <h3><?php echo $item['Nombre']; ?></h3>
                  <p>Sector de la empresa</p>
                  <h5><?php echo $item['Sector']; ?></h5>
                  <br>
                  <div><img src="images/banner2.jpeg"></div>
                </div>
              </div>
              <div class="cell-sm-4">
                <aside class="contact-box-aside text-left">
                  <div class="range range-50">
                    <div class="cell-xs-6 cell-sm-12">
                      <p class="aside-title">Nit de la empresa</p>
                      <hr class="divider divider-left divider-custom">
                      <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                        <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-account-search icon-primary"></span></div>
                        <div class="unit__body"><a class="text-middle link link-gray-dark"><?php echo $item['Nit']; ?></a></div>
                      </div>
                    </div>
                    <div class="cell-xs-6 cell-sm-12">
                      <p class="aside-title">Tamaño de la empresa</p>
                      <hr class="divider divider-left divider-custom">
                      <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                        <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-briefcase icon-primary"></span></div>
                        <div class="unit__body"><a class="text-middle link link-gray-dark"><?php echo $item['TamEmpresa']; ?></a></div>
                      </div>
                    </div>
                    <div class="cell-xs-6 cell-sm-12">
                      <p class="aside-title">Telefono</p>
                      <hr class="divider divider-left divider-custom">
                      <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                        <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-phone icon-primary"></span></div>
                        <div class="unit__body"><a class="text-middle link link-gray-dark"><?php echo $item['Telefono']; ?></a></div>
                      </div>
                    </div>
                    <div class="cell-xs-6 cell-sm-12">
                      <p class="aside-title">Ubicacion</p>
                      <hr class="divider divider-left divider-custom">
                      <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                        <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-map-marker icon-primary"></span></div>
                        <div class="unit__body"><a class="text-middle link link-gray-dark"><?php echo $item['Direccion']; ?><br><?php echo $item['Barrio']; ?><br><?php echo $item['CodigoPostal']; ?></a></div>
                      </div>
                    </div>
                    <div class="cell-xs-6 cell-sm-12">
                      <p class="aside-title">Correo</p>
                      <hr class="divider divider-left divider-custom">
                      <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                        <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-gmail icon-primary"></span></div>
                        <div class="unit__body"><a class="text-middle link link-gray-dark"><?php echo $item['Correo']; ?></a></div>
                      </div>
                    </div>
                    <div class="cell-xs-6 cell-sm-12">
                      <p class="aside-title">Importador o Exportador</p>
                      <hr class="divider divider-left divider-custom">
                      <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                        <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-shopping icon-primary"></span></div>
                        <div class="unit__body"><a class="text-middle link link-gray-dark"><?php echo $item['ImportExport']; ?></a></div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Footer-->
        <footer class="page-footer text-left text-sm-left bg-secondary-3">
        <div class="shell-wide">
          <div class="page-footer-minimal">
            <div class="shell-wide">
              <div class="range range-50 bg-secondary-3">
                <div class="cell-sm-6 cell-md-3 cell-lg-4 wow fadeInUp" data-wow-delay=".1s">
                  <div class="page-footer-minimal-inner">
                    <h4>Institucion Universitaria</h4>
                    <ul class="list-unstyled">
                      <li>
                        <div class="group-xs"> 
                          <img src="images/logo3.png" height="100px" width="300px">
                        </div>
                      </li>
                      <li>
                        <p class="rights"><span>&copy;&nbsp;</span><span>2024</span><span>&nbsp;</span><span class="copyright-year"></span>Todos los derechos reservados, plataforma de uso didactico y aprendizaje.</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-5 cell-lg-4 wow fadeInUp" data-wow-delay=".2s">
                  <div class="page-footer-minimal-inner">
                    <h4>Sede Principal</h4>
                    <ul class="list-unstyled">
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-map-marker"></span></dt>
                          <dd><a class="link link-gray-darker">Quirinal: Calle 21 No. 6 – 01 / Prado Alto: Calle 8 No. 32 – 490<br>Neiva-Huila, Colombia</a></dd>
                        </dl>
                      </li>
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-phone"></span></dt>
                          <dd class="text-gray-darker">LLamanos: <a class="link link-gray-darker">(608)875 4220 – (608)863 0969</a>
                          </dd>
                        </dl>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-5 cell-lg-4 wow fadeInUp" data-wow-delay=".2s">
                  <div class="page-footer-minimal-inner">
                    <h4>Sede Pitalito</h4>
                    <ul class="list-unstyled">
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-map-marker"></span></dt>
                          <dd><a class="link link-gray-darker">Carrera 2 No. 1 – 27<br>Pitalito-Huila, Colombia</a></dd>
                        </dl>
                      </li>
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-phone"></span></dt>
                          <dd class="text-gray-darker">LLamanos: <a class="link link-gray-darker">(608) 835 0459 – 322 872 9428</a>
                          </dd>
                        </dl>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      </main>
    </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>