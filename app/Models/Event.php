<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = "events";

    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
