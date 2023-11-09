@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-body">

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Succèss!</strong> {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h5 class="card-title fz-20px">Ajout de soutenance</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ route('gestion_soutenance.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                  
                <input type="text" name="statut" value="à venir" class="form-control" id="inputNanme4" hidden>

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <label for="inputNanme4" class="form-label">Date</label> <br>
                        <input type="date" name="date_soutenance" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="inputNanme4" class="form-label">Heure</label> <br>
                        <input type="time" name="heure" class="form-control" id="inputNanme4">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <label for="inputNanme4" class="form-label">Thème</label> <br>
                        <select name="demandes_id" id="" class="form-control">
                            @foreach ($demandes as $demande)
                                <option value="{{ $demande->id }}"> {{ $demande->theme }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="inputNanme4" class="form-label">Salle</label> <br>
                        <select name="salles_id" id="" class="form-control">
                            @foreach ($salles as $salle)
                                <option value="{{ $salle->id }}">{{ $salle->nom_salle }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <label for="inputNanme4" class="form-label">Jury</label> <br>
                        <select name="juries_id" id="" class="form-control">
                            @foreach ($jury as $jurie)
                                <option value="{{ $jurie->id }}"> {{ $jurie->code }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <label for="inputNanme4" class="form-label">Observation</label> <br>
                        <textarea class="form-control" name="observation" id="" cols="30" rows="5"></textarea>
                    </div>

                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Anuler</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
