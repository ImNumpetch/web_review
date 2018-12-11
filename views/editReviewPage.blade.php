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
      <style>
          form { 
            margin: 0 auto; 
            width:450px;
            margin-top: 50px;}
    </style>

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
                            
                        @endguest
                    </a>
        
        
        
        <!---tag -->
      </div>
    </nav>
   <!--box-->
   <div>
 
<!---form----> 
<form action="{{route('editReviewPage.store')}}" method="post" name="form_comment">
    {{csrf_field()}}
<!--name-->
    catagory
    <select id="example-1to10" name="rating" autocomplete="off" >
        <option value="Novel" selected="selected">Novel</option>
        <option value="Cartoon">Cartoon</option>
        <option value="Music">Music</option>
        <option value="Movie">Movie</option>
    </select>
    Name: <input type="text" name="username"  > <br><br>
    <textarea rows="10" cols="70" name="comment" ></textarea>
    <td>
    <!--rating--> 
    
    Rating : <select id="example-1to10" name="rating" autocomplete="off" >
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7" selected="selected">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    
  </
       <br>     
    <!--ratio button buy-->
    <div>
    should buy?
    <input type="radio" name="buy" value="buy" checked="checked"> buy!</input>
    <input type="radio" name="buy" value="bad"> shouldn't buy!</input><br>
    <br> 
    <input type="submit" value="Send">
    <div>
</form>
 
   </div>
             
 

<script type="text/javascript" src="js/script.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="jquery.barrating.min.js"></script>
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-heroic-features/vendor/jquery/jquery.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-heroic-features/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
