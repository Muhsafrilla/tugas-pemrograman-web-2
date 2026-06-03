<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::latest();
        $keyword = request('keyword');
        if($keyword) {
            $brands->where('nama_brand', 'like', '%'. $keyword . '%');
        }

            return view('brand.index', [
            'title' => 'Brand',
            'brands' => $brands->paginate(3),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create', ['title' => 'Create Brand']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama_brand'   => 'required|string|max:255',
        'negara_asal'  => 'required|string|max:255',
        'tahun_berdiri'=> 'required|integer|min:1800|max:' . date('Y'),
    ]);

    Brand::create($validated);

    return redirect()->route('brand.index')->with('success', 'Brand berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
