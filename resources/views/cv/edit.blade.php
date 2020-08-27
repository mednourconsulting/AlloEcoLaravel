@extends('layouts.app')


@section('content')

<div class="container">
   <div class="row">
     <div class="col-md-12">
       <form method="POST" action="{{ url('reclamations/'.$cv->id) }}" enctype="multipart/form-data" files="true">
         <input type="hidden" name="_method" value="PUT">
         {{ csrf_field() }}
        <div class="form-group">
          <label for="">Titre</label>
          <input type="text" name="titre" class="form-control" value="{{ $cv->titre }}">
          @if($errors->get('titre'))
            @foreach($errors->get('titre') as $message)
                <li>{{ $message }}</li>
            @endforeach
          @endif
        </div>
        <div class="form-group">
          <label for="">Présentation</label>
          <textarea name="presentation"  rows="6" class="form-control">{{ $cv->presentation }}</textarea>
          @if($errors->get('presentation'))
            @foreach($errors->get('presentation') as $message)
                <li>{{ $message }}</li>
            @endforeach
          @endif
        </div>
        <div class="form-group">
          <label for="">Video (optionel)</label>
          <input class="form-control" type="file" name="photo">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Modifier">
        </div>
      </form>
     </div>
   </div>
</div>

@endsection
