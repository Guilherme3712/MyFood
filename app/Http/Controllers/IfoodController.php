<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimentos;

use Illuminate\Http\Request;

use Illuminate\Support\Facedes\DB;

class IfoodController extends Controller
{
    public function estabelecimentos() {
       // $ifood = DB::select('SELECT id, nome FROM Estabelecimentos');
       // dd($ifood);
        $ifood = Estabelecimentos::all();
        //dd($ifood);

        return view('lojas.estabelecimentos')->with('lojas',$ifood);
    }
    public function show(Estabelecimentos $loja)
    {
        return view('lojas.show')->with('loja', $loja);
    }

    // public function show ($id)
    // {
    //     //$loja = Card::where('id',$id) ;
    //     if(!$loja = Estabelecimentos::find($id))
    //         return back();

    //     return view('lojas.show', compact('loja'));
    // }
}
