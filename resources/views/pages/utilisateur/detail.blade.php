@extends('layout.main')

@section('content')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('storage') . '/' . $find->photo }}" alt="Profile" class="rounded-circle">
                        <h2>{{ $find->nom }} {{ $find->prenom }}</h2>

                        <h3>{{ $find->Role->libelle }}</h3>

                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-edit">Demande</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-settings">Settings</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">About</h5>
                                <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                                    temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae
                                    quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nom Prenom</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->nom }} {{ $find->prenom }}</div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Role</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->Role->libelle }}</div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Telehone</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->telephone }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->email }}</div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->

                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Thème</th>
                                            <th scope="col">Session</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($listes as $list)
                                            <tr>
                                                <th scope="row">{{ $list->id }}</th>
                                                <td>{{ $list->theme }}</td>
                                                <td>{{ $list->session }}</td>
                                                <td>{{ $list->date_demande }}</td>
                                                <td><a class="btn btn-success" href=""><i class="bi bi-eye"></i></a>
                                                </td>
                                                <td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
