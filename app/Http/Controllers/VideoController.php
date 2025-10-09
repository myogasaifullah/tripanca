<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('dashboard.video', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.video_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $url = $this->convertToEmbedUrl($request->url);

        Video::create([
            'url' => $url,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('dashboard.video_edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $url = $this->convertToEmbedUrl($request->url);

        $video->url = $url;
        $video->title = $request->title;
        $video->description = $request->description;

        $video->save();

        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }

    /**
     * Convert YouTube URL to embed URL.
     */
    private function convertToEmbedUrl($url)
    {
        if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }
        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }
        // If already embed or other, return as is
        return $url;
    }
}
