<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Santi;


class MainController extends Controller
{
    //--- INDEX

    public function home() {

        $saints = Santi::orderBy('created_at', 'DESC') -> get();

        return view('pages.home', compact('saints'));
    }

    //--- SHOW

    public function saintShow(Santi $saint){
 
        return view('pages.saintShow', compact('saint'));

    }

    //--- DELETE

    public function saintDelete(Santi $saint){
        
   
        $saint -> delete();

        return redirect() -> route('home');
  
    }

    //--- STORE | CREATE

    public function saintCreate(){
        return view('pages.saintCreate');
    }
    public function saintStore(Request $request){
        $data = $request->all();
        $saint = new Santi();
        $saint -> name = $data['name'];
        $saint -> birdPlace = $data['birthPlace'];
        $saint -> blessingDate = $data['blessingDate'];
        $saint -> miracleCount = $data['miracleCount'];

        $saint -> save();
        return redirect() -> route('home');
    }

    //--- UPDATE 

    public function saintEdit(Santi $saint){

        $data = [
            'saint' => $saint
        ];

        return view('pages.saintEdit', $data);
    }

    public function saintUpdate(Request $request, Santi $saint){

        $data = $request->all();
        $saint -> name = $data['name'];
        $saint -> birdPlace = $data['birthPlace'];
        $saint -> blessingDate = $data['blessingDate'];
        $saint -> miracleCount = $data['miracleCount'];

        $saint -> save();
        return redirect() -> route('home');

    }

}
