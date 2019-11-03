<!DOCTYPE HTML>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Chamocell</title>

  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <!-- css -->
  <link rel="stylesheet" href="{{ asset('fron/css/bootstrap.css') }}"/>
  <link rel="stylesheet" href="{{ asset('fron/css/bootstrap-responsive.css') }}"/>
  <link rel="stylesheet" href="{{ asset('fron/css/prettyPhoto.css') }}"/>
  <link rel="stylesheet" href="{{ asset('fron/css/sequence.css') }}"/>
  <link rel="stylesheet" href="{{ asset('fron/css/style.css') }}"/>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('fron/img/logo.ico') }}">

  <!-- =======================================================
    Theme Name: Bootslander
    Theme URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

  <!-- main wrap -->
  <div class="main-wrap">

    <!-- header -->
    <header>
      <!-- top area -->
      <div class="top-nav">
        <div class="wrapper">
          <div class="logo">
            <a href="{{ url('/')}}">
              <!-- your logo image -->
              <img src="{{ asset('fron/img/logo.png')}}" alt="" />
            </a>
          </div>

          <div class="phone">
              @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}"> Register</a>
                    @endif
                </div>
            @endif
          </div>
        </div>
      </div>
      <!-- end top area -->
    </header>
    <!-- end of header-->

    <!-- section intro -->
    <section id="intro">
      <div class="featured">
        <div class="wrapper">

          <div class="row-fluid">
            <!-- slider -->
            <div class="span12">

              <div id="sequence-theme">
                <div id="sequence">
                  <img class="prev" src="{{ asset('fron/img/slides/bt-prev.png') }}" alt="Previous Frame" />
                  <img class="next" src="{{ asset('fron/img/slides/bt-next.png')}}" alt="Next Frame" />
                  <ul>
                    <li class="animate-in">
                      <h2 class="title">Portal Unlock</h2>
                      <h5 class="subtitle">Desbloqueos, Liberaciones, Limpiezas y Más</h5>
                      <img class="model" src="{{ asset('fron/img/slides/img1.png')}}" alt="" />
                    </li>
                    <li>
                      <h2 class="title">Responsive layout</h2>
                      <h5 class="subtitle">Degrade from wide screen to mobile screen size</h5>
                      <img class="model" src="{{ asset('fron/img/slides/img2.png')}}" alt=""/>
                    </li>
                    <li>
                      <h2 class="title">Built with bootstrap</h2>
                      <h5 class="subtitle">Supports modern browsers, touch devices and responsive designs</h5>
                      <img class="model" src="{{ asset('fron/img/slides/img3.png')}}" alt="" />
                    </li>
                  </ul>
                </div>
                <ul class="nav">
                  <li><img src="{{ asset('fron/img/slides/thumb1.png')}}" alt="Thumbnail" /></li>
                  <li><img src="{{ asset('fron/img/slides/thumb2.png')}}" alt="Thumbnail" /></li>
                  <li><img src="{{ asset('fron/img/slides/thumb3.png')}}" alt="Thumbnail" /></li>
                </ul>
              </div>

            </div>
            <!-- end slider -->
          </div>

        </div>
      </div>
    </section>
    <!-- end section intro -->

    <!-- section main content -->
    <section id="main-content">
      <div class="content-wrap">

        <!-- tagline -->
        <div class="tagline">
          <div class="wrapper">
            <!--### Subtitle ###-->
            <h2>Obtén el mejor precio del mercado</h2>
            <!-- CTA -->
            <div class="cta">
              <div class="btn-group">

                <a href="{{ url('/login') }}" class="btn btn-green btn-large"><i class="icon-shopping-cart icon-white"></i> Comprar Creditos</a>
                <a href="{{ url('/register') }}" class="btn btn-red btn-large">Registrate</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end tagline -->

        <!-- wrapper -->
        <div class="wrapper">

          <!-- boxes -->
          <div class="boxes">
            <div class="row-fluid">
<div class="container">
              <!-- box 1 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="{{ asset('fron/img/icons/icon-1.png')}}" class="" alt="" />
                  </div>
                  <h4>Condiciones</h4>
                  <p>Este servicio está garantizado siempre y cuando el Usuario siga las reglas que a continuación les Informamos.</p>
                  <a href="{{ asset('./terminos')}}" class="textlink">Learn more</a>
                </div>
              </div>

              <!-- box 2 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="{{ asset('fron/img/icons/icon-2.png') }}" class="" alt="" />
                  </div>
                  <h4>Tasa de éxito</h4>
                  <p> Nuestros servicios tienen un margen de errores muy bajo, haciendo que la cantidad de usuarios vallan en aumento  </p>
                  <a href="{{ asset('/servImail')}}" class="textlink">Learn more</a>
                </div>
              </div>

              <!-- box 3 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="{{ asset('fron/img/icons/icon-3.png') }}" class="" alt="" />
                  </div>
                  <h4>Soporte y Atención</h4>
                  <p>Contamos con soporte al cliente las<b> 24 horas los 365 días del año</b> y  mejor equipo de trabajo para su comodidad</p>
                  <a href="{{ route('login') }}" class="textlink">Learn more</a>
                </div>
              </div>

            </div>

          </div>
          <!-- end boxes -->


          <!-- recent portfolio -->
          <div class="row-fluid portfolio">
            <div class="headline">
              <h2><span>Nuevos Servicios</span></h2></div>
            <ul class="portfolio_list da-thumbs">

              <li class="span3">
                <img src="{{ asset('fron/img/dummies/img1.jpg')}}" alt="img">
                <article class="da-animate da-slideFromRight" style="display: block;">
                  <h5>Portfolio item</h5>
                  <span class="link_post"><a href="#"></a></span>
                  <span class="zoom"><a data-pretty="prettyPhoto[works]" href="{{ asset('fron/img/dummies/big1.jpg')}}"></a></span>
                </article>
              </li>
              <li class="span3">
                <img src="{{ asset('fron/img/dummies/img2.jpg')}}" alt="img">
                <article class="da-animate da-slideFromRight" style="display: block;">
                  <h5>Portfolio item</h5>
                  <span class="link_post"><a href="#"></a></span>
                  <span class="zoom"><a data-pretty="prettyPhoto[works]" href="{{ asset('fron/img/dummies/big1.jpg')}}"></a></span>
                </article>
              </li>
              <li class="span3">
                <img src="{{ asset('fron/img/dummies/img3.jpg')}}" alt="img">
                <article class="da-animate da-slideFromRight" style="display: block;">
                  <h5>Portfolio item</h5>
                  <span class="link_post"><a href="#"></a></span>
                  <span class="zoom"><a data-pretty="prettyPhoto" href="{{ asset('fron/img/dummies/big1.jpg')}}"></a></span>
                </article>
              </li>
              <li class="span3">
                <img src="{{ asset('fron/img/dummies/img4.jpg')}}" alt="img">
                <article class="da-animate da-slideFromRight" style="display: block;">
                  <h5>Portfolio item</h5>
                  <span class="link_post"><a href="#"></a></span>
                  <span class="zoom"><a data-pretty="prettyPhoto" href="{{ asset('fron/img/dummies/big1.jpg')}}"></a></span>
                </article>
              </li>
            </ul>

          </div>
          <!-- end portfolio -->


          <!-- testimonials -->
          <!-- <div class="row-fluid testimonials">
            <div class="headline">
              <h2><span>Equipo de Desarrollo</span></h2></div>
            <ul>
              <li class="span4">
                <div class="testimonial">
                  <img src="{{ asset('fron/img/dummies/user-1.png')}}" alt="" class="img-circle" />
                  <p>
                    &ldquo;Lorem ipsum dolor sit amet, veritus molestie et his. Summo dissentiet duo an. Et duo vitae atomorum, eripuit eruditi definitiones nec ut.&rdquo;
                  </p>
                  <span>&#45;&#45; Mike lamouz, <a href="#">Net designer</a></span>
                </div>
              </li>
              <li class="span4">
                <div class="testimonial">
                  <img src="{{ asset('fron/img/dummies/user-2.png')}}" alt="" class="img-circle" />
                  <p>
                    &ldquo;Lorem ipsum dolor sit amet, veritus molestie et his. Summo dissentiet duo an. Et duo vitae atomorum, eripuit eruditi definitiones nec ut.&rdquo;
                  </p>
                  <span>&#45;&#45; Leslie samarov, <a href="#">JIK Company</a></span>
                </div>
              </li>
              <li class="span4">
                <div class="testimonial">
                  <img src="{{ asset('fron/img/dummies/user-3.png')}}" alt="" class="img-circle" />
                  <p>
                    &ldquo;Lorem ipsum dolor sit amet, veritus molestie et his. Summo dissentiet duo an. Et duo vitae atomorum, eripuit eruditi definitiones nec ut.&rdquo;
                  </p>
                  <span>&#45;&#45; Jonathan does, <a href="#">App Studio</a></span>
                </div>
              </li>

            </ul>
          </div>

        </div> -->
        <!-- end wrapper -->

      </div>
    </section>
    <!-- end main content section -->

    <!-- section bottom -->
    <section id="bottom">
      <div class="bottom-cta">
        <div class="wrapper">
          <h3 class="title">Las Mejores ofertas  </h3>
          <h2>Servicio rápido y eficiente, Atención personalizada por nuestro personan</h2>
          <a href="{{ url('/register') }}" class="btn btn-red btn-large">Registrate Ya y desbloqua tu Equipo</a>
        </div>
      </div>
    </section>
    <!-- end section bottom -->


    <!-- section contact -->
    <!-- <section id="contact">
      <div class="container">
        <div class="row">
          <div class="span8">
            <h4>Get in touch with us by filling contact form below</h4>

            <form method="post" class="contactForm">

              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 field form-group">
                  <input type="text" name="name" placeholder="* Enter your full name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span4 field form-group">
                  <input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <input type="text" name="subject" placeholder="Enter your subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
                  <div class="validation"></div>

                  <p>
                    <button class="btn btn-theme btn-medium margintop10 pull-left" type="submit">Send message</button>
                    <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                  </p>
                </div>
              </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact information<span></span></h5>

                <ul class="contact-info">
                  <li><label>Address :</label> Tinggi sekali tower Jl.Kemacetan timur<br /> Jakarta selatan - Indonesia</li>
                  <li><label>Phone :</label>+62 123 456 78 / +62 123 456 79</li>
                  <li><label>Fax : </label>+62 123 456 10 / +62 123 456 11</li>
                  <li><label>Email : </label> info@yourdomain.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section> -->
    <!-- end section contact --> 

    <!-- footer -->
    <footer>
      <div class="footer">
        <div class="wrapper">
          <div class="social">
            <a href="https://www.facebook.com/chamocell" class="fb"> </a> <a href="https://twitter.com/chamocell" class="tw"> </a>
          </div>

          <div class="subfooter">
            <ul>
              <li><a href="#">Home</a> &#45; </li>
              <li><a href="#">Terms conditions</a> &#45; </li>
              <li><a href="#">Contact</a></li>
            </ul>
            <p class="copyright">&#169; Copyright. All rights reserved</p>

          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bootslander
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </footer>


  </div>
  </div>
  <!-- end main wrap -->

  <!-- Javascript Libraries -->

  <script src="{{ asset('fron/js/jquery.min.js') }}"></script>
  <script src="{{ asset('fron/js/bootstrap.js')}}"></script>
  <script src="{{ asset('fron/js/jquery.prettyPhoto.js')}}"></script>
  <!-- <script src="{{ asset('fron/js/sequence.jquery.js')}}"></script> -->
  <script src="{{ asset('fron/js/jquery-hover-effect.js')}}"></script>
  
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('fron/contactform/contactform.js')}}"></script>

  <!-- Template Custom Javascript File -->
  <script src="{{ asset('fron/js/custom.js')}}"></script>

</body>

</html>
