<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForumController extends Controller
{
    public function index(){
        $forums = Forum::query()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        $topics = Topic::all();

        for($i=0; $i<sizeof($forums) ; $i++){

            $count = Comment::query()
                ->where('forum_id', '=', $forums[$i]->id)
                ->count('*');
            $forums[$i]['count'] = $count;
        }
        return view('pages.forum.forum', compact('forums', 'topics'));
    }

    public function index_popular(){
        $forums = Forum::query()
            ->leftJoin('comments', 'comments.forum_id', '=', 'forums.id')
            ->select('forums.*')
            ->groupBy('forums.id', 'forums.user_id', 'forums.title', 'forums.topic_id', 'forums.content', 'forums.view_count', 'forums.created_at', 'forums.updated_at')
            ->orderBy(DB::raw('count(\'comments.id\')'), 'desc')
            ->orderBy('forums.view_count')
            ->orderBy('created_at', 'desc')
            ->paginate('5');
        for($i=0; $i<sizeof($forums) ; $i++){

            $count = Comment::query()
                ->where('forum_id', '=', $forums[$i]->id)
                ->count('*');
            $forums[$i]['count'] = $count;
        }
        $topics = Topic::all();

        return view('pages.forum.forum' , compact('forums', 'topics'));
    }

    public function index_no_replies(){
        $forums = Forum::query()
            ->leftJoin('comments', 'comments.forum_id', '=', 'forums.id')
            ->select('forums.*',DB::raw('count(\'comments.id\')') )
            ->groupBy('forums.id', 'forums.user_id', 'forums.title', 'forums.topic_id', 'forums.content', 'forums.view_count', 'forums.created_at', 'forums.updated_at')
            ->orderBy(DB::raw('count(\'comments.id\')'), 'desc')
            ->orderBy('forums.view_count')
            ->orderBy('created_at', 'desc')
            ->having(DB::raw('count(comments.id)'), '=', 0)
            ->paginate('5');

        for($i=0; $i<sizeof($forums) ; $i++){

            $count = Comment::query()
                ->where('forum_id', '=', $forums[$i]->id)
                ->count('*');
            $forums[$i]['count'] = $count;
        }
        $topics = Topic::all();

        return view('pages.forum.forum', compact('forums', 'topics'));
    }

    public function index_search(Request $request){
        $request->validate([
            'search' => 'required'
        ]);

        $forums = Forum::query()
            ->where('title', 'LIKE', '%'.$request->input('search').'%')
            ->orWhere('content', 'LIKE', '%'.$request->input('search').'%')
            ->paginate('5');

        for($i=0; $i<sizeof($forums) ; $i++){

            $count = Comment::query()
                ->where('forum_id', '=', $forums[$i]->id)
                ->count('*');
            $forums[$i]['count'] = $count;
        }
        $topics = Topic::all();


        return view('pages.forum.forum', compact('forums', 'topics')) ;

    }

    public function index_detail($id){
        $forum = Forum::query()->where('id', '=', $id)->first();
        $comments = Comment::query()->where('forum_id', '=', $id)
            ->orderBy('created_at', 'asc')
            ->get();
        Forum::query()->where('id', '=', $id)->update([
           'view_count' => $forum->view_count+1
        ]);

        return view('pages.forum.forum-detail', compact('forum', 'comments'));
    }

    public function addForum(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'content' => 'required',
            'topic' => 'required'
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'addThread')->withInput();
        }


        $newForum = new Forum();
        $newForum->id = Str::uuid();
        $newForum->user_id = Auth::user()->id;
        $newForum->topic_id = $request->input('topic');
        $newForum->title = $request->input('title');
        $newForum->content = $request->input('content');
        $newForum->created_at = now();
        $newForum->save();

        notify()->success('Thread Added!');
        return redirect()->back();
    }

    public function deleteForum(Request $request){
        $request->validate([
            'id' => 'required'
        ]);

        Forum::query()->where('id', '=', $request->input('id'))->delete();
        notify()->success('Thread Deleted!');
        return redirect()->back();
    }
}
