<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Hackerthon;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function home(){
        $hackerthons = DB::table('hackerthon')->get();

        $categories =  DB::table('category')
            ->where('hck_id','=',2)->get();

        $posts =  DB::table('hackerthon')
            ->leftJoin('category',"category.hck_id",'=', 'hackerthon.hck_id')
            ->leftJoin('post',"post.cat_id",'=', 'category.cat_id')
            ->where('hackerthon.hck_id','=', 2)->get();
        return view('home', ["hackerthons"=>$hackerthons, 'posts'=>$posts,'categories'=>$categories]);
    }

    public function getPostsByHackerthonId($hck_id){

        $categories =  DB::table('category')
                        ->where('hck_id','=',$hck_id)->get();

        $posts =  DB::table('hackerthon')
                        ->leftJoin('category',"category.hck_id",'=', 'hackerthon.hck_id')
                        ->leftJoin('post',"post.cat_id",'=', 'category.cat_id')
                        ->where('hackerthon.hck_id','=', $hck_id)->get();

        $response = ["categories" => $categories,'posts'=>$posts];
        return json_encode($response);
    }
}
