    <!DOCTYPE html>
    <html lang="es">

    <head>
        <title>Menu de navegacion</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
 

        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    BOOTSTRAP 5
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->

      
    </head>

    <body>
        <div class="container">
            <br>
            <header>
                <nav class="navbar navbar-default  navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="navegacion.html">LM</a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navegacion">
                            <ul class="nav navbar-nav ">
                                <li><a href="home.html">Home</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle=dropdown>Ejercicios<span class="badge badge-light">3</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="grids.html">Grid</a></li>
                                        <li class="divider"></li>
                                        <li><a href="formulario.html">Formulario</a></li>
                                        <li class="divider"></li>
                                        <li><a href="tabla.html">Tabla</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="home.html">Home</a></li>
                                <li><a href="#">Acerca de</a></li>
                                <form action="" class="navbar-form navbar-right" role="search">
                                    <input type="text" class="form-control" placeholder="buscar">
                                </form>
                            </ul>

                        </div>

                    </div>
                </nav>

            </header>
        </div>
    </body>

    </html>
