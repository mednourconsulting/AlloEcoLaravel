@extends('layouts.appAdministrateur')

@section('content')

<div class="page-wrapper">

    <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Acceuil</a></li>
                            <li class="breadcrumb-item active">Statistiques</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h5 class="card-title m-b-0">Visitors</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <ul class="list-inline text-center font-12">
                                            <li><i class="fa fa-circle text-success"></i>Tablet</li>
                                            <li><i class="fa fa-circle text-info"></i>Desktop</li>
                                            <li><i class="fa fa-circle text-primary"></i>Mobile</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="" id="sales-chart" style="height: 355px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-30 no-block">
                                    <h5 class="card-title m-b-0 align-self-center">Our Visitors</h5>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option selected="">Today</option>
                                            <option value="1">Tomorrow</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="visitor" style="height:260px; width:100%;"></div>
                                <ul class="list-inline m-t-30 text-center font-12">
                                    <li><i class="fa fa-circle text-purple"></i> Tablet</li>
                                    <li><i class="fa fa-circle text-success"></i> Desktops</li>
                                    <li><i class="fa fa-circle text-info"></i> Mobile</li>
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
