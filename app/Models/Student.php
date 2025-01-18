<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'surname',
        'group_id',
    ];

    public function group()
    {
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
}
