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

      <h5 class="card-title fz-20px">Ajout de demande</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="{{route('add_demande')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="users_id" value="{{ Auth::user()->id }}" class="form-control" id="inputNanme4" hidden>
        <input type="text" name="statut" value="en cours" class="form-control" id="inputNanme4" hidden>

        <div class="col-lg-12 mb-4">
          <label for="inputNanme4" class="form-label">theme de soutenance</label> <br>
          <input type="text" name="theme" class="form-control" id="inputNanme4">
        </div>
        <div class="col-lg-12 mb-4">
          <label for="inputEmail4" class="form-label">date</label>
          <input type="date" name="date_demande" class="form-control" >
        </div>
        <div class="col-lg-12 mb-4">
            <label for="exampleInputEmail1" class="form-label">session </label>
            <select name="session" class="form-control">
                <option value="Janvier">Janvier</option>
                <option value="Juin">Juin</option>
                <option value="Decembre">Decembre</option>
            
            </select>
        </div>
        <div class="col-lg-12 mb-4">
          <label for="inputAddress" class="form-label">document</label>
          <input type="file" name="document" class="form-control"  placeholder="">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-dark">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Anuler</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>
@endsection