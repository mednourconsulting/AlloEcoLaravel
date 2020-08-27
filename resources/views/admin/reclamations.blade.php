@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Réclamations</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">réclamations</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Liste des activités</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>titre</th>
                                                <th>créé à</th>
                                                <th>mis à jour à</th>
                                                <th>créé par</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($reclamations as $reclamation)
                                            <tr>
                                                <td>{{ $reclamation->id }}</td>
                                                <td>{{ $reclamation->titre }}</td>
                                                <td>{{ $reclamation->created_at }}</td>
                                                <td>{{ $reclamation->updated_at }}</td>
                                                <td>{{ $reclamation->user['name'] }}</td>
                                                <td><form class="" action="{{ url('admin/reclamations/'.$reclamation->id) }}" method="post">
                                                  {{ csrf_field() }}
                                                  {{ method_field('DELETE') }}
                                                <a href="{{ url('/admin/reclamations/'.$reclamation->id) }}" class="btn btn-primary" role="button">Afficher</a>
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
