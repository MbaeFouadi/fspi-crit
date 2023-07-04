<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Base de données de recherches</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/jqvmap/css/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skin-2.css')}}">
    <link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('accueil')}}" class="brand-logo">
                <!-- <img class="logo-abbr" src="{{asset('assets/images/logo-white.png')}}" alt="">
                <img class="logo-compact" src="{{asset('assets/images/logo-text-white.png')}}" alt="">
                <img class="brand-title" src="{{asset('assets/images/logo-text-white.png')}}" alt=""> -->
                <h1 class="text-white">FSPI CRIT</h1>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <!-- <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span> -->
                                <!-- <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div> -->
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <!-- <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li> -->
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{asset('assets/images/profile/education/pic1.jpg')}}" width="20" alt=""> {{Auth::user()->nom}} {{Auth::user()->prenom}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ml-2">Inbox </span>
                                    </a> -->
                                    <form method="POST" action="{{ route('deconnexion') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('deconnexion')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12"></line>
                                            </svg>
                                            <span class="ml-2">Déconnexion</span>
                                        </x-dropdown-link>
                                    </form>
                                    <!-- <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Déconnexion</span>
                                    </a> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Menu principal</li>
                    <li><a href="{{route('accueil')}}" aria-expanded="false">
                            <i class="la la-home"></i>
                            <span class="nav-text">Tableau du bord</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index-2.html">Dashboard 2</a></li>
                            <li><a href="index-3.html">Dashboard 3</a></li>
                        </ul> -->
                    </li>
                    @if(Auth::user()->hasRole('Super Administrateur'))
                    <li class="nav-label">Super Administrateur</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-users"></i>
                            <span class="nav-text">Utilisateurs</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add-user')}}">Ajouter un utilisateur</a></li>
                            <li><a href="{{route('show-user')}}">Liste des utilisateurs</a></li>

                        </ul>
                    </li>
                    <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-user"></i>
                            <span class="nav-text">Laboratoires</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="add-professor.html">Ajouter un laboratoire</a></li>

                            <li><a href="all-professors.html">Liste des laboratoires</a></li>

                        </ul>
                    </li> -->
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-plus"></i>
                            <span class="nav-text">Ajouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add-etablissement')}}">Etablissement</a></li>
                            <li><a href="{{route('add-grade')}}">Grade</a></li>
                            <li><a href="{{route('add-profession')}}">Profession</a></li>

                        </ul>
                    </li>
                    @endif
                    <li class="nav-label">Utilisateur</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-user"></i>
                            <span class="nav-text">Enregistrements</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('identite.index')}}">Coordonnées et références</a></li>
                            <li><a href="{{route('formations.index')}}">Formations</a></li>
                            <li><a href="{{route('domaines.index')}}">Domaines de compétences</a></li>
                            <li><a href="{{route('post-doc.index')}}">Post-doc</a></li>
                            <li><a href="{{route('axe-de-recherche.index')}}">Axes de Recherches</a></li>
                            <li><a href="{{route('projet_tutore.index')}}">Projet tutoré</a></li>
                            <li><a href="{{route('action-de-recherche.index')}}">Actions de Recherche</a></li>
                            <li><a href="{{route('production-scientifique.index')}}">Productions scientifiques</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-search"></i>
                            <span class="nav-text">Recherches</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('recherche-liste')}}">Listes</a></li>

                            <!-- <li><a href="all-professors.html">Par établissements</a></li>
                            <li><a href="add-professor.html">Par laboratoires</a></li>
                            <li><a href="add-professor.html">Domaines de recherches</a></li>
                            <li><a href="add-professor.html">Spécialités</a>
                        </li> -->
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-tasks"></i>
                            <span class="nav-text">Statistiques</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('statistique-etablissement')}}">Par établissements</a></li>
                            <li><a href="{{route('statistique-profession')}}">Par Profession</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Developpé par <a href="../index.htm" target="_blank">xD</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/js/dlabnav-init.js')}}"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="{{asset('assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{asset('assets/vendor/peity/jquery.peity.min.js')}}"></script>

    <!-- Chart sparkline plugin files -->
    <script src="{{asset('assets/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Demo scripts -->
    <script src="{{asset('assets/js/dashboard/dashboard-3.js')}}"></script>

    <!-- Svganimation scripts -->
    <script src="{{asset('assets/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('assets/vendor/svganimation/svg.animation.js')}}"></script>
    <script src="{{asset('assets/js/styleSwitcher.js')}}"></script>

    <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins-init/datatables.init.js')}}"></script>

</body>

</html>