@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">

      <div class="container-fluid">



<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Récalamation</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/reclamations') }}">Réclamations</a></li>
            <li class="breadcrumb-item active">Details</li>
        </ol>
    </div>
</div>


<div class="col-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
          <div class="row">
            <div class="col-10"><h3 class="panel-title">{{ $reclamation->titre }}</h3></div>
          </div>
    </div>
    <div class="panel-body">
      <ul class="list-group">
        <li class="list-group-item">
          <textarea name="name" readonly rows="8" cols="140">{{ $reclamation->presentation }}</textarea>
        </li>
        @if($reclamation->photo)
        <li class="list-group-item">
          <div class="embed-responsive embed-responsive-16by9">
            <video id="my-video" class="video-js" controls preload="auto" width="200" height="100" data-setup="{}">
                  <source src="{{ asset('storage/'.$reclamation->photo) }}" type='video/mp4'>
               </video>
          </div>
        </li>
        @endif
      </ul>
      <small>{{ $reclamation->updated_at }}</small>
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
