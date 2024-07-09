<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\hasOne;

class AddReqest extends Model
{
    use HasFactory;
    protected $fillable=['name','user_id'];


    public function AddField(){
        return $this->hasone(AddField::class,"add_reqest_id");
    }
}
