<!DOCTYPE html>
<html lang="en">
<head>
   @include('layout.style')
</head>
<body>
    <section class="container-fluid">
        <h1 class="text-center">Bienvenue sur la page de connexion</h1>
        <div class="row card-body ">
    <div class="col-lg-7 col-md-12 card shadow">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/news-4.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/news-5.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/news-2.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div class="col-lg-5 col-md-12 card shadow">
      @if (session('status'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Herror!</strong> {{session('status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <h2 class="text-center">Authentifaction</h2>
        <div class="login-img text-center">
            <img src="{{ asset('images/burkina-faso.png') }}" style="width: 25%;" alt="">
        </div>

        <p class="text-center " style="font-size:13px">Veillez renseigner vos information pour vous connecter</p>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email </label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mot de Pass</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary">se connecter</button>
          </form>
          <p style="font-size:13px">Vous n'avez pas de compt? <span><a href="{{route('register')}}">Créez-un</a></span> </p>
    </div>
</div>
</section>
    @include('layout.script')
</body>
</html>