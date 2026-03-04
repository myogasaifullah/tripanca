<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisis = Visimisi::all();
        return view('dashboard.visimisi', compact('visimisis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.visimisi_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'visi_title' => 'nullable|string|max:255',
            'visi_content' => 'nullable|string',
            'misi_title' => 'nullable|string|max:255',
            'misi_content' => 'nullable|string',
            'item1_icon' => 'nullable|string|max:255',
            'item1_title' => 'nullable|string|max:255',
            'item1_content' => 'nullable|string',
            'item2_icon' => 'nullable|string|max:255',
            'item2_title' => 'nullable|string|max:255',
            'item2_content' => 'nullable|string',
            'item3_icon' => 'nullable|string|max:255',
            'item3_title' => 'nullable|string|max:255',
            'item3_content' => 'nullable|string',
            'item4_icon' => 'nullable|string|max:255',
            'item4_title' => 'nullable|string|max:255',
            'item4_content' => 'nullable|string',
        ]);

        Visimisi::create($request->all());

        return redirect()->route('visimisi.index')->with('success', 'Visi Misi created successfully.');
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
    public function edit(Visimisi $visimisi)
    {
        return view('dashboard.visimisi_edit', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visimisi $visimisi)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'visi_title' => 'nullable|string|max:255',
            'visi_content' => 'nullable|string',
            'misi_title' => 'nullable|string|max:255',
            'misi_content' => 'nullable|string',
            'item1_icon' => 'nullable|string|max:255',
            'item1_title' => 'nullable|string|max:255',
            'item1_content' => 'nullable|string',
            'item2_icon' => 'nullable|string|max:255',
            'item2_title' => 'nullable|string|max:255',
            'item2_content' => 'nullable|string',
            'item3_icon' => 'nullable|string|max:255',
            'item3_title' => 'nullable|string|max:255',
            'item3_content' => 'nullable|string',
            'item4_icon' => 'nullable|string|max:255',
            'item4_title' => 'nullable|string|max:255',
            'item4_content' => 'nullable|string',
        ]);

        $visimisi->update($request->all());

        return redirect()->route('visimisi.index')->with('success', 'Visi Misi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visimisi $visimisi)
    {
        $visimisi->delete();

        return redirect()->route('visimisi.index')->with('success', 'Visi Misi deleted successfully.');
    }
}
