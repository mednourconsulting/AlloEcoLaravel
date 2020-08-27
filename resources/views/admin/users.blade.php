@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Utilisateurs</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
                            <li class="breadcrumb-item active">utilisateurs</li>
                        </ol>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                  <a href="{{ route('admin.excel') }}" class="btn btn-success">Télécharger</a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Liste des utilisateurs</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nom</th>
                                                <th>email</th>
                                                <th>email vérifié à</th>
                                                <th>créé à</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->email_verified_at }}</td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                © 2020 Marsad Tanger
            </footer>
        </div>

@endsection
