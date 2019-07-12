<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kmetti Balázs állványozó</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/freelancer.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}?v=2">
</head>
<body id="page-top">
    
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Kmetti Balázs</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menü
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfólió</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#allvany-berles">Állvány bérlés</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#arak">Árak</a>
                    </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#kapcsolat">Kapcsolat</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            
    {{--        <img class="masthead-avatar mb-5" src="{{ URL::asset('img/avatar.jpg') }}" alt="avatar">--}}

            <h1 class="masthead-heading text-uppercase mb-0">Kmetti Balázs</h1>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
            </div>

            <p class="masthead-subheading font-weight-light mb-0">Ács-állványozó</p>

        </div>
    </header>
    
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfólió</h2>
            
            <div class="divider-custom">
            <div class="divider-custom-line"></div>
            </div>
            
            <div class="row">
                
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<img class="img-fluid" src="{{ URL::asset('img/portfolio/portfolio_1.jpg') }}" alt="">
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<img class="img-fluid" src="{{ URL::asset('img/portfolio/portfolio_2.jpg') }}" alt="">
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<img class="img-fluid" src="{{ URL::asset('img/portfolio/portfolio_3.jpg') }}" alt="">
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<img class="img-fluid" src="{{ URL::asset('img/portfolio/portfolio_4.jpg') }}" alt="">
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<img class="img-fluid" src="{{ URL::asset('img/portfolio/portfolio_5.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<img class="img-fluid" src="{{ URL::asset('img/portfolio/portfolio_6.jpg') }}" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>
    
    <section class="page-section" id="allvany-berles">
        <div class="container">
            
            <h2 class="page-section-heading text-center text-uppercase">Állvány bérlés</h2>
            
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <p class="lead">Homlokzati Graf állványrendszer bérbeadása változó felületű munkákhoz. A rendelkezésre bocsátható állványzat 10-280 m2 között lehetséges.  A bérelni kívánt állványt a helyszínre szállítjuk, és ott segítünk az összeállításban, ezzel ön időt takarít, emelet biztosítjuk önnek a kellő szakértelmet, ami az állványzat üzembehelyezéséhez szükséges. Így önnek nem kell az állvány szerelésével bajlódni, azt tapasztalt szakemberek, elvégzik ön helyett. Szükség esetén segítünk önnek a rendszer bontásában, illetve az állányelemek elszállításában.</p>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <p class="lead">Továbbá különböző építőipari és ácsmunkákat vállalunk, legyen szó tető felújításról, ereszcsatorna cseréről, esetleg teraszépítésről. Különböző kőművesmunkákkal, építkezéssel, átépítéssel, egyaránt külső és belső munkával keressenek bizalommal.</p>
                </div>
            </div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<img class="img-fluid" src="{{ URL::asset('img/allvany.jpg') }}" alt="">
					</div>
				</div>
			</div>

        </div>    
    </section>

    <section class="page-section" id="arak">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase">Árak</h2>
            
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
            </div>
            
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Termék</th>
                            <th scope="col">Ár</th>
                        </tr>
                    </thead>
                    @yield('prices')
                </table>
            </div>

        </div>
    </section>

    <section class="page-section" id="kapcsolat">
      <div class="container">
          
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kapcsolat</h2>

        <div class="divider-custom">
          <div class="divider-custom-line"></div>
        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Név</label>
                  <input class="form-control" id="name" type="text" placeholder="Név" required="required" data-validation-required-message="Add meg a neved!">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email cím</label>
                  <input class="form-control" id="email" type="email" placeholder="Email cím" required="required" data-validation-required-message="Add meg az email címed!">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Telefonszám</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Telefonszám" required="required" data-validation-required-message="Add meg a telefonszámod!">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Üzenet</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Üzenet" required="required" data-validation-required-message="Add meg az üzenetet!"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Küld</button>
              </div>
            </form>
          </div>
        </div>
  
      </div>
    </section>
    
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Telefonszám</h4>
					<p class="lead mb-0">Kmetti Balázs<br>+3620 2916 124</p>
                </div>
            </div>
        </div>
    </footer>
    
    <section class="copyright py-4 text-center text-white">
        <div class="container">
            <small>&copy; 2019 | <a href="https://www.linkedin.com/in/zucklevente" target="_blank" title="Zuck Levente Facebook">Zuck Levente</a></small>
        </div>
    </section>
    
    <script src="{{ URL::asset('css/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('css/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <script src="{{ URL::asset('css/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    
    <script src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ URL::asset('js/contact_me.js') }}"></script>
    
    <script src="{{ URL::asset('js/freelancer.min.js') }}"></script>
  
  </body>
</html>