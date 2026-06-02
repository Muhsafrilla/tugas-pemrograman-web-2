<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['brand_id', 'nama_series', 'tipe_series', 'target_pengguna', 'tahun_rilis', 'generasi'])]
class Series extends Model
{
    /** @use HasFactory<\Database\Factories\SeriesFactory> */
    use HasFactory;

        public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
