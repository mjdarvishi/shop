<?php

namespace App\Http\Controllers;


use App\Models\Cat;
use App\Models\Code;
use App\Models\Comment;
use App\Models\Discount;
use App\Models\Product;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Subcat;


class ProductController extends Controller
{
    public function GetProduct()
    {
        if (Auth::user()->privilege()->find(4) != null) {

            $subcat = Subcat::all();
            return view('new-product', ['subcat' => $subcat]);
        } else {
            return redirect('/panel');
        }
    }

    public function GetSProduct($id)
    {
        if (Auth::user()->privilege()->find(4) != null) {
            $product = Product::find($id);
            $comment = $product->Comment()->get();
            $cat = Cat::all();
            return view('sproduct', ['cat' => $cat, 'comment' => $comment, 'product' => $product]);
        } else {
            return redirect('/panel');
        }
    }

    public function GetAllProduct()
    {
        $product = Product::paginate(1);
        return view('product', ['product' => $product]);
    }

    public function DellProduct()
    {
        $product = Product::find(Request::input('id'));
        $product->delete();
        return redirect(url('/product'));

    }

    public function EditeProduct($id)
    {
        $product = Product::find($id);
        $subcat = Subcat::all();

        return view('edite-product', ['product' => $product, 'subcat' => $subcat]);
    }

    public function ChangProduct($id)
    {
        $product = Product::find($id);
        $product->title = Request::input('name');
        $product->price = Request::input('price');
        $product->description = Request::input('description');
        $product->save();
        return redirect(url('/product'));
    }

    public function InsertProduct()
    {
        if (Auth::user()->privilege()->find(4) != null) {
            $cat = new Product();
            $cat->title = Request::input('name');
            $cat->description = Request::input('description');
            $cat->price = Request::input('price');
            $cat->subcat_id = Request::input('subcat');
            $cat->save();
            return redirect(url('/new-product'));
        } else
            return redirect(url('/panel'));
    }

    public function InsertComment()
    {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->auther = Auth::user()->name;
        $comment->product_id = Request::input('product_id');
        $comment->content = Request::input('content');
        $comment->status = 0;
        $comment->save();
        return redirect(url('/product/' . Request::input('product_id')));

    }

    public function AddBasket()
    {
        $stack = session('ids');
        array_push($stack, Request::input('product_id'));
        session(['ids' => $stack]);
        return redirect(url('/product/' . Request::input('product_id')));
    }

    public function Basket()
    {
        $cat = Cat::all();
        $i = [];
        foreach (session('ids') as $item) {
            array_push($i, Product::find($item));

        }
        return view('basket', ['cat' => $cat, 'pro' => $i]);
    }

    public function GetBuy()
    {
        $code = Request::input('title');
        $price = Request::input('price');
        $cod = Code::where('code', '=', $code)->get();
        $p = 0;
        foreach ($cod as $item) {
            $p = $item->price;
        }
        if ($price >= $p * 10) {
            $price = $price - $p;
        }

        return $price;
    }

    public function GetCode()
    {
        return view('code');
    }

    public function PostCode()
    {
        $num = Request::input('num');
        $price = Request::input('price');
        $users = User::orderByraw('RAND()')->take($num)->get();
//        foreach ($users as $item){
//            \Monolog\Handler\mail($item->email,'discount code','21654+5gfhgv');
//        }
        $code = new Code();
        $code->code = 'sadfadfsadf';
        $code->price = $price;
        $code->save();
        return 1;
    }

    public function ProCode()
    {
        $pro = Product::all();
        return view('prodis', ['pro' => $pro]);
    }

    public function PostCodePro()
    {
        $price = Request::input('price');
        $pro = Request::input('pro');
        $discount=new Discount();
        $discount->price=$price;
        $discount->save();
        $discount->Product()->attach($pro);
        Request::flush();
        return 1;
    }

}
