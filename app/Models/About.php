<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $touches = ['user'];
    protected $fillable = ['description'];

    // Relation One to One  (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
