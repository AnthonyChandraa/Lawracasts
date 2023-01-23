<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class apicontroller extends Controller
{
    public function get_forum(){
        $forums = Forum::all();
        return response()->json([
            'data' => $forums
        ]);
    }

    public function get_forum_based_on_date($date){
        $data = [
            'date' => $date
        ];

        $rules = [
            'date' => 'required|date'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()->first()
            ]);
        }else{
            $forums = Forum::query()->where('created_at', '=', $date)->get();
            return response()->json([
                'data' => $forums
            ]);
        }
    }

    public function get_forum_based_on_topic($topic){
        $data = [
            'topic' => $topic
        ];

        $rules = [
            'topic' => 'required'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()->first()
            ]);
        }else{
            $forums = Forum::query()
                ->leftJoin('topics', 'topics.id', '=', 'forums.topic_id')
                ->where('name', '=', $topic)
                ->get();
            return response()->json([
                'data' => $forums
            ]);
        }
    }
}
