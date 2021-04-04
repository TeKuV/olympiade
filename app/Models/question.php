<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\ClassQuestion;
use App\Models\Choice;

class Question extends Model
{
    protected $fillable = [
        'duree', 'etat',
    ];

    public function classQuestion(){
        return $this->hasOne(ClassQuestion::class, 'id_class');
    }

    public function choice(){
        return $this->hasOne(Choice::class, 'id');
    }
}
