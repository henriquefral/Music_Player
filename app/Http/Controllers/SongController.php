<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Dashboard',[
            'songs' => Song::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->src){
            $exploded = explode(',',$request->src);
            $decoded = base64_decode($exploded[1]);
            $fileName= 'audio/' . $request->title . '.' . 'mp3';
            $request->merge(['src' => $fileName]);
            Storage::put('/public/' . $fileName, $decoded);
        }
        if ($request->cover){
            $exploded = explode(',',$request->cover);
            $decoded = base64_decode($exploded[1]);
            $fileName= 'images/cover/' . $request->title . '.' . 'jpg';
            $request->merge(['cover' => $fileName]);
            Storage::put('/public/' . $fileName, $decoded);
        }
        if ($request->background){
            $exploded = explode(',',$request->background);
            $decoded = base64_decode($exploded[1]);
            $fileName= 'images/background/' . $request->title . '.' . 'jpg';
            $request->merge(['background' => $fileName]);
            Storage::put('/public/' . $fileName, $decoded);
        }
        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'src' => $request->src,
            'cover' => $request->cover,
            'background' => $request->background,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {   
        return $song->delete();
    }
}
