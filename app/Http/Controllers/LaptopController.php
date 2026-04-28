<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('laptop.index', [
            'title' => 'Laptop',
            'laptops' => Laptop::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laptop.create', ['title' => 'Create Laptop']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'merek' => 'required|max:50',
            'tipe' => 'required|max:50',
            'processor' => 'required|max:100',
            'ram' => 'required|in:4,8,16,32',
            'harga' => 'required|numeric',
    ], [
            'merek.required' => 'Merek tidak boleh kosong',
            'merek.max' => 'Merek tidak boleh lebih dari :max karakter',
            'tipe.required' => 'Tipe tidak boleh kosong',
            'tipe.max' => 'Tipe tidak boleh lebih dari :max karakter',
            'processor.required' => 'Processor tidak boleh kosong',
            'ram.required' => 'Ram tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
    ]);

    Laptop::create($validated);
    return to_route('laptop.index')->withSuccess('Data laptop berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laptop $laptop)
    {
        return view('laptop.edit', [
            'title' => 'Edit Laptop',
            'laptop' => $laptop,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laptop $laptop)
    {
            $validated = $request->validate([
            'merek' => 'required|max:50',
            'tipe' => 'required|max:50',
            'processor' => 'required|max:100',
            'ram' => 'required|in:4,8,16,32',
            'harga' => 'required|numeric',
    ], [
            'merek.required' => 'Merek tidak boleh kosong',
            'merek.max' => 'Merek tidak boleh lebih dari :max karakter',
            'tipe.required' => 'Tipe tidak boleh kosong',
            'tipe.max' => 'Tipe tidak boleh lebih dari :max karakter',
            'processor.required' => 'Processor tidak boleh kosong',
            'ram.required' => 'Ram tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
    ]);

    $laptop->update($validated);
    return to_route('laptop.index')->withSuccess('Data laptop berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laptop $laptop)
    {
        //
    }
}
