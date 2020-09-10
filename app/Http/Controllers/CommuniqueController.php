<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Communique;
use Auth;

class CommuniqueController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

      $communiques= Communique::all();

    /* $communiques= Communique::latest()->take(2)->get(); */

      return view('admin.communiques', ['communiques'=>$communiques]);
    }

    //affiche le formulaire
    public function create()
    {

      return view('admin.createCommunique');
    }

    //enregistrer une activite
    public function store(Request $request)
    {
      $this->validate($request, [
        'titre' =>'required|string|min:3|max:100',
        'body' => 'required|string|min:10|max:20000'
      ]);

      if($request->hasFile('file')){
        $image = $request->file('file');
        $input['filename'] = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('/files');
        $image->move($path,$input['filename']);
      }

       $commmunique = new Communique();

       $commmunique->titre = $request->input('titre');
       $commmunique->body = $request->input('body');

       if($request->hasFile('file')){
         $commmunique->file = $input['filename'];
        //$commmunique->file = $request->file->store('file');
       }

       $commmunique->save();

       session()->flash('success','Votre Activité été bien enregistré !!');

       return redirect('/admin/communiques');
    }

    //récupérer une activitée et le mettre dans le formulaire
    public function edit($id)
    {
      $communique = Communique::find($id);

      return view('admin.editCommunique',['communique'=>$communique]);
    }

    //modifier une activitée
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'titre' =>'required|string|min:3|max:100',
        'body' => 'required|string|min:10|max:20000'
      ]);

      if($request->hasFile('file')){
        $image = $request->file('file');
        $input['filename'] = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('/files');
        $image->move($path,$input['filename']);
      }
      $communique = Communique::find($id);

      $communique->titre = $request->input('titre');
      $communique->body = $request->input('body');

      if($request->hasFile('file')){
       //$communique->file = $request->file->store('file');
       $communique->file = $input['filename'];
      }

      $communique->save();

      return redirect('admin/communiques');
    }

    public function show($id)
    {
      $communique = Communique::find($id);
      return view('admin.showCommunique',['communique'=>$communique]);
    }

    //supprimer un cv
    public function destroy(Request $request, $id)
    {
      $communique = Communique::find($id);
      $communique->delete();

      return redirect('admin/communiques');
    }
}
