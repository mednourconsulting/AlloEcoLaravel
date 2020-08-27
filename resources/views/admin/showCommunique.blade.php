@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">

      <div class="container-fluid">



<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Communiques</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/communiques') }}">Communiqués</a></li>
            <li class="breadcrumb-item active">Details</li>
        </ol>
    </div>
</div>


<div class="col-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
          <div class="row">
            <div class="col-10"><h3 class="panel-title">{{ $communique->titre }}</h3></div>
          </div>
    </div>
    <div class="panel-body">
      <ul class="list-group">
        <li class="list-group-item">
            <div>
              {!! $communique->body !!}
            </div>
            <small>{{ $communique->updated_at }}</small>
        </li>
      </ul>
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
