    <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route( 'dashboard' )}}" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route( 'profile' )}}" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                     
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ route('products') }}" aria-expanded="false"><i class="me-3 fa fa-table"
                        aria-hidden="true"></i><span class="hide-menu">Produk</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                        href="{{ route('users') }}" aria-expanded="false"><i class="me-3 fa fa-table"
                        aria-hidden="true"></i><span class="hide-menu">User</span></a>
                        </li>
                     
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route( 'logout' )}}" aria-expanded="false"><i class="me-3 fa fa-table"
                                    aria-hidden="true"></i><span class="hide-menu">Logout</span></a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
      
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->