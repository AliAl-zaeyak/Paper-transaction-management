<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\belongsTo;

class year extends Model
{
    use HasFactory;
    protected $fillable=['student_id','year','academicyear','result','universitynumber','user_id','note','status','registerdate'];


    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
}
