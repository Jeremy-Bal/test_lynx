<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Messages;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UsersController;

class BlogController extends Controller
{

public function index(){
    $utilisateurs = DB::table('messages')->simplePaginate(6);
    
    if (! auth()->check()) {

        return view('auth/register');
    }
    else{
        return view('utilisateurs', [
            'utilisateurs' => $utilisateurs
        ]);
    }
    
    
}


public function page(){
   $utilisateurs = DB::table('messages')->simplePaginate(6); 
}

    public function afficheNom(){
        if (! auth()->check()) {

            return view('auth/register');
        }
        else{
            $utilisateurs = DB::table('messages')->simplePaginate(6); 
            return view('utilisateurs', [
                'utilisateurs' => $utilisateurs
         ]);
        }
        
        // else{
        // $utilisateurs = Message::all();
        // return view('utilisateurs', [
        //     'utilisateurs' => $utilisateurs
        // ]);
        // }

    }

    public function store(){
        request()->validate([
            'message' => 'required'
        ]);
        $message = request('message');
        
        $utilisateurs = new Message();
        $utilisateurs->name = Auth::user()->name;
        $utilisateurs->message = $message;
        $utilisateurs->save();

        return back();
    }


}
    