<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venture extends Model
{
    use HasFactory;

    protected $fillable = [
        'entrepreneur_id',
        'venture_category_id',
        'name',
        'description',
        'NIT',
        'address',
        'phone',
        'logo_URL',
    ];

    public function entrepreneur()
    {
        return $this->belongsTo(Entrepreneur::class);
    }

    public function ventureCategory()
    {
        return $this->belongsTo(VentureCategory::class);
    }
}
