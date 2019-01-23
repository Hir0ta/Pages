<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>XL-Ido demo</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!--Gijgo CSS-->
    <link href="node_modules/gijgo/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!--Gijgo JS-->
    <script src="node_modules/gijgo/js/gijgo.min.js" type="text/javascript"></script>
    <!--Gijgo Languages-->
    <script src="node_modules/gijgo/js/messages/messages.fr-fr.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.bg-bg.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.de-de.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.pt-br.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.ru-ru.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.es-es.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.it-it.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.hu-hu.js" type="text/javascript"></script>
    <!--Fixed Table-->
    <script src="FixedTable/tableHeadFixer.js"></script>
    <!--Own Code-->
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="date">
                <p class="text-dark">2019. Január 21.</p>
            </div>
            <ul class=" components text-left">
                <img class="logo" src="images/logo.png">
                <li class="active menu">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Munkaidő adatok</a>
                    <ul class="collapse " id="homeSubmenu">
                        <li>
                            <a href="index.php">Főmenü</a>
                        </li>
                        <li>
                            <a href="#">Jelenlétiív kitöltése</a>
                        </li>
                        <li>
                            <a href="#">Munkaközi szünet</a>
                        </li>
                        <li>
                            <a href="#">Eltávozás munkaügyben</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#">Munkaidő nyilvántartás</a>
                </li>
                <li class="menu">
                    <a href="#tavolSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Távollétek</a>
                    <ul class="collapse " id="tavolSubmenu">
                        <li>
                            <a href="index.php?lap=new_event">Új esemény</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#docsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dokumentumok</a>
                    <ul class="collapse " id="docsSubmenu">
                        <li>
                            <a href="index.php?lap=table">Böszme nagy táblázat</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <nav class="sidebar navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <button type="button" id="desktopToggle" class="furl btn btn-success">
                            << Összecsuk
                        </button>
                    </div>
                </nav>
                <p class="contact">Kapcsolatfelvétel: <a class="contact" href="#">bejelentes@xl-ido.hu</a></p>
            <ul>      
        </nav>
        
        <!-- Page Content  -->
        <div id="content">
            <div class="header">
                <nav class="sidebar navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <button type="button" id="sidebarCollapse" class="btn btn-success">
                            <i class="fas fa-align-left"></i>
                            <span>Menü</span>
                        </button>
                    </div>
                </nav>
                <nav class="togglebar navbar navbar-expand-md navbar-light text-right">
                    <button type="button" class="navbar-toggler btn btn-success" data-toggle="collapse" data-target="#collapse_target">
                        <i class="fas fa-align-right"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="collapse_target">
                        <ul class="navbar-nav personal-menu">
                            <form id="form" class="form">
                                <label for="inlineFormCustomSelectPref"></label>
                                <select class="custom-select" id="inlineFormCustomSelectPref">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </form>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">
                                    Kis Zoltán Csaba
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="index.php?lap=settings">
                                    <span class="fas fa-cog"></span>
                                </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="main.html">
                                    <span class="fas fa-power-off"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="panel">
                <?php
                    ERROR_REPORTING (E_PARSE | E_ERROR);
                    if ($_GET['lap'] == "settings") include "settings.php";
                    if ($_GET['lap'] == "new_event") include "new_event.php";
                    if ($_GET['lap'] == "table") include "table.php";
                ?>
            </div>
        </div>
    </div>
</body>

</html>