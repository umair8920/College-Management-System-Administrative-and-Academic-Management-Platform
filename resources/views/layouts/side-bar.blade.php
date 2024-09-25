                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Interface</div>


                            <!--------- Layout Section ----->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('layout-static') }}">Static Navigation</a>
                                    <a class="nav-link" href="{{ url('layout-sidenav-light') }}">Light Sidenav</a>
                                </nav>
                            </div>


                             <!--------- Pages Section ----->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                                            <a class="nav-link" href="{{ route('password.request') }}">Forgot Password</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <!----------- CRUD OPERATIONS STARTS HERE ------------------>

                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="{{ url('add-new-teachers') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                                Add New Teacher
                            </a>
                            <a class="nav-link" href="add-new-courses">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Add New Course
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            