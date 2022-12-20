<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>


                <li>
                    <a href="{{ route('client_index') }}" class="waves-effect">
                        <i class="ri-user-5-line"></i><span
                            class="badge rounded-pill bg-success float-end"><?php if (isset($data['clients'])) {
                                echo count($data['clients']);
                            } ?></span>
                        <span>Utilisateur</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('posts_admin') }}" class="waves-effect">
                        <i class="ri-user-5-line"></i><span
                            class="badge rounded-pill bg-success float-end"><?php if (isset($data['clients'])) {
                                echo count($data['clients']);
                            } ?></span>
                        <span>Posts</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Articles</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('produit_index') }}">Cours</a></li>
                    </ul>
                </li>
                <!-- end li -->
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Enseignants</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/register">creer Un nouveau</a></li>
                        <li><a href="#">Afficher les Enseignants</a></li>
                    </ul>
                </li>

                <!-- end li -->
                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Recover Password</a></li>
                        <li><a href="#">Reset Password</a></li>
                        <li><a href="#">Lock Screen</a></li>
                    </ul>
                </li>
                <!-- end li -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Starter Page</a></li>
                        <li><a href="#">Maintenance</a></li>
                        <li><a href="#">Coming Soon</a></li>
                        <li><a href="#">Timeline</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Error 404</a></li>
                        <li><a href="#">Error 500</a></li>
                    </ul>
                </li>
                <!-- end li -->
                <li class="menu-title">Composents</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-table-2"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Basic Tables</a></li>
                        <li><a href="#">Data Tables</a></li>
                        <li><a href="#">Responsive Table</a></li>
                        <li><a href="#">Editable Table</a></li>
                    </ul>
                    <!-- end ul -->
                </li>
                <!-- end li -->

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-map-pin-line"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Google Maps</a></li>
                        <li><a href="#">Vector Maps</a></li>
                    </ul>
                    <!-- end ul -->
                </li>
                <!-- end li -->

            </ul>
            <!-- end ul -->
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
