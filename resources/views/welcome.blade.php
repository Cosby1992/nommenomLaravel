<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nommenom</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <section class="frontpage container">
        
            <h1 class="display-1 welcometext">Nommenom<span class="dotcom">.com</span></h1>

            <div class="searchmeals">
                <div class="form-row limit">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Search for a meal...">
                    </div>
                </div>

                <div>
                    <p class="lead searchbtn">
                        <a class="btn btn-primary btn-lg" href="#search" role="button">Search</a>
                    </p>
                </div>
            </div>

            <div class="jumbotron jumpgreen">
                <div class="jumbotopholder">
                    <h1 class="display-4 jumphead">Udvalgte Retter</h1>

                    <p class="lead">
                        <a class="btn btn-primary btn-lg jumbobutton" href="/meals/create" role="button">+ Tilføj en ny ret</a>
                    </p>
                </div>


                <div class="cardholder">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/boller-i-karry.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Boller i Karry</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/caesarsallad.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cæsar salat</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/carbonara.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Spaghetti Carbonara</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>

            

        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
