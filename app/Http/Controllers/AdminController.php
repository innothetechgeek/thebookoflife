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

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return back();
    }
    public function createHackerthon(){
        $hackerthon_name = Input::get('hackerthon');

        $hackerthon = new Hackerthon();
        $hackerthon->hck_name = $hackerthon_name;
        $hackerthon->save();
        return back();
    }

    public function createCategory(){
        $cat_name = Input::get('category');
        $hackerthon = Input::get('hackerthon');

        $category =  new Category();
        $category->cat_name =  $cat_name;
        $category->hck_id = $hackerthon;
        $category->save();

        return back();
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

    public function getPostById($post_id){
        $posts = DB::table('post')
                    ->leftJoin('category', 'post.cat_id', '=', 'category.cat_id')
                    ->leftJoin('hackerthon', 'category.hck_id', '=', 'hackerthon.hck_id')
                    ->where('post.pst_id','=', $post_id)
                    ->get();

        $categories = DB::table('category')
                            ->get();

        $hackerthons = DB::table('hackerthon')
                                ->get();


        $hackerthons_options = "";
        foreach($hackerthons as $hackerthon){
            $is_selected = "";
            if($posts[0]->hck_id  == $hackerthon->hck_id){
                $is_selected = "selected";
            }
            $hackerthons_options .= '<option value="'.$hackerthon->hck_id.'" '.$is_selected.'>'.$hackerthon->hck_name.'</option>';
        }

        $categories_options = "";

        foreach($categories as $cat)
        {
            $is_selected = "";
            if($posts[0]->cat_id  == $cat->cat_id){
                $is_selected = "selected";
            }
            $categories_options .= '<option value="'.$cat->cat_id.'" '.$is_selected.'>'.$cat->cat_name.'</option>';

        }

        $response = ['posts'=>$posts, 'categories_options'=>$categories_options,'hackerthons_options'=>$hackerthons_options];
        return json_encode($response);
    }

    public function updatePost($id){

        $title = Input::get('title');
        $category = Input::get('category');
        $content = Input::get('content');
        DB::table('post')
            ->where('pst_id', $id)
            ->update(['pst_title' => $title,
                    'pst_content' =>$content,
                    'pst_slug' => str_slug($title),
                    'cat_id' =>$category]);
    }
}
