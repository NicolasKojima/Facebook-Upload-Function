<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\MassAssignmentException;

class informations extends Model
{

    protected $fillable=[
        'name',
        'email',
        'introduction',
        'profilepic',
    ];
}