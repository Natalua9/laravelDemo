<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class App extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_type',
        'date_time',
        'adress',
    ];

    public function appUser(){
        return $this->belongsTo(    User::class , 'user_id');
    }
}
