@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Messages</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
                            <li class="breadcrumb-item active">mesages</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Liste des messages</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nom</th>
                                                <th>prénom</th>
                                                <th>email</th>
                                                <th>envoyé le</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($messages as $message)
                                            <tr>
                                                <td>{{ $message->id }}</td>
                                                <td>{{ $message->nom }}</td>
                                                <td>{{ $message->prenom }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->created_at }}</td>
                                                <td><form class="" action="{{ url('admin/messages/'.$message->id) }}" method="post">
                                                  {{ csrf_field() }}
                                                <a href="{{ url('/admin/messages/'.$message->id) }}" class="btn btn-primary" role="button">Afficher</a>
                                              </form></td>
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
