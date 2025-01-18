<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title', 'start_from', 'is_active'];
    protected $table = 'groups';
}
