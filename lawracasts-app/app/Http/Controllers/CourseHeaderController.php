<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use App\Models\CourseHeader;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CourseHeaderController extends Controller
{
    public function index(){
        $courseHeaders = CourseHeader::all();
        $topics = Topic::all();
        for($i=0; $i<sizeof($courseHeaders); $i++){
            $videoCount = CourseDetail::query()
                ->where('course_id', '=', $courseHeaders[$i]->id)
                ->count('*');
            if(Auth::check()){
                $ismyown = $courseHeaders[$i]->user_id == Auth::user()->id;
                $courseHeaders[$i]['ismyown'] = $ismyown;
            }
            $courseHeaders[$i]['videocount'] = $videoCount;

        }


        return view('pages.course.course', compact('courseHeaders', 'topics'));
    }

    public function index_topic($id){
        $topicname = Topic::query()->where('id', '=', $id)->first();
        $topicname = $topicname->name;

        $courseHeaders = CourseHeader::query()->where('topic_id', '=', $id)->get();
        $topics = Topic::all();
        for($i=0; $i<sizeof($courseHeaders); $i++){
            $videoCount = CourseDetail::query()
                ->where('course_id', '=', $courseHeaders[$i]->id)
                ->count('*');
            if(Auth::check()){
                $ismyown = $courseHeaders[$i]->user_id == Auth::user()->id;
                $courseHeaders[$i]['ismyown'] = $ismyown;
            }
            $courseHeaders[$i]['videocount'] = $videoCount;

        }

        return view('pages.course.course', compact('courseHeaders', 'topicname', 'topics'));
    }

    public function delete_course(Request $request){
        CourseHeader::query()->where('id', '=', $request->input('id'))
            ->delete();

        notify()->success('Course Deleted!');
        return redirect()->back();
    }

    public function index_detail($id){
        $curr = CourseHeader::query()->where('id', '=', $id)->first();
        CourseHeader::query()->where('id', '=', $id)->update([
            'view_count' => $curr->view_count+1
        ]);

        $ismyown = CourseHeader::query()->where('id', '=', $id)
                ->where('user_id', '=', Auth::user()->id)
                ->orderBy('created_at', 'asc')
                ->first() != null;

        if(!$ismyown){
            $details = CourseDetail::query()
                ->where('course_id', '=', $id)
                ->where('is_published', '=', true)
                ->orderBy('created_at', 'asc')
                ->get();
        }else{
            $details = CourseDetail::query()
                ->where('course_id', '=', $id)
                ->orderBy('created_at', 'asc')
                ->get();
        }
        $selected = null;
        for($i=0; $i<sizeof($details); $i++){
            $details[$i]['episode'] = $i+1;
        }



        return view('pages.course.course-detail', compact('details','id', 'selected', 'ismyown'));
    }

    public function index_play(Request $request){
        $ismyown = CourseHeader::query()->where('id', '=', $request->input('id'))
                ->where('user_id', '=', Auth::user()->id)
                ->first() != null;
        $id = $request->input('id');
        if(!$ismyown){
            $details = CourseDetail::query()
                ->where('course_id', '=', $request->input('id'))
                ->where('is_published', '=', true)
                ->orderBy('created_at', 'asc')
                ->get();
        }else{
            $details = CourseDetail::query()
                ->where('course_id', '=', $request->input('id'))
                ->orderBy('created_at', 'asc')
                ->get();
        }
        $selected = CourseDetail::query()->where('course_id', '=', $request->input('id'))
            ->where('title', '=', $request->input('title'))
            ->where('video_url', '=', $request->input('video_url'))
            ->first();
        for($i=0; $i<sizeof($details); $i++){
            $details[$i]['episode'] = $i+1;
            if($selected->course_id == $details[$i]->course_id &&
                $selected->title == $details[$i]->title &&
                $selected->video_url == $details[$i]->video_url){
                $selected['episode'] = $i+1;
            }
        }
        return view('pages.course.course-detail', compact('details', 'id', 'selected', 'ismyown'));
    }

    public function add_course_header(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'topic' => 'required'
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'addCourseHeader')->withInput();
        }

        $newCourseHeader = new CourseHeader();
        $newCourseHeader->id = Str::uuid();
        $newCourseHeader->user_id = Auth::user()->id;
        $newCourseHeader->topic_id = $request->input('topic');
        $newCourseHeader->created_at = now();
        $newCourseHeader->title = $request->input('title');
        $newCourseHeader->description = $request->input('description');
        $newCourseHeader->view_count = 0;
        $newCourseHeader->save();

        notify()->success('New Course Added!');
        return redirect()->back();
    }

    public function add_course_detail(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'file3' => 'file|required|max:50000'
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'addCourseDetail')->withInput();
        }

        $path = $request->file('file3')->store('courses', 'public');

        $newCourseDetail = new CourseDetail();
        $newCourseDetail->course_id = $request->input('id');
        $newCourseDetail->title = $request->input('title');
        $newCourseDetail->video_url = $path;
        $newCourseDetail->created_at = now();
        $newCourseDetail->is_published = false;
        $newCourseDetail->save();

        notify()->success('Video Added!');
        return redirect()->back();
    }

    public function toggle_video_status(Request $request){
        $prev = CourseDetail::query()->where('course_id', '=', $request->input('id'))
            ->where('title', '=', $request->input('title'))
            ->where('video_url', '=', $request->input('video_url'))
            ->first();
        CourseDetail::query()->where('course_id', '=', $request->input('id'))
            ->where('title', '=', $request->input('title'))
            ->where('video_url', '=', $request->input('video_url'))
            ->update([
                'is_published' => !$prev->is_published,
                'updated_at' => now()
            ]);

        notify()->success('Video Status Updated!');
        return redirect()->route('index_course_detail', $request->input('id'));
    }

    public function delete_video(Request $request){
        CourseDetail::query()->where('course_id', '=', $request->input('id'))
            ->where('title', '=', $request->input('title'))
            ->where('video_url', '=', $request->input('video_url'))
            ->delete();

        notify()->success('Video Deleted!');
        return redirect()->route('index_course_detail', $request->input('id'));
    }
}
