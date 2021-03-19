    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="ht-options">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="ht-widget">
                            <ul>
                               <!-- <li><i class="fa fa-sun-o"></i> <span>20<sup>c</sup></span> London</li> -->
                                <li><i class="fa fa-clock-o"></i>@php echo date("F"). " de ".date("Y")@endphp </li>
                                <li class="signup-switch signup-open"><i class="fa fa-sign-out"></i> Entrar / Cadastrar-se
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                    <!--
                        <div class="ht-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="nav-search search-switch">
                    <i class="fa fa-search"></i>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="active"><a href="./"><span>Home</span></a></li>
                        <li class="mega-menu"><a href="#"><span>Ambientes <i class="fa fa-angle-down"></i></span></a>
@include("amin.megamenu")
                        </li>
                        <li>
                            <a href="#"><span>Itens <i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown">
                                <li><a href="./categories-list.html">Espadas</a></li>
                                <li><a href="./categories-grid.html">Poções</a></li>
                                <li><a href="./typography.html">Magias</a></li>
                                <li><a href="./details-post-default.html">Armaduras</a></li>
                                <li><a href="./details-post-gallery.html">Itens raros</a></li>
                                <li><a href="./details-post-review.html">Itens únicos</a></li>
                                <li><a href="./contact.html">Encomendar Item</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span>Campanhas <i class="fa fa-angle-down"></i></span></a></li>
                        <li><a href="#"><span>Jogadores <i class="fa fa-angle-down"></i></span></a></li>
                        <li><a href="#"><span>Conheça <i class="fa fa-angle-down"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->