<section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="https://twitter.com/?lang=ru"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a class="pinterest" href="https://www.pinterest.com"><i class="fa fa-pinterest-p"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="{{url('/')}}">Home</a></li>
                                          <!-- <li><a href="{{url('/about')}}">About</a></li> -->
                                          <li><a href="{{url('/team')}}">Team</a></li>
                                          <li><a href="{{url('/players')}}">Player</a></li>
                                          <li class="menu-item {{(Request::segment(1) == 'makes')? 'current-menu-item' : ''}}"><a href="{{url('makes')}}">Makes</a></li>
                                          <li class="menu-item {{(Request::segment(1) == 'models')? 'current-menu-item' : ''}}"><a href="{{url('models')}}">Models</a></li>
                                          <!-- <li><a href="{{url('/blog')}}">Blog</a></li> -->
                                          <li class="dropdown mega-dropdown">
                                             <a href="match" class="dropdown-toggle" data-toggle="dropdown">Match<span class="caret"></span></a>				
                                             <ul class="dropdown-menu mega-dropdown-menu">
                                             @php 
                                                $teams = \App\Http\Controllers\sportController::getTeam();
                                             @endphp
                                                <li class="col-sm-4">
                                                   <ul class="menu-inner">
                                                      <li class="dropdown-header">Teams</li>
                                                      @foreach($teams as $team)
                                                          <li class="menu-item"><a href="{{url('/teamPlayer/' . $team->id)}}">{{strtoupper($team->name)}}</a></li>
                                                      @endforeach
                                                   </ul>
                                                </li>
                                             </ul>
                                          </li>
                                          <li><a href="{{url('/contact')}}">Contact</a></li>
                                          <li><a href="{{url('/logout')}}">Logout</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                 <div class="search-bar">
                                    <div id="imaginary_container">
                                       <div class="input-group stylish-input-group">
                                          <input type="text" class="form-control"  placeholder="Search" >
                                          <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>  
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>If you use this site regularly and would like to help keep the site on the Internet,<br>
                                 please consider donating a small sum to help pay..
                              </p>
                            
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Second slide -->
                  <div class="item skyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                              <button class="btn btn-primary btn-lg">Button</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Third slide -->
                  <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                              <button class="btn btn-primary btn-lg">Button</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
               </div>
               <!-- /.carousel-inner -->
               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <!-- /.carousel -->
            <div class="news">
               <div class="container">
                  <div class="heading-slider">
                     <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> Top Headlines :</p>
                     <!--made by vipul mirajkar thevipulm.appspot.com-->
                     <h1>
                     <a href="" class="typewrite" data-period="2000" data-type='[ "Contrary to popular belief, Lorem Ipsum is not simply random text.", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."]'>
                     <span class="wrap"></span>
                     </a>
                     </h1>
                     <span class="wrap"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>