@extends('layouts.app')


@section('content')

<div class="container">

   <div class="row">
     <div class="col-md-12">
       <div class="d-flex justify-content-end">
         <a href="{{ url('reclamations/create') }}" class="btn btn-success text-white">Nouveau Réclamation </a>
       </div>
      <div class="table-responsive">
       <table class="table">
         <head>
           <tr>
             <th>Titre</th>
             <th>Présentation</th>
             <th>Date</th>
             <th></th>
           </tr>
         </head>
         <body>
           @foreach($cvs as $cv)
           <tr>
             <td>{{ $cv->titre }}</td>
             <td>{{ substr($cv->presentation,0,40) }} {{ strlen($cv->presentation) > 40 ? '...' : "" }}</td>
             <td>{{ $cv->created_at }}</td>
             <td>
               <form class="" action="{{ url('reclamations/'.$cv->id) }}" method="post">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <a href="{{ url('reclamations/'.$cv->id) }}" class="btn btn-primary text-white" role="button">Afficher</a>
                 @can('update',$cv)
                 <a href="{{ url('reclamations/'.$cv->id.'/edit') }}" class="btn btn-success text-white" role="button">Modifier</a>
                 @endcan
                 @can('delete',$cv)
                 <button type="submit" class="btn btn-danger">Supprimer</button>
                 @endcan
               </form>
             </td>
           </tr>
           @endforeach
         </body>
       </table>
       </div>
     </div>
   </div>

</div>


@endsection
