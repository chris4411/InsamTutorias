<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">INSAM</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <div  id="posts" class="input-group app-search d-lg-block">
                    <li class="dropdown"> <input type="text" class="form-control bg-transparent"
                            placeholder="Search.." aria-label="Text input with dropdown button">
                        <span class="mdi mdi-magnify"></span>
                    </li>
                </div>
                <li class="dropdown"><a href="#"><span>catalogue</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('courses') }}">Cours</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>

                </li>

                <li><a href="about">A propos</a></li>

                <li><a href="/contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="/courses" class="get-started-btn me-3">Commencer</a>
        <i class="bi bi-cart-plus me-3 " style="font-size: 2rem; color:#3f48aa;"></i>



    </div>
</header>
