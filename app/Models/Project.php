<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'image', 'body'];

    /**
     * Define the relation with users elements.
     * One project belongs to an user.
     */
    public function users(){
        return $this->belongsTo(User::class);
    }
}
