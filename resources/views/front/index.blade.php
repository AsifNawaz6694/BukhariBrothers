<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html class="no-js">
            <!--<![endif]-->
            <head>
               <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
               <meta name="description" content="Meghna One page parallax responsive HTML Template ">
               <meta name="author" content="Muhammad Morshed">
               <title>BukhariBrothers</title>
               <!-- Mobile Specific Meta
                  ================================================== -->
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <!-- Favicon -->
               <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->
               <!-- CSS
                  ================================================== -->
               <!-- Fontawesome Icon font -->
               <link rel="stylesheet" href="{{asset('public/frontend_assets/plugins/themefisher-font/style.css') }}">
               <!-- bootstrap.min css -->
               <link rel="stylesheet" href="{{asset('public/frontend_assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
               <!-- Animate.css -->
               <link rel="stylesheet" href="{{asset('public/frontend_assets/plugins/animate-css/animate.css') }}">
               <!-- Magnific popup css -->
               <link rel="stylesheet" href="{{asset('public/frontend_assets/plugins/magnific-popup/dist/magnific-popup.css') }}">
               <!-- Slick Carousel -->
               <link rel="stylesheet" href="{{asset('public/frontend_assets/plugins/slick-carousel/slick/slick.css') }}">
               <link rel="stylesheet" href="{{asset('public/frontend_assets/plugins/slick-carousel/slick/slick-theme.css') }}">
               <!-- Main Stylesheet -->
               <link rel="stylesheet" href="{{ asset('public/frontend_assets/css/style.css') }}">
            </head>
            
                @include('general_partials.error_section')
            <body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
               <!--
           
                  ==================================== -->
               <!--
                  Welcome Slider
                  ==================================== -->
               @include('front.partials.header')

               <!--
                  End Fixed Navigation
                  ==================================== -->
               <!--
                  Start About Section
                  ==================================== -->
               <section class="bg-one about section">
                  <div class="container">
                     <div class="row">
                        <!-- section title -->
                        <div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
                           <h2>About <span class="color">Us</span> </h2>
                           <div class="border"></div>
                        </div>
                        <!-- /section title -->
                        <!-- About item -->
                        {{-- <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
                           <div class="block">
                              <div class="icon-box">
                                 <i class="tf-tools"></i>
                              </div>
                              <!-- Express About Yourself -->
                              <div class="content text-center">
                                 <h3 class="ddd">We're Creative</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                              </div>
                           </div>
                        </div> --}}
                        <!-- End About item -->
                        <!-- About item -->
                        {{-- <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                           <div class="block">
                              <div class="icon-box">
                                 <i class="tf-strategy"></i>
                              </div>
                              <!-- Express About Yourself -->
                              <div class="content text-center">
                                 <h3>We're Professional</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                              </div>
                           </div>
                        </div> --}}
                        <!-- End About item -->
                        <!-- About item -->					
                        {{-- <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                           <div class="block kill-margin-bottom">
                              <div class="icon-box">
                                 <i class="tf-anchor2"></i>
                              </div>
                              <!-- Express About Yourself -->
                              <div class="content text-center">
                                 <h3>We're Genius</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                              </div>
                           </div>
                        </div> --}}
                        <!-- End About item -->
                     </div>
                     <!-- End row -->
                  </div>
                  <!-- End container -->
               </section>
               <!-- End section -->
               <section class="section about-2 padding-0 bg-dark" id="about">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-6 padding-0 ">
                           <img class="img-responsive" src="{{asset('public/frontend_assets/images/about/about-business-man.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6">
                           <div class="content-block">
                              <h2>{{ $about['heading'] }}.</h2>
                              <p>{{ $about['description'] }}</p>
                             
                             {{--  <div class="row">
                                 <div class="col-md-6">
                                    <div class="media">
                                       <div class="pull-left">
                                          <i class="tf-circle-compass"></i>	
                                       </div>
                                       <div class="media-body">
                                          <h4 class="media-heading">SEO Optimized</h4>
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus eos saepe</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="media">
                                       <div class="pull-left">
                                          <i class="tf-hotairballoon"></i>	
                                       </div>
                                       <div class="media-body">
                                          <h4 class="media-heading">Easy Customization</h4>
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus </p>
                                       </div>
                                    </div>
                                 </div>
                              </div> --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!--
                  Start Call To Action
                  ==================================== -->
              {{--  <section class="call-to-action section-sm bg-1 overly">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12 text-center">
                           <h2>Great Design & Incredible Features</h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur odio impedit incidunt? <br> Omnis accusantium ea reiciendis, fugit commodi nostrum.</p>
                           <a href="#" class="btn btn-main">Start a project with us</a>
                        </div>
                     </div>
                     <!-- End row -->
                  </div>
                  <!-- End container -->
               </section> --}}
               <!-- End section -->
               <!-- Start Services Section
                  ==================================== -->
               <section id="services" class="bg-one section">
                  <div class="container">
                     <div class="row">
                        <!-- section title -->
                        <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                           <h2>Our <span class="color">Services</span></h2>
                           <div class="border"></div>
                        </div>
                        <!-- /section title -->
                        <!-- Single Service Item -->
                        @foreach($services as $service)
                        <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                           <div class="service-block text-center">
                              <div class="service-icon text-center">
                                 <i class="tf-globe"></i>
                              </div>
                              <h3>{{ $service->title }}</h3>
                              <p>{{ $service->description }}</p>
                           </div>
                        </article>
                        @endforeach()
                        <!-- End Single Service Item -->
                     </div>
                     <!-- End row -->
                  </div>
                  <!-- End container -->
               </section>
               <!-- End section -->
               <!-- Start Team Skills
                  =========================================== -->
               <section id="team-skills" class="parallax-section section section-bg overly">
                  <div class="container">
                     <div class="row" >
                        <!-- section title -->
                        <div class="col-md-12">
                           <div class="title text-center">
                              <h2>Our <span class="color">Skills</span></h2>
                              <div class="border"></div>
                           </div>
                        </div>
                        <!-- /section title -->
                     </div>
                     <!-- End row -->
                     <div class="row">
                        <div class="col-md-6">
                           <h2>We’ve skilled in wide range of web and <br>
                              Other digital market tools.
                           </h2>
                           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis magni explicabo cum aperiam recusandae sunt accusamus totam. Quidem quos fugiat sapiente numquam accusamus quas hic, itaque in libero reiciendis tempora!</p>
                           <img class="img-responsive" src="{{asset('public/frontend_assets/images/about/company-growth.png')}}" alt="">
                        </div>
                        <div class="col-md-6">
                           <ul class="skill-bar">
                              <li>
                                 <p><span>01-</span> Business Development</p>
                                 <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                       aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <p><span>02-</span> Analysis</p>
                                 <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                       aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <p><span>03-</span> Design</p>
                                 <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                       aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <p><span>04-</span> IOS Development</p>
                                 <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                       aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <p><span>04-</span> Andriod Development</p>
                                 <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                       aria-valuemin="0" aria-valuemax="100" style="width:94%">
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- End container -->
               </section>
               <!-- End section -->
               <!-- Start Portfolio Section
                  =========================================== -->
               <section class="portfolio section" id="resources">
                  <div class="container">
                     <div class="row " >
                        <div class="col-lg-12">
                           <!-- section title -->
                           <div class="title text-center">
                              <h2>Our <span class="color">Resources</span></h2>
                              <div class="border"></div>
                           </div>
                           <!-- /section title -->
                        </div>
                        <!-- /end col-lg-12 -->
                     </div>
                     <!-- end row -->
                   {{--   <div class="row">
                        <div class="col-md-12">
                           <div class="portfolio-filter">
                              <button  type="button" data-filter="all">All</button>
                              <button type="button" data-filter=".photography">Photography</button>
                              <button type="button" data-filter=".design">Design</button>
                              <button type="button" data-filter=".development">Development</button>
                           </div>
                        </div>
                     </div> --}}
                     <div class="row portfolio-items-wrapper">
                        @foreach($resources as $resource)
                        <div class="mix col-md-4 design">
                           <div class="portfolio-block">
                              <img class="img-responsive" src="{{asset('public/storage/resources-images/' . $resource->image)}}" alt="">
                              <div class="caption">
                                 <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="" data-lightbox="image-1">
                                 <i class="tf-ion-android-search"></i>
                                 </a>
                                 <h4><a href="">{{ $resource->title }}</a></h4>
                                 <p>{{ $resource->description }}</p>
                              </div>
                           </div>
                        </div>
                        @endforeach                      
                     </div>
                  </div>
                  <!-- end container -->
               </section>
               <!-- End section -->
               <!--
                  Start Counter Section
                  ==================================== -->
               <section id="counter" class="parallax-section bg-1 section overly">
                  <div class="container">
                     <div class="row">
                        <!-- first count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                           <div class="counters-item">
                              <i class="tf-ion-android-happy"></i>
                              <span data-speed="3000" data-to="320">320</span>
                              <h3>Staff Members</h3>
                           </div>
                        </div>
                        <!-- end first count item -->
                        <!-- second count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                           <div class="counters-item">
                              <i class="tf-ion-archive"></i>
                              <span data-speed="3000" data-to="565">565</span>
                              <h3>Projects completed</h3>
                           </div>
                        </div>
                        <!-- end second count item -->
                        <!-- third count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                           <div class="counters-item">
                              <i class="tf-ion-thumbsup"></i>
                              <span data-speed="3000" data-to="95">95</span>
                              <h3>Total Resources</h3>
                           </div>
                        </div>
                        <!-- end third count item -->
                        <!-- fourth count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                           <div class="counters-item kill-margin-bottom">
                              <i class="tf-ion-coffee"></i>
                              <span data-speed="3000" data-to="2500">2500</span>
                              <h3>Number Of Services</h3>
                           </div>
                        </div>
                        <!-- end fourth count item -->
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end container -->
               </section>
               <!-- end section -->
               <!-- 
                  Start Our Team
                  =========================================== -->
               <section id="our-team" class="section">
                  <div class="container">
                     <div class="row">
                        <!-- section title -->
                        <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
                           <h2>Our <span class="color">Team</span></h2>
                           <div class="border"></div>
                        </div>
                        <!-- /section title -->
                        <!-- team member -->
                        @foreach($users as $user)
                        <div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
                           
                           <div class="team-member">
                              <div class="member-photo">
                                 <!-- member photo -->
                                 <img class="img-responsive" src="{{asset('public/storage/profile-pictures/' . $user->profile_pic)}}" alt="Meghna">
                                 <!-- /member photo -->
                                 <!-- member social profile -->
                                 {{-- <div class="mask">
                                    <ul class="list-inline">
                                       <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                       <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                       <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                                       <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                    </ul>
                                 </div> --}}
                                 <!-- /member social profile -->
                              </div>
                              <!-- member name & designation -->
                              <div class="member-meta">
                                 <h4>{{ $user->name }}</h4>
                                 <span>{{ $user->designation }}</span>
                                 <p>{{ $user->about }}</p>
                              </div>
                              <!-- /member name & designation -->
                              <!-- /about member -->
                           </div>
                        </div>
                        @endforeach
                        <!-- end team member -->
                        <!-- team member -->
                        
                        <!-- end team member -->
                     </div>
                     <!-- End row -->
                  </div>
                  <!-- End container -->
               </section>
               <!-- End section -->
               <!-- Start Pricing section
                  =========================================== -->
               {{-- <section id="pricing" class="pricing section">
                  <div class="container">
                     <div class="row">
                        <!-- section title -->
                        <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
                           <h2>Our Greatest<span class="color"> Plans</span></h2>
                           <div class="border"></div>
                        </div>
                        <!-- /section title -->
                        <!-- single pricing table -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">
                           <div class="price-item">
                              <!-- plan name & value -->
                              <div class="price-title">
                                 <h3>Free</h3>
                                 <p><strong class="value">$99</strong>/ month</p>
                              </div>
                              <!-- /plan name & value -->
                              <!-- plan description -->
                              <ul>
                                 <li>1GB Disk Space</li>
                                 <li>10 Email Account</li>
                                 <li>Script Installer</li>
                                 <li>1 GB Storage</li>
                                 <li>10 GB Bandwidth</li>
                                 <li>24/7 Tech Support</li>
                              </ul>
                              <!-- /plan description -->
                              <!-- signup button -->
                              <a class="btn btn-transparent" href="#">Signup</a>
                              <!-- /signup button -->
                           </div>
                        </div>
                        <!-- end single pricing table -->
                        <!-- single pricing table -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                           <div class="price-item">
                              <!-- plan name & value -->
                              <div class="price-title">
                                 <h3>Silver</h3>
                                 <p><strong class="value">$149</strong/>/ month</p>
                              </div>
                              <!-- /plan name & value -->
                              <!-- plan description -->
                              <ul>
                                 <li>1GB Disk Space</li>
                                 <li>10 Email Account</li>
                                 <li>Script Installer</li>
                                 <li>1 GB Storage</li>
                                 <li>10 GB Bandwidth</li>
                                 <li>24/7 Tech Support</li>
                              </ul>
                              <!-- /plan description -->
                              <!-- signup button -->
                              <a class="btn btn-transparent" href="#">Signup</a>
                              <!-- /signup button -->
                           </div>
                        </div>
                        <!-- end single pricing table -->
                        <!-- single pricing table -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                           <div class="price-item">
                              <!-- plan name & value -->
                              <div class="price-title">
                                 <h3>Gold</h3>
                                 <p><strong class="value">$199</strong/>/ month</p>
                              </div>
                              <!-- /plan name & value -->
                              <!-- plan description -->
                              <ul>
                                 <li>1GB Disk Space</li>
                                 <li>10 Email Account</li>
                                 <li>Script Installer</li>
                                 <li>1 GB Storage</li>
                                 <li>10 GB Bandwidth</li>
                                 <li>24/7 Tech Support</li>
                              </ul>
                              <!-- /plan description -->
                              <!-- signup button -->
                              <a class="btn btn-transparent" href="#">Signup</a>
                              <!-- /signup button -->
                           </div>
                        </div>
                        <!-- end single pricing table -->
                        <!-- single pricing table -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="750ms">
                           <div class="price-item">
                              <!-- plan name & value -->
                              <div class="price-title">
                                 <h3>Platinum</h3>
                                 <p><strong class="value">$299</strong/>/ month</p>
                              </div>
                              <!-- /plan name & value -->
                              <!-- plan description -->
                              <ul>
                                 <li>1GB Disk Space</li>
                                 <li>10 Email Account</li>
                                 <li>Script Installer</li>
                                 <li>1 GB Storage</li>
                                 <li>10 GB Bandwidth</li>
                                 <li>24/7 Tech Support</li>
                              </ul>
                              <!-- /plan description -->
                              <!-- signup button -->
                              <a class="btn btn-transparent" href="#">Signup</a>
                              <!-- /signup button -->
                           </div>
                        </div>
                        <!-- end single pricing table -->
                     </div>
                     <!-- End row -->
                  </div>
                  <!-- End container -->
               </section> --}}
               <!-- End section -->
               <!-- Start Testimonial
                  =========================================== -->
             {{--   <section id="testimonial" class="testimonial overly section bg-2">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12">
                           <!-- testimonial wrapper -->
                           <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                              <!-- testimonial single -->
                              <div class="item text-center">
                                 <!-- client photo -->
                                 <div class="client-thumb">
                                    <img src="{{asset('public/frontend_assets/images/team/client-1.jpg')}}" class="img-responsive" alt="Meghna">
                                 </div>
                                 <!-- /client photo -->
                                 <!-- client info -->
                                 <div class="client-info">
                                    <div class="client-meta">
                                       <h3>Jonathon Andrew</h3>
                                       <span>Dec 26, 2018</span>
                                    </div>
                                    <div class="client-comment">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium minima ex, quia error, deserunt voluptatibus repellendus? Incidunt eligendi aliquam repellat molestias, vel sed optio rem odit quis ratione non consequuntur!</p>
                                    </div>
                                 </div>
                                 <!-- /client info -->
                              </div>
                              <!-- /testimonial single -->
                              <!-- testimonial single -->
                              <div class="item text-center">
                                 <!-- client photo -->
                                 <div class="client-thumb">
                                    <img src="{{asset('public/frontend_assets/images/team/client-2.jpg')}}" class="img-responsive" alt="Meghna">
                                 </div>
                                 <!-- /client photo -->
                                 <!-- client info -->
                                 <div class="client-info">
                                    <div class="client-meta">
                                       <h3>Jonathon Andrew</h3>
                                       <span>Dec 26, 2018</span>
                                    </div>
                                    <div class="client-comment">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel reiciendis qui in laborum obcaecati expedita blanditiis animi placeat, nemo exercitationem porro. Consequuntur qui commodi minima molestiae, dolores reprehenderit nemo inventore.</p>
                                    </div>
                                 </div>
                                 <!-- /client info -->
                              </div>
                              <!-- /testimonial single -->
                              <!-- testimonial single -->
                              <div class="item text-center">
                                 <!-- client photo -->
                                 <div class="client-thumb">
                                    <img src="{{asset('public/frontend_assets/images/team/client-1.jpg')}}" class="img-responsive" alt="Meghna">
                                 </div>
                                 <!-- /client photo -->
                                 <!-- client info -->
                                 <div class="client-info">
                                    <div class="client-meta">
                                       <h3>Jonathon Andrew</h3>
                                       <span>Dec 26, 2018</span>
                                    </div>
                                    <div class="client-comment">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolorem non delectus neque, voluptatem accusamus atque expedita doloribus minima iusto nemo, numquam eos quia maiores harum! Quaerat illum beatae necessitatibus!</p>
                                    </div>
                                 </div>
                                 <!-- /client info -->
                              </div>
                              <!-- /testimonial single -->
                           </div>
                           <!-- end testimonial wrapper -->
                        </div>
                        <!-- end col lg 12 -->
                     </div>
                     <!-- End row -->
                  </div>
                  <!-- End container -->
               </section> --}}
               <!-- End Section -->
               <!--
                  Start Blog Section
                  =========================================== -->
               <section id="projects" class="section">
                  <div class="container">
                     <div class="row">
                        <!-- section title -->
                        <div class="title text-center wow fadeInDown">
                           <h2> Latest <span class="color">Projects</span></h2>
                           <div class="border"></div>
                        </div>
                        <!-- /section title -->
                        <div class="clearfix">
                           <!-- single blog post -->
                           @foreach($projects as $project)
                              <article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
                                 <div class="post-block">
                                    <div class="media-wrapper">
                                       <img src="{{asset('public/storage/project-images/' . $project->image)}}" alt="amazing caves coverimage" class="img-responsive">
                                    </div>
                                    <div class="content">
                                       <h3><a href="">{{ $project->title }}</a></h3>
                                       <p>{{$project->description}}.</p>
                                       {{-- <a class="btn btn-transparent" href="single-post.html">Read more</a> --}}
                                    </div>
                                 </div>
                              </article>
                           @endforeach
                           <!-- /single blog post -->                          
                        </div>
                        <di{{-- v class="all-post text-center">
                           <a class="btn btn-main" href="#">View All Post</a>
                        </div> --}}
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end container -->
               </section>
               <!-- end section -->
               <!-- Srart Contact Us
                  =========================================== -->		
               <section id="contact-us" class="contact-us section-bg">
                  <div class="container">
                     <div class="row">
                        <!-- section title -->
                        <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                           <h2>Get In <span class="color">Touch</span></h2>
                           <div class="border"></div>
                        </div>
                        <!-- /section title -->
                        <!-- Contact Details -->
                        <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                           <h3>Contact Details</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
                           <div class="contact-details">
                              <div class="con-info clearfix">
                                 <i class="tf-map-pin"></i>
                                 <span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
                              </div>
                              <div class="con-info clearfix">
                                 <i class="tf-ion-ios-telephone-outline"></i>
                                 <span>Phone: +880-31-000-000</span>
                              </div>
                              <div class="con-info clearfix">
                                 <i class="tf-ion-iphone"></i>
                                 <span>Fax: +880-31-000-000</span>
                              </div>
                              <div class="con-info clearfix">
                                 <i class="tf-ion-ios-email-outline"></i>
                                 <span>Email: hello@meghna.com</span>
                              </div>
                           </div>
                        </div>
                        <!-- / End Contact Details -->
                        <!-- Contact Form -->
                        <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                           <form id="contact-form" method="post" action="{{ route('contact_post') }}" role="form">
                              {{ csrf_field() }}
                              <div class="form-group">
                                 <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                              </div>
                              <div class="form-group">
                                 <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                              </div>
                              <div class="form-group">
                                 <input type="text" placeholder="Subject" class="form-control" name="contact_subject" id="subject">
                              </div>
                              <div class="form-group">
                                 <textarea rows="6" placeholder="Message" class="form-control" name="contact_message" id="message_contact"></textarea>	
                              </div>
                              <div id="mail-success" class="success">
                                 Thank you. The Mailman is on His Way :)
                              </div>
                              <div id="mail-fail" class="error">
                                 Sorry, don't know what happened. Try later :(
                              </div>
                              <div id="cf-submit">
                                 <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                              </div>
                           </form>
                        </div>
                        <!-- ./End Contact Form -->
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end container -->
                  <!-- Google Map -->
                  {{-- <div class="google-map">
                     <div id="map-canvas"></div>
                  </div> --}}
                  <!-- /Google Map -->
               </section>
               <!-- end section -->
               <!-- end Contact Area
                  ========================================== -->
              @include('front.partials.footer')
               <div id="scroll-up">
                  up
               </div>
               <!-- 
                  Essential Scripts
                  =====================================-->
               <!-- Main jQuery -->
               <script type="text/javascript" src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
               <!-- Bootstrap 3.1 -->
               <script type="text/javascript" src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
               <!-- Slick Carousel -->
               <script type="text/javascript" src="{{asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
               <!-- Portfolio Filtering -->
               <script type="text/javascript" src="{{asset('plugins/mixitup/dist/mixitup.min.js')}}"></script>
               <!-- Smooth Scroll -->
               <script type="text/javascript" src="{{asset('plugins/smooth-scroll/dist/js/smooth-scroll.min.js')}}"></script>
               <!-- Magnific popup -->
               <script type="text/javascript" src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
               <!-- Google Map API -->
               <script type="text/javascript"  src="{{asset('http://maps.google.com/maps/api/js?sensor=false')}}"></script>
               <!-- Sticky Nav -->
               <script type="text/javascript" src="{{asset('plugins/Sticky/jquery.sticky.js')}}"></script>
               <!-- Number Counter Script -->
               <script type="text/javascript" src="{{asset('plugins/count-to/jquery.countTo.js')}}"></script>
               <!-- wow.min Script -->
               <script type="text/javascript" src="{{asset('plugins/wow/dist/wow.min.js')}}"></script>
               <!-- Custom js -->
               <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
            </body>
         </html>