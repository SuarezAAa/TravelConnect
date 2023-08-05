<nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index.php?c=Home&a=mostrarHome">
                                        <i class="si si-plane text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">Travel</span><span class="font-size-xl text-primary">connect</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="public/assets/img/avatars/avatar15.jpg" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="#">
                                    <img class="img-avatar" src="public/assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#">
                                        <?php echo $_SESSION['agente']; echo $_SESSION['apellido'];?></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                        
                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                            <i class="si si-drop"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark" 
                                            href="index.php?c=login&a=salirLogin">
                                            <i class="si si-logout"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                
                                <li class="nav-main-heading">
                                    <span class="sidebar-mini-visible">
                                        UI</span><span class="sidebar-mini-hidden">Gestión de Reservas</span></li>
                                <li>

                                 <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                        <i class="si si-layers"></i>
                                        <span class="sidebar-mini-hide">Reservas</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="index.php?c=Reservas&a=opcion_reservas">Nueva reserva</a>
                                        </li>
                                    
                                        <li>
                                            <a href="index.php?c=Reservas&a=view_reservas">Listado de reservas</a>
                                        </li>
                                      
                                    </ul>
                                    </li>

                                <li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                            <i class="si si-users"></i>
                                            <span class="sidebar-mini-hide">Administración de Clientes</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="index.php?c=Clientes&a=view_clientes">Consultar</a>
                                            </li>
                                                                                                 
                                        </ul>
                                    </li>
                                </li>





                                <li class="nav-main-heading">
                                    <span class="sidebar-mini-visible">
                                        UI</span><span class="sidebar-mini-hidden">Gestión de inventarios</span>
                                </li>

                                <li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                            <i class="si si-home"></i>
                                            <span class="sidebar-mini-hide">Hotel</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="index.php?c=Hotel&a=new_hoteles">Agregar nuevo</a>
                                            </li>
                                    
                                            <li>
                                                <a href="index.php?c=Hotel&a=view_hoteles">Lista de Hoteles</a>
                                            </li>                                   
                                        </ul>
                                    </li>
                                </li>

                                <li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                            <i class="si si-plane"></i>
                                            <span class="sidebar-mini-hide">Vuelo</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="index.php?c=Vuelo&a=new_vuelos">Agregar nuevo</a>
                                            </li>
                                            
                                    
                                            <li>
                                                <a href="index.php?c=Vuelo&a=view_vuelos">Lista de Vuelos</a>
                                            </li>            
                                            <li>
                                                <a href="index.php?c=Vuelo&a=view_aerolinea">Lista de Aerolineas</a>
                                            </li>                       
                                        </ul>
                                    </li>
                                </li>

                                <li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                            <i class="si si-briefcase"></i>
                                            <span class="sidebar-mini-hide">Paquetes</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="index.php?c=Paquetes&a=new_paquetes">Agregar nuevo</a>
                                            </li>
                                    
                                            <li>
                                                <a href="index.php?c=Paquetes&a=view_paquetes">Lista de Paquetes</a>
                                            </li>                                   
                                        </ul>
                                    </li>
                                </li>

                                
                                
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->