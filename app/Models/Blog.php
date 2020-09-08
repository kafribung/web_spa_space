<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $touches = ['user'];
    protected $fillable = ['title', 'description', 'slug'];
    
    // Binding Data
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relation Many to One  (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
