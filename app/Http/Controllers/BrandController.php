<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'brands' => $brands->paginate(3)->withQueryString(),
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
        'nama_brand'    => 'required|string|max:255',
        'negara_asal'   => 'required|string|max:255',
        'tahun_berdiri' => 'required|integer|min:1800|max:' . date('Y'),
        'deskripsi'     => 'nullable|string',
    ]);

    DB::beginTransaction();
    try {
        Brand::create($validated);
        DB::commit();
        return redirect()->route('brand.index')->with('success', 'Data berhasil ditambahkan!');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Gagal menambahkan data: ' . $e->getMessage());
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('brand.show', [
        'title' => 'Detail Brand',
        'brand' => $brand,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
            return view('brand.edit', [
            'title' => 'Edit Brand',
            'brand' => $brand,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
    $validated = $request->validate([
        'nama_brand'    => 'required|string|max:255',
        'negara_asal'   => 'required|string|max:255',
        'tahun_berdiri' => 'required|integer|min:1800|max:' . date('Y'),
        'deskripsi'     => 'nullable|string',
    ]);

    DB::beginTransaction();
    try {
        $brand->update($validated);
        DB::commit();
        return redirect()->route('brand.index')->with('success', 'Data berhasil diupdate!');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Gagal mengupdate data: ' . $e->getMessage());
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
         $brand->delete();

    return redirect()->route('brand.index')->with('success', 'Data berhasil dihapus!');
    }
}
