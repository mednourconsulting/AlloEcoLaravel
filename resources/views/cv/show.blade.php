@extends('layouts.app')


@section('content')


<div class="site-section">
  <div class="text-center mb-5">
    <div class="block-heading-1">
      <h2>Détails</h2>
    </div>
  </div>
    <div class="container">
      <div class="row">

        <div class="col-lg-12 ml-auto text-center">
          <h2 class="mb-3 text-black">{{ $cvs->titre }}</h2>
          <textarea readonly rows="8" cols="120">{{ $cvs->presentation }}</textarea>
          @if($cvs->photo)
            <p>
              <div class="embed-responsive embed-responsive-21by9">
                <video id="my-video" class="video-js" controls preload="auto" width="200" height="100" data-setup="{}">
                   <source src="{{ asset('storage/'.$cvs->photo) }}" type='video/mp4'>
                </video>
              </div>
            </p>
          @endif
          <small>{{ $cvs->updated_at }}</small>
        </div>

      </div>
    </div>
</div>




@endsection
