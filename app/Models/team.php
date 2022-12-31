<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\carbon;

class team extends Model
{
    use HasFactory;

    protected $table = 'team';
    protected $fillable = [
        'image',
        'name',
        'title',
        'facebook',
        'twitter',
        'linkedin',
    ];

    public function getFromDateAttribute() {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('1, d  F Y');
    }
}
