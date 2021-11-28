<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $table = 'Newsletter';

    public function user() 
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
