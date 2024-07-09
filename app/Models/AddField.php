<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddField extends Model
{
    use HasFactory;
    protected $fillable  = ['user_id','add_reqest_id','field_1','field_2','field_3','field_4','field_5','field_6','field_7','field_8','field_9','field_10'];
}
