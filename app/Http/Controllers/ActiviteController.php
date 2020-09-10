<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Activite;
use Auth;


class ActiviteController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
  {

    $activites= Activite::all();

    return view('admin.activites', ['activites'=>$activites]);
  }

  //affiche le formulaire
  public function create()
  {

    return view('admin.createActivite');
  }

  //enregistrer une activite
  public function store(Request $request)
  {
    $this->validate($request, [
      'titre' =>'required|string|min:3|max:100',
      'body' => 'required|string|min:10|max:20000'
    ]);
/*
    if($request->hasFile('file')){
      $image = $request->file('file');
      $input['filename'] = time().'.'.$image->getClientOriginalExtension();
      $path = public_path('/files');
      $image->move($path,$input['filename']);
    }
*/
     $activite = new Activite();

     $activite->titre = $request->input('titre');
     $activite->body = $request->input('body');



     if($request->hasFile('file')){
      //$activite->file = $image;
      $activite->file = $request->file->store('files');
     }

     $activite->save();

     session()->flash('success','Votre Activité été bien enregistré !!');

     return redirect('/admin/activites');
  }

  //récupérer une activitée et le mettre dans le formulaire
  public function edit($id)
  {
    $activite = Activite::find($id);

    return view('admin.editActivite',['activite'=>$activite]);
  }

  //modifier une activitée
  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'titre' =>'required|string|min:3|max:100',
      'body' => 'required|string|min:10|max:20000'
    ]);

    $activite = Activite::find($id);

    $activite->titre = $request->input('titre');
    $activite->body = $request->input('body');

    if($request->hasFile('file')){
     $activite->file = $request->file->store('file');
    }

    $activite->save();

    return redirect('admin/activites');
  }

  public function show($id)
  {
    $activite = Activite::find($id);
    return view('admin.showActivite',['activite'=>$activite]);
  }

  //supprimer un cv
  public function destroy(Request $request, $id)
  {
    $activite = Activite::find($id);
    $activite->delete();

    return redirect('admin/activites');
  }
}
