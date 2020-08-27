@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">

      <div class="container-fluid">



<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Message</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/messages') }}">Messages</a></li>
            <li class="breadcrumb-item active">Details</li>
        </ol>
    </div>
</div>

<div class="row">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                      <div class="card">
                          <div class="card-body">
                              <form class="form-horizontal form-material">
                                  <div class="form-group">
                                      <label class="col-md-12">Nom & Prénom</label>
                                      <div class="col-md-12">
                                          <input type="text" readonly  value="{{ $message->nom }} {{ $message->prenom }}" class="form-control form-control-line">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="example-email" class="col-md-12">Email</label>
                                      <div class="col-md-12">
                                          <input type="email" readonly  value="{{ $message->email }}" class="form-control form-control-line" name="example-email" id="example-email">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-12">Message</label>
                                      <div class="col-md-12">
                                          <textarea rows="5" readonly  class="form-control form-control-line">{{ $message->message }}</textarea>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-12">{{ $message->created_at }}</label>
                                  </div>
                              </form>
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
