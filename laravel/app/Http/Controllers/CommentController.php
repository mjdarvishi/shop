<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\Request;

class CommentController extends Controller
{
    public function GetComment()
    {
        $comment = Comment::paginate(1);
        return view('comment',['comment'=>$comment]);
    }
    public function PostSubmite(){
        $comment=Comment::find(Request::input('id'));
        $comment->status=1;
        $comment->save();
        return redirect(url('/comment'));
    }
    public function PostDell(){
        $comment=Comment::find(Request::input('id'));
        $comment->delete();
        return redirect(url('/comment'));
    }

}
