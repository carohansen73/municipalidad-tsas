  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-scrolled">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"> Ts As<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Municipio</a></li>
          <li><a class="nav-link scrollto" href="#services">Noticias</a></li>

          <li class="dropdown"><a href="#"><span>Servicios</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Servicios</a></li>
              <li class="dropdown"><a href="#"><span></span> Servicios<i class="bi bi-chevron-left"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="#portfolio">Fiesta del Trigo</a></li>
          <li><a class="nav-link scrollto" href="#team">Plan Joven</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="get-started-buttons">
      <a  href="tadi" target="_blank" class="get-started-btn scrollto"> TaDi </a>
      <a href="https://autogestion.tresarroyos.gov.ar/" target="_blank" class="get-started-btn scrollto">Guia Trámites</a>
      <a href="https://autogestion.tresarroyos.gov.ar/" target="_blank" class="get-started-btn scrollto">Autogestión</a>
      </div>

      {{-- {if isset($smarty.session.USER)}
        <p> Bienvenido {($smarty.session.USER)}
      {/if} --}}

    </div>
  </header><!-- End Header -->
