<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class HomeController extends Controller
{
    public function index(){
        $page = "Home";
       return view('/home')
       ->with('page' ,$page)
       ->with('notes',Note::all());
       
    }

    public function save(Request $request){

         $request->validate([
            'note' => 'required'
        ]);

       Note::create(['note'=>$request->note]); 
       return redirect()->back();

    }

    public function edit($id){

        $note = Note::find($id);

        return view('home')
                        ->with('notes',Note::all())
                        ->with('page', 'Home')
                        ->with('note' , $note);
    }

    public function update(Request $request , $id){

        $request->validate([

            'note' =>'required'

        ]);

        $note = Note::find($id);

        $note->note= $request->note;
        $note->save();

        return redirect('/'); 
    }


    public function delete($id){

        $note = Note::find($id);

        $note->delete();
        return redirect('/');
    }



}
