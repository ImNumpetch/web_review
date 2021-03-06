<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Product example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/product/product.css" rel="stylesheet">
  </head>

  <body>

    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="/">Home</a>  
        <a class="py-2 d-none d-md-inline-block" href="novelPage">Novel</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Cartoon</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Music</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Movie</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Point</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Contact</a>
     
        <a class="nav-item dropdown">
        
        
        
        
        
                        <!-- Authentication Links -->
                        @guest
                            <a class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </a>
                        @else
                            <a class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </a>
                        @endguest
                    
                </div>
            </div>
        </nav>
      
      
        
        
        
        
        
        
        
      </div>
    </nav>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Thailand Review</h1>
        <p class="lead font-weight-normal">REVIEW ABOUT YOUNG AGE TOPPIC</p>
        <a class="btn btn-outline-secondary" href="#">Sign in</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5"><a href="{{('novelPage')}}">Top novel</h2></a>
          <p class="lead">ยอดหญิงเซียนเครื่องหอม</p>
        </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="https://www.asiabooks.com/media/catalog/product/cache/1/image/264x/17f82f742ffe127f42dca9de82fb58b1/9/7/9786160622870c.jpg"></div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Top Music</h2>
          <p class="lead">Lil' Touch</p>
        </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="data:image/jpeg;base64,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"></div>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Top Cartoon</h2>
          <p class="lead">One piece</p>
        </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="https://www.mustplay.in.th/static/attachment/2017/10/3/attach-1509703202942.jpg"></div>
      </div>
      <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Top Movie</h2>
          <p class="lead">Sherlock 2010</p>
        </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="data:image/jpeg;base64,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"></div>
      </div>
    </div>

    

    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>

      
      
 
                    
      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
