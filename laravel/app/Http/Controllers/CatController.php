<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Subcat;
use App\Models\Cat;


class CatController extends Controller
{
    public function GetCat()
    {
        $cat = Cat::paginate(1);
        return view('cat', ['cat' => $cat]);
    }

    public function GetChang($id)
    {
        $cat = Cat::find($id);
        return view('edite-cat',['cat' => $cat]);
    }
    public function PostChang($id)
    {
        $cat = Cat::find($id);
        $cat->name=Request::input('name');
        $cat->save();
        return redirect(url('/cat'));
    }

    public function PostDell()
    {
        $cat = Cat::find(Request::input('id'));
        $cat->delete();
        return redirect(url('/cat'));
    }
    public function GetSub()
    {
        $subcat = Subcat::paginate(1);
        return view('subcat', ['subcat' => $subcat]);
    }
    public function PostDellSub(){
        $subcat = Subcat::find(Request::input('id'));
        $subcat->delete();
        return redirect(url('/subcat'));
    }

    public function GetChangSub($id){
        $subcat = Subcat::find($id);
        $cat = Cat::all();
        return view('edite-subcat',['subcat' => $subcat,'cat'=>$cat]);
    }

    public function PostChangEdite($id){
        $subcat = Subcat::find($id);
        $subcat->name=Request::input('name');
        $subcat->cat_id=Request::input('cat');
        $subcat->save();
        return redirect(url('/subcat'));
    }

    public function GetNewCat()
    {

        if (Auth::user()->privilege()->find(2) != null) {
            return view('new-cat');
        } else {
            return redirect('/panel');
        }
    }

    public function InsertCat()
    {
        if (Auth::user()->privilege()->find(2) != null) {
            $cat = new Cat();
            $cat->name = Request::input('name');
            $cat->save();
            return redirect(url('/new-cat'));
        } else
            return redirect(url('/panel'));

    }

    public function GetNewSubCat()
    {

        if (Auth::user()->privilege()->find(2) != null) {
            $cat = Cat::all();
            return view('new-subcat', ['cat' => $cat]);
        } else {
            return redirect('/panel');
        }
    }

    public function InsertSubCat()
    {
        if (Auth::user()->privilege()->find(2) != null) {
            $subcat = new Subcat();
            $subcat->name = Request::input('name');
            $subcat->cat_id = Request::input('cat');
            $subcat->save();
            return redirect(url('/new-subcat'));
        } else
            return redirect(url('/panel'));
    }

}

