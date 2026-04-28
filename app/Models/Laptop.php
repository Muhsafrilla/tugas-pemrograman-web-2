<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['merek', 'tipe', 'processor', 'ram', 'harga'])]
class Laptop extends Model
{
    /** @use HasFactory<\Database\Factories\LaptopFactory> */
    use HasFactory;
}
