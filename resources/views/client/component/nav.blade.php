
<div class="header-search open-search">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 col-10 offset-1">
                <div class="navbar-search">
                    <form class="search-global">
                        <input class="search-global__input" type="text" placeholder="Type to search"
                            autocomplete="off" name="s" value="" />
                        <button class="search-global__btn"><i class="icon stroke icon-Search"></i></button>
                        <div class="search-global__note">Effectuer des recherches
                            search.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button class="search-close close" type="button"><i class="fa fa-times"></i></button>
</div>
<!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <div data-off-canvas="mobile-slidebar left overlay">
            <a class="navbar-brand scroll" href="index-2.html"><img class="scroll-logo"
                    src="{{asset('/assets/media/general/logo-light.png')}}" alt="logo" /></a>

            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="/">Accueil</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('client.voitures')}}" data-toggle="">Trouver une
                        voiture</a>

                </li>
                <li class="nav-item active"><a class="nav-link" href="/about">Qui sommes nous?</a>
                </li>

                @if(Auth::check())

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i
                    class="fas fa-user" style="color:#ffffff!important;"></i>&nbsp;&nbsp;
                Mon Compte</a>
                    <div class="dropdown-menu" data-aria-labelledby="navbarDropdown4">
                        <a class="dropdown-item" href="/locations">Mes locations</a>
                        <a class="dropdown-item" href="/logout">Se deconnecter</a>
                    </div>
                </li>
               @else
               <li class="nav-item"><a class="nav-link" href="/login"><i
                class="fas fa-user" style="color:#ffffff!important;"></i>&nbsp;&nbsp;
            Mon Compte</a></li>
               @endif </ul>
        </div>

<header class="header header_main-pg">
    <div class="top-bar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="top-bar__item"><a class="top-bar__link"
                            href="mailto:contact@europe-autofrance.com"><i
                                class="ic fas fa-envelope text-primary"></i> bienvenuacclombessi8@gmail.com</a>
                    </div>
                    <!--  <div class="top-bar__item"><i class="ic fas fa-clock text-primary"></i> Mon to Fri : 9:00am to 6:00pm</div> -->
                    <div class="top-bar__item"><i class="ic fas fa-map-marker-alt text-primary"></i> Abomey-calavi</div>
                </div>
                <div class="col-auto">
                    <div class="top-bar__item"><a class="top-bar__link" href="login.html"><i
                                class="ic fas fa-user text-primary"></i> Mon Compte</a></div>
                    <!-- <button class="top-bar__btn"><i class="ic icon-list"></i> Add Listings</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="h1 text-white">
                        Benin Auto
                    </h1>
                </div>
                <div class="col-auto">
                    {{-- <div class="header-contacts d-none d-md-block d-lg-none d-xl-block"><i
                            class="ic text-primary fas fa-phone"></i><span
                            class="header-contacts__inner"><span class="header-contacts__info">Call us for
                                help</span><a class="header-contacts__number" href="#">+229 94513830</a></span></div>
                    <!-- Mobile Trigger Start--> --}}
                    <button
                        class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none"><i
                            class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                    <!-- Mobile Trigger End-->
                </div>
                <div class="col-lg d-none d-lg-block">
                    <nav class="navbar navbar-expand-md justify-content-end" id="nav">
                        <ul class="yamm main-menu navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="/">Accueil</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{route('client.voitures')}}" data-toggle="">Trouver une
                                    voiture</a>

                            </li>
                            <li class="nav-item active"><a class="nav-link" href="/about">Qui sommes nous?</a>
                            </li>

                            @if(Auth::check())

                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="fas fa-user" style="color:#ffffff!important;"></i>&nbsp;&nbsp;
                            Mon Compte</a>
                                <div class="dropdown-menu" data-aria-labelledby="navbarDropdown4">
                                    <a class="dropdown-item" href="/locations">Mes locations</a>
                                    <a class="dropdown-item" href="/logout">Se deconnecter</a>
                                </div>
                            </li>
                           @else
                           <li class="nav-item"><a class="nav-link" href="/login"><i
                            class="fas fa-user" style="color:#ffffff!important;"></i>&nbsp;&nbsp;
                        Mon Compte</a></li>
                           @endif

                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header> <!-- end .header-->