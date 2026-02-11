<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function home()
    {
        $user = Auth::user();

        $materials = [
            ['title'=>'PPG Bab 1 – Pembelajaran Mendalam dan Asesmen (SMK)','category'=>'PPG'],
            ['title'=>'PKL Bab 1','category'=>'PKL'],
            ['title'=>'SelfDev Bab 1','category'=>'SelfDev'],
            ['title'=>'AddTrain Bab 1','category'=>'AddTrain'],
        ];

        return view('home',compact('user','materials'));
    }

    public function myCourse(Request $request)
    {
        $category=$request->category;
        $search=$request->search;

        $materials=collect([
            ['title'=>'PPG Bab 1 – Pembelajaran Mendalam dan Asesmen (SMK)','category'=>'PPG'],
            ['title'=>'PKL Bab 1','category'=>'PKL'],
            ['title'=>'SelfDev Bab 1','category'=>'SelfDev'],
            ['title'=>'AddTrain Bab 1','category'=>'AddTrain'],
        ]);

        if($category) $materials=$materials->where('category',$category);
        if($search) $materials=$materials->filter(fn($m)=>stristr($m['title'],$search));

        return view('my-course',['materials'=>$materials]);
    }

    public function setting()
    {
        return view('setting',['user'=>Auth::user()]);
    }
}
