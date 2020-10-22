<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    {
        $imagePath  = ($this->image) ? $this->image : '/storage/profile/ls6Poi2T9wdSCiITz4mzSH3NyuE0rSLIPZQU4ket.jpeg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
