<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.style.css">
        <script src="/js/progressbar.min.js"></script>
        <script src="https://kit.fontawesome.com/64e14fbeb3.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;0,800;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    </head>
    
    <body>
      <header>
        <div class="container" id="nav-container">
          <nav class="navbar navbar-expand-lg fixed-top">
          <a class="navbar-brand" href="/">
            <img src="/image/logo2.png" alt="MaxSyst" id="logo"> MaxSyst
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <a class="nav-item nav-link" href="/" id="home-menu">Home </a>
                <a class="nav-item nav-link" href="/pages/empresa" id="about-menu">A empresa </a>
                <a class="nav-item nav-link" href="/pages/servicos" id="services-menu">Serviços </a>
                <a class="nav-item nav-link" href="/pages/equipe" id="team-menu">Equipe </a>
                <a class="nav-item nav-link" href="/" id="portfolio-menu">Projetos </a>
                <a class="nav-item nav-link" href="/" id="contact-menu">Contato </a>
          </div>
        </nav>
        </div>
      </header>
      <main>
        <div class="container-fluid">
          <div class="carousel slide" id="mainSlider" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
              <li data-target="#mainSlider" data-slide-to="1"></li>
              <li data-target="#mainSlider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" id="carousel-inner">
              <div class="carousel-item active">
                <img src="/image/logo.png" class="d-block w-100" alt="MaxTEC">
                <div class="carousel-caption d-none d-md-block">
                  <h3>MaxTec Site</h3>
                  <p>Conteudo da descrição do slide</p>
                  <a href="#" class="main-btn">Ver os projetos</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/image/logo1.png" class="d-block w-100" alt="MaxTEC">
                <div class="carousel-caption d-none d-md-block">
                  <h3>MaxTec Site</h3>
                  <p>Ingenieros altamento qualificados para lhe atender</p>
                  <a href="#" class="main-btn">Ver os projetos</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/image/ev1.jpg" class="d-block w-100" alt="MaxTEC">
                <div class="carousel-caption d-none d-md-block">
                  <h3>MaxTec Site</h3>
                  <p>Nossa equipe de desenvolvimento</p>
                  <a href="#" class="main-btn">Ver os projetos</a>
                </div>
              </div>
            </div>
            <a href="#mainSlider" id="" class="carousel-control-prev" role="button" data-slide="prev" >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Preview </span>
            </a>
            <a href="#mainSlider" id="" class="carousel-control-next" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next </span>
            </a>
          </div>
        </div>
      </main>

      
        @yield('content')

        <footer>
          <p>Max-Feeds</p>
          <p>https://www.youtube.com/watch?v=fWbxdmeo3BY&list=PLnDvRpP8Bnexu5wvxogy6N49_S5Xk8Cze&index=3</p>
          <p>https://www.youtube.com/watch?v=_EFEwCQRXBY</p>
          <p>https://www.youtube.com/watch?v=O0enF2nVBNE&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=9</p>
        </footer>

        <script src="/js/scripts.js" language="javascript"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
