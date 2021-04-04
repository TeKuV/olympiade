<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Classe;
use App\Models\Question;

class ClassQuestion extends Model
{
    protected $fillable = [
        'id_class', 'id_quest',
    ];

    public function classe(){
        return $this->belongTo(Classe::class, 'id');
    }
    public function question(){
        return $this->belongTo(Question::class, 'id');
    }
}
