@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">

      <div class="container-fluid">



<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Activités</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/activites') }}">Activités</a></li>
            <li class="breadcrumb-item active">Details</li>
        </ol>
    </div>
</div>


<div class="col-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
          <div class="row">
            <div class="col-10"><h3 class="panel-title">{{ $activite->titre }}</h3></div>
          </div>
    </div>
    <div class="panel-body">
      {!! $activite->body !!}
      <small>{{ $activite->updated_at }}</small>
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
