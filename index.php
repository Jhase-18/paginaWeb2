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
      <section class="section">
        <div class="shell-wide">
          <div class="range range-30 range-xs-center">
            <div class="cell-lg-12 cell-xl-12">
              <!-- Classic slider-->
              <section class="section">
                <!-- Swiper -->
                <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="images/banner.jpeg">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Directorio Empresarial</h1>
                          <div class="slider-subtitle-group"> 
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Ciudad</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">Neiva -Huila</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            
          </div>
        </div>
      </section>
      <br>
      <section class="bg-secondary-3">
        <div class="container py-2 text-center">
            <br>
            <div class="row g-4">
                <div class=" text-start">
                    <label for="num_registros" class="col-form-label"></label>
                </div>
                <form action="export.php" method="post">
                  <input type="submit" class="btn btn-success" name="export" value="Exportar a Excel">
                </form>
                <div class="col-1 text-start">
                    <select name="num_registros" id="num_registros" class="form-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="col-auto text-start">
                    <label for="num_registros" class="col-form-label">Numero de Registros a ver</label>
                </div>

                <div class="col-md-4 col-xl-5"></div>

                <div class="col-6 col-md-1 text-end">
                    <label for="campo" class="col-form-label">Buscar: </label>
                </div>
                <div class="col-6 col-xs-4 text-end">
                    <input type="text" name="campo" id="campo" class="form-control">
                </div>
            </div>

            <div class="row py-4">
                <div class="col">
                    <table id="tabla" class="table table-sm table-bordered table-striped">
                        <thead>
                            <th class="sort asc">ID</th>
                            <th class="sort asc">Tamaño Empresa</th>
                            <th class="sort asc">Sector Empresa</th>
                            <th class="sort asc">Nit Empresa</th>
                            <th class="sort asc">Nombre</th>
                            <th class="sort asc">Direccion</th>
                            <th class="sort asc">Telefono</th>
                            <th class="sort asc">Ver Mas</th>
                        </thead>

                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row justify-content-between">

                <div class="col-12 col-md-4">
                    <label id="lbl-total"></label>
                </div>

                <div class="col-12 col-md-4" id="nav-paginacion"></div>

                <input type="hidden" id="pagina" value="1">
                <input type="hidden" id="orderCol" value="0">
                <input type="hidden" id="orderType" value="asc">

            </div>
        </div>
    </section>
      <!--Indoor Pool-->
      <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="shell">
          <div class="range range-50 range-md-justify range-sm-middle">
            <div class="cell-sm-6 cell-md-5">
              <h3>Carlos Francisco Tello Perdomo</h3>
              <p>Docente del Programa Administración Bancaria y Financiera.</p>
              <p>Administrador Bancario y Financiero, Especialista en Gerencia de las Organizaciones de la Salud.</p>
            </div>
            <div class="cell-sm-6">
              <div class="box-outline box-outline__mod-1">
                <figure><img src="images/docente.jpeg" alt="" width="546" height="516"/>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Team-->
      <section class="section section-md bg-white">
        <div class="shell">
          <h2>Equipo de trabajo</h2>
          <div class="range range-xs-center range-75">
            <!--team member 1-->
            <div class="cell-sm-4 cell-md-2 wow fadeInUp" data-wow-delay=".1s">
              <div class="team-box box-outline">
                <div class="team-image-box"><img src="images/team1.jpeg" alt="" width="295" height="282"/>
                  <div class="team-image-caption">
                    <ul class="list-inline">
                    </ul>
                  </div>
                </div>
                <div class="team-caption"><a class="link team-title"><h6>EDUARD JIMENEZ VARON</h6></a></div>
              </div>
            </div>
            <!--team member 2-->
            <div class="cell-sm-4 cell-md-2 wow fadeInUp" data-wow-delay=".1s">
              <div class="team-box box-outline">
                <div class="team-image-box"><img src="images/team2.jpeg" alt="" width="295" height="282"/>
                  <div class="team-image-caption">
                    <ul class="list-inline">
                    </ul>
                  </div>
                </div>
                <div class="team-caption"><a class="link team-title"><h6>KAREN GARCÍA GUZMÁN</h6></a></div>
              </div>
            </div>
            <!--team member 3-->
            <div class="cell-sm-4 cell-md-2 wow fadeInUp" data-wow-delay=".1s">
              <div class="team-box box-outline">
                <div class="team-image-box"><img src="images/team3.jpeg" alt="" width="295" height="282"/>
                  <div class="team-image-caption">
                    <ul class="list-inline">
                    </ul>
                  </div>
                </div>
                <div class="team-caption"><a class="link team-title"><h6>KAREN SANCHEZ SALAZAR</h6></a></div>
              </div>
            </div>
            <!--team member 4-->
            <div class="cell-sm-4 cell-md-2 wow fadeInUp" data-wow-delay=".2s">
              <div class="team-box box-outline">
                <div class="team-image-box"><img src="images/team4.jpeg" alt="" width="295" height="282"/>
                  <div class="team-image-caption">
                    <ul class="list-inline">
                    </ul>
                  </div>
                </div>
                <div class="team-caption"><a class="link team-title"><h6>JEINCY GARCIA BOLIVAR</h6></a></div>
              </div>
            </div>
            <!--team member 5-->
            <div class="cell-sm-4 cell-md-2 wow fadeInUp" data-wow-delay=".3s">
              <div class="team-box box-outline">
                <div class="team-image-box"><img src="images/team5.jpeg" alt="" width="295" height="282"/>
                  <div class="team-image-caption">
                    <ul class="list-inline">
                    </ul>
                  </div>
                </div>
                <div class="team-caption"><a class="link team-title"><h6>LUIS LIZCANO MACHADO</h6></a></div>
              </div>
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
    </div>

    <!-- Javascript-->
    <script>
        // Llamando a la función getData() al cargar la página
        document.addEventListener("DOMContentLoaded", getData);

        // Función para obtener datos con AJAX
        function getData() {
            let input = document.getElementById("campo").value
            let num_registros = document.getElementById("num_registros").value
            let content = document.getElementById("content")
            let pagina = document.getElementById("pagina").value || 1;
            let orderCol = document.getElementById("orderCol").value
            let orderType = document.getElementById("orderType").value

            let formaData = new FormData()
            formaData.append('campo', input)
            formaData.append('registros', num_registros)
            formaData.append('pagina', pagina)
            formaData.append('orderCol', orderCol)
            formaData.append('orderType', orderType)

            fetch("load.php", {
                    method: "POST",
                    body: formaData
                })
                .then(response => response.json())
                .then(data => {
                    content.innerHTML = data.data
                    document.getElementById("lbl-total").innerHTML = `Mostrando ${data.totalFiltro} de ${data.totalRegistros} registros`;
                    document.getElementById("nav-paginacion").innerHTML = data.paginacion

                    // Si la página actual no tiene resultados, ajustar la paginación para mostrar la primera página
                    if (data.data.includes('Sin resultados') && parseInt(pagina) !== 1) {
                        nextPage(1); // Ir a la primera página
                    }
                })
                .catch(err => console.log(err))
        }

        // Función para cambiar de página
        function nextPage(pagina) {
            document.getElementById('pagina').value = pagina
            getData()
        }

        // Función para ordenar columnas
        function ordenar(e) {
            let elemento = e.target;
            let orderType = elemento.classList.contains("asc") ? "desc" : "asc";

            document.getElementById('orderCol').value = elemento.cellIndex;
            document.getElementById("orderType").value = orderType;
            elemento.classList.toggle("asc");
            elemento.classList.toggle("desc");

            getData()
        }

        // Event listeners para los eventos de cambio en el campo de entrada y el select
        document.getElementById("campo").addEventListener("keyup", getData);
        document.getElementById("num_registros").addEventListener("change", getData);

        // Event listener para ordenar las columnas
        let columns = document.querySelectorAll(".sort");
        columns.forEach(column => {
            column.addEventListener("click", ordenar);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--Coded by Drel-->
  </body>
</html>