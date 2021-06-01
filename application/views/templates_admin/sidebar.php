 <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav ">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin') ?>"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="<?= base_url('admin/mobil') ?>"
                                aria-expanded="false"><i class="fa fa-car"></i><span
                                    class="hide-menu">Data Mobil
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/mobil/type_mobil') ?>"
                                aria-expanded="false"><i class="fa fa-bars"></i><span
                                    class="hide-menu">Type Mobil</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/supir') ?>"
                                aria-expanded="false"><i  class="fa fa-user-circle"></i><span
                                    class="hide-menu">Data Supir</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="<?= base_url('admin/bank') ?>"
                                aria-expanded="false"><i class="fa fa-university"></i><span
                                    class="hide-menu">Data Bank
                                </span></a>
                        </li>

                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/rental') ?>"
                                aria-expanded="false"><i  class="fa fa-shopping-cart"></i><span
                                    class="hide-menu">Data Rental</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/transaksi') ?>"
                                aria-expanded="false"><i  class="fa fa-retweet"></i><span
                                    class="hide-menu">Data Transaksi</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/users') ?>"
                                aria-expanded="false"><i  class="fa fa-users"></i><span
                                    class="hide-menu">Data Users</span></a></li>

                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/team') ?>"
                                aria-expanded="false"><i  class="fa fa-user-secret"></i><span
                                    class="hide-menu">Team</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/testimonial') ?>"
                                aria-expanded="false"><i  class="fa fa-envelope"></i><span
                                    class="hide-menu">Testimonial</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/contact') ?>"
                                aria-expanded="false"><i  class="fa fa-comments"></i><span
                                    class="hide-menu">Contact</span></a></li>
                        

                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/laporan') ?>"
                                aria-expanded="false"><i  class="fa fa-clipboard-list"></i><span
                                    class="hide-menu">Laporan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#"data-toggle="modal" data-target="#logoutModal"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
         <div class="page-wrapper">