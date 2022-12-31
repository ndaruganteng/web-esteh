<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\carbon;

class blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $fillable = [
        'image',
        'date',
        'jobs',
        'title',
        'description',
        'slug',
        'except',
    ];

    public function getFromDateAttribute() {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('1, d  F Y');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
