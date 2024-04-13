<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use CrudTrait;

    protected $fillable = [
        'status',
        'description'
    ];

    public function roadMaps()
    {
        return $this->belongsToMany(RoadMap::class);
    }
}
