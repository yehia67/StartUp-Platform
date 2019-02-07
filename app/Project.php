<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Fields that I am ok with being mass assigned
    protected $fillable = [
        'title', 'description'
    ];

    // Allow all fields to be mass-assigned
    //protected $guarded = ['id'];
}
