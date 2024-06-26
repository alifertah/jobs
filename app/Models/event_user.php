<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_user extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'resume',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
