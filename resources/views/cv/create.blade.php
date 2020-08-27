@extends('layouts.app')


@section('content')



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form form method="POST" action="{{ url('reclamations') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row @if($errors->get('titre')) has-error @endif">
          <label for="">Titre</label>
          <input type="text" name="titre" class="form-control" value="{{ old('titre') }}">
            @if($errors->get('titre'))
              @foreach($errors->get('titre') as $message)
                  <li>{{ $message }}</li>
              @endforeach
            @endif
          </div>
          <div class="form-group @if($errors->get('presentation')) has-error @endif">
              <label for="">Présentation</label>
              <textarea name="presentation" rows="6" class="form-control">{{ old('presentation') }}</textarea>
              @if($errors->get('presentation'))
                @foreach($errors->get('presentation') as $message)
                    <li>{{ $message }}</li>
                @endforeach
              @endif
          </div>
          <div class="form-group">
            <label for="">Video (optionel)</label>
            <input class="form-control"  type="file" name="file">
            @if($errors->get('file'))
              @foreach($errors->get('file') as $message)
                  <li>{{ $message }}</li>
              @endforeach
            @endif
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Enregistrer">
          </div>
      </form>
    </div>
  </div>
</div>


@endsection
