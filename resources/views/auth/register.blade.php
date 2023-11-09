<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.style')
</head>

<body>
    <section class="container-fluid">
        <h1 class="text-center">Bienvenue sur la page de connexion</h1>
        <div class="row card-body ">
            <div class="col-lg-5 col-md-12 card shadow">
                @if (session('status'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Herror!</strong> {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h2 class="text-center">Creation de compte</h2>


                <p class="text-center " style="font-size:13px">Veillez renseigner vos information ici
                </p>
                <form method="POST" action="{{ route('add_users') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="roles-id" value=2 class="form-control" hidden >
                    <input type="text" name="active" value=2 class="form-control" hidden>


                    <div class="row ">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Nom </label>
                            <input type="text" name="nom" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp"><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Prenom </label>
                            <input type="text" name="prenom" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">telephone </label>
                            <input type="number" name="telephone" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp"><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">genre </label>
                            <select name="genre" id="" class="form-control">
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Mot de Pass</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Email </label><br>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp"><br>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">date naissance </label>
                            <input type="date" name="date_naiss" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp"><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">cnib </label>
                            <input type="" name="cnib" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp"><br>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <label for="exampleInputEmail1" class="form-label">photo</label>
                            <input type="file" name="photo" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-dark">Enregistrer</button>
                        <button type="reset" class="btn btn-danger">Anuler</button>

                    </div>
                    
                </form>
                <p style="font-size:13px" style-decoration="bg-dander">Vous avez un compte? <span><a
                            href="{{ route('index') }}">Se connecter</a></span> </p>
            </div>


            <div class="col-lg-7 col-md-12 card shadow">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/news-4.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/news-5.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/news-2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    @include('layout.script')
</body>

</html>
