<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Communique;
use App\Activite;
use App\Cv;
use Auth;

class AcceuilController extends Controller
{


  public function showAll()
  {
    $communiques = Communique::latest()->take(4)->get();
    $activites = Activite::latest()->take(2)->get();
    $avis = Cv::all();

    return view('index',['communiques'=>$communiques , 'activites'=>$activites, 'avis'=>$avis]);
  }

  public function showCommunique($id)
  {
    $communique = Communique::find($id);

    $communiques = Communique::latest()->take(4)->get();

    return view('communique',['communique'=>$communique,'communiques'=>$communiques]);
  }

  public function showActivite($id)
  {
    $activite = Activite::find($id);

    $activites = Activite::latest()->take(4)->get();

    return view('activite',['activite'=>$activite,'activites'=>$activites]);
  }



}
