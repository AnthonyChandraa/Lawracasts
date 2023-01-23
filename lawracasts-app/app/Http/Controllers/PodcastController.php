<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PodcastController extends Controller
{
    public function index(){
        $podcasts = Podcast::query()->orderBy('created_at', 'desc')->get();
        $selected = null;
        $edit = null;
        for($i=1;$i<=sizeof($podcasts);$i++){
            $podcasts[$i-1]['episode'] = sizeof($podcasts)-$i+1;
        }
        return view('pages.podcast.podcast', compact('podcasts', 'selected', 'edit'));
    }

    public function index_play($id){
        $podcasts = Podcast::query()->orderBy('created_at', 'desc')->get();
        $selected = Podcast::query()->where('id', '=', $id)->first();
        $edit = $selected;
        for($i=1;$i<=sizeof($podcasts);$i++){
            $podcasts[$i-1]['episode'] = sizeof($podcasts)-$i+1;
            if($selected->id == $podcasts[$i-1]->id){
                $selected['episode'] = sizeof($podcasts)-$i+1;
            }
        }
        return view('pages.podcast.podcast', compact('podcasts', 'selected', 'edit'));
    }

    public function delete_podcast(Request $request){
        $request->validate([
            'id' => 'required'
        ]);
        $edit = Podcast::query()->where('id', '=', $request->input('id'))->first();
        Storage::delete('storage/app/public/'.$edit->audio_url);

        Podcast::query()->where('id', '=', $request->input('id'))->delete();
        notify()->success('Podcast Deleted!');
        return redirect()->route('index_podcast');
    }

    public function add_podcast(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|max:10000'
        ]);


        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'editPodcasts')->withInput();
        }else if($request->file('file')->getClientOriginalExtension() != "mp3"){
            notify()->error("Audio File Must Be In mp3 Format!");
            return redirect()->back()->withInput();
        }

        $hash = Str::random(40);
        $extension = $request->file('file')->getClientOriginalExtension();

        $url = $request->file('file')->storeAs(
            'podcasts', $hash . '.' . $extension, 'public'
        );

        $newPodcast = new Podcast();
        $newPodcast->id = Str::uuid();
        $newPodcast->title = $request->input('title');
        $newPodcast->description = $request->input('description');
        $newPodcast->audio_url = $url;
        $newPodcast->created_at = now();
        $newPodcast->user_id = Auth::user()->id;
        $newPodcast->save();

        notify()->success('Podcast Added!');
        return redirect()->back();
    }

    public function index_edit_podcast($id){
        $podcasts = Podcast::query()->orderBy('created_at', 'desc')->get();
        $edit = Podcast::query()->where('id', '=', $id)->first();
        for($i=1;$i<=sizeof($podcasts);$i++){
            $podcasts[$i-1]['episode'] = sizeof($podcasts)-$i+1;
        }
        return view('pages.podcast.podcast', compact('podcasts', 'edit'));
    }

    public function edit_podcast(Request $request){
        $edit = Podcast::query()->where('id', '=', $request->input('id'))->first();
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'file2' => 'max:10000',
            'id' => 'required'
        ]);


        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'editPodcasts')->withInput();
        }else if($request->hasFile('file2') && $request->file('file2')->getClientOriginalExtension() != "mp3"){
            notify()->error("Audio File Must Be In mp3 Format!");
            return redirect()->back()->withInput();
        }


        if($request->hasFile('file2')){
            Storage::delete($edit->audio_url);
            $hash = Str::random(40);
            $extension = $request->file('file2')->getClientOriginalExtension();

            $url = $request->file('file2')->storeAs(
                'podcasts', $hash . '.' . $extension, 'public'
            );

            Podcast::query()->where('id', '=', $request->input('id'))->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'audio_url' => $url,
                'updated_at' => now()
            ]);

            notify()->success('Podcast Updated!');
            return redirect()->back();
        }else{
            Podcast::query()->where('id', '=', $request->input('id'))->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'updated_at' => now()
            ]);

            notify()->success('Podcast Updated!');
            return redirect()->back();
        }
    }
}
