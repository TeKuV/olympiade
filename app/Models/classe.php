<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Classe extends Model
{
    protected $fillable = [
        'intitule',
    ];

    public function user(){
        return $this->belongTo(User::class, 'id');
    }

    public function ClassQuestion(){
        return $this->hasOne(ClassQuestion::class, 'id_class');
    }
}
