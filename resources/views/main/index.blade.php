@extends('layouts/base')
@section('contenu')
<div id="loader">
    <div id="status"></div>
</div>
<div id="site-header">
    <header id="header" class="header-block-top">
        <div class="container">
            <div class="row">
                <div class="main-menu">
                    <!-- navbar -->
                    <nav class="navbar navbar-default" id="mainNav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="logo">
                                <a>
                                    <img src="{{ asset('img/logo.png') }} " width="150" id="lg" height="60" alt="">
                                </a>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#banner">Accueil</a></li>
                                <li><a href="#about">Menu</a></li>
                                <li><a href="#reservation">Réservation</a></li>
                                <li><a href="#footer">Contact</a></li>
                            </ul>
                        </div>
                        <!-- end nav-collapse -->
                    </nav>
                    <!-- end navbar -->
                </div>
            </div>
            <!-- end ligne -->
        </div>
        <!-- end container-fluid -->
    </header>
    <!-- end header -->
</div>
<!--l'image de logo-->

<!-- end site-header -->

<div id="banner" class="banner full-screen-mode parallax">
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-static">
                <div class="banner-text">
                    <div class="banner-cell">
                        <h2>O BuRo restaurant </h2>
                        <p>Manger pour se nourrir,
                            Manger pour le plaisir,
                            Même dans le temps des rois,
                            Cornélien fut le choix!</p>
                        <div class="book-btn">
                            <a href="#reservation" class="table-btn hvr-underline-from-center">
                                Réserver une table</a>
                        </div>
                        <a href="#about">
                        </a>
                    </div>
                    <!-- end banner-cell -->
                </div>
                <!-- end banner-text -->
            </div>
            <!-- end banner-static -->
        </div>
        <!-- end col -->
    </div>
    <!-- end container -->
</div>
<!-- end banner -->

<div id="about" class="about-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title"> A propos de nous
                    </h2>
                    <h3>Dans un happy brouhaha...</h3>
                    <p class="restau"> Le restaurant & son équipe envoient
                        des petits plats d’une belle punkitude, arty sans prise de tête. </p>

                    <p class="restau"> Ouvert touts les jours de semaine. <br>

                        On partage l’ardoise entre potes toute la journée, des plats variés.. delices et de bons
                        prix. <br>
                    </p>

                    <p class="restau"> Merci et à bientôt </p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="about-images">
                        <img class="about-main" src="{{ asset('img/about-main.jpg') }}" alt="About Main Image">
                        <img class="about-inset" src="{{ asset('img/about-inset.jpg') }}" alt="About Inset Image">
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                        Notre Menu
                    </h2>
                    <p class="title-caption text-center">Liens rapides vers notre menu pour ne pas perdre une
                        seconde et pour que vous rapprocher de plus en plus du plaisir </p>
                </div>
                <div class="tab-menu">
                    <div class="slider slider-nav">
                        <div class="tab-title-menu">
                            <h2>petit-déjeuner</h2>
                            <p> <i class="flaticon-canape"></i> </p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>déjeuner</h2>
                            <p> <i class="flaticon-dinner"></i> </p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>diner</h2>
                            <p> <i class="flaticon-desert"></i> </p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>Boissons</h2>
                            <p> <i class="flaticon-coffee"></i> </p>
                        </div>
                    </div>
                    <div class="slider slider-single">
                        <div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-01.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>
                                            pain à l'ail</h3>
                                        <p>
                                            pain en tranches,grillées, garni d'ail, et éventuellement d'ingrédients
                                            tels que l'huile d'olive, le beurre, et parfois basilic
                                        </p>
                                    </div>
                                    <span class="offer-price">6€</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-02.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>salade composée</h3>
                                        <p>
                                            mélange de salade et de composition de divers ingrédients
                                        </p>
                                    </div>
                                    <span class="offer-price">4€</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " style="margin-left: 5px;">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-03.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>ailes de poulet</h3>
                                        <p>
                                            poulet cuite au four et enrobée d'une sauce dite Buffalo
                                        </p>
                                    </div>
                                    <span class="offer-price">10€</span>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-04.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>pizza festin de viande
                                        </h3>
                                        <p>
                                            viande de bœuf épicée, de la viande de porc délicate
                                        </p>
                                    </div>
                                    <span class="offer-price">8€</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-05.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>Le poulet tikka masala</h3>
                                        <p>
                                            des morceaux de poulet marinés
                                        </p>
                                    </div>
                                    <span class="offer-price">12€</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-06.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>spicy meatballs </h3>
                                        <p>
                                            boulettes de viande épicées </p>
                                    </div>
                                    <span class="offer-price">8€</span>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-07.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>gâteau au chocolat
                                        </h3>
                                        <p>
                                            gâteau fondant au chocolat </p>
                                    </div>
                                    <span class="offer-price">4€</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-08.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>Le poulet tikka masala</h3>
                                        <p>
                                            des morceaux de poulet marinés </p>
                                    </div>
                                    <span class="offer-price">9€</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-09.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>Le poulet tikka masala</h3>
                                        <p>
                                            des morceaux de poulet marinés </p>
                                    </div>
                                    <span class="offer-price">10€</span>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-10.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3> meat feast pizza </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis
                                            eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">12€</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-09.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3> chiken tika masala</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis
                                            eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">5€</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="{{ asset('img/menu-item-thumbnail-08.jpg') }}" alt="" class="img-responsive">
                                    <div>
                                        <h3> chiken tika masala</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis
                                            eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">5€</span>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end tab-menu -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end menu -->
</div>
<!-- end team-box -->
</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end team-main -->
</div>
<!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end gallery-main -->
<!-- end blog-main -->
<!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end pricing-main -->

<div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="form-reservations-box">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -125px">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <h2 class="block-title text-center">
                            Reservation
                        </h2>
                    </div>
                    <p> Sil-vous-plais remplaissez tous les champs requis Merci
                    </p>

                    <form id="" method="post" class="reservations-box" name="contactform">
                        @csrf
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="text" name="form_name" id="form_name" placeholder="Nom" required="required" data-error="Firstname is required.">
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="email" name="email" id="email" placeholder="E-Mail ID" required="required" data-error="E-mail id is required.">
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="text" required="required" name="tel" id="tel" placeholder="tel.">
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="number" name="no_of_persons" id="no_of_persons" class="selectpicker">
                                <!-- <select name="no_of_persons" id="no_of_persons" class="selectpicker">
                                    <option selected disabled>personnes</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select> -->
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                <input type="text" name="date-picker" id="date-picker" placeholder="Date" required="required" data-error="Date is required." />
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="">
                            <div class="form-box">
                                <input type="text" name="time-picker" id="time-picker" placeholder="l'heure" required="required" data-error="Time is required." />
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->

                        <!-- end col -->

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="reserve-book-btn text-center">
                                <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">Réserver une table </button>
                            </div>
                        </div>
                        <!-- end col -->
                    </form>
                    <!-- end form -->
                </div>
                <!-- end col -->
            </div>
            <!-- end reservations-box -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end reservations-main -->

<div id="footer" class="footer-main">

    <!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end footer-news -->
<div class="fooot">
</div>
<div class="footer-box pad-top-70 " style="margin-top: -5px;">
    <div class="container fooot">
        <div class="row">
            <div class="footer-in-main">
                <div class="footer-logo">
                    <div class="text-center">
                        <!-- <img src="{{ asset('img/logo.png') }}" alt="" /> -->
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 about"></div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about">
                    <div class="footer-box-a">
                        <div style="text-align: center;"></div>
                        <h3>A propos de nous</h3>
                        <ul class="socials-box footer-socials pull-left">
                            <li>
                                <a href="https://www.facebook.com">

                                    <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/">
                                    <div class="social-circle-border"><i class="fa fa-instagram"></i></div>
                                </a>
                            </li>
                            <br>

                            <a href="https://goo.gl/maps/ioDCz2LrJQ52 "></a>
                            <h2 class="notreadress">adresse</h2> <span class="adress">

                                <span class="adr">


                                    Yaoundé près
                                    de la Cité <br> universitaire au Cameroun

                                </span>
                            </span>
                        </ul>
                    </div>
                    <!-- end footer-box-a -->
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-c">
                        <div class="d-flex align-items-center">

                            <h3>Contactez-nous
                            </h3>

                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <span>
                                    <a href="#">+237 010203004 </a>

                                </span>
                            </p>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span><a href="#">support@oburo.com</a></span>
                            </p>

                        </div>
                        <!-- end footer-box-c -->
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box-d">
                        <div style="text-align: center;">
                            <h3>horaires D'ouverture</h3>
                            <p>12h - 14h </p>
                            <p>19h - 22h (semaine)</p>
                            <p>19h - 22h30 (samedi)</p>
                            <p>Fermé le dimanche <br>
                                (sauf exceptions)</p>
                        </div>
                    </div>
                    <!-- end footer-box-d -->
                </div>

            </div>
            <!-- end footer-in-main -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div id="copyright" class="copyright-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="copy-title"> Copyright &copy; 2022 web-site par <a href="#" style="color: yellow ;font-weight: bolder;" target="_blank">bouakline mohamed
                            liamine</a> </h6>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end copyright-main -->
</div>
<!-- end footer-box -->
</div>
<!-- end footer-main -->

<a href="#" class="scrollup" style="display: none;">Scroll</a>

<section id="color-panel" class="close-color-panel">
    <!-- Colors -->
    <div class="segment">
        <h4 class="gray2 normal no-padding">Color Scheme</h4>
        <a title="orange" class="switcher orange-bg"></a>
        <a title="strong-blue" class="switcher strong-blue-bg"></a>
        <a title="moderate-green" class="switcher moderate-green-bg"></a>
        <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
    </div>
</section>

@endsection('contenu')