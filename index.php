<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="public/css/css/bootstrap.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="public/fonts/fontawesome-free-5.15.1-web/css/all.css">
    <!-- estilo css -->
    <link rel="stylesheet" href="public/css/meuEstilo.css">

    <title>Colégio Lorem Ipsum</title>

</head>

<body>

    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#"><img class="icon" src="public/img/icone-home.png" alt=""></a>
            <a class="nav-item nav-link social" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="nav-item nav-link social" href="#"><i class="fab fa-instagram"></i></a>
            <a class="nav-item nav-link social" href="#"><i class="fab fa-whatsapp"></i></a>
            <a class="nav-item nav-link social" href="#"><i class="far fa-envelope"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href=""> Início <span class="sr-only">(Página atual)</span></a>
                    <a class="nav-item nav-link" href="#">Sobre</a>
                    <a class="nav-item nav-link" href="#">Ensino</a>
                    <a class="nav-item nav-link" href="#">Sala Virtual</a>
                    <a class="nav-item nav-link" href="matricula.php">Matrícula</a>
                    <a class="nav-item nav-link" href="#">Contatos</a>
                </div>
            </div>
        </nav>
        <!-- final da navbar -->
    </header>


    <!-- slides -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="public/img/crianca.png" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/img/slide1.png" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/img/slide3.png" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span> 
        </a>
    </div>
    <!-- final do slide -->

    <div class="container">
        <div class="row">
            <!-- coluna de noticia -->
            <div class="col">
                <br>
                <h3 class="text-center"><i class="far fa-newspaper"></i> Notícias</h3>
            </div>


            <!-- coluna eventos -->
            <div class="col">
                <br>
                <h3 class="text-center"><i class="far fa-clock"></i> Eventos</h3>
                <div class="row">
                    <div class="col-3">
                        <img class="iconEvent" src="public/img/calendar.png" alt="">
                    </div>
                    <div class="col-9">
                        <p> Semana cultural- Seg a Sex- 7h às 12h</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img class="iconEvent" src="public/img/calendar.png" alt="">
                    </div>
                    <div class="col-9">
                        <p> Feira de Ciências- 30/10, 8h</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img class="iconEvent" src="public/img/calendar.png" alt="">
                    </div>
                    <div class="col-9">
                        <p> Participe do dia nacional da saúde e nutrição!</p>
                    </div>
                </div>
            </div>


        </div>




    </div>











    <!-- scripts jQuery e Javascript -->
    <script src="js/jquery.js"></script>
    <script src="css/js/bootstrap.bundle.min.js"></script>
    <script src="css/js/bootstrap.min.js"></script>
</body>

</html>