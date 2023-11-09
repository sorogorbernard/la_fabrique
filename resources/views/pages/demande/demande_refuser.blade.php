@extends('layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">LISTE DES DEMANDES REFUSEES</h2>
                        <div class="m-3">
                            <button class="btn"><a href="{{route('liste_demande')}}" class="btn btn-danger">Toutes les demandes</a></button>
                            <button class="btn"><a href="{{route('demande_encours')}}" class="btn btn-warning">Demande en cours</a></button>
                            <button class="btn"><a href="{{route('demande_inpute')}}" class="btn btn-primary">Demande inputées</a></button>
                            <button class="btn"><a href="{{route('demande_encours')}}" class="btn btn-success">Demande acceptées</a></button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Demandeur</th>
                                    <th scope="col">Thème</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" class="text-center" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($listes as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->User->nom }} {{ $list->User->prenom }}</td>
                                        <td>{{ $list->theme }}</td>
                                        <td>{{ $list->session }}</td>
                                        <td>{{ $list->date_demande }}</td>
                                        <td><a class="btn btn-success" href=""><i class="bi bi-eye"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle w-100" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                   
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
