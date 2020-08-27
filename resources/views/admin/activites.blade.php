@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">
  @if(session()->has("success"))
  <div class="alert alert-success">
      {{ session()->get('success') }}
  </div>
  @endif
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Activités</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
                            <li class="breadcrumb-item active">activités</li>
                        </ol>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                  <a href="{{ url('/admin/activites/create') }}" class="btn btn-success">Nouveau Activité</a>
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
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($activites as $activite)
                                            <tr>
                                                <td>{{ $activite->id }}</td>
                                                <td>{{ $activite->titre }}</td>
                                                <td>{{ $activite->created_at }}</td>
                                                <td>{{ $activite->updated_at }}</td>
                                                <td><form class="" action="{{ url('admin/activites/'.$activite->id) }}" method="post">
                                                  {{ csrf_field() }}
                                                  {{ method_field('DELETE') }}
                                                <a href="{{ url('/admin/activites/'.$activite->id) }}" class="btn btn-primary" role="button">Afficher</a>
                                                <a href="{{ url('/admin/activites/'.$activite->id.'/edit') }}" class="btn btn-warning" role="button">Modifier</a>
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
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
