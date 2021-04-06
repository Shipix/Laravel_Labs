<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(Categorie::class,"categorie_id");
    }
    public function tags()
    {
        return $this->belongsTo(Tag::class,"tag_id");
    }
}
