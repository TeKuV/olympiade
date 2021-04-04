<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Question;

class Choice extends Model
{
    protected $fillable = [
        'intitule', 'reponse',
    ];

    public function question(){
        return $this->hasMany(Question::class, 'id');
    }
}
