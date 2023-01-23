<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class CommentController extends Controller
{
    public function addComment(Request $request){
        $request->validate([
            'content' => 'required',
            'id' => 'required'
        ]);

        $newComment = new Comment();
        $newComment->id = Str::uuid();
        $newComment->user_id = Auth::user()->id;
        $newComment->forum_id = $request->input('id');
        $newComment->content = $request->input('content');
        $newComment->created_at = now();
        $newComment->save();


        return redirect()->back();
    }

    public function deleteComment(Request $request){
        $request->validate([
            'id' => 'required'
        ]);

        Comment::query()->where('id', '=', $request->input('id'))->delete();
        notify()->success('Comment Deleted!');
        return redirect()->back();
    }
}
