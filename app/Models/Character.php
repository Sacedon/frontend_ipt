<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model

{
    use HasFactory;
    protected $fillable = ['charactersname', 'role', 'hero_class'];

    public function skill(){
        return $this->hasMany('App\Models\Skill');
    }
}
