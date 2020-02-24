<?php

namespace App\Http\Controllers\Handmade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Top;
use App\Shop;
use App\Category;
use App\Work;

class CucitodittaController extends Controller
{
    public function add ()
    {
        $post = Top::find(1);
        //$post = new Top;
        //$post->about = 'テスト';
        //$post->information = 'テスト２';
        return view('handmade.cucitoditta.top',['post' => $post]);
    }
    
    public function gallery (Request $request)
    {
        $posts = Category::all();
        
        return view('handmade.cucitoditta.gallery', ['posts' => $posts]);
    }
    
    public function work (Request $request)
    {
        $posts = Work::where('category_id', $request->id)->get();
        
        
        return view('handmade.cucitoditta.work', ['posts' => $posts]);
    }
    
    public function shop (Request $request)
    {
        //return view('handmade.cucitoditta.shop');
        $posts = Shop::all();//->sortByDesc('updated_at');
        
        return view('handmade.cucitoditta.shop',['posts' => $posts]);
    }
    
    public function info ()
    {
        return view('handmade.cucitoditta.info');
    }
    
    public function infodone ()
    {
        return view('handmade.cucitoditta.infodone');
    }
}
