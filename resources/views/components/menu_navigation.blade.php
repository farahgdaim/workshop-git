<div>
<nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                        laravel ECommerce
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active" onclick="">
                            <a class="nav-link" href="{{route('front.index')}}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('front.shop')}}">
                                Boutique
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('front.about')}}">
                                Qui sommes nous ?
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('front.contact')}}">Nous Contacter</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <a href="{{route('client.login') }}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                Login
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </a>
                        <form class="form-inline ">
                            <button class="btn nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
</div>