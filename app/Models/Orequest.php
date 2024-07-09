<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\belongsTo;
use Illuminate\Database\Eloquent\Relation\hasOne;

class Orequest extends Model
{
    use HasFactory;
    protected $fillable=['id','type','date','status','user_id','student_id','collagedean'];
    protected $table = 'orequests';


    public function document () {
        return $this->hasOne(document::class, "orequest_id");
    }
    public function student () {
        return $this->belongsTo(Student::class, "student_id");
    }
    public function user () {
        return $this->belongsTo(user::class);
    }
}
