<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="{{ route('accueilAdminPage') }}" class="sidebar-logo">
            <img src="{{ asset('storage/assets/logo/Logo-site1.jpg') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('storage/assets/logo/logo_envol.png') }}" alt="site logo"
                class="dark-logo">
            <img src="{{ asset('storage/assets/logo/logo_envol.png') }}" alt="site logo"
                class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li class="">
                <a href="{{ route("accueilAdminPage") }}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
               
            </li>
            <li class="">
                <a href="{{ route("afficherPageAllInscription") }}">
                    <i class="fa fa-user-friends">&nbsp;</i>
                    <span class="pb-2">Toutes les inscriptions</span>
                </a>
               
            </li>
            <li class="">
                <a href="https://mail79.lwspanel.com/roundcube/" target="_blank">
                    <i class="fa fa-mail-bulk">&nbsp;</i>
                    <span class="pb-2">Webmail</span>
                </a>
               
            </li>
          
            <li class="">
                <a href="{{ route("afficherPageListeMessagesContact") }}" >
                    <i class="fa fa-envelope">&nbsp;</i>
                    <span class="pb-2">Les Messages de contact</span>
                </a>
               
            </li>
          
          
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                    <span>Users</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Liste des utilisateurs</a>
                    </li>
                    <li>
                        <a href="#"><i
                                class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Utilisateurs en Grille</a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                            Ajouter utilisateur</a>
                    </li>
                    <li>
                        <a href="#"><i
                                class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Profil utilisateur</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <i class="ri-user-settings-line"></i>
                    <span>Role & Access</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Role & Access</a>
                    </li>
                    <li>
                        <a href="#"><i
                                class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Assign Role</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="nav-link"
                onclick="document.getElementById('logout-form').submit()">Se déconnecter</a>

                <form method="POST" action="{{ route('logout', ['return_url' => route('accueil')]) }}" id="logout-form"
                    style="display: none;">
                    @csrf
                
                </form>
               
            </li>

             
            <li class="">
                <a href="{{ route("accueil") }}" target="_blank">
                    <i class="fa fa-envelope">&nbsp;</i>
                    <span class="pb-2">Frontend</span>
                </a>
               
            </li>
          
        
        </ul>
    </div>
</aside>