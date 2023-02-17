<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class Admin extends Controller
{
  public function adminshow(){
    $produt= \App\Models\Product::all();
    $categorys=\App\Models\category::all();
    return view('Adminedit',['prod'=>$produt, 'cat'=>$categorys]);
  }
  public function admindelitem($id){
    $produt= \App\Models\Product::find($id)->delete();
    return view('Admindel');
  }
  public function admindelcat($id){
    $categorys=\App\Models\category::find($id)->delete();
    return view('Admindel');
  }
  public function adminaddcat(Request $request){
    \App\Models\category::create(['name'=>request('name')]);
    return view('addcat');
  }
  public function adminadditem(Request $request){
      \App\Models\Product::create(['name'=>request('name'),'img'=>request('img'),'price'=>request('price'),'count'=>request('count'),'year'=>request('year'),'country'=>request('country'),'model'=>request('model'),'category'=>request('category')]);
      return back();
  }
}

