<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marriages extends Model
{
    protected $fillable = ['title', 'description', 'user_id'];
}
