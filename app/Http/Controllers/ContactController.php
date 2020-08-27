<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

  public function index()
  {
    $contacts = Contact::all();

    return view('/admin/messages',['contacts'=>$contacts]);
  }

  //enregistrer une message
  public function store(Request $request)
  {
    $this->validate($request, [
      'nom' => 'required|string|max:255',
      'prenom' => 'required|string|max:255',
      'email' => 'required|string|email|max:255',
      'message' => 'required|string|min:10|max:255'
    ]);

    $contact = new Contact();

    $contact->nom = $request->input('nom');
    $contact->prenom = $request->input('prenom');
    $contact->email = $request->input('email');
    $contact->message = $request->input('message');

    $contact->save();

     session()->flash('success','Votre message est bien enregistré !!');

     return redirect('/');
  }

}
