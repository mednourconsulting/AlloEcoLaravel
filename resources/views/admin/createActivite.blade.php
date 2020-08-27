@extends('layouts.appAdministrateur')


@section('content')



<div class="page-wrapper">
  <div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Ajouter un activité</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/admin/activites') }}">Activités</a></li>
                <li class="breadcrumb-item active">nouveau activité</li>
            </ol>
        </div>
    </div>
  <div class="row">
    <div class="col-12">
      <form form method="POST" action="{{ url('/admin/activites') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
          <label for="">Titre</label>
          <input type="text" name="titre" class="form-control" value="{{ old('titre') }}">
          @if($errors->get('titre'))
            @foreach($errors->get('titre') as $message)
                <li>{{ $message }}</li>
            @endforeach
          @endif
          </div>
          <div class="form-group row">
              <label for="">Contenu</label>
              <textarea name="body" class="form-control" id="tinymce">{{ old('body') }}</textarea>
              @if($errors->get('body'))
                @foreach($errors->get('body') as $message)
                    <li>{{ $message }}</li>
                @endforeach
              @endif
          </div>
          <div class="form-group">
            <label for="">File</label>
            <input class="form-control" type="file" name="file">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Enregistrer">
          </div>
      </form>
    </div>
  </div>

  </div>
  <footer class="footer">
      © 2020 Marsad Tanger
  </footer>
</div>


@endsection
