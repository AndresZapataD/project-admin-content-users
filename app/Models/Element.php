<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $fillable = [
        'element_type_id',
        'section_id',
        'title',
        'description',
        'multimedia_URL',
        'forward_URL',
    ];

    public function elementType()
    {
        return $this->belongsTo(ElementType::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
