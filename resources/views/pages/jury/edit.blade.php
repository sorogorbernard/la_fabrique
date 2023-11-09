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

      <h5 class="card-title fz-20px">Modification du Jury N° {{ $find->code}}</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="{{route('gestion_jury.update', [$find->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
       @method('PATCH')
        <div class="col-lg-12 mb-4">
          <label for="inputNanme4" class="form-label">code Jury</label> <br>
          <input type="text" name="code" class="form-control" value="{{$find->code}}" id="inputNanme4">
        </div>
        <div class="col-lg-12 mb-4">
          <label for="inputEmail4" class="form-label">Pesident</label>
          <input type="text" name="president" value="{{$find->president}}" class="form-control" >
        </div>
        <div class="col-lg-12 mb-4">
            <div class="col-lg-12 mb-4">
                <label for="inputAddress" class="form-label">Maitre de Stage</label>
                <input type="text" name="maitre_stage" value="{{$find->maitre_stage}}"  class="form-control"  placeholder="">
              </div>
        </div>
        <div class="col-lg-12 mb-4">
          <label for="inputAddress" class="form-label">Directeur de Memoire</label>
          <input type="text" name="dm" value="{{$find->dm}}"  class="form-control"  placeholder="">
        </div>
        <div class="col-lg-12 mb-4">
            <label for="inputAddress" class="form-label">Rapporteur</label>
            <input type="text" name="rapporteur" value="{{$find->rapporteur}}" class="form-control"  placeholder="">
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-dark">Modifier</button>
          <button type="reset" class="btn btn-danger">Anuler</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>
@endsection