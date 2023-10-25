<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["name_prog", "repo", "link", "description"];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

}