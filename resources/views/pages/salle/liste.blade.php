@extends('layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">LISTE DES SALLES</h2>
                        <div class="m-3">
                          
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Nom de la salle</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($listes as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->nom_salle}} </td>
                                       
                                        <td><a class="btn btn-success" href=""><i class="bi bi-eye"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle w-100" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                  <li>
                                                    <a href="{{ route('gestion_salle.edit', [$list->id]) }}">Editer</a>
                                                  </li>
                                                  <li>
                                                    <a href="{{ url ('supprimer_salle/' .$list->id) }}">Supprimer</a>
                                                  </li>
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
