<?php

namespace App\Http\Controllers;

use App\Category;
use App\Hackerthon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function createPost(){
        $title = Input::get('title');
        $category = Input::get('category');
        $content = Input::get('content');

       // dd($title."-".$category."-".$content);

        $post =  new Post();
        $post->pst_title = $title;
        $post->cat_id = $category;
        $post->pst_content = $content;
        $post->save();
    }
    public function createHackerthon(){
        $hackerthon_name = Input::get('hackerthon');

        $hackerthon = new Hackerthon();
        $hackerthon->hck_name = $hackerthon_name;
        $hackerthon->save();
    }

    public function createCategory(){
        $cat_name = Input::get('category');
        $hackerthon = Input::get('hackerthon');

        $category =  new Category();
        $category->cat_name =  $cat_name;
        $category->hck_id = $hackerthon;
        $category->save();
    }

    public function getAdminData(){
        $categories =  DB::table('category')->get();
        $hackerthon = DB::table('hackerthon')->get();
        return view('admin',['categories'=>$categories,'hackerthons'=>$hackerthon]);
    }

    public function getCategoryById($id){

        $cat_id = $id;
        $categories =  DB::table('category')
            ->where('hck_id',$cat_id)
            ->get();
        return json_encode($categories);
    }

    public function getCategories(){
        $categories =  DB::table('category')
            ->get();
        return json_encode($categories);
    }

    public function getHackerthons(){
        $hackerthons =  DB::table('hackerthon')
            ->get();
        return json_encode($hackerthons);
    }

    public function getPosts(){
        $posts =  DB::table('post')
                ->leftJoin('category', 'post.cat_id', '=', 'category.cat_id')
                ->leftJoin('hackerthon', 'category.hck_id', '=', 'hackerthon.hck_id')
                ->get();
        return json_encode($posts);
    }
}
