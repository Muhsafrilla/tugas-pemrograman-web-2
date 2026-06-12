<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['nama_brand', 'negara_asal', 'tahun_berdiri', 'deskripsi'])]
class Brand extends Model
{
    use SoftDeletes;

    public function seriess(): HasMany
    {
        return $this->hasMany(Series::class);
    }
}