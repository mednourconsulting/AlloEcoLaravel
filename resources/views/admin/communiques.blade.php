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
                        <h3 class="text-themecolor">Communiqués</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
                            <li class="breadcrumb-item active">communiqués</li>
                        </ol>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                  <a href="{{ url('/admin/communiques/create') }}" class="btn btn-success">Nouveau Communiqué</a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Liste des communiqués</h4>
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
                                          @foreach($communiques as $communique)
                                            <tr>
                                                <td>{{ $communique->id }}</td>
                                                <td>{{ $communique->titre }}</td>
                                                <td>{{ $communique->created_at }}</td>
                                                <td>{{ $communique->updated_at }}</td>
                                                <td><form class="" action="{{ url('admin/communiques/'.$communique->id) }}" method="post">
                                                  {{ csrf_field() }}
                                                  {{ method_field('DELETE') }}
                                                <a href="{{ url('/admin/communiques/'.$communique->id) }}" class="btn btn-primary" role="button">Afficher</a>
                                                <a href="{{ url('/admin/communiques/'.$communique->id.'/edit') }}" class="btn btn-warning" role="button">Editer</a>
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
