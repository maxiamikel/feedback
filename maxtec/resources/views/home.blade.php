<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxisotf, software and Tecnology</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>

<body>
    <header>
        <div class="container" id="nav-container">
            <!-- add essa class -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                <a class="navbar-brand" href="index.html">
                    <span class="title1">Maxi</span><span class="title2">Soft</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link" id="home-menu" href="#">Home</a>
                        <a class="nav-item nav-link" id="about-menu" href="#">Quem somos</a>
                        <a class="nav-item nav-link" id="services-menu" href="#">Nossos Servi&ccedil;os</a>
                        <a class="nav-item nav-link" id="team-menu" href="#">A Equipe</a>
                        <a class="nav-item nav-link" id="portfolio-menu" href="#">Projetos</a>
                        <a class="nav-item nav-link" id="contact-menu" href="#">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <!-- slider -->
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.png" class="d-block w-100" alt="Projetos de e-commerce">

                        <!-- tirar classe d-none -->

                        <div class="carousel-caption d-md-block">
                            <h2>Quer criar um e-commerce?</h2>
                            <p>Conte conosco, temos mais de 10 lojas no portf&oacute;lio.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.png" class="d-block w-100" alt="Engenharia de software">
                        <div class="carousel-caption d-md-block">
                            <h2>Est&aacute; querendo tirar o projeto do papel?</h2>
                            <p>Nossa equipe de engenharia de software est&aacute; pronta para lhe atender.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" class="d-block w-100" alt="Manutenção em software">
                        <div class="carousel-caption d-md-block">
                            <h2>Est&aacute; buscando manuten&ccedil;&atilde;o no seu software?</h2>
                            <p>MaxiSoft conta com engenheiros altamente qualificados para resolver seu problema.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Sobre a empresa -->
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Maxisotf, software and Tecnology</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="img/empresa1.jpg" alt="Maxisotf, software and Tecnology">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Uma empresa refer&ecirc;nciada em software</h3>
                            <p>Nossos projetos s&atilde;o adaptados ao cliente e seu prop&oacute;sito.</p>
                            <p>Ap&oacute;s a especifica&ccedil;&atilde;o do projetos os arquitetos de software definir&atilde;o as melhores tecnologias para seu projeto.</p>
                            <p>Nossos designers trabalhar&atilde;o na sua layout para impulsionar o neg&oacute;cio.</p>
                            <p>Nosso time de teste est&aacute; sempre realizando os testes para entregar um produto com mais qualidade.</p>
                            <p>Veja outras qualificados:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i> Layout responsivo para todos os dispositivos</li>
                                <li><i class="fas fa-check"></i> Integra&ccedil;&atilde;o com diversos sistemas do mercado</li>
                                <li><i class="fas fa-check"></i> Sistema independente</li>
                                <li><i class="fas fa-check"></i> Desenvolvimento do produto conforme a necessidade do cliente</li>
                                <li><i class="fas fa-check"></i> Desenvolvimento de prot&oacute;tipo para simular o produto.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Serviços da empresa -->
            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nossas especialidades</h3>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Aplicativos Nativos</h4>
                            <p>Utilizamos o real poder dos dispositivos m&oacute;veis construindo aplicativos nativos.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-shopping-cart"></i>
                            <h4>E-commerces</h4>
                            <p>Temos uma plataforma pr&uacute;pria de e-commerce que se adapta a qualquer regra de neg&uacute;cio.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-paint-brush"></i>
                            <h4>Design Criativo</h4>
                            <p>Nossos designers são especializados em UI/UX e também possuem vasta experi&ecirc;ncia no mercado de software.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fab fa-google"></i>
                            <h4>Experts em SEO</h4>
                            <p>Com nosso servi&ccedil;o de marketing seu site será melhor posicionado no Google e vender&aacute; mais.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-hands-helping"></i>
                            <h4>Suporte 24/7</h4>
                            <p>Voc&ecirc; sempre ter&aacute; alguem da equipe dispon&iacute;vel para suporte, em diferentes plataformas.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-server"></i>
                            <h4>Experi&ecirc;ncia em servidores</h4>
                            <p>Garantimos uptime e também r&aacute;pido tempo de resposta do seu site para o seu cliente.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dados da empresa -->
            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6 circle-box">
                            <div id="circleA"></div>
                            <p>Projetos entregues</p>
                        </div>
                        <div class="col-md-3 col-xs-6 circle-box">
                            <div id="circleB"></div>
                            <p>Clientes Felizes</p>
                        </div>
                        <div class="col-md-3 col-xs-6 circle-box">
                            <div id="circleC"></div>
                            <p>Colaboradores</p>
                        </div>
                        <div class="col-md-3 col-xs-6 circle-box">
                            <div id="circleD"></div>
                            <p>Caf&eacute;zinhos</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Time -->
            <div id="team-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nossa equipe</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/foto1.jpg" class="card-img-top" alt="maxisotf user perfil">
                                <div class="card-body">
                                    <h5 class="card-title">Amikel Maxi C</h5>
                                    <p class="card-text">Software Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/foto1.jpg" class="card-img-top" alt="maxisotf user perfil">
                                <div class="card-body">
                                    <h5 class="card-title">Myrlande Louissaint Maxi</h5>
                                    <p class="card-text">SEO Consultant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/foto1.jpg" class="card-img-top" alt="maxisotf user perfil">
                                <div class="card-body">
                                    <h5 class="card-title">Amikel Maxi Celestin</h5>
                                    <p class="card-text">Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/foto1.jpg" class="card-img-top" alt="maxisotf user perfil">
                                <div class="card-body">
                                    <h5 class="card-title">J&eacute;ssica Louis</h5>
                                    <p class="card-text">UX/UI Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trabalhe conosco -->
            <div id="apply-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 apply-box" id="company-img"></div>
                        <div class="col-md-6 apply-box" id="pattern-img">
                            <h4>Vem com a gente!!</h4>
                            <p>Temos v&aacute;rias posi&ccedil;&otilde;es abertas, entre elas: Software Engineer, UI/UX Designer, Project Manager e mais.</p>
                            <p>Clique no bot&atilde;o abaixo e confira os benef&iacute;cios e as posi&ccedil;&otilde;es em aberto.</p>
                            <p>Aqui voc&ecirc; tem a chance de trabalhar com as melhores tecnologias e os profissionais mais capacitados.</p>
                            <a href="#" class="main-btn" id="apply-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfólio -->
            <div id="portfolio-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="main-title">Conhe&ccedil;a nossos projetos</h3>
                        </div>
                        <div class="col-md-12" id="filter-btn-box">
                            <button class="main-btn filter-btn active" id="all-btn">Todos</button>
                            <button class="main-btn filter-btn" id="dev-btn">Desenvolvimento</button>
                            <button class="main-btn filter-btn" id="dsg-btn">Design</button>
                            <button class="main-btn filter-btn" id="seo-btn">SEO</button>
                        </div>
                        <div class="col-md-4 project-box dev">
                            <img src="img/proj1.jpg" class="img-fluid" alt="maxisotf project foto">
                        </div>
                        <div class="col-md-4 project-box dsg">
                            <img src="img/proj2.jpg" class="img-fluid" alt="maxisotf project foto">
                        </div>
                        <div class="col-md-4 project-box seo">
                            <img src="img/proj3.jpg" class="img-fluid" alt="maxisotf project foto">
                        </div>
                        <div class="col-md-4 project-box dev">
                            <img src="img/proj4.jpg" class="img-fluid" alt="maxisotf project foto">
                        </div>
                        <div class="col-md-4 project-box dsg">
                            <img src="img/proj5.jpg" class="img-fluid" alt="maxisotf project foto">
                        </div>
                        <div class="col-md-4 project-box seo">
                            <img src="img/proj6.jpg" class="img-fluid" alt="maxisotf project foto">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter -->
            <div id="news-area">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="main-title">noticias e ofertas</h3>
                    </div>
                    <p>Assine nossa lista de e-mails, e receba nossos conte&uacute;dos sobre desenvolvimento de software</p>
                    <form action="">
                        <input type="text" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
                        <input type="submit" id="news-btn" value="Inscrever">
                    </form>
                </div>
            </div>
            <!-- Call to Action -->
            <div id="call-area">
                <div class="container">
                    <div class="row">
                        <p>Deseja fazer um or&ccedil;amento sem compromisso?</p>
                        <button class="main-btn" id="call-btn">Orç&ccedil;r</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Rodapé -->
    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em contato com a gente</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-tile">Ligue para:</span> (44) 9 8831-9197</p>
                        <p><span class="contact-tile">Hor&aacute;rios:</span> 08:00 - 19:00</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-tile">Envie um email:</span> contato.maxloversist@gmail.com</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span class="contact-tile">Visite a empresa:</span> Rua Ver. Joaquim P. de Castro, 230</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou nos deixe uma mensagem:</p>
                    </div>
                    <div class="col-md-6" id="contact-form">
                        <form action="">
                            <input type="text" class="form-control" placeholder="E-mail" name="email">
                            <input type="text" class="form-control" placeholder="Assunto" name="subject">
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                            <input type="submit" class="main-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="copy-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Desenvolvido por <a href="http://www.maxsyst.epizy.com" target="_blank"> Maxi Amikel , Mai </a> &copy; 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts do projeto -->
    <script src="js/scripts.js"></script>
</body>

</html>