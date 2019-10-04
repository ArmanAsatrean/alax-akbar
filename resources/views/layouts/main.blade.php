<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Game Info</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="{{asset('image/x-icon')}}" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <!-- Site CSS -->
   <link rel="stylesheet" href="{{asset('style.css')}}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="{{asset('css/3dslider.css')}}" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="{{asset('js/3dslider.js')}}"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="{{asset('images/loading-img.gif')}}" alt="">
      </div>
      <!-- END LOADER -->
     @include('layouts.header')
     @yield('content')
     @yield('about')
     @yield('news')
     @yield('blog')
     @yield('contact')
     @yield('team')
     @yield('makes')
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="#"><img src="{{asset('images/footer-logo.png')}}" alt="#" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="https://twitter.com/?lang=ru"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                           <li><a class="pinterest" href="https://www.pinterest.com"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                           <li><a href="{{url('/about')}}">About Us</a></li>
                           <li><a href="{{url('/team')}}">Our Team</a></li>
                           <li><a href="{{url('/news')}}">Latest News</a></li>
                           <li><a href="{{url('/matche')}}">Recent Matchs</a></li>
                           <li><a href="{{url('/blog')}}">Our Blog</a></li>
                           <li><a href="{{url('/contact')}}">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Contact us</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                           <li><i class="fa fa-phone"></i> 123 456 7890</li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="contact-footer">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.1465025595126!2d44.50403721475496!3d40.20580397636567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd3821ada101%3A0x2094e7d282052996!2zS29taXRhcyBBdmUsIFllcmV2YW4sINCQ0YDQvNC10L3QuNGP!5e0!3m2!1sru!2s!4v1568660402966!5m2!1sru!2s" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2018 Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
            </div>
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="{{asset('js/all.js')}}"></script>
      <!-- ALL PLUGINS -->
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"><script>
      <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"><script>
   </body>
</html>