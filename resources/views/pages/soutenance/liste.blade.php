@extends('layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">LISTE DES SOUTENANCES</h2>
                        <div class="m-3">

                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Apprenant</th>
                                    <th scope="col">Theme</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Heure</th>
                                    <th scope="col">Jury</th>
                                    <th scope="col" class="text-center" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($listes as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->Demande->User->nom }} {{ $list->Demande->User->prenom }} </td>
                                        <td>{{ $list->Demande->theme }} </td>
                                        <td>{{ $list->date_soutenance }} </td>
                                        <td>{{ $list->heure }}</td>
                                        <td>{{ $list->Jury->code }}</td>
                                        <td><a class="btn btn-success" href="{{ route('gestion_soutenance.show', [$list->id])}}"><i class="bi bi-eye"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle w-100" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#basicModal{{$list->id}}">Evaluer</a>

                                                    </li>



                                                    <li>
                                                        <a href="{{ route('gestion_soutenance.edit', [$list->id]) }}">Editer</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('supprimer_soutenance/' . $list->id) }}">Supprimer</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>
                                        <!-- Basic Modal -->
                                        
                                        <div class="modal fade" id="basicModal{{$list->id}}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Evaluation de la soutenance {{$list->id}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="row g-3" action="{{ route('gestion_soutenance.update',[$list->id]) }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                          @method('PATCH')
                                                        <input type="text" name="statut" value="effectuée"  class="form-control" id="inputNanme4" hidden>
                                        
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-4">
                                                                <label for="inputNanme4" class="form-label">Note</label> <br>
                                                                <input type="text" name="note" class="form-control" id="inputNanme4">
                                                            </div>
                                                           
                                                        </div>
                                        
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-4">
                                                                <label for="inputNanme4" class="form-label">Appreciation</label> <br>
                                                                <input type="text" name="appreciation" class="form-control" id="inputNanme4">
                                                            </div>
                                        
                                                        </div>
                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" class="btn btn-primary">Evaluer</button>
                                                        </div>
                                                    </form><!-- Vertical Form -->
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div><!-- End Basic Modal-->
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
