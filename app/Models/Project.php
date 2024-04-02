<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        "project_name",
        "description",
        "slug",
        "image",
        "website"
    ];

    public static function generateSlug($project_name)
    {
        return Str::slug($project_name, '-');
    }
}
