<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use Auth;


class CvController extends Controller
{

    public function __construct()
    {
      $this->middleware(['auth','verified']);
    }
    //liste des cvs
    public function index()
    {
      //$listcv = Cv::where('user_id',Auth::user()->id)->get();

      //$listcv = Cv::all();
      if(Auth::user()->is_admin){
        $listcv = Cv::all();
      }else{
        $listcv = Auth::user()->cvs;
      }
      return view('cv.index', ['cvs'=>$listcv]);
    }

    //affiche le formulaire de creation de cv
    public function create()
    {
      return view('cv.create');
    }

    //enregistrer un cv
    public function store(Request $request)
    {
      $this->validate($request, [
        'titre' =>'required|string|min:3|max:100',
        'presentation' => 'required|string|min:10|max:2000',
        'file'  => 'mimes:mp4,mov,ogg | max:20000'
      ]);


       $cv = new Cv();

       $cv->titre = $request->input('titre');
       $cv->presentation = $request->input('presentation');
       $cv->user_id = Auth::user()->id;

       if($request->hasFile('file')){
         $image = $request->file('file');
         $input['filename'] = time().'.'.$image->getClientOriginalExtension();
         $path = public_path('/files');
         $image->move($path,$input['filename']);
         $cv->photo = $input['filename'];

       }


       $cv->save();

       session()->flash('success','Votre Réclamation été bien enregistré !!');

       return redirect('reclamations');
    }

    //récupérer un cv et le mettre dans le formulaire
    public function edit($id)
    {
      $cv = Cv::find($id);

      $this->authorize('update',$cv);

      return view('cv.edit',['cv'=>$cv]);
    }

    //modifier un cv
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'titre' =>'required|string|min:3|max:100',
        'presentation' => 'required|string|min:10|max:2000',
        'file'  => 'mimes:mp4,mov,ogg | max:20000'
      ]);

      $cv = Cv::find($id);

      $cv->titre = $request->input('titre');
      $cv->presentation = $request->input('presentation');

      if($request->hasFile('file')){
        $image = $request->file('file');
        $input['filename'] = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('/files');
        $image->move($path,$input['filename']);
        $cv->photo = $input['filename'];
      }

      $cv->save();

      return redirect('reclamations');
    }

    public function show($id)
    {
      $cv = Cv::find($id);
      return view('cv.show',['cvs'=>$cv]);
    }

    //supprimer un cv
    public function destroy(Request $request, $id)
    {
      $cv = Cv::find($id);
      $this->authorize('delete', $cv);
      $cv->delete();

      return redirect('reclamations');
    }

}
