<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = ['skillname', 'description', 'cool_down', 'mana_usage'];

    public function character(){
        return $this->belongsTo('App\Models\Character');
    }
}
