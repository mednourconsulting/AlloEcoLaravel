<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\User;
use App\Contact;
use Auth;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reclamations = Cv::all();

        return view('admin.index', ['reclamations'=>$reclamations]);
    }

    public function reclamations()
    {
        $reclamations = Cv::all();

        return view('admin.reclamations', ['reclamations'=>$reclamations]);
    }

    public function messages()
    {
      $messages = Contact::all();

      return view('admin.messages',['messages'=>$messages]);
    }

    public function showMessage($id)
    {
        $message = Contact::find($id);

        return view('admin.showMessage', ['message'=>$message]);
    }

    public function showReclamation($id)
    {
        $reclamation = Cv::find($id);

        return view('admin.showReclamation', ['reclamation'=>$reclamation]);
    }

    public function users()
    {
       $users = User::all();

       return view('admin.users',['users'=>$users]);
    }

    public function getStatistics()
    {
        return view('adminstatistic');
    }

   public function excel()
   {
     return Excel::download(new UserExport, 'users.xlsx');
   }
}
