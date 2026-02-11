<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;
use Illuminate\Support\Facades\Auth;

class ModulController extends Controller
{
    public function home()
    {
        return view('fe.home', [
            'user' => Auth::user()
        ]);
    }

    public function index(Request $request)
{
    $cat = $request->cat;
    $search = $request->search;

    $query = Modul::query();

    if($cat){

        if($cat=='gemini'){
            $query->where('title','like','%gemini%');
        }

        if($cat=='pkl'){
            $query->where('title','like','%pkl%');
        }

        if($cat=='ppg'){
            $query->where('title','like','%ppg%');
        }

        if($cat=='self'){
            $query->where('title','like','%self%');
        }

    }

    if($search){
        $query->where('title','like',"%$search%");
    }

    $moduls=$query->get();

    return view('fe.my-course',compact('moduls','cat','search'));
}
}