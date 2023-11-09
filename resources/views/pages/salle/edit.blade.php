@extends('layout.main')

@section('content')
<div class="card">
    <div class="card-body">

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Succèss!</strong> {{session('status')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

      <h5 class="card-title fz-20px">Modification de la salle {{ $find->id}}</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="{{route('gestion_salle.update', [$find->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
       @method('PATCH')

       <div class="col-lg-12 mb-4">
        <label for="inputNanme4" class="form-label">N° de la salle</label> <br>
        <input type="text" name="nom_salle" class="form-control" value="{{$find->id}}" id="inputNanme4" readonly>
      </div>
        <div class="col-lg-12 mb-4">
          <label for="inputNanme4" class="form-label">Nom de la salle</label> <br>
          <input type="text" name="nom_salle" class="form-control" value="{{$find->nom_salle}}" id="inputNanme4">
        </div>
       
        <div class="text-center">
          <button type="submit" class="btn btn-dark">Modifier</button>
          <button type="reset" class="btn btn-danger">Anuler</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>
@endsection