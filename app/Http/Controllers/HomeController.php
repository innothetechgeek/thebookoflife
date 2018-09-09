<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Hackerthon;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $hackerthons = DB::table('hackerthon')->get();

        $categories =  DB::table('category')
            ->where('hck_id','=',2)->get();

        $posts =  DB::table('hackerthon')
            ->leftJoin('category',"category.hck_id",'=', 'hackerthon.hck_id')
            ->leftJoin('post',"post.cat_id",'=', 'category.cat_id')
            ->where('hackerthon.hck_id','=', 2)->get();

        $post_content =  DB::table('post')
            ->where('cat_id','6')->get();

        return view('home', ["hackerthons"=>$hackerthons, 'posts'=>$posts,'categories'=>$categories,'post_content'=>$post_content]);
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

    public function getPostBySlug($cat_id,$slug){

        $hackerthons = DB::table('hackerthon')->get();

        $hackerthon =  DB::table('category')
                            ->select('hck_id')
                            ->where('cat_id',$cat_id)->first();

        $categories =  DB::table('category')
            ->where('hck_id','=', $hackerthon->hck_id)->get();

        $posts =  DB::table('hackerthon')
            ->leftJoin('category',"category.hck_id",'=', 'hackerthon.hck_id')
            ->leftJoin('post',"post.cat_id",'=', 'category.cat_id')
            ->where('hackerthon.hck_id','=', $hackerthon->hck_id)->get();

        $post_content =  DB::table('post')
            ->select('pst_content','pst_title')
            ->where('pst_slug','=', $slug)
            ->where('cat_id','=', $cat_id)->get();

        return view('home', ["hackerthons"=>$hackerthons, 'posts'=>$posts,'categories'=>$categories,'post_content'=>$post_content]);
    }

    public function autoComplete($searchVale)
    {

        $sql_where = "";
        $j = 0;
        $searchvalues = explode(" ", $searchVale);

        $response = "";
        $autocomplete_content = Post::where(function ($q) use ($searchvalues) {
            foreach ($searchvalues as $value) {
                $q->orWhere('pst_title', 'like', "%{$value}%");
                $q->orWhere('pst_content', 'like', "%{$value}%");
            }
        })->get();

        if (count($autocomplete_content) > 0){
            $response = "<ul class = 'list-unstyled' style ='padding-left:15px'>";
        }

        $i = 0;
        foreach ($autocomplete_content as $content){

            $params = $content->cat_id."/".$content->pst_slug;
            $app_url =url('/');
            $route = $app_url."/chapter"."/".$params;

            $display_sentence = $this->generate_display_sentence($content->pst_content,$searchVale);
            $response .= "<a style='text-decoration: none;color: #2b2b2b;' href='$route'>
                            <li>
                                <h5>$content->pst_title</h5>
                                <p class='autocompletepar'>$display_sentence</p>
                            </li>
                          </a>";
            $i++;
        }

        if (count($autocomplete_content) > 0) {
            $response .= "</ul>";
        }
        return $response;



    }

    public function generate_display_sentence($post_content,$search_value){

        $display_sentence = "";
        $sentences = explode(".",$post_content);
        foreach($sentences as $sencence){
            if (strpos($sencence,$search_value) !== false) {
                $display_sentence =  $sencence;
            }
        }
        return $display_sentence;
    }
}
