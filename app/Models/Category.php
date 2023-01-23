<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function fx_projects(){
        return $this->hasMany(Project::class); // richiamo il MANY
    }
}
