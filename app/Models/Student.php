<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\belongsTo;
use Illuminate\Database\Eloquent\Relation\hasMany;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['name', 'user_id','fathername','mothername','born','nationality',
    'universitynumber','natunalnumber','specilization','year','status','dateoficard',
    'differenatiation','graduationdate','governorate','phonenumber'];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
    public function Orequests(){
        return $this->hasMany(Orequest::class);
    }

    public function notifications() {
        return $this->hasMany(Notification::class, "student_id");
    }
}
