<div class="nav-left-sidebar sidebar-primary mt-2">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">DONATION ADMIN PANEL</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                DONATION MENU
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{'/admin'}}" ><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                          
                            </li>

                          <!-- order -->
                          
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Manage Donation</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Manage Money donate</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('moneydonates.index')}}">All Money Donate</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12">Manage Zakat</a>
                                            <div id="submenu-12" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('zakatdonates.index')}}">All Zakat Donates</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-13">Manage Food Donate</a>
                                            <div id="submenu-13" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('fooddonates.index')}}">All Food Donates</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                      
                                    </ul>
                                </div>
                            </li>



                             <!-- Media -->

 <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-109" aria-controls="submenu-109"><i class="fas fa-f fa-folder"></i>Media</a>
                                <div id="submenu-109" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                                
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('medias.index')}}">Manage Media</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('medias.create')}}">Create Media </a>
                                                    </li>
                                    </ul>
                                </div>
                            </li>



<!-- contact -->

                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1010" aria-controls="submenu-1010"><i class="fas fa-f fa-folder"></i>Contact</a>
                                <div id="submenu-1010" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                                
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('contacts.index')}}">Manage Contact</a>
                                                    </li>

                                    </ul>
                                </div>
                            </li>


                            
<!-- Ticket -->

                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1011" aria-controls="submenu-1011"><i class="fas fa-f fa-folder"></i>Tickets</a>
                                <div id="submenu-1011" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                                
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('tickets.index')}}">Manage Tickets</a>
                                                    </li>

                                    </ul>
                                </div>
                            </li>




                                        
                                    </ul>

                                </div>
                            </li>
                    </div>
                </nav>
            </div>
        </div>