<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();
        return view('dashboard.foto', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.foto_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $imagePath = $request->file('image')->store('photos', 'public');

        Photo::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('photos.index')->with('success', 'Photo created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        return view('dashboard.foto_edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'image' => 'nullable|image|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($photo->image && Storage::disk('public')->exists($photo->image)) {
                Storage::disk('public')->delete($photo->image);
            }
            $imagePath = $request->file('image')->store('photos', 'public');
            $photo->image = $imagePath;
        }

        $photo->title = $request->title;
        $photo->description = $request->description;

        $photo->save();

        return redirect()->route('photos.index')->with('success', 'Photo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        if ($photo->image && Storage::disk('public')->exists($photo->image)) {
            Storage::disk('public')->delete($photo->image);
        }
        $photo->delete();

        return redirect()->route('photos.index')->with('success', 'Photo deleted successfully.');
    }
}
