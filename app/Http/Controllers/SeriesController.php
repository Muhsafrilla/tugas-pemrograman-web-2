<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $series = Series::with('brand')->latest();
    $keyword = request('keyword');
    $brand_id = request('brand_id');

    if ($keyword) {
        $series->where('nama_series', 'like', '%' . $keyword . '%');
    }

    if ($brand_id) {
        $series->where('brand_id', $brand_id);
    }

    return view('series.index', [
        'title'   => 'Series',
        'seriess' => $series->paginate(8)->withQueryString(),
        'brands'  => \App\Models\Brand::all(), // untuk dropdown filter
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create', [
        'title'  => 'Tambah Series',
        'brands' => \App\Models\Brand::all(),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama_series'    => 'required|string|max:255',
        'tipe_series'    => 'required|string|max:255',
        'target_pengguna'=> 'required|string|max:255',
        'tahun_rilis'    => 'required|integer|min:1990|max:' . date('Y'),
        'generasi'       => 'required|integer',
        'brand_id'       => 'required|exists:brands,id',
    ]);

    Series::create($validated);

    return redirect()->route('series.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Series $series)
    {
        return view('series.show', [
        'title'  => 'Detail Series',
        'series' => $series,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Series $series)
    {
        return view('series.edit', [
        'title'  => 'Edit Series',
        'series' => $series,
        'brands' => \App\Models\Brand::all(),
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Series $series)
    {
            $validated = $request->validate([
        'nama_series'     => 'required|string|max:255',
        'tipe_series'     => 'required|string|max:255',
        'target_pengguna' => 'required|string|max:255',
        'tahun_rilis'     => 'required|integer|min:1990|max:' . date('Y'),
        'generasi'        => 'required|integer',
        'brand_id'        => 'required|exists:brands,id',
    ]);

    $series->update($validated);

    return redirect()->route('series.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        $series->delete();

    return redirect()->route('series.index')->with('success', 'Data berhasil dihapus!');
    }
}
