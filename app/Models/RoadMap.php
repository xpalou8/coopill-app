<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadMap extends Model
{
    use CrudTrait;

    protected $fillable = ['date'];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
