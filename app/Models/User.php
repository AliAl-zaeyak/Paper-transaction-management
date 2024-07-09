<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relation\HasOne;
use Illuminate\Database\Eloquent\Relation\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function student() {
        return $this->hasOne(Student::class, "user_id");
    }
    public function Year() {
        return $this->hasMany(Year::class, "user_id");
    }
    public function Orequest() {
        return $this->hasMany(Orequest::class, "user_id");
    }
    public function Documents() {
        return $this->hasMany(Document::class, "user_id");
    }
    public function notifications(){
        return $this->hasMany(Notification::class,"user_id");
    }
    public function problems(){
        return $this->hasMany(Problem::class,"user_id");
    }
    public function AddReqest(){
        return $this->hasMany(AddReqest::class,"user_id");
    }
    public function AddField(){
        return $this->hasMany(AddField::class,"user_id");
    }
    public function collagedean() {
        return $this->hasOne(collagedean::class, "user_id");
    }
}
