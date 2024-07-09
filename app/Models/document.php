<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\belongsTo;

class document extends Model
{
    use HasFactory;
    protected $fillable=['type','date','orequest_id','user_id','verified_by','collagedean'];

    public function orequest() {
        return $this->belongsTo(Orequest::class,'orequest_id');
    }
}
