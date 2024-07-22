<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentureSocialNetwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'venture_id',
        'social_network_id',
        'URL',
    ];

    public function venture()
    {
        return $this->belongsTo(Venture::class);
    }

    public function socialNetworkType()
    {
        return $this->belongsTo(SocialNetworkType::class, 'social_network_id');
    }
}
