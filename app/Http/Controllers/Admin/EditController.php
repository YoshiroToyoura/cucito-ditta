<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Top;
use App\Shop;
use App\Category;
use App\Work;

class EditController extends Controller
{
    
    public function top ()
    {
        return view('admin.cucitoditta.top');
    }
    
    
    public function topcreate(Request $request)
    {
        $this->validate($request,Top::$rules);
        $tops = new Top;
       
        $form = $request->all();
        
        unset($form['_token']);
        
        $tops->fill($form);
        $tops->save();
        
        return redirect('admin/cucitoditta/topedit');
    }
    
    public function topedit(Request $request)
    {
        $tops = Top::find(1);
        if (empty($tops)) {
            abort(404);
        }
        return view('admin.cucitoditta.topedit',['post' => $tops]);
    }
    
    public function topupdate(Request $request)
    {
        $this->validate($request,Top::$rules);
        $tops = Top::find(1);
        $tops_form = $request->all();
        unset($tops_form['_token']);
        $tops->fill($tops_form)->save();
        return redirect('admin/cucitoditta/topedit');
    }
    
    
    
    
    
    public function gallery ()
    {
        return view('admin.cucitoditta.gallerycreate');
    }
    
    public function gallerycreate (Request $request)
    {
        $this->validate($request,Category::$rules);
        $categories = new Category;
        $form = $request->all();
        
        if ($form['image']) {
        $path = $request->file('image')->store('public/image');
        $categories->image_path = basename($path);
        } else {
          $categories->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $categories->fill($form);
        $categories->save();
        
        return redirect('admin/cucitoditta/gallerycreate');        
    }
    
    public function galleryindex(Request $request)
    {
        $cond_name = $request->cond_name;
        if ($cond_name != '') {
            $posts = Category::where('name', $cond_name)->get();
        } else {
            $posts = Category::all();
    }

    return view('admin.cucitoditta.galleryindex', ['posts' => $posts, 'cond_name' => $cond_name]);   
    }
    
    public function galleryedit(Request $request)
    {
        $categories = Category::find($request->id);
        if (empty($categories)) {
            abort(404);
        }
        return view('admin.cucitoditta.galleryedit',['categories_form' => $categories]);
    }
    
    public function galleryupdate(Request $request)
    {
        $this->validate($request, Category::$rules);
        $categories = Category::find($request->id);
        $categories_form = $request->all();
        if (isset($categories_form['image'])) {
            $path = $request->file('image')->store('public/image');
            $categories->image_path = basename($path);
            unset($categories_form['image']);
        } elseif (isset($request->remove)) {
            $categories->image_path = null;
            unset($categories_form['remove']);
        }
        unset($categories_form['_token']);
        $categories->fill($categories_form)->save();
        return redirect('admin/cucitoditta/galleryindex');
    }
    
    public function gallerydelete(Request $request)
    {
        // 該当するNews Modelを取得
        $categories = Category::find($request->id);
        // 削除する
        $categories->delete();
        return redirect('admin/cucitoditta/galleryindex');
    }    
    
    //public function shopedit ()
    //{
        //return view('admin.cucitoditta.shopedit');
    //}
    
    public function shop ()
    {
        return view('admin.cucitoditta.shopcreate');
    }
    
    public function shopcreate(Request $request)
    {
        
        $this->validate($request,Shop::$rules);
        $shops = new Shop;
       
        $form = $request->all();
        
        unset($form['_token']);
        
        $shops->fill($form);
        $shops->save();
        
        return redirect('admin/cucitoditta/shopcreate');
    }
    
    public function shopindex(Request $request)
    {
        $cond_name = $request->cond_name;
        if ($cond_name != '') {
            $posts = Shop::where('name', $cond_name)->get();
        } else {
            $posts = Shop::all();
        }

        
        return view('admin.cucitoditta.shopindex', ['posts' => $posts, 'cond_name' => $cond_name]);
        
  }
    
    public function shopedit(Request $request)
    {
        $shops = Shop::find($request->id);
        if (empty($shops)) {
            abort(404);
        }
        return view('admin.cucitoditta.shopedit',['shops_form' => $shops]);
    }
    
    public function shopupdate(Request $request)
    {
        $this->validate($request, Shop::$rules);
        $shops = Shop::find($request->id);
        $shops_form = $request->all();
        unset($shops_form['_token']);
        $shops->fill($shops_form)->save();
        return redirect('admin/cucitoditta/shopindex');
    }
    
    public function shopdelete(Request $request)
    {
        // 該当するNews Modelを取得
        $shops = Shop::find($request->id);
        // 削除する
        $shops->delete();
        return redirect('admin/cucitoditta/shopindex');
        
    }
  
  
  
    public function work ()
    {
        return view('admin.cucitoditta.workcreate');
    }
    
    public function workcreate (Request $request)
    {
        $this->validate($request,Work::$rules);
        $works = new Work;
        $form = $request->all();
        
        if ($form['image']) {
        $path = $request->file('image')->store('public/image');
        $works->image_path = basename($path);
        } else {
          $works->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $works->fill($form);
        $works->save();
        
        return redirect('admin/cucitoditta/workcreate');        
    }
    
    public function workindex(Request $request)
    {
        $category_id = $request->category_id;
        if ($category_id != '') {
            $posts = Work::where('category_id', $category_id)->get();
        } else {
            $posts = Work::all();
    }

    return view('admin.cucitoditta.workindex', ['posts' => $posts, 'category_id' => $category_id]);   
    }
    
    public function workedit(Request $request)
    {
        $works = Work::find($request->id);
        if (empty($works)) {
            abort(404);
        }
        return view('admin.cucitoditta.workedit',['works_form' => $works]);
    }
    
    public function workupdate(Request $request)
    {
        $this->validate($request, Work::$rules);
        $works = Work::find($request->id);
        $works_form = $request->all();
        if (isset($works_form['image'])) {
            $path = $request->file('image')->store('public/image');
            $works->image_path = basename($path);
            unset($works_form['image']);
        } elseif (isset($request->remove)) {
            $works->image_path = null;
            unset($works_form['remove']);
        }
        unset($works_form['_token']);
        $works->fill($works_form)->save();
        return redirect('admin/cucitoditta/workindex');
    }
    
    public function workdelete(Request $request)
    {
        // 該当するNews Modelを取得
        $works = Work::find($request->id);
        // 削除する
        $works->delete();
        return redirect('admin/cucitoditta/workindex');
    }  
  
  
  
  
}