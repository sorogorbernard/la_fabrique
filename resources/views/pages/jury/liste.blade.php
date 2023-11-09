@extends('layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">LISTE DES JURYS</h2>
                        <div class="m-3">
                          
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">code Jury</th>
                                    <th scope="col">Président</th>
                                    <th scope="col">Maitre de Stage</th>
                                    <th scope="col">Directeur de Memoire</th>
                                    <th scope="col">Rapporteur</th>
                                    <th scope="col" class="text-center" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($listes as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->code}} </td>
                                        <td>{{ $list->president}} </td>
                                        <td>{{ $list->maitre_stage}} </td>
                                        <td>{{ $list->dm }}</td>
                                        <td>{{ $list->rapporteur }}</td>
                                        <td><a class="btn btn-success" href=""><i class="bi bi-eye"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle w-100" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                  <li>
                                                    <a href="{{ route('gestion_jury.edit', [$list->id]) }}">Editer</a>
                                                  </li>
                                                  <li>
                                                    <a href="{{ url ('supprimer_jury/' .$list->id) }}">Supprimer</a>
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
