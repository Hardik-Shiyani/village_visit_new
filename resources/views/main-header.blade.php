<!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <h5>ગામની મુલાકાતનું પત્રક</h5>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="#">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $page= 'index'; ?> 

        <!-- main header -->
        <header class="main-header">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
							<a href="index.php"><h5>ગામની મુલાકાતનું પત્રક</h5></a>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                           <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li  class="nav-item"><a href="{{ route('gam-ni-vigat-index') }}" class="nav-link {{ request()->routeIs('gam-ni-vigat-index') ? 'active' : '' }}">ગામ ની વિગત</a></li>
                                        <li  class="nav-item"><a href="{{ route('yojano-index') }}" class="nav-link {{ request()->routeIs('yojano-index') ? 'active' : '' }}">યોજનાઓ</a></li>
                                        <li  class="nav-item"><a href="{{ route('health-questions-index') }}" class="nav-link {{ request()->routeIs('health-questions-index') ? 'active' : '' }}">આરોગ્યને બાબતના પ્રશ્નો</a></li>
                                        <li  class="nav-item"><a href="education-questions.php" class="nav-link <?php if($page=='education-questions'){echo 'active';} ?>">શિક્ષણને બાબતના પ્રશ્નો</a></li>
                                        <li  class="nav-item"><a href="supply-questions.php" class="nav-link <?php if($page=='supply-questions'){echo 'active';} ?>">પુરવઠાને બાબતના પ્રશ્નો</a></li>
                                        <li  class="nav-item"><a href="water-questions.php" class="nav-link <?php if($page=='water-questions'){echo 'active';} ?>">પાણીને બાબતના પ્રશ્નો</a></li>
                                        <li  class="nav-item"><a href="electricity-questions.php" class="nav-link <?php if($page=='electricity-questions'){echo 'active';} ?>">વીજપુરવઠો બાબતના પ્રશ્નો</a></li>
                                        <li  class="nav-item"><a href="road-questions.php" class="nav-link <?php if($page=='road-questions'){echo 'active';} ?>">રોડ/રસ્તા બાબતના પ્રશ્નો</a></li>
                                        <li  class="nav-item"><a href="sewer-questions.php" class="nav-link <?php if($page=='sewer-questions'){echo 'active';} ?>">ગટર બાબતના પ્રશ્નો</a></li>
										<li  class="nav-item"><a href="cleanliness-questions.php" class="nav-link <?php if($page=='cleanliness-questions'){echo 'active';} ?>">સ્વચ્છતા બાબતના પ્રશ્નો</a></li>
										<li  class="nav-item"><a href="polution-questions.php" class="nav-link <?php if($page=='polution-questions'){echo 'active';} ?>">પ્રદુષણ બાબતના પ્રશ્નો</a></li>
										<li  class="nav-item"><a href="revenue-questions.php" class="nav-link <?php if($page=='revenue-questions'){echo 'active';} ?>">મહેસુલી બાબતે</a></li>
										<li  class="nav-item"><a href="anganwadi-questions.php" class="nav-link <?php if($page=='anganwadi-questions'){echo 'active';} ?>">આંગણવાડીને લગતા પ્રશ્નો</a></li>
                                        <li  class="nav-item"><a href="banking-questions.php" class="nav-link <?php if($page=='banking-questions'){echo 'active';} ?>">બેંકીંગ સેવાને લગતા પ્રશ્નો</a></li>
										<li  class="nav-item"><a href="grampanchayat-questions.php" class="nav-link <?php if($page=='grampanchayat-questions'){echo 'active';} ?>">ગ્રામ પંચાયત બાબતના પ્રશ્નો</a></li>
										<li  class="nav-item"><a href="other-questions.php" class="nav-link <?php if($page=='other-questions'){echo 'active';} ?>">અન્ય બાબતના પ્રશ્નો</a></li>
                                    </ul>
                                </div>
                            </nav> 
                             <!-- <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                                <li><a href="index-onepage.html">OnePage Home</a></li>
                                                <li><a href="index-rtl.html">RTL Home</a></li>
                                                <li class="dropdown"><a href="index.html">Header Style</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style 01</a></li>
                                                        <li><a href="index-2.html">Header Style 02</a></li>
                                                        <li><a href="index-3.html">Header Style 03</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li class="dropdown"><a href="index.html">Treatments</a>
                                            <ul>
                                                <li><a href="treatment.html">Treatment 1</a></li>
                                                <li><a href="treatment-2.html">Treatment 2</a></li>
                                                <li><a href="surgical-procedures.html">Surgical Procedures</a></li>
                                                <li><a href="paeditaric-ophthalmology.html">Paeditaric Ophthalmology</a></li>
                                                <li><a href="lenses-transitions.html">Lenses Transitions</a></li>
                                                <li><a href="laser-surgery.html">Laser Eye Surgery</a></li>
                                                <li><a href="vision-correction.html">Vision Correction</a></li>
                                                <li><a href="contact-lens.html">Contact Lens</a></li>
                                                <li><a href="diabetic-retinopathy.html">Diabetic Retinopathy</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Pages</a>
                                            <ul>
                                                <li class="dropdown"><a href="index.html">Doctors</a>
                                                    <ul>
                                                        <li><a href="team.html">Doctors 3 Column</a></li>
                                                        <li><a href="team-2.html">Doctors 4 Column</a></li>
                                                        <li><a href="team-details.html">Doctor Single</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">Portfolio</a>
                                                    <ul>
                                                        <li><a href="portfolio.html">Portfolio 1</a></li>
                                                        <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Our Shop</a></li>
                                                        <li><a href="shop-details.html">Shop Details</a></li>
                                                        <li><a href="cart.html">Cart page</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                <li><a href="faq.html">Faq’s</a></li>
                                                <li><a href="appointment.html">Book Appointment</a></li>
                                                <li><a href="error.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Elements</a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li>
                                                                <h4>Elements 1</h4>
                                                            </li>
                                                            <li><a href="about-element-1.html">About Block 01</a></li>
                                                            <li><a href="about-element-2.html">About Block 02</a></li>
                                                            <li><a href="about-element-3.html">About Block 03</a></li>
                                                            <li><a href="feature-element-1.html">Feature Block 01</a></li>
                                                            <li><a href="feature-element-2.html">Feature Block 02</a></li>
                                                            <li><a href="feature-element-3.html">Feature Block 03</a></li>
                                                            <li><a href="feature-element-4.html">Feature Block 04</a></li>
                                                            <li><a href="service-element-1.html">Service Block 01</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li>
                                                                <h4>Elements 2</h4>
                                                            </li>
                                                            <li><a href="service-element-2.html">Service Block 02</a></li>
                                                            <li><a href="service-element-3.html">Service Block 03</a></li>
                                                            <li><a href="service-element-4.html">Service Block 04</a></li>
                                                            <li><a href="team-element-1.html">Team Block 01</a></li>
                                                            <li><a href="team-element-2.html">Team Block 02</a></li>
                                                            <li><a href="team-element-3.html">Team Block 03</a></li>
                                                            <li><a href="team-element-4.html">Team Block 04</a></li>
                                                            <li><a href="news-element-1.html">News Block 01</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li>
                                                                <h4>Elements 3</h4>
                                                            </li>
                                                            <li><a href="news-element-2.html">News Block 02</a></li>
                                                            <li><a href="working-element-1.html">Working Block 01</a></li>
                                                            <li><a href="working-element-2.html">Working Block 02</a></li>
                                                            <li><a href="chooseus-element-1.html">Chooseus Block 01</a></li>
                                                            <li><a href="chooseus-element-2.html">Chooseus Block 02</a></li>
                                                            <li><a href="funfact-element.html">Funfact Block</a></li>
                                                            <li><a href="cta-element.html">Cta Block</a></li>
                                                            <li><a href="testimonial-element.html">Testimonial Block</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Grid</a></li>
                                                <li><a href="blog-2.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav> -->
                        </div>
                        <!-- <div class="nav-right">
                            <div class="search-box-outer search-toggler">
                                <i class="icon-5"></i>
                            </div>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one">Consultation</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <!--sticky Header-->
                <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
							<a href="index.php"><h5>ગામની મુલાકાતનું પત્રક</h5></a>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <!-- <div class="nav-right">
                            <div class="search-box-outer search-toggler">
                                <i class="icon-5"></i>
                            </div>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one">Consultation</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu ">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <h5>ગામની મુલાકાતનું પત્રક</h5>
                
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
