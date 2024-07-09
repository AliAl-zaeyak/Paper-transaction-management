<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class collagedean extends Model
{
    use HasFactory;

    protected $fillable = ['name','user_id'];
}
