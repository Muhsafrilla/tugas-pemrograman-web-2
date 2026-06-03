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
        'seriess' => $series->paginate(300)->withQueryString(),
        'brands'  => \App\Models\Brand::all(), // untuk dropdown filter
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Series $series)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Series $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Series $series)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        //
    }
}
