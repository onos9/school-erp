<!DOCTYPE html>
<html lang="">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{asset('backEnd/')}}/img/favicon.png" type="image/png" />
    <title>Course Details - School Management System</title>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/jquery-ui.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/themify-icons.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/nice-select.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/fastselect.min.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/owl.carousel.min.css" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('backEnd/')}}/css/style.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/css/software.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/css/toastr.min.css" />
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('backEnd/')}}/vendors/css/fullcalendar.print.css">

</head>

<body class="client dark">

    <!--================ Start Header Menu Area =================-->
    <header class="header-area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box-1420">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand" href="#">
                        <img class="w-75" src="{{asset('backEnd/img/logo.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="speakers.html">Speakers</a>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="schedule.html">Schedule</a>
                                    <li class="nav-item"><a class="nav-link" href="venue.html">Venue</a>
                                    <li class="nav-item"><a class="nav-link" href="price.html">Pricing</a>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <ul class="nav navbar-nav mr-auto search-bar">
                                <li class="">
                                    <div class="input-group">
                                        <span>
                                            <i class="ti-search" aria-hidden="true" id="search-icon"></i>
                                        </span>
                                        <input type="text" class="form-control primary-input input-left-icon" placeholder="Search" id="search" />
                                        <span class="focus-border"></span>
                                    </div>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================ Home Banner Area =================-->
    <section class="container box-1420">
        <div class="banner-area">
            <div class="banner-inner">
                <div class="banner-content">
                    <h2>Course Details</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="primary-btn fix-gr-bg semi-large" href="#">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Course Overview Area =================-->
    <section class="overview-area student-details section-gap-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs mb-50 ml-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#overviewTab" role="tab" data-toggle="tab">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#outlineTab" role="tab" data-toggle="tab">Outline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#prerequisitesTab" role="tab" data-toggle="tab">Prerequisites</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resourcesTab" role="tab" data-toggle="tab">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#statsTab" role="tab" data-toggle="tab">Stats</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- Start Overview Tab -->
                        <div role="tabpanel" class="tab-pane fade show active" id="overviewTab">
                            <h3>Discovery Voyage</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis 
                                unde omnis iste natus error sit voluptatem accusantium doloremque 
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit 
                                aut fugit, sed quia consequuntur magni dolores eos qui ratione 
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem 
                                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia 
                                non numquam eius modi tempora incidunt ut labore et dolore magnam 
                                aliquam quaerat voluptatem.
                            </p>

                            <h3>What are we looking for?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                non proident.
                            </p>

                            <h3>Additional course costs</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde 
                                omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam 
                                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto 
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                                qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <!-- End Overview Tab -->

                        <!-- Start Outline Tab -->
                        <div role="tabpanel" class="tab-pane fade" id="outlineTab">
                            <h3>Discovery Voyage</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis 
                                unde omnis iste natus error sit voluptatem accusantium doloremque 
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit 
                                aut fugit, sed quia consequuntur magni dolores eos qui ratione 
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem 
                                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia 
                                non numquam eius modi tempora incidunt ut labore et dolore magnam 
                                aliquam quaerat voluptatem.
                            </p>

                            <h3>What are we looking for?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                non proident.
                            </p>

                            <h3>Additional course costs</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde 
                                omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam 
                                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto 
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                                qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <!-- End Outline Tab -->

                        <!-- Start Prerequisites Tab -->
                        <div role="tabpanel" class="tab-pane fade" id="prerequisitesTab">
                            <h3>Discovery Voyage</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis 
                                unde omnis iste natus error sit voluptatem accusantium doloremque 
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit 
                                aut fugit, sed quia consequuntur magni dolores eos qui ratione 
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem 
                                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia 
                                non numquam eius modi tempora incidunt ut labore et dolore magnam 
                                aliquam quaerat voluptatem.
                            </p>

                            <h3>What are we looking for?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                non proident.
                            </p>

                            <h3>Additional course costs</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde 
                                omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam 
                                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto 
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                                qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <!-- End Prerequisites Tab -->

                        <!-- Start Resources Tab -->
                        <div role="tabpanel" class="tab-pane fade" id="resourcesTab">
                            <h3>Discovery Voyage</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis 
                                unde omnis iste natus error sit voluptatem accusantium doloremque 
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit 
                                aut fugit, sed quia consequuntur magni dolores eos qui ratione 
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem 
                                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia 
                                non numquam eius modi tempora incidunt ut labore et dolore magnam 
                                aliquam quaerat voluptatem.
                            </p>

                            <h3>What are we looking for?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                non proident.
                            </p>

                            <h3>Additional course costs</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde 
                                omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam 
                                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto 
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                                qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <!-- End Resources Tab -->

                        <!-- Start Stats Tab -->
                        <div role="tabpanel" class="tab-pane fade" id="statsTab">
                            <h3>Discovery Voyage</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis 
                                unde omnis iste natus error sit voluptatem accusantium doloremque 
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit 
                                aut fugit, sed quia consequuntur magni dolores eos qui ratione 
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem 
                                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia 
                                non numquam eius modi tempora incidunt ut labore et dolore magnam 
                                aliquam quaerat voluptatem.
                            </p>

                            <h3>What are we looking for?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                non proident.
                            </p>

                            <h3>Additional course costs</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde 
                                omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam 
                                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto 
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                                qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <!-- End Stats Tab -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Overview Area =================-->

    <!--================ Related Course Area =================-->
    <section class="academics-area section-gap-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="title">Related Courses</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="academic-item">
                                <div class="academic-img">
                                    <img class="img-fluid" src="{{asset('backEnd/img/client/academics/academic1.jpg')}}" alt="">
                                </div>
                                <div class="academic-text">
                                    <h4>
                                        <a href="#">Under Graduate Education</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="academic-item">
                                <div class="academic-img">
                                    <img class="img-fluid" src="{{asset('backEnd/img/client/academics/academic2.jpg')}}" alt="">
                                </div>
                                <div class="academic-text">
                                    <h4>
                                        <a href="#">Under Graduate Education</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="academic-item">
                                <div class="academic-img">
                                    <img class="img-fluid" src="{{asset('backEnd/img/client/academics/academic3.jpg')}}" alt="">
                                </div>
                                <div class="academic-text">
                                    <h4>
                                        <a href="#">Under Graduate Education</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Related Course Area =================-->

    <!--================Footer Area =================-->
	<footer class="footer_area section-gap-top pt-0">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Departments</h4>
						</div>
						<ul>
							<li><a href="#"></a>Business</a></li><a href="#">
                            <li><a href="#"></a>Energy & Environmental Sciences</a></li>
							<li><a href="#"></a>Education Engineering</a></li>
							<li><a href="#"></a>Humanities & Sciences</a></li>
							<li><a href="#"></a>Law and Medicine</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Health Care</h4>
						</div>
						<ul>
							<li><a href="#"></a>Infix Health Care</a></li><a href="#">
                            <li><a href="#"></a>Infix Children’s Health</a></li>
							<li><a href="#"></a>Interdisciplinary Research</a></li>
							<li><a href="#"></a>Infix Online</a></li>
							<li><a href="#"></a>Infix Research Centers</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>About Infix</h4>
						</div>
						<ul>
							<li><a href="#"></a>Infix Health Care</a></li><a href="#">
                            <li><a href="#"></a>Infix Children’s Health</a></li>
							<li><a href="#"></a>Interdisciplinary Research</a></li>
							<li><a href="#"></a>Infix Online</a></li>
							<li><a href="#"></a>Infix Research Centers</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Resources</h4>
						</div>
						<ul>
							<li><a href="#"></a>Business</a></li><a href="#">
                            <li><a href="#"></a>Energy & Environmental Sciences</a></li>
							<li><a href="#"></a>Education Engineering</a></li>
							<li><a href="#"></a>Humanities & Sciences</a></li>
							<li><a href="#"></a>Law and Medicine</a></li>
						</ul>
					</aside>
				</div>
			</div>
			<div class="row single-footer-widget">
				<div class="col-lg-8 col-md-9">
					<div class="copy_right_text">
						<p>Copyright © 2018 All rights reserved <a href="#">Infix</a>. The Ultimate Education ERP</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-3">
					<div class="social_widget">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->


<script src="{{asset('backEnd/')}}/vendors/js/jquery-3.2.1.min.js">
</script>
<script src="{{asset('backEnd/')}}/vendors/js/jquery-ui.js">
</script>
<script src="{{asset('backEnd/')}}/vendors/js/popper.js">
</script>
<script src="{{asset('backEnd/')}}/vendors/js/bootstrap.min.js">
</script>
<script src="{{asset('backEnd/')}}/vendors/js/nice-select.min.js">
</script>
<script src="{{asset('backEnd/')}}/vendors/js/jquery.magnific-popup.min.js">
</script>
<script src="{{asset('backEnd/')}}/vendors/js/raphael-min.js">
</script>
<script src="{{asset('backEnd/')}}/vendors/js/morris.min.js">
</script>
<script src="{{asset('backEnd/')}}/vendors/js/owl.carousel.min.js"></script>
<script src="{{asset('backEnd/')}}/vendors/js/toastr.min.js"></script>
<script src="{{asset('backEnd/')}}/vendors/js/moment.min.js"></script>
<script src="{{asset('backEnd/')}}/vendors/js/print/bootstrap-datetimepicker.min.js"></script>
<script src="{{asset('backEnd/')}}/vendors/js/bootstrap-datepicker.min.js">
</script>
<script src="{{asset('backEnd/')}}/js/main.js"></script>
<script src="{{asset('backEnd/')}}/js/custom.js"></script>
<script src="{{asset('backEnd/')}}/js/developer.js"></script>
</body>

</html>
